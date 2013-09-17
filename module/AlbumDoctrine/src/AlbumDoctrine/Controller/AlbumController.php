<?php
namespace AlbumDoctrine\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
	public function indexAction()
    {
	    $em = $this->getServiceLocator()
	            ->get('doctrine.entitymanager.orm_default');
	    $tracks = $em->getRepository('AlbumDoctrine\Entity\Track')->findAll();
	    
	    return new ViewModel(array('tracks' => $tracks));
    }
}
