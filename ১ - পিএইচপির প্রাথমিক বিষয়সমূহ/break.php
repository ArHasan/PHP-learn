<?php
for($i=1; $i<=50; $i++){
   /* 
   echo "$i\n"; 
   if($i==2){
    echo "$i\n";
    break;}
       
       
    if($i % 13==0){
    echo $i;
     echo PHP_EOL;
     break;}
     
     if($i<45){
         goto a;      
        }
        echo "$i\n";
        a: 'y';
        */ 
    if($i<30 ){
        goto start;
    }
    echo "$i\n";
    start: 'yes';
    }