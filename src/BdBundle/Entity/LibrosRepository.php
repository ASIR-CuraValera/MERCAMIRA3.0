<?php

namespace BdBundle\Entity;

use Doctrine\ORM\EntityManager;


class LibrosRepository extends \Doctrine\ORM\EntityRepository
{



public function getcat()
{

$em = $this->getEntityManager();
$dql= $em->createQuery('SELECT c from BdBundle:Categorias c');

	$cat = $dql->getResult();


    return $cat;


}






public function getcategorias($categoria)
{
$em = $this->getEntityManager();
$dql= $em->createQuery('SELECT l,c from BdBundle:Libros l join l.categoriaid c where l.categoriaid = :categoria')->setParameter('categoria',$categoria);

	$cat = $dql->getResult();




    return $cat ;



}



public function getlibros()
{
    
$em = $this->getEntityManager();
$dql= $em->createQuery('SELECT l,c,e from BdBundle:Libros l join l.categoriaid c join l.editorid e order by l.libroId');


	$libros = $dql->getResult();


    return $libros;



}




}//final class
