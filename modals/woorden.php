<?php
    namespace Model;

    class Woorden extends model
    {
        protected static string $tableName = "woorden";
        protected static string $primaryKey = "id";
    
        public function __construct()
        {
            parent::__construct(Database::getInstance());
        }
    }
?>