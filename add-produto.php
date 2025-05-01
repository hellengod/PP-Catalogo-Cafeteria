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
            <a class="button-login">Sair</a>
        </header>

        <section class="form-section">  
            <div class="form">
                <form class="input-form">
                    <div class="input-container">
                        <h2 class="titulo-form">Adicionar Produto</h2>

                        <div class="input-name">
                            <label class="label-form-nome" for="name">Nome</label>
                            <input name="name" class="input-form-nome" type="text">
                        </div>
                        <div class="input-desc">
                            <label class="label-form-desc" for="image">Descricao</label>
                            <input class="input-form-desc" type="text">
                        </div>
                        <div class="input-preco">
                            <label class="label-form-preco" for="preco">Preco</label>
                            <input name="preco" class="input-form-preco" type="text">
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