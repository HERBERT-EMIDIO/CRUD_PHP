<!--Conexão com o Banco de Dados-->

<!--1. Definição das constantes de conexão com o banco de dados-->
<?php
define('DB_HOST', 'localhost');
define('DATABASENAME', 'crud_mvc_poo_php');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');



// 2. Conexão com o Banco de Dados - Classe Connect
class Connect
{
    // Atributo/Caracteristicas com Visibilidade protected - acesso restrito à classe e suas subclasses
    protected $connection;

    // Método/Ações -  construtor da classe
    function __construct()
    {
        $this->connectDatabase();
    }


function connectDatabase()
    {
        try {
            // Criar a conexão com o banco de dados usando PDO
            $this->connection = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DATABASENAME,
                DB_USER,
                DB_PASSWORD
            );

            // Definir o modo de erro do PDO para exceção
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Em caso de erro, exibir a mensagem
            echo "ERRO" . $e->getMessage();
            die();  
        }   
    
}


    
}



$testeConnect = new Connect();  



?>