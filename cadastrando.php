<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrando...</title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "projetodb";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
            } 
            
            $nome=utf8_decode($_POST['nome']);
            $sbnome=utf8_decode($_POST['sbnome']);
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            $consenha=$_POST['consenha'];
            
            $confirmacao;
            $conflito;
            
            $cmd = "SELECT * FROM `login` WHERE `email_usuario`='$email'";
            $result = mysqli_query($cmd);
            $rows = mysqli_num_rows($result);

            if(mysqli_num_rows($rows) > 0){
                $conflito=1;
                echo "O email já está sendo utilizado por outro usuário";
            }
            else{
                $conflito=0;
            }
            
            if($senha===$consenha){
                $confirmacao=1;
            }
           else{
                echo "<script>
                alert('As senhas não coicidem');
                </script>";
                include("cadastro.php");
            }
           
            if($confirmacao===1 && $conflito===0){
                $sql="INSERT INTO login(nome_usuario, sbnome_usuario, email_usuario, senha_usuario)
                    VALUES('$nome', '$sbnome', '$email', '$senha')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "Cadastro realizado\n";
                   include("login.php");
                } 
                else {
                    echo "Erro: " . $sql . "<br>" . $conn->error."<br>";
                }
                $conn->close();
            }
            
            
            
        ?>
    </body>
</html>

