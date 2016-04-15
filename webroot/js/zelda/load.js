function loadImages(x, y) {

	var link = new Image();
	link.src = 'img/sprite.png';

	var sword = new Image();
	sword.src = 'img/sword.png';

	var joyaux = new Image();
	joyaux.src = 'img/sprite_joyaux.png';
	var triforce = new Image();
	triforce.src = 'img/triforce.png';

	var black = new Image();
	black.src = 'img/black.png';
	var black2 = new Image();
	black2.src = 'img/black2.png';
	var black3 = new Image();

	black3.src = 'img/black3.png';
	

	link.onload = function(){
		ctx.drawImage(link, 0, 0, 20, 26, x, y, 20, 26);
	};

	sword.onload = function(){
		ctx.drawImage(sword, 0, 0, 20, 26, 700, 580, 20, 26);
	};

	triforce.onload = function(){
		ctx.drawImage(triforce, 0, 0, 282, 143, 710, 50, 282, 143);
	};

	joyaux.onload = function(){
		ctx.drawImage(joyaux, 0, 0, 21, 27, 50, 580, 21, 27);
		ctx.drawImage(joyaux, 21, 0, 21, 27, 1660, 160, 21, 27);
		ctx.drawImage(joyaux, 42, 0, 29, 27, 1650, 850, 29, 27);
	};

	var tab = [link, black, black2, black3, sword, joyaux, triforce];

	return tab;
}