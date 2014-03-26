<?php 

namespace Acme\MainBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    { 
		$bu_id = 8; // 3 - US, 8 - China
		
		$currMonthFrom = date('Y-m',mktime(date("H"),date("i"),date("s"),date("m")-1,date("d"),date("Y")-1));
		$currMonthTo = date('Y-m',mktime(date("H"),date("i"),date("s"),date("m")-1,date("d"),date("Y")));
		
		$prevMonthFrom = date('Y-m',mktime(date("H"),date("i"),date("s"),date("m")-1,date("d"),date("Y")-2));
		$prevMonthTo = date('Y-m',mktime(date("H"),date("i"),date("s"),date("m")-1,date("d"),date("Y")-1));
		
		/////for getting forcast graph data////////
		$forecast1 = $this->getForcastForYear($currMonthFrom,$currMonthTo);
		$forecast2 = $this->getForcastForYear($prevMonthFrom,$prevMonthTo);
		
		/////for getting data for surveys//////////
		$assSurveys = $this->getSurveys('assigned');
		$subSurveys = $this->getSurveys('submitted');
		$valSurveys = $this->getSurveys('validated');
		$penSurveys = $this->getSurveys('pendingValidation');
		
		//////////get today's forecast % //////////////
		$todayForecastVal = $this->getForecastPer('today',$bu_id);
		$todayPrevForecastVal = $this->getForecastPer('previous',$bu_id);
		
		//////////get AOL Pending Questionnaire data//////////////
		$pendingQuesData = $this->getPendingQuesData();
		
