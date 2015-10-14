<?php
require 'SalaryService.php';

$salary = $_GET['salary'];
$Salaryinss = 0;
$Salaryirpf = 0;
$Salaryliquid =0;



if(is_numeric($salary)) {
   
    $Salaryinss = SalaryService::getIndex1($salary);
    $Salaryirpf = SalaryService::getIndex2($salary);
    $Salaryliquid = SalaryService::getIndex3($salary);
}



 


echo $Salaryinss;
echo $Salaryirpf;
echo $Salaryliquid;
 


?>