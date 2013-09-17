<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'AlbumDoctrine\Controller\Album' => 'AlbumDoctrine\Controller\AlbumController',
        ),
    ),
    
    'router' => array(
        'routes' => array(
            'albumDoctrine' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/album-doctrine[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'AlbumDoctrine\Controller\Album',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
 
    # definir layouts, erros, exceptions, doctype base
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
		
	'doctrine' => array(
		'driver' => array(
			'AlbumDoctrine_driver' => array(
				'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
				'cache' => 'array',
				'paths' => array(__DIR__ . '/../src/AlbumDoctrine/Entity')
				),
			'orm_default' => array(
				'drivers' => array(
				'AlbumDoctrine\Entity' =>  'AlbumDoctrine_driver'
				),
			),
		),
	),	
);