<?php
namespace AlbumDoctrine\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use DoctrineORMModule\Stdlib\Hydrator\DoctrineEntit;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use AlbumDoctrine\Entity\Track;

class AlbumController extends AbstractActionController
{
	public function indexAction()
    {
	    $em = $this->getServiceLocator()
	            ->get('doctrine.entitymanager.orm_default');
	    $tracks = $em->getRepository('AlbumDoctrine\Entity\Track')->findAll();
	    
	    return new ViewModel(array('tracks' => $tracks));
    }
    
    public function addAction()
    {
    	$track = new Track;
    	$entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
    	$builder = new AnnotationBuilder($entityManager);
    	$form = $builder->createForm($track);
    	$form->setHydrator(new DoctrineHydrator($entityManager,'AlbumDoctrine\Entity\Track'));
    	$form->bind($track);
    	
   		return new ViewModel(array('form' => $form));
    }
}
