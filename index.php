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
                    switch ($age) {
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
                    $provisionedactivities['mugs'] = "hugs";
                    unset($provisionedactivities['foo']);
                ?>
            </p>
        </body>
</html>
<?php
