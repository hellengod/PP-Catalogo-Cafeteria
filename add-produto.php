<?php

$pdo = new PDO(
    'mysql:host=' . '127.0.0.1' .
    ';dbname=' . 'catcafe',
    'root',
    'root'
);

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$produto = [
    'nome' => '',
    'Descricao' => '',
    'Preco' => '',
];

if ($id !== null && $id !== false) {
    $stmt = $pdo->prepare('SELECT * FROM produto WHERE id_produto = ?;');
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café</title>
    <link rel="stylesheet" href="css\styles.css">
</head>

<body>
    <main>
        <header>
            <div class="header-container">
                <h1 id="titulo-header">Café Catalogo</h1>
            </div>
            <a class="button-login" href="index.php">Voltar</a>
        </header>

        <section class="form-section">
            <div class="form">
                <form class="input-form"
                    action="<?= $id !== null && $id !== false ? '/editar-produto.php?id=' . $id  : '/novo-produto.php'; ?>"
                    method="post">
                    <div class="input-container">
                        <h2 class="titulo-form">Adicionar Produto</h2>

                        <div class="input-name">
                            <label class="label-form-nome" for="name">Nome</label>
                            <input value="<?= $produto['nome'] ?>" name="name" class="input-form-nome" type="text">
                        </div>
                        <div class="input-desc">
                            <label class="label-form-desc" for="image">Descricao</label>
                            <input value="<?= $produto['Descricao'] ?>" class="input-form-desc" name="descricao"
                                type="text">
                        </div>
                        <div class="input-preco">
                            <label class="label-form-preco" for="preco">Preco</label>
                            <input value="<?= $produto['Preco'] ?>" name="preco" class="input-form-preco" type="text">
                        </div>
                        <div class="input-img">
                            <label class="label-form-img" for="image">Imagem:</label>
                            <input type="file">
                        </div>
                        <div class="input-envia">
                            <input class="input-form-envia" type="submit">
                        </div>

                    </div>
                </form>
            </div>
        </section>

</body>

</html>