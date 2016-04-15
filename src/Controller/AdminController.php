<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Security;

class AdminController extends AppController {

	public function initialize() {
		parent::initialize();

		$this->viewBuilder()->layout("admin");
		$this->loadModel('Admin');
		$this->loadModel('Blog');
	}

	public function index() {

		$session = $this->request->session();

		if(null !== $session->read('is_admin') && $session->read('is_admin') === true) {

			$articles = $this->Blog->find('all');

			$this->set(array(
	            'articles' => $articles,
	            '_serialize' => array('articles')
	        ));

		} else {
			return $this->redirect(
	            array('controller' => 'admin', 'action' => 'login')
	        );
		}
	}

	public function login() {

		$session = $this->request->session();
			
		if(!empty($this->request->data)) {

			$admin = $this->Admin->find('all')->where(['Admin.username' => $this->request->data['username']])->toArray()[0];

			$sent_password = Security::hash($this->request->data['password'], 'sha1', true);

			if($sent_password === $admin->password) {
				$session->write('is_admin', true);
				return $this->redirect(
		            array('controller' => 'admin', 'action' => 'index')
		        );
			}
		}
	}

	public function article($id = 1) {
		
		$article = $this->Blog->findById($id)->toArray()[0];

		if($this->request->data) {

			$article = $this->Blog->get($id);
            $article = $this->Blog->patchEntity($article, $this->request->data);
            $this->Blog->save($article);

			$article = $this->Blog->findById($id)->toArray()[0];
		}

		$this->set(array(
            'article' => $article,
            '_serialize' => array('article')
        ));
	}

}

?>