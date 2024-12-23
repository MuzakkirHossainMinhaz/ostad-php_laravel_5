<?php
// Task-1
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>


<?php
// Task-2
function greet($name)
{
    echo "Hello, " . $name . "!";
}

// function call
greet("John");
?>


<?php
// Task-3
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// print factorial
echo factorial(4); // Output: 24
?>


<?php
// Task-4
function Fibonacci($n)
{
    $num1 = 0;
    $num2 = 1;

    echo $num1 . " " . $num2 . " ";

    for ($i = 3; $i <= $n; $i++) {
        $next = $num1 + $num2;
        echo $next . " ";
        $num1 = $num2;
        $num2 = $next;
    }
}

// function call
Fibonacci(12);
?>