<?php
namespace App\Controller;

use App\Controller\AppController;

class BlogController extends AppController {

    public function index() {

        $articles = $this->paginate($this->Blog)->toArray();

        $this->set(array(
            'articles' => $articles,
            '_serialize' => array('articles')
        ));
    }

    public function article($urlArticle = '') {

        $article = $this->Blog->findByUrl($urlArticle)->toArray()[0];

        if (!$article) {
            throw new NotFoundException('Impossible de trouver cet article');
        }

        // var_dump($article);
        // die;

        $this->set(array(
            'article' => $article,
            '_serialize' => array('article')
        ));
    }
}
