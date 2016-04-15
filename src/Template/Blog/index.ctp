<link rel="stylesheet" href="<?=$this->request->base?>/css/blog.css">

<div class="blog page-blog" role="main">
    <h1>Le Blog de Webarranco</h1>

    <?php 

        foreach ($articles as $article) {


            if($article->content != null && $article->content != '') { ?>

                <div class="article">
                    <div class="cover">
                        <img src="<?=$this->request->base?>/<?= $article['cover'] ?>" alt="<?= $article['alt'] ?>" />
                    </div>
                    <div class="article-preview">
                        <h2><?= $article->title ?></h2>
                        <p><?= $article->content_pres ?></p>

                        <div class="right">
                            <a href="<?=$this->request->base?>/blog/article/<?= $article->url ?>" title="Voir l'article" aria-label="<?= $article->title ?> (Voir l'article)" class="btn_article">Voir l'article</a>
                        </div>
                    </div>
                </div>
        
    <?php
            } 
        } 
    ?> 
</div>
