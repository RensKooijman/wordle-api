<?php

    namespace Models;

    use Models\Accounts;

    class Leaderbord extends Model
    {
        protected static string $tableName = "leaderbord";
        protected static string $primaryKey = "leaderbord_id";
    
        public function __construct()
        {
            parent::__construct(Database::getInstance());
        }
    }
?>