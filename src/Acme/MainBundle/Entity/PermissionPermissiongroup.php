<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermissionPermissiongroup
 *
 * @ORM\Table(name="permission_permissiongroup", indexes={@ORM\Index(name="IDX_40944DAAFED90CCA", columns={"permission_id"}), @ORM\Index(name="IDX_40944DAABD0DD96D", columns={"permissiongroup_id"})})
 * @ORM\Entity
 */
class PermissionPermissiongroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="permission_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="permissiongroup_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissiongroupId;



    /**
     * Set permissionId
     *
     * @param integer $permissionId
     * @return PermissionPermissiongroup
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;

        return $this;
    }

    /**
     * Get permissionId
     *
     * @return integer 
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * Set permissiongroupId
     *
     * @param integer $permissiongroupId
     * @return PermissionPermissiongroup
     */
    public function setPermissiongroupId($permissiongroupId)
    {
        $this->permissiongroupId = $permissiongroupId;

        return $this;
    }

    /**
     * Get permissiongroupId
     *
     * @return integer 
     */
    public function getPermissiongroupId()
    {
        return $this->permissiongroupId;
    }
}
