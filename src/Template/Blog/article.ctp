<link rel="stylesheet" href="<?=$this->request->base?>/css/prism.css">
<script src="<?=$this->request->base?>/js/prism.js"></script>

<div class="blog page-blog" role="main" style="max-width: 600px;">
	<div class="article-page">

		<div class="right">
			<a href="/Webarranco/Blog" title="Retour sur la liste des articles">Retour</a>
		</div>

		<h1><?= $article->title ?></h1>
		<i class="date">Ecrit le <?= substr($article['created'], 0, 10) ?></i>

		<?= $article->content ?>
	
		<a href="<?=$this->request->base?>/<?=$article->source?>" title="Télécharger les sources">Télécharger les sources</a>
	</div>
</div>
