@extends('layouts.app')

@section('content')

<pagina-component tamanho="12">
    <painel-component titulo="Lista de Artigos">
		
		<migalhas-component v-bind:lista="{{$listaMigalhas}}"></migalhas-component>

		<tabela-lista-component 
			v-bind:titulos="['#', 'titulo', 'descricao']"
			v-bind:itens="{{$listaArtigos}}"
			ordem="asc"
			ordemcol="2"
			criar="#criar"
			detalhe="#detalhe"
			editar="#editar"
			deletar="#deletar"
			token="1964165487"
			modal="sim"
			>
		</tabela-lista-component>

    </painel-component>
</pagina-component>

<modal-component nome="adicionar">
	<painel-component titulo="Adicionar">
		<formulario-component css="" action="#" method="post" enctype="" token="">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
			</div>
			<button class="btn btn-info">Adicionar</button>
		</formulario-component>
	</painel-component>
</modal-component>

<modal-component nome="editar">
	<painel-component titulo="Editar">
		<formulario-component css="" action="#" method="post" enctype="" token="">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
			</div>
			<button class="btn btn-info">Atualizar</button>
		</formulario-component>
	</painel-component>
</modal-component>

@endsection
