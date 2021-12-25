<!DOCTYPE html>

<html lang="en">

        <head>
                <meta charset="UTF-8"/>
                <?php

                        $size=$_POST["pt"];
                        $color=$_POST["color"];
                        $text=$_POST["t"];
                ?>
                <style>
                        span.text {
                                font-size: <?php echo $size; ?>;
                                color: <?php echo $color; ?>;
                        }
                </style>

        </head>


        <body style="background:grey;">

                        <?php
                                echo "<span class=text>$text</span>";
                        ?>

                <form method="post">

                qual seu text: <input type="text" name="t"/>
                </br>

                escolha o tamanho: <select name="pt" id="pt">
                        <option value="8pt">8</option>
                        <option value=14pt>14</option>
                        <option value=10pt>10</option>
                        <option value=20pt>20</option>
                        <option value=40pt>40</option>
                        </select>
                        </br>

                        escolho uma cor: <input type="color" name="color"/>
                        </br>
                        <input type="submit"/>

        </body>

</html>
