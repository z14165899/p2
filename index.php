<?php require('indexLogic.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Numerical Sequences</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='index.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <h1>Arithmetic and Geometric Sequences</h1>
    <br>
    <h2>Numeric Sequences are a series of numbers that have either the same increment by addition/substration or the same ratio of expontial increment by multiplication/division. and they can be called Arithmetic Sequences and Geometric Sequences respectively.</h2>

    <form method='POST' action='index.php'>
        <fieldset class='text'>
            <label for='firstTerm'>Enter Your First Term:
            <input type='text' name='firstTerm' id='firstTerm' value='<?=sanitize($firstTerm)?>' required>
            </label>
            <?php if (!$firstTerm) : ?>
            <div class='alert alert-warning'>Please enter a numeric first term.</div>
            <?php endif; ?>
        </fieldset>
        <br>
        <fieldset class='text'>
            <label for='factor'>Enter the Factor of Differences:
            <input type='text' name='factor' id='factor' value='<?=sanitize($factor)?>' required>
            </label>
            <?php if (!$factor) : ?>
            <div class='alert alert-warning'>Please enter a numeric factor term.</div>
            <?php endif; ?>
        </fieldset>
        <br>
        <fieldset class='text'>
            <label for='terms'>Enter the Number of Terms:
            <input type='text' name='terms' id='terms' value='<?=sanitize($terms)?>' required>
            </label>
            <?php if (!$terms) : ?>
            <div class='alert alert-warning'>Please enter a numeric number of terms.</div>
            <?php endif; ?>
        </fieldset>
        <br>
        <fieldset class='radios'>
            <legend>Select the Type of Your Numeric Sequences</legend>
            <label class='type'><input type='radio' name='type' value='arithmetic' required <?php if ($type == 'arithmetic') echo 'CHECKED'?>>Arithmetic</label>
            <br>
            <label class='type'><input type='radio' name='type' value='geometric' required <?php if ($type == 'geometric') echo 'CHECKED'?>>Geometric</label>
            <?php if (!$type) : ?>
            <div class='alert alert-warning'>Please select the type of the sequence.</div>
            <?php endif; ?>
        </fieldset>
        <br>
        <fieldset class='checkbox'>
            <label><input type='checkbox' name='roundup' value='roundup' <?php if ($roundup == 'roundup') echo 'CHECKED'?>> Round up?</label>
            <br>
            <br>
            <label for='result' class="typeSelect">I want to know the value of </label>
            <select name='result' id='result' maxlength='15' required>
                <option value='choose'>Choose one...</option>
                <option value='the sum' <?php if ($result == 'the sum') echo 'SELECTED'?>>the sum</option>
                <option value='the last term' <?php if ($result == 'the last term') echo 'SELECTED'?>>the last term</option>
            </select>
            <label for='result'  class="typeSelect">of this sequence.</label>
            <?php if ($result=='choose') : ?>
            <div class='alert alert-warning'>Please select the type of result of the sequence.</div>
            <?php endif; ?>
        </fieldset>
        <br>
        <input type='submit' class='submit'>
        <br>
        <br>
        <?php if ($_POST && $firstTerm!=null && $terms!=null && $factor!=null && $type!=null && $result!='choose') : ?>
        <div class="alert alert-info" role="alert" id="output1">
            The result of <?=$result?> of the above <?=$type?> sequence with the first term <?=$firstTerm?>, the factor of difference <?=$factor?> and number of terms <?=$terms?> specified is <strong><?=$results?></strong>.
        </div>
        <?php else: ?>
        <div class="alert alert-danger" role="alert" id="output2">Please complete all your selections and inputs!!</div>
        <?php endif; ?>
    </form>
</body>

</html>
