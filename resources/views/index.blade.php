@extends('layout.app')

@section('body')

<div class="jumbotron bg-light border border-secondary box">
    <div class="form-row">
        <div class="card-deck">
            <div class="card border border-primary col-sm">
                <div class="card-body">
                    <h5 class="card-title ">Cadastro de produtos</h5>
                    <p class="card=text">Aqui você cadastra todos os seus produtos</p>
                    <a href="/produtos" class="btn btn-primary" btn-primary >Cadastre seus Produtos</a>
                </div>
            </div>
            <br>
            <div class="card border border-primary  col-sm">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de categorias</h5>
                    <p class="card=text">Aqui você cadastra as categorias</p>
                    <a href="/categorias" class="btn btn-primary" btn-primary>Cadastre a categoria</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection