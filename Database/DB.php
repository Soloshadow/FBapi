<?php


class DB{

    private $host = "localhost";
    private $user = "root";
    private $password = '';
    private $db_Name = 'cle3';
    private $connect;
    private $insert;
    private $update;
    private $delete;


    function __construct()
    {
        try {
                $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->db_Name);

            }catch(Exception $e){
            echo '<h1>Error: </h1>', $e->getMessage();
        }

    }

    public function insert ($var1){
        $this->insert = "INSERT INTO `online_users`(`ID`, `user`) VALUES ('','$var1')";

        mysqli_query($this->connect, $this->insert);
        mysqli_close($this->connect);
    }

    public function delete($var){
        $this->delete = "DELETE FROM `online_users` WHERE user = '$var'";

       if( mysqli_query($this->connect, $this->delete)){
           echo '<br>success<br>';
       }else{
           echo "<br>no<br>";
       }
        mysqli_close($this->connect);
    }

    public function user($var,$var1){
        $this->insert = "INSERT INTO `$var`(`id`, `user`) VALUES ('','$var1')";
        if(mysqli_query($this->connect, $this->insert)){
            echo "gesaved in ".$var;
        }else{
            echo "no";
        }
        mysqli_close($this->connect);
    }

    public function remove($var,$var1){
        $this->delete = "DELETE FROM `$var` WHERE user = '$var1'";

        if( mysqli_query($this->connect, $this->delete)){
            echo '<br>uitgelogged van &nbsp '. $var.'<br>';
        }else{
            echo "<br>no<br>";
        }
        mysqli_close($this->connect);
    }

}