<?php

class P2_form
{
    private $request;
    public function __construct($postOrGet)
    {
        # Store form data (POST or GET) in a class property called $request
        $this->request = $postOrGet;
    }

/* Returns True if *either* GET or POST have been submitted*/
    public function isSubmitted()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST' || !empty($_GET);
    }
    
/* Get a value from the request, with the option of including a default if the value is not set. */
    public function get($name, $default = null)
    {
        $value = isset($this->request[$name]) ? $this->request[$name] : $default;
        if($name=='firstTerm' || $name=='factor' || $name=='terms'){
            if(is_numeric($value)==false){
                $value=$default;
            }
        }
        return $value;
    }
    
    /*Get a result from different formula based on the type of numeric sequence*/
    public function answer($firstTerm,$factor,$terms,$type,$result)
    {
        if($type=='arithmetic' && $result=='the last term'){
            $output=$firstTerm+($terms-1)*$factor;
        }else if($type=='geometric' && $result=='the last term'){
            $output=$firstTerm*pow($factor,($terms-1));
        }elseif($type=='arithmetic' && $result=='the sum'){
            $output=$terms*($firstTerm*2+($terms-1)*$factor)/2;
        }elseif($type=='geometric' && $result=='the sum'){
            $output=$firstTerm*(1-pow($factor,$terms))/(1-$factor);
        }
        return $output;
    }
}
