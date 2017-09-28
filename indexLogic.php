<?php require('helpers.php');
      require('P2_form.php');

$P2_form=new P2_form($_POST);

if($P2_form->isSubmitted()) {
    $firstTerm = $P2_form->get('firstTerm');
    $factor = $P2_form->get('factor');
    $terms = $P2_form->get('terms');
    $type = $P2_form->get('type');
    $roundup = $P2_form->get('roundup');
    $result = $P2_form->get('result');
    if($roundup==false){
        $results=$P2_form->answer($firstTerm,$factor,$terms,$type,$result);
    }else{
        $results=round($P2_form->answer($firstTerm,$factor,$terms,$type,$result));
    }
}else{
    $firstTerm=null;
    $factor =null;
    $terms=null;
    $type = null;
    $roundup = false;
    $result = 'choose';
}
