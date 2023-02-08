<html>
    <head>
        <title>convert time</title>
    </head>

    <body>
        <?php
        print date("m/d/y G.i:s", time()) . "<br>";
        print "Today is ";
        print date("j \of\ F Y, \a\\t g.i a", time());
        ?>
    </body>
</html>