<?php

function birthdayCakeCandles($candles) {

    $highCandles = 0;
    $max = $candles[0];
    
    for($i = 0; $i < sizeof($candles); $i++){
        if($candles[$i] > $max){
            $max = $candles[$i];
        }
    }

    for($j = 0; $j < sizeof($candles); $j++){
        if($candles[$j] == $max){
            $highCandles++;
        }
    }

    return $highCandles;
}
?>



/*

You are in charge of the cake for a child's birthday. You have decided the cake will have one candle for each year of their total age. They will only be able to blow out the tallest of the candles. Count how many candles are tallest.

Example

candles = [4,4,1,3]

The maximum height candles are 4 units high. There are 2 of them, so return 2.

birthdayCakeCandles has the following parameter(s):

    int candles[n]: the candle heights

Returns

    int: the number of candles that are tallest


Constraints

Sample Input 0

4
3 2 1 3

Sample Output 0

2

*/
