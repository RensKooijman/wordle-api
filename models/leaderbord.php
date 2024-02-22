<?php

    namespace Models;

    use Models\Accounts;

    class Leaderbord extends Model
    {
        protected static string $tableName = "leaderboard";
        protected static string $primaryKey = "leaderboard_id";
    
        public function __construct()
        {
            parent::__construct(Database::getInstance());
        }
    }
?>