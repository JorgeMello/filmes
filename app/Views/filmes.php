<?= $this->extend('principal') ?>
<?= $this->section('conteudo') ?>
<h1 class="text-center">FILMES</h1>
<hr>
<?php 
//dd($filmes);
?>
<table class="table table-striped">
    <tbody>
        <?php foreach ($filmes as $filme) : ?>
            <tr>
                <td><?= $filme->id ?></td>
                <td><?= $filme->nome ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>