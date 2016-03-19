<?php

namespace Glory\Bundle\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GloryCourseBundle:Default:index.html.twig', array('name' => $name));
    }
}
