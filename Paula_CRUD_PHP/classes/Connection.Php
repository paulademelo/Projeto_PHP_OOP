<?php 
  class Connection{
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'crud_php_paula';
    
    protected $connection;
  
    public function __construct(){
      $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
  
      if(!$this->connection){
        echo 'Ocorreu um erro ao conectar no banco de dados';
        exit;
      }
 
      return $this->connection;
    }
  }

?>