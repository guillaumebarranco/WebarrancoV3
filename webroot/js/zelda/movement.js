var _this = this;
_this.data = {};

window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

this.canvas = document.getElementById("canvas");
this.data.ctx = canvas.getContext("2d");
this.data.line_y = 940;
this.data.line_x = 760;
this.data.x= 800;
this.data.y = 900;
this.data.has_sword = 0;
this.data.start = null;

this.data.emeraude_kokiri = 0;
this.data.rubis_goron = 0;
this.data.saphir_zora = 0;
this.data.triforce_find = 0;

this.data.stop_game = 0;

this.moveUp = function(timestamp) {
	var progress;
	if (_this.data.start === null) _this.data.start = timestamp;
	progress = timestamp - _this.data.start;

	if(_this.data.has_sword === 0) {
		_this.data.y = _this.data.y - Math.min(progress/10, 200);
		_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x, _this.data.y+Math.min(progress/10, 200), 20, 26);
		_this.data.ctx.drawImage(_this.data.link, 0, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);
	} else {
		_this.data.y = _this.data.y - Math.min(progress/10, 200);
		_this.data.ctx.drawImage(_this.data.black3, 0, 0, 40, 47, _this.data.x, _this.data.y+Math.min(progress/10, 200), 40, 47);
		_this.data.ctx.drawImage(_this.data.link, 0, 0, 25, 47, _this.data.x, _this.data.y, 25, 47);
	}

	if (progress < 50) {
	    requestAnimationFrame(moveUp);
	} else {
	  	_this.data.start = null;
	}
};

this.moveDown = function(timestamp) {
	var progress;
	if (_this.data.start === null) _this.data.start = timestamp;
	progress = timestamp - _this.data.start;

	if(_this.data.has_sword === 0) {
		_this.data.y = _this.data.y + Math.min(progress/10, 200);
		_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x, _this.data.y-Math.min(progress/10, 200), 20, 26);
		_this.data.ctx.drawImage(_this.data.link, 20, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);
	} else {
		_this.data.y = _this.data.y + Math.min(progress/10, 200);
		_this.data.ctx.drawImage(_this.data.black3, 0, 0, 40, 47, _this.data.x, _this.data.y-Math.min(progress/10, 200), 40, 47);
		_this.data.ctx.drawImage(_this.data.link, 25, 0, 25, 47, _this.data.x, _this.data.y, 25, 47);
	}

	if (progress < 50) {
	    requestAnimationFrame(moveDown);
	} else {
	  	_this.data.start = null;
	}
};

this.moveLeft = function(timestamp) {
	var progress;
	if (_this.data.start === null) _this.data.start = timestamp;
	progress = timestamp - _this.data.start;

	if(_this.data.has_sword === 0) {
		_this.data.x = _this.data.x - Math.min(progress/10, 200);
		_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x+Math.min(progress/10, 200), _this.data.y, 20, 26);
		_this.data.ctx.drawImage(_this.data.link, 40, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);
	} else {
		_this.data.x = _this.data.x - Math.min(progress/10, 200); // Anciennement 47
		_this.data.ctx.drawImage(_this.data.black3, 0, 0, 40, 47, _this.data.x+Math.min(progress/10, 200), _this.data.y, 40, 47);
		_this.data.ctx.drawImage(_this.data.link, 50, 0, 40, 47, _this.data.x, _this.data.y, 40, 47);
	}

	if (progress < 50) {
	    requestAnimationFrame(moveLeft);
	} else {
	  	_this.data.start = null;
	}
};

this.moveRight = function(timestamp) {

	var progress;
	if (_this.data.start === null) _this.data.start = timestamp;
	progress = timestamp - _this.data.start;
	
	if(_this.data.has_sword === 0) {
		_this.data.x = _this.data.x + Math.min(progress/10, 200);
		_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x-Math.min(progress/10, 200), _this.data.y, 20, 26);
		_this.data.ctx.drawImage(_this.data.link, 60, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);
	} else {
		_this.data.x = _this.data.x + Math.min(progress/10, 200);
		_this.data.ctx.drawImage(_this.data.black3, 0, 0, 40, 47, _this.data.x-Math.min(progress/10, 200), _this.data.y, 40, 47);
		_this.data.ctx.drawImage(_this.data.link, 90, 0, 40, 47, _this.data.x, _this.data.y, 40, 47);
	}

	if (progress < 50) {
	    requestAnimationFrame(moveRight);
	} else {
	  	_this.data.start = null;
	}
};

