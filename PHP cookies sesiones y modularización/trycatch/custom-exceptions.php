<?php

class MichiException extends Exception
{
    public function getMeow()
    {
        return "Meow!";
    }
}

class ConejiException extends Exception
{
    public function getRabbit()
    {
       return "Conejito";
    }
}


try{
    $exception = readline("Excepcion a lanzar: ");

    if ($exception == "michi") {
        throw new MichiException("Michi incorrecto");
    }
    else{
        throw new ConejiException("Conejo incorrecto");
    }
    //este catch solo esta atrapando MichiException
}catch(MichiException $e){
    echo $e->getMessage() . "\n";
    echo $e->getMeow(); 
    //este cacth solo esta atrapando ConejiException
}catch (ConejiException $e) {
    echo $e->getMessage() . "\n";
    echo $e->getRabbit();
 }finally{
     echo "Se ha lanzado la excepcion";
 }
