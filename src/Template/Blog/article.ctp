<link rel="stylesheet" href="<?=$this->request->base?>/css/prism.css">
<link rel="stylesheet" href="<?=$this->request->base?>/css/blog.css">

<style>
	body, p {
		font-family: 'Georgia';
	}

	p {
		font-size: 14px;
	}
</style>

<script src="<?=$this->request->base?>/js/prism.js"></script>

<div class="blog page-blog" role="main">
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