		return $this->render('MainBundle:Default:index.html.twig', array('forecast1' => $forecast1, 'forecast2' => $forecast2, 'currMonthFrom' => $currMonthFrom, 'currMonthTo' => $currMonthTo, 'assSurveys' => $assSurveys, 'subSurveys' => $subSurveys, 'valSurveys' => $valSurveys, 'penSurveys' => $penSurveys, 'todayForecastVal'=>$todayForecastVal, 'todayPrevForecastVal'=>$todayPrevForecastVal, 'pendingQuesData'=>$pendingQuesData)); 
    }
	
	function getPendingQuesData()
	{
		$em = $this->getDoctrine()->getManager();
		
		$penqb = $em->createQueryBuilder();
        $penqb->select('c,u,w')
                ->from('MainBundle:Customfield', 'c')
				->leftJoin('c.user', 'u')
				->leftJoin('c.customwave', 'w')
                ->Where('c.fieldtype = :ftype')
				->setParameter('ftype', "questionnaire");
		
		$penquery = $penqb->getQuery();
        $penarr = $penquery->getArrayResult();
		
		$arrTableData = array();
		if(is_array($penarr) and count($penarr) > 0)
		{
			$x=1;
			foreach($penarr as $pen)
			{
				$questionStatus = '';
				if($pen['questionStatus']==1)
					$questionStatus = '<span class="status blue">Client</span>';
				else if($pen['questionStatus']==2)
					$questionStatus = '<span class="status red">Project Manager</span>';
				else if($pen['questionStatus']==3)
					$questionStatus = '<span class="status green">Proofreading</span>';
				else if($pen['questionStatus']==4)
					$questionStatus = '<span class="status blue-light">Upload or Clonage</span>';
				else if($pen['questionStatus']==5)
					$questionStatus = '<span class="status orange">Quality Control</span>';
				else if($pen['questionStatus']==6)
					$questionStatus = '<span class="status blue1">Translation</span>';
					
				$fieldVal = $x;
				if($x<10)
					$fieldVal = '0' . $x;
				
				$arrData = '';	
				$arrData[] = $fieldVal;
				$arrData[] = '<a href="#">'.$pen['user']['fullname'].'</a>';
				$arrData[] = '<b>'.$pen['customwave']['name'].'</b> '.$this->getMonthName($pen['customwave']['month']).' ' . $pen['customwave']['year'];
				$arrData[] = $pen['submittime'];
				$arrData[] = $questionStatus;
							  
				$arrTableData[] = $arrData;
				$x++;
			}
		}
		return $arrTableData;
	}
	
	function getForecastPer($type,$bu_id)
	{
		$em = $this->getDoctrine()->getManager();
		
		$date = date('Y-m-d');
		if($type=='previous')
			$date = date('Y-m-d',mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y")-1));
			
		$monthNow = date('Y-m');
		
		$dtqb = $em->createQueryBuilder();
        $dtqb->select('d')
                ->from('MainBundle:Date', 'd')
                ->Where('d.dailyDate = :dt')
				->setParameter('dt', "$date")
				->andWhere('d.bu = :buid')
				->setParameter('buid', "$bu_id");
				
        $dtquery = $dtqb->getQuery();
        $dtNum = $dtquery->getArrayResult();
		
		$number = (isset($dtNum[0]['id']))?$dtNum[0]['id']:0;
		
		$monthqb = $em->createQueryBuilder();
        $monthqb->select('f')
                ->from('MainBundle:Forecastscope', 'f')
                ->Where('f.month = :monthNow')
				->setParameter('monthNow', "$monthNow")
				->andWhere('f.bu = :buid')
				->setParameter('buid', "$bu_id");
				
        $monthquery = $monthqb->getQuery();
        $monthRec = $monthquery->getArrayResult();
		$forecast = (isset($monthRec[0]['forecast']))?$monthRec[0]['forecast']:0;
		
		return $perVal = round(($number/$forecast)*100,1);
	}
	
	private function getForcastForYear($monthFrom,$monthTo)
	{
		$repository = $this->getDoctrine()->getRepository('MainBundle:Forecastscope');
		
		$query = $repository->createQueryBuilder('f')
			->select('sum(f.forecast) as fcast,f.month')
			->Where('f.month >= :monthFrom')
			->setParameter('monthFrom', "$monthFrom")
			->andWhere('f.month <= :monthTo')
			->setParameter('monthTo', "$monthTo")
			->groupBy('f.month')
			->orderBy('f.month', 'ASC')
			->getQuery();
			
		return $query->getResult();
	}
	
	function getSurveys($type)
	{
		$em = $this->getDoctrine()->getManager();
		
		$arrayStats = '';
		if($type=='assigned')
		{
			$arrayStats = array("Assigned - Completed not yet submitted","Assigned - In \"Working\" status","Assigned - Returned Completely","Assigned (Accepted where Acceptance is Required)");
		}
		else if($type=='submitted')
		{
			$arrayStats = array("Declined","Open Opportunities - No Applications","Open Opportunities - With Applications");
		}
		else if($type=='validated')
		{
			$arrayStats = array("Completed - Pending Export","Completed - RFA(s) closed","Completed - RFA(s) open","Completed Exported","Hide from Reports; Hide from Client Survey Explorer","Hide from Reports; OK for Client Survey Explorer","Completed - Export Failed");
		}
		else if($type=='pendingValidation')
		{
			$arrayStats = array("On Hold - General","Validation - After Return","Validation - In Progress","Validation - Pending");
		}
		
		$query = $em->createQueryBuilder();
		$query->select('count(a.id) surveys')
			->from('MainBundle:Aolsurvey', 'a')
			->Where('a.surveyStatusName in (:statnames)')
			->setParameter('statnames',$arrayStats)
			->groupBy('a.client')
			->orderBy('surveys', 'asc');
				
		$dtquery = $query->getQuery();	
		return $dtquery->getArrayResult();
	}
	
	private function getSurveys1($type)
	{
		$repository = $this->getDoctrine()->getRepository('MainBundle:SurveyNumber');
		
		if($type=='assigned')
		{
			$query = $repository->createQueryBuilder('s')
				->orderBy('s.id', 'ASC')
				->getQuery();
		}
		else if($type=='submitted')
		{
			$query = $repository->createQueryBuilder('s')
				->Where('s.type = :tp')
				->setParameter('tp', 'Planned')
				->orderBy('s.id', 'ASC')
				->getQuery();
		}
		else if($type=='validated')
		{
			$query = $repository->createQueryBuilder('s')
				->Where('s.invalid=1')
				->orderBy('s.id', 'ASC')
				->getQuery();
		}
		else if($type=='pendingValidation')
		{
			$query = $repository->createQueryBuilder('s')
				->Where('s.invalid!=1 or s.invalid is null')
				->orderBy('s.id', 'ASC')
				->getQuery();
		}
			
		return $query->getResult();
	}
	
	function getMonthName($val)
	{
		$arrayMonth = array('','January','February','March','April','May','June','July','August','September','Octuber','November','December');
		return $arrayMonth[$val];
	}
}
