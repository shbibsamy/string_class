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
                <input type='text' name='my-string'>
            </label>
            <input type='submit' name='submit'>
        </fieldset>
    </form>
    <?php
    echo "<div class='result'>
        <div class='function'>
            <h2>Method 1: indexOf()</h2>
            <span></span>
        </div>
        <div class='function'>
            <h2>Method 2: typeof()</h2>
            <span></span>
        </div>
        <div class='function'>
            <h2>Method 3: toUppercase()</h2>
            <span></span>
        </div>
        <div class='function'>
            <h2>Method 4: includes()</h2>
            <span></span>
        </div>
        <div class='function'>
            <h2>Method 5: at()</h2>
            <span></span>
        </div>
    </div>";
    ?>
</body>
</html>