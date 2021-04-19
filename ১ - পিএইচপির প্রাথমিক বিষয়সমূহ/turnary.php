<?php 

$n = 1;

if(12==$n){
    echo "Twelve";
}elseif(10==$n){
    echo "Ten";
}else{
    echo "A Number";
}

echo PHP_EOL;

// $numbersInWords =(12==$n) ? "Twelve" : "A number";
$numbersInWords = ((12==$n)?"Twelve": ((10==$n)?"Ten" :"A number"));
echo $numbersInWords;

echo PHP_EOL;

$var = 4;
echo $current = (($var > 2) ? "gr than 2" : (($var > 6) ? "gr than 6" : "not gr than 2 or 6") );

?>

<?php echo "Hello Hasan" ?>

------
 
<?=  "Hello Hasan" ?>