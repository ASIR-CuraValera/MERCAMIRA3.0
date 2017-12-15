<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;



class DefaultController extends Controller
{


 public function indexAction(Request $request)
{
$libros = $this->getDoctrine()->getManager()->getRepository('BdBundle:Libros')->getlibros();


$categorias = $this->getDoctrine()->getManager()->getRepository('BdBundle:Libros')->getcat();






        return $this->render('FrontendBundle:Default:index.html.twig',array(
            'categorias'=>$categorias,
            'libros'=>$libros
            
        ));
}






public function listarAction($cat)

{


$categorias = $this->getDoctrine()->getManager()->getRepository('BdBundle:Libros')->getcat();




if($cat == 'all')

$libros = $this->getDoctrine()->getManager()->getRepository('BdBundle:Libros')->getlibros();

else{

$libros = $this->getDoctrine()->getManager()->getRepository('BdBundle:Libros')->getcategorias($cat);


}





        return $this->render('FrontendBundle:Default:index.html.twig',array(
            'categorias'=>$categorias,
            'libros'=>$libros
            
        ));
}







   

}//final class


  


   





