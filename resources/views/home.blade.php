@extends('templates.template')
@section('content')
<div class="col-8 m-auto">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo do Livro</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
    </tbody>
    </table>
</div>
@endsection