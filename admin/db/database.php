<?php 
    class Database{
        public $host = "localhost";
        public $user = "root";
        public $pass = "123";
        public $dbname = "quanlybida";

        public $link;
        public $error;
        public function __construct(){
            $this->connectDB();
        }


        // thực thi phương thức kết nối database
        private function connectDB(){
            $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if($this->link->connect_error){
                $this->error = "Connect fail".$this->link->connect_error;
                return false;
            }
            return true;
        }
        //Select or Read data
        public function select($query){
            $result = $this->link->query($query) or die($this->link->error.__LINE__);
            if($result->num_rows > 0){
                return $result;
            }else{
                return false;
            }
        }
        //insert data
        public function insert($query){
            $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if($insert_row){
                return $insert_row;
            }else{
                return false;
            }
        }
        //Update data
        public function update($query){
            $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if($update_row){
                return $update_row;
            } else{
                return false;
            }
        }
        //Delete data
        public function delete($query){
            $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if($delete_row){
                return $delete_row;
            } else{
                return false;
            }
        }
        public function prepare($query) {
            return $this->link->prepare($query);
        }
        
    }
?>