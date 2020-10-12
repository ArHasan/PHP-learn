<?php 
class MyException extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    throw new NetworkException();
}
try{
    testExceptions();
}catch(MyException $e){
    echo "MyExecption Caught\n";
}catch(NetworkException $e){
    echo "NetworkException Caugth\n";
}catch(Exception $e){
    echo "Exception Caugth\n";
}finally{
    echo "Cleaned Up\n";
}