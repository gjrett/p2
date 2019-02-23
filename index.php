<?php
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Greg's Website</title>
    <meta charset='utf-8'>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA"
          crossorigin="anonymous">

    <link href='/styles/app.css' rel='stylesheet'>

</head>
<body>

<section id='main'>
    <h1>Week Day Finder</h1>

    <p>This program finds the week day associated with a date input by the user </p>

    <form method='POST' action='process.php'>

        <fieldset>
            <label>Select the month
                <select name='month' size='1' multiple>
                    <option value='January'>January</option>
                    <option value='February'>February</option>
                    <option value='March'>March</option>
                    <option value='April'>April</option>
                    <option value='May'>May</option>
                    <option value='June'>June</option>
                    <option value='July'>July</option>
                    <option value='August'>August</option>
                    <option value='September'>September</option>
                    <option value='October'>October</option>
                    <option value='November'>November</option>
                    <option value='December'>December</option>
                </select>
            </label>

            <label>Enter the day number (must be from 1 - 31, inclusive)
                <input type='number' name='day' min='1' max='31' value='<?= $day ?? '' ?>'>
            </label>

            <label>Enter the year number (must be from 1900 - 2018, inclusive)
                <input type='number' min='1900' max='2018' name='year' value='<?= $year ?? '' ?>'>
            </label>

        </fieldset>

        <input type='submit' value='Submit' class='btn btn-primary'>

        <label>The week day for the input date is:
            <input type='text' readonly name='weekDay' value='<?= $weekDay ?? '' ?>'>
        </label>

    </form>

</section>

<footer>
    <a href='https://github.com/susanBuck/foobooks0'>View this project on Github</a>
</footer>

</body>
</html>