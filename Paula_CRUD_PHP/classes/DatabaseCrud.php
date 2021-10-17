<?php
  include_once 'Connection.php';

  class DatabaseCrud extends Connection{
    public function __construct()
    {
      parent::__construct();
    }

    public function getData($query){
      $result = $this->connection->query($query);

      if(!$result)
        return false;

      $rows = array();

      while($row = $result->fetch_assoc()){
        $rows[] = $row;
      }

      return $rows;
    }

    public function execute($query){
      $result = $this->connection->query($query);
    }

    public function delete($table, $id){
      $query = "DELETE FROM $table WHERE id = $id";
      $result = $this->connection->query($query);
    }
  }
?>