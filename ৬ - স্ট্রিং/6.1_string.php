<?php 

$name = "hasan";

$string = " my name is $name \n \t";
echo $string ;

$heredoc = <<<EOD
\n
hello iam $name 
iam professional web develaper
EOD;
echo $heredoc;