<html>
    <head>
        <title>convrstr2date</title>
    </head>

    <body>
    <html>
    <head>
        <title>Get date</title>
    </head>

    <body>
        <?php
        $d = strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d = strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d = strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";
        ?>
    </body>
</html>
    </body>
</html>