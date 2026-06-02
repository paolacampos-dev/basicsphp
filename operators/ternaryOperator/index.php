<!-- 
    Ternary Operator:
        1. the condition to check
        2. the value or expression to return if true
        3. the value or expression to return if false

        Condition ? ExpressionIfTRUE : ExpressionIfFALSE
-->

<?php

$score = 50;

if ($score > 40) {
    echo 'High Score';
} else {
    echo 'Low Score';
}

$result = $score > 40 ? 'High Score' : 'Low Score';
echo $result;


// refactoringLoops with ternaryOperator

?>