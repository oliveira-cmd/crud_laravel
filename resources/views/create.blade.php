@extends('templates.template')
@section('content')
<h1 class="text-center">
    <?php if(!empty($book) && !empty($users)){?> Editar <?php } else { ?> Cadastrar <?php } ?>
</h1>
<div class="col-8 m-auto">

    <?php if(!empty($errors->all()) && count($errors->all())>0) { ?>
        <div class="text-center mt-4 mb-4 p-2 alert alert-danger" role="alert">
            <?php foreach($errors->all() as $error){ 
                echo $error . '</br>';
             } ?>

        </div>
    <?php } ?>

    <?php if(!empty($book) && !empty($users)){?> 
        <form name="formEdit" id="formEdit" method="post" action="<?= url('book/' . $book->id. '/update');?>">
            @csrf
            <input type="text" name="title" id="title" placeholder="Titulo" class="form-control" value="<?= $book->title?>">
            <select name="id_user" id="id_user" class="form-control">
                <option value="<?= $book->relUsers->id;?>"><?= $book->relUsers->name; ?></option>
                <?php foreach($users as $user){ ?>
                    <option value="<?= $user->id;?>"><?= $user->name;?></option>
                <?php }?>
            </select>
            <input type="text" name="pages" id="pages" placeholder="Páginas" class="form-control" value="<?= $book->pages?>">
            <input type="text" name="price" id="price" placeholder="Preço" class="form-control" value="<?= $book->price?>">
            <input type="submit" value=" <?php if(!empty($book) && !empty($users)){?> Editar <?php } else { ?> Cadastrar <?php } ?>" class="btn btn-primary">

        </form>    
    <?php } else { ?> 
        <form name="formCad" id="formCad" method="post" action="<?= url('books');?>">
            @csrf
            <input type="text" name="title" id="title" placeholder="Titulo" class="form-control">
            <select name="id_user" id="id_user" class="form-control">
                <option value="">Selecionar Autor</option>
                <?php foreach($users as $user){ ?>
                    <option value="<?= $user->id;?>"><?= $user->name;?></option>
                <?php }?>
            </select>
            <input type="text" name="pages" id="pages" placeholder="Páginas" class="form-control">
            <input type="text" name="price" id="price" placeholder="Preço" class="form-control">
            <input type="submit" value=" <?php if(!empty($book) && !empty($users)){?> Editar <?php } else { ?> Cadastrar <?php } ?>" class="btn btn-primary">
        </form>
    <?php } ?>

</div>
@endsection