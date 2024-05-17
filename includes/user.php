<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;


    public function userExists($user, $pass){
       // $md5pass = md5($pass);
        $md5pass = ($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass AND activa = :activa');
        $query->execute(['user' => $user, 'pass' => $md5pass, 'activa'=>'1']);
        
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user ');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['username'];
            
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>
