<?php
// Inclua seu código de conexão com o banco de dados aqui
include "includes/conexao.php";
$pdo = new Conectar();




$imagens = array(
    "Armario" => array("Descrição" => "Armário elegante e espaçoso para organização de roupas e acessórios.", "Preço" => 799),
    "Armario Fruteira" => array("Descrição" => "Armário com espaço para frutas e utensílios de cozinha.", "Preço" => 499),
    "Armario Escritorio" => array("Descrição" => "Armário de escritório para armazenamento de documentos e suprimentos.", "Preço" => 299),
    "Cadeira" => array("Descrição" => "Cadeira estofada com design moderno e conforto excepcional.", "Preço" => 129),
    "Cama Casal" => array("Descrição" => "Cama de casal luxuosa para noites de sono tranquilas.", "Preço" => 899),
    "Escrivaninha" => array("Descrição" => "Escrivaninha espaçosa para o seu espaço de trabalho em casa.", "Preço" => 349),
    "Guarda-Roupa-Casal" => array("Descrição" => "Guarda-roupa de casal com amplo espaço de armazenamento.", "Preço" => 699),
    "Guarda-Roupa-Espelho" => array("Descrição" => "Guarda-roupa com espelhos para ajudar na escolha de roupas.", "Preço" => 599),
    "Guarda-Roupa" => array("Descrição" => "Guarda-roupa espaçoso para manter suas roupas organizadas.", "Preço" => 499),
    "Mesa-Multiuso" => array("Descrição" => "Mesa versátil para uso em diversas áreas da casa.", "Preço" => 249),
    "Mesa Gamer" => array("Descrição" => "Mesa projetada especificamente para entusiastas de jogos.", "Preço" => 349),
    "Mesa Multiuso" => array("Descrição" => "Mesa funcional que se adapta a várias necessidades.", "Preço" => 199),
    "Painel" => array("Descrição" => "Painel elegante para suporte de TV e decoração da sala.", "Preço" => 179),
    "Puff" => array("Descrição" => "Puff aconchegante e versátil para descanso e decoração.", "Preço" => 79),
    "Rack" => array("Descrição" => "Rack para organização de equipamentos de entretenimento.", "Preço" => 299),
    "Sofa" => array("Descrição" => "Sofá confortável e luxuoso para relaxar em grande estilo.", "Preço" => 999),
    "Balcão Cozinha" => array("Descrição" => "Balcão prático para preparar refeições e armazenar utensílios.", "Preço" => 199),
    "Bicama" => array("Descrição" => "Bicama versátil para quartos de hóspedes e economia de espaço.", "Preço" => 399),
    "Cabeceira" => array("Descrição" => "Cabeceira estofada para adicionar elegância ao seu quarto.", "Preço" => 129),
    "Cadeira Escritório" => array("Descrição" => "Cadeira de escritório ergonômica para produtividade.", "Preço" => 199),
    "Cadeiras" => array("Descrição" => "Conjunto de cadeiras modernas para sua sala de jantar.", "Preço" => 299),
    "Cama" => array("Descrição" => "Cama confortável para noites de sono revigorantes.", "Preço" => 599),
    "Colchão" => array("Descrição" => "Colchão de alta qualidade para um descanso profundo.", "Preço" => 299),
    "Cômoda" => array("Descrição" => "Cômoda elegante para organizar roupas e acessórios.", "Preço" => 249),
    "Conjunto" => array("Descrição" => "Conjunto de móveis combinando para um ambiente coeso.", "Preço" => 799),
    "Cozinha Completa" => array("Descrição" => "Cozinha completa com armários e espaço de trabalho.", "Preço" => 1499),
    "Cozinha" => array("Descrição" => "Móveis de cozinha para facilitar a preparação de refeições.", "Preço" => 799),
    "Escritório" => array("Descrição" => "Móveis de escritório para um ambiente de trabalho produtivo.", "Preço" => 499),
    "Estante" => array("Descrição" => "Estante espaçosa para exibir livros e decorações.", "Preço" => 349),
    "GuardaRoupa" => array("Descrição" => "Guarda-roupa versátil para a organização de roupas.", "Preço" => 399),
    "Kit Cozinha" => array("Descrição" => "Kit de móveis para cozinhas funcionais e organizadas.", "Preço" => 699),
    "Mesa-Escritório" => array("Descrição" => "Mesa de escritório com espaço amplo para tarefas.", "Preço" => 349),
    "MesaC" => array("Descrição" => "Mesa de centro elegante para a sua sala de estar.", "Preço" => 149),
    "MesaCabeceira" => array("Descrição" => "Mesa de cabeceira funcional para suas necessidades noturnas.", "Preço" => 79),
    "Mesa para a Cozinha" => array("Descrição" => "Mesa para a cozinha, ideal para refeições em família.", "Preço" => 249),
    "Sofá" => array("Descrição" => "Sofá confortável e elegante para a sua sala de estar.", "Preço" => 799),
    "Cadeira" => array("Descrição" => "Cadeira moderna e ergonômica para várias finalidades.", "Preço" => 149),
    "Estante de Cozinha" => array("Descrição" => "Estante prática para organizar sua cozinha com estilo.", "Preço" => 249),
    "Poltrona Azul" => array("Descrição" => "Poltrona aconchegante em um tom de azul vibrante.", "Preço" => 299),
    "Poltrona Cinza" => array("Descrição" => "Poltrona elegante em um tom de cinza neutro.", "Preço" => 279),
    "Cama e Guarda-Roupa" => array("Descrição" => "Conjunto que inclui cama de casal e guarda-roupa espaçoso.", "Preço" => 1199),
    "Mesa para Sala de Estar" => array("Descrição" => "Mesa de centro sofisticada para sua sala de estar.", "Preço" => 199),
    "Sapateira" => array("Descrição" => "Sapateira organizada para manter seus calçados em ordem.", "Preço" => 129)
);

// SQL para inserir os registros
$sql = "INSERT INTO Produtos (nome, caminho_imagem, descricao_imagem, preco) VALUES ";

foreach ($imagens as $nome => $dados) {
    $preco = $dados["Preço"];
    $descricao = $dados["Descrição"];
    $caminhoImagem = "assets/Imagens/Produtos/" . $nome . '.jpg'; // Ajuste o caminho conforme a localização real das imagens.
    $sql .= "('$nome', '$caminhoImagem', '$descricao', $preco),";
}

// Remova a vírgula extra do final
$sql = rtrim($sql, ',');

try {
    // Prepara a consulta SQL
    $stmt = $pdo->prepare($sql);

    // Executa a consulta
    $stmt->execute();

    echo "Registros inseridos com sucesso.";
} catch (PDOException $e) {
    echo "Erro ao inserir os registros: " . $e->getMessage();
}
?>