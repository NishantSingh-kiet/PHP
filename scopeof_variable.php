// Variable with global scope

<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>


/*output

Variable x inside function is:

Variable x outside function is: 5

*/



//Variable with local scope:

<?php
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>



/*output

Variable x inside function is: 5

Variable x outside function is:

*/


/*PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):*/

<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>

/*output

15

*/



/* PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):*/


<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>

/*PHP also stores all global variables in an array called $GLOBALS[index]. 
The index holds the name of the variable.
This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:

Example*/

<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>

/*output

15

*/

/*PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. 
However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:*/


<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>


/*output
0
1
2

*/
