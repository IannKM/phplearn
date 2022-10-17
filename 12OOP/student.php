<?php

require_once "fellow.php";




class Student extends Fellow  # we are using inheritance
{
    public string $studnetID;

    public function __construct($fname, $sname, $studnetID)
    
    {
      
        parent::__construct($fname, $sname);   
        $this->age =18; #protctecd modifier
        $this->studnetID = $studnetID;  
    }
}




















?>