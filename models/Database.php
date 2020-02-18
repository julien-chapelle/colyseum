<?php
class Database
{
    protected $db;

    public function __construct()
    {
        // Initialisation de PDO
        try {
        $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
        } catch (Exception $e) {
            //AFFICHE UN MESSAGE D'ERREUR SI N'EST PAS CONNECTE AU SERVEUR
            die('Erreur : ' . $e->getMessage()); 
        }
    }
}
?>