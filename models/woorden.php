<?php
    namespace Models;

    class Woorden extends Model
    {
        protected static string $tableName = "words";
        protected static string $primaryKey = "word_id";
    
        public function __construct()
        {
            parent::__construct(Database::getInstance());
        }
    }
?>