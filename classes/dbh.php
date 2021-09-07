<?php

class Dbh {
    private $server = "mysql:host=localhost;dbname=enscuisine";
    private $user = "nslly";
    private $pwd = "0907468nslly";

    protected function conn() {
        try {

            $pdo = new PDO($this->server,$this->user,$this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;

        } catch (PDOException $e) {
            echo "The server is error: " . $e->getMessage();
        }
    }
}

?>



    




