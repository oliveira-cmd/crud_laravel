@extends('templates.template')
@section('content')
<?php
    $createBook = url("cadastrar");
?>
<div class="text-center mt-3 mb-4">
    <a href="<?= $createBook;?>">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>
<div class="col-8 m-auto">
    <table class="table text-center">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo do Livro</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($books as $book){ 
                $user = $book->find($book->id_user)->relUsers;
                $getBookById = url("books/".$book->id);
                $postBookById = url("books/".$book->id);
                $deleteBookById = url("books/".$book->id);
            ?>
            <tr>
                <th scope="row"><?= $book->id;?></th>
                <td><?= $book->title;?></td>
                <td><?= $user->name;?></td>
                <td><?= $book->price;?></td>
                <td>
                    <a href="<?= $getBookById;?>">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="<?= $postBookById;?>">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="<?= $deleteBookById;?>">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</div>
@endsection