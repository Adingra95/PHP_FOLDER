<head>
<title>A function line of text</title>
</head>
<body >
        <h5>Koffi Adingra Francois Brou<br>Reg No:11900474</h5>
Function to dress a line of text<br>
<?php
function text($text,$colour,$size) {
        global $n1;
        static $b2 = 1;
        

        $n1++; $b2++;
        $tagged = "<font color=$colour size=$size>$text
                global: $n1
                static: $b2<br>";
                
        return $tagged;
}

$n1 = 15;
$b2 = 20;

$textline = "some  text";
$also = "some more text";

$tagged = text($textline,"green",3);
$t2 = text($also,"brown",6);

print ("$tagged$t2");

print ("Main values $n1 and $b2");
?>
</body>