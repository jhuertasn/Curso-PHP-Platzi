<?php

namespace App\Controllers;

use Database\PDO\Connection;

class IncomesController
{

    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->get_database_instance();
    }
    /**
     * Muestra una lista de este recurso
     */
    public function index()
    {
        $stmt = $this->connection->prepare("SELECT * FROM incomes");

        $stmt->execute();

        $results = $stmt->fetchAll();

        require("../../resources/views/incomes/index.php");

        //bindColumn define las variables a cada columna
        //$stmt->bindColumn("amount", $amount);
        //$stmt->bindColumn("description",$description);

        //fetch de devuelve una unica fila que se guarda en la variable row, pa esa fila en php equivale como true 
        /*
        while($stmt->fetch())
            echo "Gastaste $amount USD en : $description \n";
        */    
        //el while se repite y devuelve mas filas, si es que no hay mas filas el ciclo se rompe.    

    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create()
    {
        require("../../resources/views/incomes/create.php");
    }

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data)
    {
        $stmt = $this->connection->prepare("INSERT INTO incomes(payment_method, type, date, amount, description) VALUES(:payment_method, :type, :date, :amount, :description)");

        /* 
            i = dato tipo entero
            s = dato tipo string
            d = dato tipo decimal o con decimales

            nota: en php puedes declarar primero las variables y luego insertar los datos por eso sale como si fuera error.
        */
        /*
        $stmt->bind_param("iisds", $payment_method, $type, $date, $amount, $description);

        $payment_method = $data['payment_method'];
        $type = $data['type'];
        $date = $data['date'];
        $amount = $data['amount'];
        $description = $data['description'];
        */
        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $stmt -> execute();

        header("location: incomes");

        /*

            {},
            {},
            /*se encierra entre collimas ya que se declara que es un String*
            '{$data['date']}',
            {$data['amount']},
            '{$data['description']}'
            */
    }

    /**
     * Muestra un único recurso especificado
     */
    public function show($id)
    {
        $stmt = $this->connection->prepare("SELECT * FROM incomes WHERE id=:id;");
        $stmt->execute([
            ":id" => $id
        ]);
    }

    /**
     * Muestra el formulario para editar un recurso
     */
    public function edit()
    {
    }

    /**
     * Actualiza un recurso específico en la base de datos
     */
    public function update($data, $id)
    {
        $stmt = $this->connection->prepare("UPDATE incomes SET 
        payment_method = :payment_method,
        type = :type,
        date = :date,
        amount = :amount,
        description = :description
        WHERE id =:id;");

        $stmt->execute(
            [
                ":id" => $id,
                ":payment_method" => $data["paymentMethod"],
                ":type" => $data["type"],
                ":date" => $data["date"],
                ":amount" => $data["amount"],
                ":description" => $data["description"],
            ]
        );
    }

    /**
     * Elimina un recurso específico de la base de datos
     */
    public function destroy($id)
    {
        //esta en confirmacion del if
       // $this->connection->beginTransaction();

        // Esto no funciona en MySQL
        // $this->connection->exec("DROP TABLE incomes_test");

        $stmt = $this->connection->prepare("DELETE FROM incomes WHERE id = :id");
        $stmt->execute([
            ":id" => $id
        ]);
/*
        $sure = readline("¿De verdad quieres eliminar este registro? ");

        if ($sure == "no")
            $this->connection->rollBack();
        else
            $this->connection->commit();
*/
    }
}
    
/*

index - Display a listing of the resource.
create - Show the form for creating a new resource.
store - Store a newly created resource in storage.
show - Display the specified resource.
edit - Show the form for editing the specified resource.
update - Update the specified resource in storage.
destroy - Remove the specified resource from storage.

*/
