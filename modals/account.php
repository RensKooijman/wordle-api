<?php
    namespace Model;

    class Accounts extends model
    {
        protected static string $tableName = "account";
        protected static string $primaryKey = "account_id";
    
        public function __construct()
        {
            parent::__construct(Database::getInstance());
        }
    }
?>