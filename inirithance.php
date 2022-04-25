<?php
class Boss{
    public $approve;
    function  _construct($approval){

    $this->approval=$approval;
    }
    function showBoss(){
        echo"<br><h3>Form approved by Boss: -".$this->approval;
        echo"<br><h3>Form verify by Boss: -".$this->verified;

    }
}
class Clerk extends Boss{
    public $received ,$verified;
    function  _construct($a,$r,$v){
        parent::_construct($a);
        $this->received=$r;
        $this->verified=$v;
    } 
    function showClerk(){
        echo"<br><h3>Received by the Clerk: ".$this->received;
        echo"<br><h3>verified by the Clerk: ".$this->verified;

    }

}
$emp=new Clerk("Yes","Yes","Yes","Yes");
$emp->showClerk();
$emp->showBoss();
?>