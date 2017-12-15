<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {

 

    $em = $this->getDoctrine()->getManager();
    $dql   = 'SELECT l,c,e from BdBundle:Libros l join l.categoriaid c join l.editorid e order by l.libroId';
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        2
    );

    
    return $this->render('AppBundle:Default:index.html.twig', array('pagination' => $pagination));


  


}

}
