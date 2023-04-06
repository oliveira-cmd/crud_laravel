@extends('templates.template')
@section('content')
    <h1 class="text-center">
        Visualizar
    </h1>
    <div class="col-8 m-auto text-center">
        <?php
            $user = $book->find($book->id_user)->relUsers;
            $email = $book->find($book->id_user)->relUsers;
        ?>
        Autor do Livro: <?= $user->name;?> </br>
        Titulo do Livro: {{$book->title}} </br>
        Numero de Páginas: {{$book->pages}} </br>
        Preço: {{$book->price}} </br>
        Email de Contato: <?= $user->email;?> </br>
        Data de Lançamento: {{$book->created_at}} </br>
        Data da Alteração: {{$book->updated_at}} </br>
    </div>
@endsection