<?php
class Emp {
    public $name;
    public $salary;
    public function change_name($new_name)
    {
        $this->name=$new_name;
        echo"<br><h3>The name is : .$this->name";
    }
    final function change_sal($new_sal)
    {
        $this->salary=$new_sal;
        echo"<br><h3>The new salary is :.$this->salary";
    }
}
class Manager extends Emp{
    public function change_name($new_name)
    {
        $this->name=$new_name;
        echo"<br><h3>The new name changed by the manager is: .this->salary";
    }
    public function change_salary($new_salary)
    {
        $this->salary=$new_sal;
        echo"<br><h3>The new salary changed by the manager is:.$this->salary";
    }
}
$e1=new Manager();
$e1->change_name("ABC");
$e1->change_sal(50000);
?>