<?php

class MySQLDatabase
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "";
    private $connection;

    public function Open_Connection()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
    }

    public function Close_Connection()
    {
        if (isset($this->connection)) {
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    public function Query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        if (!$result) {
            die("Error en la consulta: " . mysqli_error($this->connection));
        }
        return $result;
    }

    public function Escape_Value($value)
    {
        $escaped_value = mysqli_real_escape_string($this->connection, $value);
        return $escaped_value;
    }
}
