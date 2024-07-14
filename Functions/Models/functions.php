<?php
require_once('../Connection/connection.php');

class Manager
{
    public static function Get_All_Object($SQL)
    {
        /* Instance Connection */
        $MySQL = new MySQLDatabase();
        $MySQL->Open_Connection();
        /* Insert Command SQL */
        $Array = $MySQL->Query($SQL);
        /* Serach Data in mode Array */
        $Json = $Array->fetch_all();
        if ($Json != null) echo json_encode($Json);
        /* Close Connection */
        $MySQL->Close_Connection();
    }

    public static function Insert_Object($SQL)
    {
        /* Instance Connection */
        $MySQL = new MySQLDatabase();
        $MySQL->Open_Connection();
        /* Insert Command SQL */
        $Status = $MySQL->Query($SQL);
        /* Validation and Response */
        echo json_encode(["server" => $Status ? "Object Created" : "Error Creating Object"]);
        /* Close Connection */
        $MySQL->Close_Connection();
    }

    public static function Update_Object($SQL)
    {
        /* Instance Connection */
        $MySQL = new MySQLDatabase();
        $MySQL->Open_Connection();
        /* Insert Command SQL */
        $Status = $MySQL->Query($SQL);
        /* Validation and Response */
        echo json_encode(["server" => $Status ? "Updated Object" : "Error Updating Object"]);
        /* Close Connection */
        $MySQL->Close_Connection();
    }

    public static function Delete_Object($SQL)
    {
        /* Instance Connection */
        $MySQL = new MySQLDatabase();
        $MySQL->Open_Connection();
        /* Insert Command SQL */
        $Status = $MySQL->Query($SQL);
        /* Validation and Response */
        echo json_encode(["server" => $Status ? "Deleted Object" : "Error Deleting Object"]);
        /* Close Connection */
        $MySQL->Close_Connection();
    }
}
