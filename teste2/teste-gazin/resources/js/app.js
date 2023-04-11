import './bootstrap';

require('./bootstrap');

import Vue from 'vue';

Vue.component('desenvolvedor', require('./components/desenvolvedors/Desenvolvedor.vue').default);
Vue.component('nivel', require('./components/niveis/Nivel.vue').default);

const app = new Vue({
    el: '#app',
});