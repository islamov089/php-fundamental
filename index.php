<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >PHP Info</title>
    <style>
     
    </style>
</head>
<body>
    <h1>PHP Info</h1>
    <?php
       
       echo "Scalar types <br/>";
    
       # Define variables
        $completed = true;
        $score = 99;
        $price = 0.99;
        $greeting = 'Hello';
        
       # Find types with gettype()
        echo 'Boolean value: ' . ($completed ? 'true' : 'false') . ' (Type: ' . gettype($completed) . ')<br/>';
        echo 'Integer value: ' . $score . ' (Type: ' . gettype($score) . ')<br/>';
        echo 'Float value: ' . $price . ' (Type: ' . gettype($price) . ')<br/>';
        echo 'String value: ' . $greeting . ' (Type: ' . gettype($greeting) . ')<br/>';
    
        echo "<br/>Find types with var_dump()<br/>";
        
        #Find types with var_dump()
        echo 'Boolean value: ';
        var_dump($completed);
        echo '<br/>';
        
        echo 'Integer value: ';
        var_dump($score);
        echo '<br/>';
        
        echo 'Float value: ';
        var_dump($price);
        echo '<br/>';
        
        echo 'String value: ';
        var_dump($greeting);
        echo '<br/>';


        echo 'Compound Types <br/>';

        #array
        $companies = [1,2,3,4,0.5, -9.2, 'A', "b", true];
        print_r($companies);
        #callable
        #object
        #itarable



    ?>
</body>
</html>
