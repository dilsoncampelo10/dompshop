@extends('layouts.main')
@section('title','DompShop')

@section('content')
    <div class="container mt-3">
        <h1>Seja bem-vindo </h1>
        <h5>+ Você pode cadastrar seu produto abaixo</h5>
        <a href="" class="btn btn-primary">Cadastrar produto</a>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Produtos Cadastrados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div>
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection