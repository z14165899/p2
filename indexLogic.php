<?php require('helpers.php');

if (isset($_POST['firstTerm'])) {
    $firstTerm = $_POST['firstTerm'];
    if (is_numeric($firstTerm) == false ){
        $firstTerm =null;
    }
}else{
    $firstTerm =null;
} 

if (isset($_POST['factor'])) {
    $factor=$_POST['factor'];
    if (is_numeric($factor) == false ){
        $factor =null;
    }
}else{
    $factor=null;
}

if (isset($_POST['terms'])) {
    $terms=$_POST['terms'];
    if (is_numeric($terms) == false ){
        $terms =null;
    }
}else{
    $terms=null;
}

if (isset($_POST['type'])) {
    $type = $_POST['type'];
} else {
    $type = null;
}

if (isset($_POST['roundup'])) {
    $roundup = true;
} else {
    $roundup = false;
}

if (isset($_POST['result'])){
    $result = $_POST['result'];
} else {
    $result = 'choose';
}


if($type=='arithmetic' && $result=='the last term' && $roundup == false){
    $results=$firstTerm+($terms-1)*$factor;
}elseif($type=='arithmetic' && $result=='the last term' && $roundup == true){
    $results=round($firstTerm+($terms-1)*$factor);
}

if($type=='arithmetic' && $result=='the sum' && $roundup == false){
    $results=$terms*($firstTerm*2+($terms-1)*$factor)/2;
}elseif($type=='arithmetic' && $result=='the sum' && $roundup == true){
    $results=round($terms*($firstTerm*2+($terms-1)*$factor)/2);
}

if($type=='geometric' && $result=='the last term' && $roundup == false){
    $results=$firstTerm*pow($factor,($terms-1));
}elseif($type=='geometric' && $result=='the last term' && $roundup == true){
    $results=round($firstTerm*pow($factor,($terms-1)));
}

if($type=='geometric' && $result=='the sum' && $roundup == false){
    $results=$firstTerm*(1-pow($factor,$terms))/(1-$factor);
}elseif($type=='geometric' && $result=='the sum' && $roundup == true){
    $results=round($firstTerm*(1-pow($factor,$terms))/(1-$factor));
}


