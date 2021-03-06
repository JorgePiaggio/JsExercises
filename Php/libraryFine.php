<?php

// 1 == return date
function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
    
    if($y1 > $y2){        
        return 10000;
    }else if($y1 == $y2 && $m1 > $m2){
        return ($m1 - $m2) * 500;
    }else if($y1 == $y2 && $m1 == $m2 && $d1 > $d2){
        return ($d1 - $d2) * 15;
    }else{
        return 0;
    }
}?>


/*

Your local library needs your help! Given the expected and actual return dates for a library book, create a program that calculates the fine (if any). The fee structure is as follows:

	1. If the book is returned on or before the expected return date, no fine will be charged (i.e.: fine=0).
	2. If the book is returned after the expected return day but still within the same calendar month and year as the expected return date, fine = 15 Hackos x (number of days late).
	3. If the book is returned after the expected return month but still within the same calendar year as the expected return date, fine = 500 Hackos x (number of months late).
	4. If the book is returned after the calendar year in which it was expected, there is a fixed fine of 10000 Hackos.

Charges are based only on the least precise measure of lateness. For example, whether a book is due January 1, 2017 or December 31, 2017, if it is returned January 1, 2018, that is a year late and the fine would be 10000 Hackos.



libraryFine has the following parameter(s):

    d1, m1, y1: returned date day, month and year, each an integer
    d2, m2, y2: due date day, month and year, each an integer

Returns

    int: the amount of the fine or 0 if there is none


Sample Input

9 6 2015
6 6 2015

Sample Output

45

*/
