<?php
    echo "<h1>Exceptions in PHP</h1>";
    function divide($a, $b) {
        if (!$b) {
            throw new Exception("Cannot divide by zero");
        }
        return $a / $b;
    }
    
    try {
        echo divide(10, 5);
        echo divide(5, 0);
        echo "no error";
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage() . "<br/>";
    } finally { // có lỗi hay không đều chui vào 
        echo "Finally come here..." . "<br/>";
    }
    echo "Program runs here";
?>