<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
    </head>
    <body>
        <?php
        // This is a comment in PHP
        /* This comments
         * on multiple
         * lines.
         */
        define("Author", "Garry");
        global $is_logged_in;
        $PHPint = 5;
        $PHPvariable = "This is a PHP string variable";
        $PHParray = array("PHP", "Array", "Here");
        $my_first_user = "John Smith";
        echo $my_first_user;
        $my_users = array('Mary', 'Melody', 'Ashley', 'Kim', 'Denise');
        echo "<br>";
        echo json_encode($my_users);
        $x = 1;
        echo "<br>";
        echo $x + 5;
        echo "<br>";
        echo --$x;
        echo "<br>";
        echo ++$x;
        $x *= 500;
        if ($x >= 200){
            echo "<br>Testing";
        }
        $number = 12345 *98765;
        echo "<br>" . substr($number, 3, 1);
        echo "<br>Echoing line #" . __LINE__ . " of file " . __FILE__ . "<br>";

        function longdate($timestamp){
            $temp = date("l on F jS, Y", $timestamp);
            return "The date is $temp";
        }
        
        echo longdate(time());
        
        echo "<br>";
        $t = time();
        if ($t < 1000000000){
            echo "Time is Young";
        } elseif ($t < 2000000000){
            echo "Time is Getting Old";
        } else {
            echo "Time is Old";
        }
        
        ?>
    </body>
</html>
