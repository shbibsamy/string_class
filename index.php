<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StringClass</title>
</head>
<body>
    <h1>Testing the functions of a new class</h1>
    <form action='index.php' method='POST'>
        <h2>Quick form</h2>
        <fieldset>
            <label>
                <span>
                    Input a string to test the functionality of my new class.
                </span>
                <input type='text' name='myString'>
            </label>
            <br>
            <label>
                <span>
                    Input a string to test the previous string with.
                </span>
                <input type='text' name='testString'>
            </label>
            <br>
            <input type='submit' name='submit'>
        </fieldset>
    </form>
    <?php
    require 'assets/scripts/stringTest.php';
    if (isset($_POST['submit'])) {
        echo "<div class='result'>
        <div class='function'>
            <h2>Method 1: indexOf()</h2>
            <span>Your string was: '$getStringResult'. You searched for '$testString'. Your string was found at index: '$indexOfResult'.</span>
        </div>
        <div class='function'>
            <h2>Method 2: trim()</h2>
            <span>Your string without spaces before or after: '$trimResult'</span>
        </div>
        <div class='function'>
            <h2>Method 3: toUppercase()</h2>
            <span>Your string in uppercase letters: '$toUppercaseResult'</span>
        </div>
        <div class='function'>
            <h2>Method 4: includes()</h2>
            <span>Your string includes your test string: '$includesResult'</span>
        </div>
        <div class='function'>
            <h2>Method 5: substring()</h2>
            <span>What's left of your string after your test string: '$substringResult'</span>
        </div>
    </div>
        ";
    }
    
    ?>
</body>
</html>