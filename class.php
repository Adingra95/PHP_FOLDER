<?php
echo"<h1> Class function <br>";
class Person 
{
    public $name = '';
    function getName()
    {
        return $this->name;
    }
    function setName($newName)
    {
        $this->name = $newName;
    }
}
$p=new Person();
$p->setName('Koffi Adingra Francois');
echo $p->getName();
?>