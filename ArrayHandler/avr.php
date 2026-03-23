<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average</title>
</head>
<body>
    <?php
        $myArr = array(2019, 9, 8, 17, 167);
        $length = count($myArr);
        $result = 0;

        echo "The average of: ";
        for($i = 0; $i <= $length - 1; $i++){
            echo $myArr[$i];
            if($i < $length - 1){
                echo " , ";
            }
            $result += $myArr[$i];
        }
        echo " is: ".$result;

        var_dump($myArr);
        print_r($myArr);

        echo "Members: ";
        foreach($myArr as $myArrContent){
            echo "$myArrContent ";
        }

    ?>
</body>
</html>