vous êtes admin

<?php

foreach ($articles as $article) { ?>
	
	<div>
		
		<a href="<?=$this->request->base?>/admin/article/<?=$article['Blog']['id']?>"><?=$article['Blog']['title'] ?></a> 
	</div>

<?php } ?>