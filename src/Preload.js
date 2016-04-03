Rhea.Preloader = function (game) {

    this.background = null;
    this.preloadBar = null;

    this.ready = false;

};

Rhea.Preloader.prototype = {

    preload: function () {

        //this.preloadBar = this.add.sprite(0, 100, 'preloaderBar');

        //this.load.setPreloadSprite(this.preloadBar);

        this.load.image('sky', 'assets/sky.png');
        this.load.image('ground', 'assets/platform.png');
        this.load.image('star', 'assets/star.png');
        this.load.spritesheet('dude1', 'assets/ctx00.png', 182, 258);
		this.load.spritesheet('dude2', 'assets/ctx01.png', 182, 278);
		this.load.spritesheet('dude3', 'assets/ctx02.png', 182, 242);
		this.load.spritesheet('dude4', 'assets/ctx03.png', 182, 292);
		this.load.spritesheet('board1', 'assets/board1.png', 640, 640);
		this.load.spritesheet('text1', 'assets/text1.png', 391, 275);
		this.load.spritesheet('text2', 'assets/text2.png', 391, 275);
    },

    create: function () {

        this.state.start('Game');

    },

    update: function () {

        // if (this.cache.isSoundDecoded('titleMusic') && this.ready == false)
        // {
        // this.ready = true;
        // this.state.start('MainMenu');
        // }

    }

};