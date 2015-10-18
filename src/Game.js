Rhea.Game = function (game) {
    this.platforms;
    this.player;
    this.moveDirection = -150;
};

Rhea.Game.prototype = {

    create: function () {
        //  A simple background for our game
        this.add.sprite(0, 0, 'sky');

        this.add.tileSprite(0, 0, 800, 600, 'sky');

        this.world.setBounds(0, 0, 800, 600);

        //  The platforms group contains the ground and the 2 ledges we can jump on
        platforms = this.add.group();

        //  We will enable physics for any object that is created in this group
        platforms.enableBody = true;

        // Here we create the ground.
        var ground = platforms.create(0, this.world.height - 64, 'ground');

        //  Scale it to fit the width of the game (the original sprite is 400x32 in size)
        ground.scale.setTo(16, 4);

        //  This stops it from falling away when you jump on it
        ground.body.immovable = true;

        //  Now let's create two ledges
        var ledge = platforms.create(400, 400, 'ground');

        ledge.body.immovable = true;

        ledge = platforms.create(-150, 250, 'ground');

        ledge.body.immovable = true;

        //create player
        player = new Rhea.Player(this.game, 150, 450);
        this.game.add.existing(player);

        //create monster
        monster = new Rhea.Monster(this.game, 100, 450);
        this.game.add.existing(monster);

        cursors = this.input.keyboard.createCursorKeys();

        this.camera.follow(player);
    },

    update: function () {
        //  Collision rules
        this.physics.arcade.collide(player, platforms);
        this.physics.arcade.collide(monster, platforms);
        this.physics.arcade.collide(player, monster);

        //  Reset the players velocity (movement)
        player.body.velocity.x = 0;
        monster.body.velocity.x = 0;

        //monster ai
        monster.body.velocity.x = this.moveDirection;

        //console.log(monster.x);

        //console.log(this.world.width);

        if (monster.x == this.world.width - monster.width) {
            this.moveDirection = -150;
            monster.animations.play('left');
        }

        if(monster.x == 0) {
            this.moveDirection = 150;
            monster.animations.play('right');
        }

        if (cursors.left.isDown)
        {
            //  Move to the left
            player.body.velocity.x = -150;

            player.animations.play('left');
        }
        else if (cursors.right.isDown)
        {
            //  Move to the right
            player.body.velocity.x = 150;

            player.animations.play('right');
        }
        else
        {
            //  Stand still
            player.animations.stop();

            player.frame = 4;
        }

        //  Allow the player to jump if they are touching the ground.
        if (cursors.up.isDown && player.body.touching.down)
        {
            if(monster.x < player.x+150 && monster.x>player.x-150 && (player.body.velocity.x==-monster.body.velocity.x))
                monster.body.velocity.y = -450;

            player.body.velocity.y = -350;
        }
    },

    gameOver: function () {
    },

    quitGame: function () {
    }

};