<?php
function promotion()
{
static $i_salary= 5000;
$i_salary +=round($i_salary/10);
echo"<br> Salary:".$i_salary;
}
promotion();
promotion();

?>