<template>
  <div class="">
    <button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
    <button v-if="tipo == 'button'" type="button" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
    <a v-if="tipo == 'link'" href="#" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</a>
  </div>

</template>

<script>
export default {
  props: ["tipo", "nome", "titulo"]
};
</script>
