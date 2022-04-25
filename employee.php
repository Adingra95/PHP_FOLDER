<?php

class Employee
{
    public $name;
    public $dateOfjoining;
    public $experience;
    public $prevEmployer;

    public function punchDetail($a,$d,$t,$p)
    {
        $this->name=$a;
        $this->dateOfjoining=$d;
        $this->experience=$t;
        $this->prevEmployer=$p;
    }
    public function fetchDetails()
    {
        echo"Name: ".$this->name;
        echo"<br>Date of Joining: ".$this->dateOfjoining;
        echo"<br>Experience Years: ".$this->experience;
        echo"<br> Previous Employer: ".$this->prevEmployer;
        echo"<hr>";
    }
    public function changeDetails($a,$d,$t,$p)
    {
        $this->name=$a;
        $this->dateOfjoining=$d;
        $this->experience=$t;
        $this->prevEmployer=$p;
    }
 }
 $obj1=new Employee();
 $obj1->punchDetails("Koffi", "14/03/2000","3 years", "BDT");
 $obj1->fetchDetails();
 $obj1->changeDetails("Adingra", "11/03/2020","3 years", "BDT");
 
 $obj2=new Employee();
 $obj2->punchDetails("Chloe", "14/11/2019","4 years", "AGN");
 $obj2->fetchDetails();
 $obj2->changeDetails("Esther", "11/03/2020","2 years", "AGN");

 $obj3=new Employee();
 $obj3->punchDetails("Kumar", "14/11/2018","5 years", "ABD");
 $obj3->fetchDetails();
 $obj3->changeDetails("Sam", "11/03/2021","1 years", "ABD");
    ?>
