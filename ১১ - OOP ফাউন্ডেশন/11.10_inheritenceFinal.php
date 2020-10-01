 <?php 
 abstract class OurClass{
     final function doSomething(){
         echo "Doing Something";
     }
 }
 class MyClass extends OurClass{
    //  function doSomething(){
    //     echo "Doing Nothing";
    //  }
 }

 $mc = new MyClass();
 $mc->doSomething();