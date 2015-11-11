<?php

namespace DTM\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DTMUIBundle:Default:index.html.twig', array('name' => $name));
    }
    /**
	* @Route("/tasks", name="tasks")
	*/
    public function tasksAction()
    {
    	return $this->render('DTMUIBundle:Home:home.html.twig', array(
			'data' => 'welcome', 'contentFile' => 'DTMUIBundle:Tasks:tasks_summary.html.twig'
		));
        /*return $this->render('DTMUIBundle:Tasks:tasks.html.twig', array(
            'data' => 'welcome', 'contentFile' => 'DTMUIBundle:Tasks:tasks_summary.html.twig'
        ));*/
    }
}
