<?php
/*
 Braces Completion Test

You are designing a compiler for a program and need to check that braces in any given file are balanced.

Braces in a string are considered to be balanced if the following criteria are met:

All braces must be closed. Braces come in pairs of the form (), {} and [].  The left brace opens the pair, and the right one closes it. 
In any set of nested braces, the braces between any pair must be closed. 
 
For example, [{}] is a valid grouping of braces but [}]{} is not.

Function Description 

Complete the function braces in the editor below. The function must return an array of strings where the string at each index i denotes whether or not the braces were balanced in a valuesi.  The array should consist of strings "YES" or "NO" aligned with their indexes in values.

 braces has the following parameter(s):

    values[values0,...valuesn-1]:  an array of strings to analyze


Constraints

1 ≤ n ≤ 15
1 ≤ length of values ≤ 100
It is guaranteed that each values consists of (, ), {, }, [, and ] only.
*/


function balancedBrace($paren){

    $noString = 0;
    $stack = strlen($paren);
    for($i=0; $i < $stack; $i++){
        if($paren[$i] == '('){
            $noString += 1;
        }elseif($paren[$i] == ')'){
            $noString -= 1;
        }
        if($noString == -1){
            return false;
        }
    }
    return $noString == 0;
}


?>