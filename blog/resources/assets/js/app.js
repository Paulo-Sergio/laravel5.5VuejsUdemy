
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('topo-component', require('./components/TopoComponent.vue'));
Vue.component('painel-component', require('./components/PainelComponent.vue'));
Vue.component('caixa-component', require('./components/CaixaComponent.vue'));
Vue.component('pagina-component', require('./components/PaginaComponent.vue'));
Vue.component('tabela-lista-component', require('./components/TabelaListaComponent.vue'));
Vue.component('migalhas-component', require('./components/MigalhasComponent.vue'));
Vue.component('modal-component', require('./components/modal/ModalComponent.vue'));
Vue.component('modallink-component', require('./components/modal/ModalLinkComponent.vue'));
Vue.component('formulario-component', require('./components/FormularioComponent.vue'));

const app = new Vue({
    el: '#app'
});