this.dessineTerrain = function() {
	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 30;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 200;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 270;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 200;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 30;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 180;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 350;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 90;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	// Sortie de la zone verte
	//console.log(_this.data.line_x);
	//console.log(_this.data.line_y);

	_this.data.line_y = _this.data.line_y - 80;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 350;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 550;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 20;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 200;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 200;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 300;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 450;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 300;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 150;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 20;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	// On vient de terminer l'arène finale
	// console.log(_this.data.line_x);
	// console.log(_this.data.line_y);

	_this.data.line_x = _this.data.line_x + 180;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 50;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 300;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 50;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	// console.log(_this.data.line_x);
	// console.log(_this.data.line_y);

	// On vient de terminer l'arène rouge

	_this.data.line_y = _this.data.line_y + 200;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 150;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 80;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 50;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 170;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 300;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 20;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	

	// On vient de terminer l'arène n°3

	_this.data.line_x = _this.data.line_x - 380;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 350;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 610;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 200;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);


	_this.data.line_y = _this.data.line_y + 50;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 50;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	// On vient de totalement finir la zone n°1

	_this.data.line_x = _this.data.line_x + 70;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 210;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 250;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 160;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 30;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 80;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 15;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 20;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 215;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 80;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 200;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);


	_this.data.ctx.strokeStyle = "white";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();


	_this.data.line_y = 500;
	_this.data.line_x = 1100;

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 120;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 230;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 230;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 120;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 70;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 140;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 130;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 220;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 150;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 10;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 120;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 50;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 320;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 310;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "white";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();


	// PORTES

	// Porte Verte

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 270;
	_this.data.line_x = 120;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 90;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "green";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	// Porte Rouge

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 390;
	_this.data.line_x = 1600;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 80;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "red";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	// Porte Bleue

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 870;
	_this.data.line_x = 1400;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 60;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "blue";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	// Porte Jaune Finale

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 320;
	_this.data.line_x = 920;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
	_this.data.line_x = _this.data.line_x + 100;
	_this.data.line_y = _this.data.line_y + 1;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
	_this.data.line_x = _this.data.line_x - 100;
	_this.data.line_y = _this.data.line_y + 1;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
	_this.data.line_x = _this.data.line_x + 100;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
	_this.data.line_x = _this.data.line_x - 100;
	_this.data.line_y = _this.data.line_y + 1;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
	_this.data.line_x = _this.data.line_x + 100;
	_this.data.line_y = _this.data.line_y + 1;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "yellow";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	//////////

	// TRACAGE PROTECTION DE L'EMERAUDE KOKIRI

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 620;
	_this.data.line_x = 100;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 160;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "white";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 400;
	_this.data.line_x = 30;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x + 140;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
	_this.data.line_y = _this.data.line_y + 140;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "white";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 620;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y - 30;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "white";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	// FIN DU TRACAGE

	// TRACAGE DE PROTECTION DU RUBIS GORON

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 140;
	_this.data.line_x = 1610;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_y = _this.data.line_y + 180;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
	_this.data.line_x = _this.data.line_x + 30;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "white";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	// FIN DU TRACAGE

	// TRACAGE DE PROTECTION DU SAPHIR ZORA

	_this.data.ctx.beginPath();//On démarre un nouveau tracé
	_this.data.line_y = 830;
	_this.data.line_x = 1700;
	_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

	_this.data.line_x = _this.data.line_x - 180;
	_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

	_this.data.ctx.strokeStyle = "white";//On trace seulement les lignes.
	_this.data.ctx.stroke();//On trace seulement les lignes.
	_this.data.ctx.closePath();

	

	_this.data.link = new Image();
	_this.data.link.src = WEB_URL+'/img/zelda/sprite.png';

	_this.data.sword = new Image();
	_this.data.sword.src = WEB_URL+'/img/zelda/sword.png';

	_this.data.joyaux = new Image();
	_this.data.joyaux.src = WEB_URL+'/img/zelda/sprite_joyaux.png';
	_this.data.triforce = new Image();
	_this.data.triforce.src = WEB_URL+'/img/zelda/triforce.png';

	_this.data.black = new Image();
	_this.data.black.src = WEB_URL+'/img/zelda/black.png';
	_this.data.black2 = new Image();
	_this.data.black2.src = WEB_URL+'/img/zelda/black2.png';
	_this.data.black3 = new Image();
	_this.data.black3.src = WEB_URL+'/img/zelda/black3.png';
};

