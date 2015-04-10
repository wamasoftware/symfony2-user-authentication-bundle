<?php

namespace Acme\UserBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @MongoDB\Document
 */
class Role implements RoleInterface
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $role;
	
	/**
     * @MongoDB\ReferenceMany(targetDocument="User", mappedBy="roles")
     */
    protected $users;
	

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getRole()
    {
       return $this->role;
    }

}