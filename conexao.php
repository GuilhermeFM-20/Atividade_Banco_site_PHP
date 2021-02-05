<?php
class Conexao{
//Conexão com o database no servidor phpmyadmin
    public $servido = "localhost";
    public $usuario = "root";
    public $senha = "";
    public $dbname = "conta";
    //Atributos da conexão mysql 
    public function session(){
        return session_start();        
    }
    public function conexaoAtri(){
        $cone = mysqli_connect($this->servido, $this->usuario, $this->senha, $this->dbname); 
        return $cone;  
    }
    public function conenumero($numc,$tipoc,$nomc,$salc,$statc,$senha){
        $consulta = "INSERT INTO usuarios (numeroc,tipocon,nomedono,saldo,satus,senha) VALUES ('$numc','$tipoc','$nomc','$salc','$statc','$senha')";
        mysqli_query($this->conexaoAtri(),$consulta);
        header("Location: login.php");
    }
    public function depocom($numco,$valordep){
        $depocon = "SELECT * FROM usuarios WHERE numeroc ='$numco'";
        $most = mysqli_query($this->conexaoAtri(),$depocon);
        if($rows = mysqli_fetch_array($most)){
              $valorf = $rows['saldo'] + $valordep;
             $mudan = "UPDATE usuarios SET saldo ='$valorf' where numeroc='$numco'";
              mysqli_query($this->conexaoAtri(),$mudan);
              header('Location: Opc.php');
        }else{
            $this->session();
           $_SESSION['avi'] = 1;
            header('Location: caixal.php');
        }
    }
    public function visu($numco){
       $pesq = "SELECT * FROM usuarios WHERE numeroc = '$numco'";
       $most = mysqli_query($this->conexaoAtri(),$pesq);
       if($rows = mysqli_fetch_array($most)){
            echo "Nome do usuario: ".$rows['nomedono']."<br>";
            echo "Número do usuario: ".$rows['numeroc']."<br>";
            if($rows['tipocon'] == 'CC'){
                echo "Tipo de conta: Conta Corrente"."<br>";
            }else{
                echo "Tipo de conta: Conta Poupança"."<br>";
            }
            echo "Saldo da conta: ".$rows['saldo']."<br>";
            if($rows['satus'] == 'true'){ 
            echo "Status da conta: Aberta"."<br>";
            }else{
                echo "Status da conta: Fechada"."<br>";    
            }
       }else{
            header('Location: Opc.php');
       }
    }
   
    public function sacacom($numco,$valors){
        $depocon = "SELECT * FROM usuarios WHERE numeroc ='$numco'";
        $most = mysqli_query($this->conexaoAtri(),$depocon);
        if($rows = mysqli_fetch_array($most)){
            if($valors > $rows['saldo']){
                header('Location: volta.html');
            }else{
                $valorf = $rows['saldo'] - $valors;
                $mudan = "UPDATE usuarios SET saldo ='$valorf' where numeroc='$numco'";
                 mysqli_query($this->conexaoAtri(),$mudan);
                 header('Location: Opc.php');
                 exit();
            }
        }else{
            $this->session();
           $_SESSION['avi'] = 1;
            header('Location: sacarl.php');
        }
    }
    public function delecon($numc){       
        $del = "DELETE FROM usuarios WHERE numeroc = '$numc'";
        $most = mysqli_query($this->conexaoAtri(),$del);
        unset($_SESSION['$numco']);
        header('Location: login.php');
        exit();
    }
    public function verilo($usu,$se){
    $query = "SELECT numeroc,senha FROM usuarios WHERE numeroc = '$usu' and senha = '$se'";
    $resu = mysqli_query($this->conexaoAtri(),$query);
    $rows = mysqli_num_rows($resu);
    if($rows == 1){
        $nom = "SELECT * FROM usuarios WHERE numeroc = '$usu'";
        $cone = mysqli_query($this->conexaoAtri(),$nom);
        $row = mysqli_fetch_array($cone);
        $_SESSION['$nome'] = $row['nomedono'];
        $_SESSION['$numco'] = $row['numeroc'];
        header("Location: Opc.php");
    }else{
        $_SESSION['veri'] = 1;
        header("Location: login.php");
        exit();
    }
    }
    public function verire($var){
    $quer ="SELECT numeroc FROM usuarios WHERE numeroc = '$var'";
    $query = mysqli_query($this->conexaoAtri(),$quer);
    return $verire = mysqli_num_rows($query);
    }
}
