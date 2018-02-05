@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <painel-component titulo="Dashboard">
                Teste de conteúdo no painel...

                <div class="row">
                    <div class="col-md-4">
                        <painel-component titulo="Conteudo 1" cor="blue">
                            Teste de conteúdo no sub-painel
                        </painel-component>
                    </div>
                    <div class="col-md-4">
                        <painel-component titulo="Conteudo 2" cor="panel-warning">
                            Teste de conteúdo no sub-painel
                        </painel-component>
                    </div>
                    <div class="col-md-4">
                        <painel-component titulo="Conteudo 3" cor="panel-info">
                            Teste de conteúdo no sub-painel
                        </painel-component>
                    </div>
                </div>
            </painel-component>
        </div>
    </div>
</div>

@endsection
