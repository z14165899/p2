<?php require('indexLogic.php') ?>
<!DOCTYPE html>
<html>

<head>

    <title>Numerical Sequences</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='index.css' rel='stylesheet'>

</head>

<body>

    <h1>Arithmetic and Geometric Sequences</h1>

    <form method='POST' action='index.php'>
        <label>Enter Your First Term:
        <input type='text' name='firstTerm'>
        </label>
        <label>Enter the Factor of Differences:
        <input type='text' name='factor'>
        </label>
        <label>Enter the Number of Terms:
        <input type='text' name='terms'>
        </label>
        <fieldset class='radios'>
            <legend>Select the Type of Your Numeric Sequences</legend>
            <label><input type='radio' name='type' value='arithmetic' <?php if ($type == 'arithmetic') echo 'CHECKED'?>>Arithmetic</label>
            <label><input type='radio' name='type' value='geometric' <?php if ($type == 'geometric') echo 'CHECKED'?>>Geometric</label>
        </fieldset>
            <label><input type='checkbox' name='roundup' value='roundup' <?php if ($radiosType == 'roundup')) echo 'CHECKED'?>> Round up?</label>

        <input type='submit' class='btn btn-primary btn-sm'>

        <?php if ($_POST) : ?>
        <div class="alert <?=$alertType?>" role="alert">
            <?=$results?>
        </div>
        <?php endif; ?>

    </form>

    <footer>
        <a href='/forms/'>&larr; Other form examples</a>
    </footer>

</body>

</html>
