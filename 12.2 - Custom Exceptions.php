<?php
    class MyException extends Exception{}
    class NetWorkException extends Exception{}

    function textException(){
        throw new NetWorkException("This is a custom exception");
    }

    try{
        textException();
    }catch(MyException $e){
        echo $e->getMessage();
        echo " MyException";
    }catch(NetWorkException $e){
        echo $e->getMessage();
        echo " NetWorkException";
    }