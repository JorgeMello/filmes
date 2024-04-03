<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMES</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" type="text/css">
   
</head>
<body>
    <div class="container ht-5">
        <h3 class="text-center bg-black p-3 mb-5">Filmes</h3>
        <div class="row">
            <div class="col">
                <?= $this->renderSection('conteudo') ?>
            </div>

    <p class="text-center mt-5">CUIDADOR DE IDOSOS &copy <?= date('Y') ?></p>


        </div>
</body>
</html>