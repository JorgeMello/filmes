<?= $this->extend('principal') ?>
<?= $this->section('conteudo') ?>
   <h1 class="text-center">FILMES</h1>
   <hr>
   <table class="table table-striped">
    <tbody>
        <tr>
            <th>Nome</th>
            <td><?= $cuidador->nome ?></td>
        </tr>
        <tr>
            <th>CPF</th>
            <td><?= $cuidador->cpf ?></td>
        </tr>
        <tr>
            <th>RG</th>
            <td><?= $cuidador->rg ?></td>
        </tr>
    </tbody>
   </table>
<?= $this->endSection() ?>