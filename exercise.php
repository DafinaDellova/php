<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $name = "John";
     $age = 20;
     $work="Programmer";
     $sentence = "My name is " . $name . " I am " . $age . " years old" . ", and I work as ". $work ;
     echo $sentence ."<br>";


      $persons = [" Mark","John","George","Lisa"];
      echo "The third player in the team is " . $persons[3] ."<br>" ;

      $elements = ["Mickey Mouse"=>"cartoon", "Super Mario"=>"anime", "Goku" =>"game", "Pokemon " =>"anime"];
      foreach($elements as $x => $x_value) {
            echo  $x ." is a " . $x_value;
            echo "<br>";
        }


        function divide($a,$b){
            echo $a /$b ."<br>";
        }
        divide(40,5);


        function calculate($math,$physics,$english){
            if( !is_numeric($math) || !is_numeric($physics) || !is_numeric($english)){
                echo "The all values are not numbers";

            }else{
        $sum= $math + $physics + $english;
        $average= $sum / 3;
        echo "Sum: ". $sum."<br>";
        echo "Average: ".$average."<br>";
            }
        }
        calculate (10,20,30);

        function numbers($time, $format = '%02d:%02d')
        {
            if ($time < 1) {
                return;
            }
            $hours = floor($time / 60);
            $minutes = ($time % 60);
            return sprintf($format, $hours, $minutes);
        }
        echo numbers('200', '%02d Hours, %02d Minutes');




?>
</body>
</html>
