<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalsController
{

    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->get_database_instance();
    }

    /*
      Muestra una lista de este recurso
      */
    public function index()
    {
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
        $stmt->execute();
        /*
      fetchAll nos denuelve cada fila de nuestra bd en arreglos e indices asociativos.
     */
        $results = $stmt->fetchAll();

        foreach ($results as $result) {
            echo "Gastastes" . $result["amount"] . "USD en :" . $result["description"] . "\n";
        }

        //esto es usando Fecth Coulumn 

        /*
       $stmt = $this->connection->prepare("SELECT amount, description FROM withdrawals");
       $stmt->execute();

       $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);

       foreach($results as $result)
        echo "Gastaste $result USD \n";
        */
    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create()
    {
    }

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data)
    {

        $stmt = $this->connection->prepare("INSERT INTO withdrawals(payment_method, type, date, amount, description) VALUES(:payment_method, :type, :date, :amount, :description)");

        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $data["description"] = "compre cosas para mi";

        $stmt->execute();
        /* 
        bindValue no importa si cambias la descripcion se queda como lo declaraste al inicio. el valor original

            bindParam es una alternativa para ligar los datos a mysqli

            i = dato tipo entero
            s = dato tipo string
            d = dato tipo decimal o con decimales

            nota: en php puedes declarar primero las variables y luego insertar los datos por eso sale como si fuera error.

            {$data['payment_method']},
            {$data['type']},
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
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals WHERE id=:id");

        $stmt->execute([
            ":id"=>$id,
        ]);

        //FETCH_ASSOC es para que los datos con var dump no se vuelvan a repetir
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

       echo "El registro con id $id dice que te gastaste {$result['amount']} USD en {$result['description']}";
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
    public function update($data,$id)
    {
        $stmt = $this->connection->prepare("UPDATE withdrawals SET 
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
        //$this->connection->beginTransaction();

        $stmt = $this->connection->prepare("DELETE FROM withdrawals WHERE id = :id");
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