this.onloadAll = function() {
	_this.data.link.onload = function(){
		_this.data.ctx.drawImage(_this.data.link, 0, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);
	};

	_this.data.sword.onload = function(){
		_this.data.ctx.drawImage(_this.data.sword, 0, 0, 20, 26, 700, 580, 20, 26);
	};

	_this.data.triforce.onload = function(){
		_this.data.ctx.drawImage(_this.data.triforce, 0, 0, 282, 143, 710, 50, 282, 143);
	};

	_this.data.joyaux.onload = function(){
		_this.data.ctx.drawImage(_this.data.joyaux, 0, 0, 21, 27, 50, 580, 21, 27);
		_this.data.ctx.drawImage(_this.data.joyaux, 21, 0, 21, 27, 1660, 160, 21, 27);
		_this.data.ctx.drawImage(_this.data.joyaux, 42, 0, 29, 27, 1650, 850, 29, 27);
	};
}


window.onload = function() {

	$('body').css('zoom', screen.width/1800);

	_this.dessineTerrain();
	_this.onloadAll();

	// FIN DU TRACAGE

	window.onkeydown = function(event) {

		var h2 = document.getElementById('msg');

		var $pos_top = $('#canvas').offset().top;
		var e = event || window.event;
		var key = e.which || e.keyCode;

		// EPEE
		if(_this.data.y < 580 && _this.data.y > 560 && _this.data.x > 680 && _this.data.x < 720) {
			
			if(_this.data.has_sword === 0) {
				_this.data.stop_game = 1;

				h2.style.top = ($pos_top+600)+'px';
				h2.style.left = '630px';
				h2.innerHTML = 'Vous avez récupéré l\'épée !';
				_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x, _this.data.y-5, 20, 26);
				_this.data.ctx.drawImage(_this.data.link, 20, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);

				setTimeout(function(){h2.innerHTML = ''; _this.data.stop_game = 0;_this.data.has_sword = 1;_this.data.link.src = '/Webarranco/img/zelda/sprite_sword.png';}, 3000);
			}	
		}

		// Emeraude Kokiri
		if(_this.data.y > 560 && _this.data.y < 590 && _this.data.x > 30 && _this.data.x < 60) {
			if(_this.data.emeraude_kokiri === 0) {
				_this.data.stop_game = 1;

				h2.style.top = ($pos_top+600)+'px';
				h2.style.left = '70px';
				h2.innerHTML = 'Vous avez récupéré l\'Emeraude Kokiri';
				_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x, _this.data.y-5, 20, 26);
				_this.data.ctx.drawImage(_this.data.link, 20, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);

				setTimeout(function(){h2.innerHTML = '';_this.data.stop_game = 0;_this.data.emeraude_kokiri = 1;}, 3000);
			}
			

			_this.data.ctx.beginPath();//On démarre un nouveau tracé
			_this.data.line_y = 270;
			_this.data.line_x = 120;
			_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

			_this.data.line_x = _this.data.line_x + 90;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x - 100;
			_this.data.line_y = _this.data.line_y + 1;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x + 100;
			_this.data.line_y = _this.data.line_y - 2;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

			_this.data.ctx.strokeStyle = "black";//On trace seulement les lignes.
			_this.data.ctx.stroke();//On trace seulement les lignes.
			_this.data.ctx.closePath();
		}

		// Rubis Goron
		if(_this.data.y > 150 && _this.data.y < 180 && _this.data.x > 1630 && _this.data.x < 1670) {
			if(_this.data.rubis_goron === 0) {
				_this.data.stop_game = 1;

				h2.style.top = ($pos_top+200)+'px';
				h2.style.left = '1500px';
				h2.innerHTML = 'Vous avez récupéré le Rubis Goron';
				_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x, _this.data.y-5, 20, 26);
				_this.data.ctx.drawImage(_this.data.link, 20, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);

				setTimeout(function(){h2.innerHTML = '';_this.data.stop_game = 0;_this.data.rubis_goron = 1;}, 3000);
			}
			
			_this.data.ctx.beginPath();//On démarre un nouveau tracé

			_this.data.line_y = 390;
			_this.data.line_x = 1600;
			_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

			_this.data.line_x = _this.data.line_x - 80;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

			_this.data.line_x = _this.data.line_x + 80;
			_this.data.line_y = _this.data.line_y + 1;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x - 80;
			_this.data.line_y = _this.data.line_y - 2;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

			_this.data.ctx.strokeStyle = "black";//On trace seulement les lignes.
			_this.data.ctx.stroke();//On trace seulement les lignes.
			_this.data.ctx.closePath();
		}

		// Saphir Zora
		if(_this.data.y > 830 && _this.data.y < 870 && _this.data.x > 1620 && _this.data.x < 1660) {
			if(_this.data.saphir_zora === 0) {
				_this.data.stop_game = 1;

				h2.style.top = ($pos_top+780)+'px';
				h2.style.left = '1500px';
				h2.innerHTML = 'Vous avez récupéré le Saphir Zora';
				_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x, _this.data.y-5, 20, 26);
				_this.data.ctx.drawImage(_this.data.link, 20, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);

				setTimeout(function(){h2.innerHTML = '';_this.data.stop_game = 0;_this.data.saphir_zora = 1;}, 3000);
			}

			_this.data.ctx.beginPath();//On démarre un nouveau tracé

			_this.data.line_y = 870;
			_this.data.line_x = 1400;
			_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

			_this.data.line_y = _this.data.line_y - 60;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_y = _this.data.line_y + 60;
			_this.data.line_x = _this.data.line_x + 1;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_y = _this.data.line_y - 60;
			_this.data.line_x = _this.data.line_x - 2;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

			_this.data.ctx.strokeStyle = "black";//On trace seulement les lignes.
			_this.data.ctx.stroke();//On trace seulement les lignes.
			_this.data.ctx.closePath();

			_this.data.ctx.beginPath();//On démarre un nouveau tracé
			_this.data.line_y = 320;
			_this.data.line_x = 920;
			_this.data.ctx.moveTo(_this.data.line_x, _this.data.line_y);

			_this.data.line_x = _this.data.line_x - 100;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x + 100;
			_this.data.line_y = _this.data.line_y + 1;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x - 100;
			_this.data.line_y = _this.data.line_y + 1;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x + 100;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x - 100;
			_this.data.line_y = _this.data.line_y + 1;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);
			_this.data.line_x = _this.data.line_x + 100;
			_this.data.line_y = _this.data.line_y + 1;
			_this.data.ctx.lineTo(_this.data.line_x, _this.data.line_y);

			_this.data.ctx.strokeStyle = "black";//On trace seulement les lignes.
			_this.data.ctx.stroke();//On trace seulement les lignes.
			_this.data.ctx.closePath();
		}

		// Triforce
		if(_this.data.y < 280 && _this.data.y > 30 && _this.data.x < 1000 && _this.data.x > 610) {
			if(_this.data.triforce_find === 0) {
				_this.data.stop_game = 1;

				h2.style.top = ($pos_top+100)+'px';
				h2.style.left = '630px';
				h2.innerHTML = 'Vous avez récupéré la Triforce';
				_this.data.ctx.drawImage(_this.data.black, 0, 0, 20, 26, _this.data.x, _this.data.y-5, 20, 26);
				_this.data.ctx.drawImage(_this.data.link, 20, 0, 20, 26, _this.data.x, _this.data.y, 20, 26);

				setTimeout(function(){h2.innerHTML = '';window.location = '/';_this.data.triforce = 1;}, 3000);
			}
		}
		
	    switch(key) {
			case 38 : case 122 : case 119 : case 90 : case 87 : // Flèche haut, z, w, Z, W
				event.preventDefault();
				if(_this.data.stop_game === 0) {
					requestAnimationFrame(moveUp);
				}
				break;

			case 40 : case 115 : case 83 : // Flèche bas, s, S
				event.preventDefault();
				if(_this.data.stop_game === 0) {
					requestAnimationFrame(moveDown);
				}
				break;

			case 37 : case 113 : case 97 : case 81 : case 65 : // Flèche gauche, q, a, Q, A
				event.preventDefault();
				if(_this.data.stop_game === 0) {
					requestAnimationFrame(moveLeft);
				}
				break;

			case 39 : case 100 : case 68 : // Flèche droite, d, D
				event.preventDefault();
				if(_this.data.stop_game === 0) {
					requestAnimationFrame(moveRight);
				}
				break;

			default : 
				return true;
		}
	};
};