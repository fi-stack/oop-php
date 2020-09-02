<?php

abstract class Database
{
    abstract public function connection();
    public function disconnect()
    {
        // Implementation
    }
}

class Model extends Database
{
    public function connection()
    {
        //
    }
}

// $db = new Database();
$model = new Model();
