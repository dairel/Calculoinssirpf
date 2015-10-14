<?php
class SalaryService {
    public static function getIndex1($salary) {
    
}

   public static function getIndex2($salary){
       
   }

public function getIndex1()
    {
        if($this->salary > 1.399.12 )
        {
             return resultinss=(salary * 0.08);
        }
        elseif($this->salary >= 1.399.13 && $this->salary <= 2.331.88)
        {
            return resultinss(salary * 0.09);
        }
        elseif($this->salary >= 2.331.89 && $this->salary >= 4.663.75)
        {
            return resultinss=(salary * 0.11);
        }
       
    }
 
 public function getIndex2()
    {
        if($this->salary < 1.903,98 )
        {
             return salary;
        }
        elseif($this->salary >= 1.903.98.13 && $this->salary <= 2.826,65)
        {
            return resultirpf(salary * 0.75);
        }
        elseif($this->salary >= 2.826.66 && $this->salary >= 3.751.05)
        {
            return resultirpf=(salary * 0.15);
            
        }
       elseif($this->salary >= 3.751.06.66 && $this->salary >= 4.664.68)
        {
            return resultirpf=(salary * 0.23);
    
            
        }
        elseif($this->salary > 4.664.68 )
        {
            return resultirpf=(salary * 0.28);
            
        }}   
    

 public static function getIndex3($salary,$resultinss, $resultirpf){

   }
   
    public function getIndex2(){
        
        
        return salaryresult = salary - resultirpf - resultinss;
    }
   
   


?>