<!DOCTYPE HTML>
<html>
<head>
    <title>phaser.js - a new beginning</title>
    <?php
        require('js.php');
    ?>
</head>
<body>

<script type="text/javascript">

(function () {

    var game = new Phaser.Game(800, 600, Phaser.AUTO, '', { preload: preload, create: create, render: render });

    function preload() {

        game.load.image('atari1', 'assets/sprites/atari130xe.png');

    }

    var graphics;

    function create() {

        graphics = game.add.graphics(0, 0);

        // set a fill and line style
        graphics.beginFill(0xFF3300);
        graphics.lineStyle(10, 0xffd900, 1);
        
        // draw a shape
        graphics.moveTo(50,50);
        graphics.lineTo(250, 50);
        graphics.lineTo(100, 100);
        graphics.lineTo(250, 220);
        graphics.lineTo(50, 220);
        graphics.lineTo(50, 50);
        graphics.endFill();
        
        // set a fill and line style again
        graphics.lineStyle(10, 0xFF0000, 0.8);
        graphics.beginFill(0xFF700B, 1);
        
        // draw a second shape
        graphics.moveTo(210,300);
        graphics.lineTo(450,320);
        graphics.lineTo(570,350);
        graphics.lineTo(580,20);
        graphics.lineTo(330,120);
        graphics.lineTo(410,200);
        graphics.lineTo(210,300);
        graphics.endFill();
        
        // draw a rectangel
        graphics.lineStyle(2, 0x0000FF, 1);
        graphics.drawRect(50, 250, 100, 100);
        
        // draw a circle
        graphics.lineStyle(0);
        graphics.beginFill(0xFFFF0B, 0.5);
        graphics.drawCircle(470, 200,100);
        
        graphics.lineStyle(20, 0x33FF00);
        graphics.moveTo(30,30);
        graphics.lineTo(600, 300);

        game.add.tween(graphics).to({ x: 200 }, 2000, Phaser.Easing.Linear.None, true, 0, 1000, true);

    }

    function render() {
    }

})();
</script>

</body>
</html>