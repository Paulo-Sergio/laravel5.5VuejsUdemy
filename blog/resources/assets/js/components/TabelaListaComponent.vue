<template>
	<div>
		<div class="form-inline">
			<a v-if="criar && !modal" v-bind:href="criar">Criar</a>
      <modallink-component v-if="criar && modal" tipo="link" nome="adicionar" titulo="Criar"></modallink-component>
			<div class="form-group pull-right">
				<input type="search" class="form-control" v-model="buscar" placeholder="Buscar">
			</div>
		</div>
	
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos" style="cursor:pointer">{{titulo}}</th>
					<th v-if="detalhe || editar || deletar">Ação</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(item, index) in lista">
					<td v-for="i in item">{{i}}</td>

					<td v-if="detalhe || editar || deletar">
						<form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" v-bind:value="token">

							<a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
							<a v-if="editar && !modal" v-bind:href="editar"> Editar |</a>
              <modallink-component v-if="editar && modal" tipo="link" nome="editar" titulo=" Editar |"></modallink-component>
							<a href="#" v-on:click="executaForm(index)">Deletar</a>
						</form>

						<span v-if="!token">
							<a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
							<a v-if="editar && !modal" v-bind:href="editar"> Editar |</a>
              <modallink-component v-if="editar && modal" tipo="link" nome="editar" titulo=" Editar |"></modallink-component>
							<a v-if="deletar" v-bind:href="deletar"> Deletar |</a>
						</span>
						<span v-if="token && !deletar">
							<a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
							<a v-if="editar && !modal" v-bind:href="editar"> Editar</a>
              <modallink-component v-if="editar && modal" tipo="link" nome="editar" titulo=" Editar"></modallink-component>
						</span>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
</template>

<script>
export default {
  props: [
    "titulos",
    "itens",
    "ordem",
    "ordemCol",
    "criar",
    "detalhe",
    "editar",
    "deletar",
    "token",
    "modal"
  ],
  data: function() {
    return {
      buscar: "",
      ordemAux: this.ordem || "asc",
      ordemAuxCol: this.ordemCol || 0
    };
  },
  methods: {
    executaForm: function(index) {
      document.getElementById(index).submit();
    },
    ordenaColuna: function(coluna) {
      this.ordemAuxCol = coluna;
      if (this.ordemAux == "asc") {
        this.ordemAux = "desc";
      } else {
        this.ordemAux = "asc";
      }
    }
  },
  computed: {
    lista: function() {
      //ordenação
      let ordem = this.ordemAux;
      let ordemCol = this.ordemAuxCol;

      ordem = ordem.toLowerCase();
      ordemCol = parseInt(ordemCol);

      if (ordem == "asc") {
        this.itens.sort(function(a, b) {
          if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) return 1;
          if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) return -1;
          return 0;
        });
      } else {
        this.itens.sort(function(a, b) {
          if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) return 1;
          if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) return -1;
          return 0;
        });
      }

      //campo de buscar
      if (this.buscar) {
        return this.itens.filter(res => {
          for (let k = 0; k < res.length; k++) {
            if ((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) > -1) {
              return true;
            }
          }
          return false;
        });
      }

      return this.itens;
    }
  }
};
</script>

<style media="screen">

</style>

