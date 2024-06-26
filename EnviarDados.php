<?php
//comunic banco
include('conectdb.php');

if (isset($_POST['submit'])) {

    //o nome da pasta - quanto a chave de reconhecimento da pasta
    $token = uniqid();

    //adicionar imagem
    $files = $_FILES['file'];
    $names = $files['name'];
    $tmp_name = $files['tmp_name'];

    $caminhoPasta = 'static/'.$token;

    if (!empty($_FILES['file']['name'][0])) {
        mkdir($caminhoPasta, 0777, true);
    }

    //limitador de quantidade de imagens
    $contador = 1;

    //repetir ate que todas as imagens sejam adicionadas
    foreach ($names as $index => $name) {
        //delimitar a quantidade de imagens
        if ($contador <= 5) {
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $newName = $token . "_" . $contador . "." . $extension;
            move_uploaded_file($tmp_name[$index], $caminhoPasta . '/' . $newName);
            $contador = $contador + 1;
        }
    }

    //vetor que armazena as variaveis que vem do formulario HTML
    $novoItem = [
        'chave' => $token,
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'endereco' => $_POST['endereco'],
        'telefone' => $_POST['telefone'],
        'uf' => $_POST['uf'],
        'cidade' => $_POST['cidade'],
        'cep' => $_POST['cep'],
        'cnpj' => $_POST['cnpj'],
        'especialidades'=> $_POST['especialidades'],
        'descricao' => $_POST['descricao']
    ];

    //caminho para armazernar, deletar ou atualizar o banco
    $database->getReference('dbClinicas/Clinicas/' . $token)->set($novoItem);

    //mensagem de feedback
    // $msg = "Produto adicionado com sucesso!";

    //mover o usuario
    header('Location: CadastrarClinicas.php');
}
