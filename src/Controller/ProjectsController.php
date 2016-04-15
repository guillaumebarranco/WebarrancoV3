<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjectsController extends AppController {
	public $uses = array('Project');
	public $components = array('RequestHandler');

	public function index() {}

	public function view($type = 'Professionnel') {
		$this->layout = null;
		$this->RequestHandler->renderAs($this, 'json');
		
		$projects = $this->Project->find('all', 
			array(
				'conditions' => array(
					'Project.Type' => $type
				),
				'order' => array('Project.date DESC')
			)
		);

		$this->set(array(
            'projects' => $projects,
            '_serialize' => array('projects')
        ));

	}
}

?>