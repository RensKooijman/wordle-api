<?php
    namespace Model;

    use Model\Accounts;

    class Leaderbord extends model
    {
        protected static string $tableName = "leaderbord";
        protected static string $primaryKey = "leaderbord_id";
    
        public function __construct()
        {
            parent::__construct(Database::getInstance());
        }
    }
?>