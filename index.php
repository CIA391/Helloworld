<!DOCTYPE html>
<html>
    <head>
        </head>
        <body>
            <p>
                <?php
                    /**
                    * Created by PhpStorm.
                    * User: 1407746
                    * Date: 03/10/2016
                    * Time: 14:51
                     **/

                    //activity 1
                    $age = 16;
                        if ($age >= 16) {
                            print "Buy specs";
                                if ($age >= 18){
                                    print"buy mugs";
                                        if ($age >= 21){
                                            print"buy sausage rolls";
                                        }
                                }
                        }
                        else {
                            print "you can not buy here";
                        }

                    //activity 2 switches
                    $wantedgood = "mugs";
                    switch ($wantedgood) {
                        case "specs":
                            echo "You need to be over 16";
                            break;
                        case "mugs":
                            echo "You need to be over 18";
                            break;
                        case "sausage rolls":
                            echo "You need to be over 21";
                            break;
                        case "":
                            echo "Error 101: you messed bro";
                            break;
                    }
                    //activity 3 arrays
                    $provisionedactivities = array("specs", "mugs", "sausage rolls");
                    foreach($provisionedactivities as $x) {
                        print "<p>$x</p>";
                    }
                    $provisionedactivities[1] = "hugs";
                    echo "changing mugs to hugs";
                    foreach($provisionedactivities as $x) {
                        print "<p>$x</p>";
                    }
                    unset($provisionedactivities[2]);
                        echo "removing sausage rolls";
                        foreach($provisionedactivities as $x) {
                        print "<p>$x</p>";
                    }

                    //activity 4
                for ($i = 1; $i <= 31; $i++) {
                    echo "The day of the month is: $i <br>";
                    if (($i % ))



                    $i = $x;

                    switch ($x) {
                        case "1":
                            echo "Nothing is available<br>";
                        case "2":
                            echo "Specs are available<br>";
                        case "3":
                            echo "Mugs are available<br>";
                        case "4":
                            echo "Sausage roles are available<br>";
                    }
                }
                ?>
            </p>
        </body>
</html>
<?php
