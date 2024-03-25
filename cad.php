<?php 
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-php'; 

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName); 

   // if($conexao->connect_errno){
   //     echo "error"
   // }else{
   //     echo "conexao efetuada com sucesso"
   // }
?>

<?php 
    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);



    
        include_once('index.html');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado')");

        if ($result) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados: " . mysqli_error($conexao);
        }
    }
?>
