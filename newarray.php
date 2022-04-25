<?php 
$book= array();
$book['PHP']= array('title'=>'PHP Programming', 'Author'=>"Author",'price'=>400, 'pages'=>200);
$book['JAVA']= array('title'=>'JAVA Programming', 'Author'=>"Author",'price'=>500, 'pages'=>300); 
$book['HTML']= array('title'=>'HTML Programming', 'Author'=>"Author",'price'=>600, 'pages'=>400);
echo"<br>The author of PHP:" .$book['PHP']['Author'];
echo"<br>The price of book of JAVA:" .$book['JAVA']['price'];
echo"<br>The pages in book of HTML:" .$book['HTML']['pages'];
?>