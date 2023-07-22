@extends('layouts.main')
@section('title','DompShop - Criar Produto')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Cadastrar Produto</h2>
        </div>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="card-body row">
                <div class="mb-3 col-12">
                    <label for="name" class="form-label">Nome *</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome do produto" required>
                  </div>
                  <div class="mb-3 col-6">
                    <label for="price" class="form-label">Preço *</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Informe o preço do produto" required>
                  </div>
                  <div class="mb-3 col-6">
                    <label for="quantity" class="form-label">Quantidade *</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Informe a quantidade do produto em estoque" required>
                  </div>
                  <div class="mb-3 col-12">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Informe uma descrição para o produto" name="description"></textarea>
                  </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection