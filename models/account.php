<?php
    namespace Models;

    class Accounts extends Model
    {
        protected static string $tableName = "account";
        protected static string $primaryKey = "account_id";
    
        public function __construct()
        {
            parent::__construct(Database::getInstance());
        }
    }
?>