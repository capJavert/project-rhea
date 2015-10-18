Rhea.Preloader = function (game) {

    this.background = null;
    this.preloadBar = null;

    this.ready = false;

};

Rhea.Preloader.prototype = {

    preload: function () {

        //this.preloadBar = this.add.sprite(0, 100, 'preloaderBar');

        //this.load.setPreloadSprite(this.preloadBar);

        this.load.image('sky', '../assets/sky.png');
        this.load.image('ground', '../assets/platform.png');
        this.load.image('star', '../assets/star.png');
        this.load.spritesheet('dude', '../assets/dude.png', 32, 48);
        this.load.spritesheet('monster', '../assets/baddie.png', 32, 32);
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