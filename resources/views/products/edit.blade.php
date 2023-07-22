@extends('layouts.main')
@section('title','DompShop - Criar Produto')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Editar Produto</h2>
    </div>
    <form action="{{route('products.update',['product'=>$products->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body row">
            <div class="mb-3 col-12">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome do produto" value="{{$products->name}}" required>
              </div>
              <div class="mb-3 col-6">
                <label for="price" class="form-label">Preço *</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Informe o preço do produto" value="{{$products->price}}" step="0.01" required>
              </div>
              <div class="mb-3 col-6">
                <label for="quantity" class="form-label">Quantidade *</label>
                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Informe a quantidade do produto em estoque" value="{{$products->quantity}}" required>
              </div>
              <div class="mb-3 col-12">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Informe uma descrição para o produto" name="description">{{$products->description}}</textarea>
              </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection