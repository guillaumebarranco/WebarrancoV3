<div style="max-width: 1200px; margin: 0 auto;">
	<h2><?= $article->title?></h2>
	
	<form action="<?=$this->request->base?>/admin/article/<?= $article->id?>" method="post">
		<textarea name="content" id="" cols="30" style="height: 500px;" rows="10"><?= $article->content?> </textarea>
		<button style="margin-top: 20px;">Modifier</button>
	</form>
</div>

<script src="<?=$this->request->base?>/webroot/ckeditor/ckeditor.js"></script>
<script src="<?=$this->request->base?>/webroot/ckeditor/adapters/jquery.js"></script>

<script>
	$('textarea').ckeditor();
</script>
