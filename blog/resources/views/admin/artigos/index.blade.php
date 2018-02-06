@extends('layouts.app')

@section('content')

<pagina-component tamanho="12">
    <painel-component titulo="Lista de Artigos">
		
		<tabela-lista-component 
			v-bind:titulos="['#', 'titulo', 'descricao']"
			v-bind:itens="[[1, 'PHP OO', 'Curso de PHP OO'], [2, 'JAVA OO', 'Curso de JAVA OO']]"
			>
		</tabela-lista-component>

    </painel-component>
</pagina-component>

@endsection
