<?php
class Person{
    public static $batch=2018;
    public $name,$rno;
    function getData($name,$rno)
    {
        $this->name=$name; $this->rno=$rno;
    }
    function showDetail()
    {
        echo"<h1>Name:".$this->name;
        echo"<br>Reg No: ".$this->rno;
        echo"<br> Batch: ".self::$batch;//self is keyword
    }
}
$pers=new Person();
$pers->getData("Koffi",10);
$pers->showDetail();
//echo"<br>".Person::$batch;
?>