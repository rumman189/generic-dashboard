<?php
class Tank_database {
    private $db_connect;
    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'datasoft_water_tank';
        
        $this->db_connect=  mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$this->db_connect){
            die('Connection Failed'.mysqli_error($this->db_connect));
        }
    }


    public function select_all_tank_info(){
        $sql="SELECT * From tank_status";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }  
      }


      public function select_all_notifications(){
        $sql="SELECT * From tank_notification";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }  
      }


}