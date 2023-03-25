<?php

    class Employee{
        public $EmpName;
        public $EmpID;

        public $JobTitle;

    

    public function __construct($EmpName, $EmpID, $JobTitle){
        $this->EmpName = $EmpName;
        $this->EmpID = $EmpID;
        $this->JobTitle = $JobTitle;

    }

    public function display(){
        return "EmpName: " . $this->EmpName . "\n" . " EmpID: " . $this->EmpID . "\n" . $this->JobTitle;
    }

    }

    $lesile = new Employee("Anna Lesile", "001", "Web Developer");
    print("Employee Details");
    print($lesile->display());

?>