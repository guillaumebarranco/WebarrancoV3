<?php
namespace App\Controller;

use App\Controller\AppController;

class FunController extends AppController {

	public function initialize() {
		$this->loadModel('Quizz');
	}

    public function index() {}

    public function zelda() {}

    public function quizz() {
		$quizz = $this->paginate($this->Quizz)->toArray();

        $this->set(array(
            'quizz' => $quizz,
            '_serialize' => array('quizz')
        ));
	}

	public function question($type = 2, $offset = 1) {
		$this->RequestHandler->renderAs($this, 'json');
		$this->layout = null;

		// $questions = $this->Question->find('all', 
		// 	array(
		// 		'conditions' => array(
		// 			'Question.Type' => $type,
		// 			'Question.Offset' => $offset
		// 		)
		// 	)
		// );

		$questions = $this->Question->find('all')->where(['Question.Type' => $type, 'Question.Offset' => $offset])->toArray();

		//debug($questions);
		//die('ok');

		$this->set(array(
            'questions' => $questions,
            '_serialize' => array('questions')
        ));
	}
}
