<?php
/**
 * Created by PhpStorm.
 * User: jruacond
 * Date: 15/01/2018
 * Time: 9:52
 */

namespace AppBundle\Controller;

use AppBundle\Document\User;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;

class UserController extends FOSRestController implements ClassResourceInterface
{

    /**
     * @return \FOS\RestBundle\View\View
     */
    public function cgetAction()
    {

        $users = $this->get('doctrine_mongodb.odm.document_manager')->getRepository(User::class)->findAll();

        return $this->view($users);
    }
}