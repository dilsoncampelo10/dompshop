@extends('layouts.main')
@section('title','DompShop - Criar Produto')

@section('content')
<div class="table-responsive">
    @if ($products->isNotEmpty())
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade em estoque</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td class="d-flex">
                        <a href="{{route('products.edit',['product'=>$product->id])}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                            <form action="{{route('products.destroy',['product'=>$product->id])}}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-danger ms-2" onclick="return confirm('Deseja excluir?')"><i class="fa-solid fa-trash"></i> Deletar</button>
                            </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h4>Você não possui produtos cadastrados</h4>    
    @endif
</div>
@endsection