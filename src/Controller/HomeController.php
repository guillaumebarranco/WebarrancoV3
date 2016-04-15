<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController {

    public function index() {
		$this->loadModel('Project');

		$newest = $this->Project->find('all')->where(['Project.last_project' => 1])->toArray()[0];

		$this->set(array(
            'newest' => $newest
        ));
	}
}
