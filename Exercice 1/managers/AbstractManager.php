<?php
 abstract class AbstractManager{
     protected PDO $db;
      public function __construct()
      {
          try {
            $this->db = new PDO(
                "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
                "husseinaaoudoupacco_crud_mvc",
                "8acf2f659e6a8316844017f35f683ca8"
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
      }
 }