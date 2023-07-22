@extends('layouts.main')
@section('title','DompShop')
@section('content')
    <div>
        <h1>Seja bem-vindo </h1>
        <h5>+ Você pode cadastrar seu produto abaixo</h5>
        <a href="{{route('products.create')}}" class="btn btn-primary">Cadastrar produto</a>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-info box">
                        <div class="inner">
                            <h3>{{$products->count()}}</h3>
                            <p>Produtos Cadastrados</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-warning box">
                        <div class="inner">
                            <h3>R$ {{number_format($products->avg('price'),2,',','.')}}</h3>
                            <p>Média de preços</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-success box">
                        <div class="inner">
                            <h3>{{ request()->ip() }}</h3>
                            <p>Endereço IP</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-danger box">
                        <div class="inner">
                            <h3>{{number_format($products->avg('quantity'),2,',','.')}}</h3>
                            <p>Média de estoque</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection