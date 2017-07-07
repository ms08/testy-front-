<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class frontController extends Controller
{
    /**
     * @Route("/mainPage")
     */
    public function mainPageAction()
    {

        return $this->render('AppBundle:front:main_page.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/employees")
     */
    public function employeesAction()
    {
        return $this->render('AppBundle:front:employees.html.twig', array(
            // ...
        ));

    }

    /**
     * @Route("/workTime")
     */
    public function workTimeAction()
    {
        return $this->render('AppBundle:front:work_time.html.twig', array(
            // ...
        ));
    }

}
