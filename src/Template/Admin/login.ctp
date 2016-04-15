<style>
	label {
		color: #fff;
	}
</style>

<form action="<?=$this->request->base?>/admin/login" method="post" style="max-width:400px;margin: 0 auto;">

	<div class="style_input">
		<label for="username">Username</label>
		<input type="text" name="username" />
	</div>

	<div class="style_input">
		<label for="password">Password</label>
		<input type="password" name="password" />
	</div>

	<button>Se connecter</button>
</form>