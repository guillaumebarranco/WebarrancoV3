<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Controller\Component\RequestHandlerComponent;

class ProjectsController extends AppController {

	public function initialize() {
        parent::initialize();
        $this->loadModel('Project');
        $this->loadModel('UserPersos');
    }

	public function index() {}

	public function view($type = 'Professionnel') {
		$this->Jsonification();
		
		$projects = $this->Project->find('all')/*->where(['Project.Type' => $type])*/->toArray();

		// var_dump($projects);
		// die;

			/*array(
				'conditions' => array(
					'Project.Type' => $type
				),
				'order' => array('Project.date DESC')
			)
		);*/

		$json = json_encode($projects);
        $this->response->body($json);

	}
}

?>