
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

require("iview");
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('component_b', require('./components/ComponenteB.vue'));
var app = new Vue({
    el: '#app',
    data:{

        color1: '#0248FC',
        color2: '#02FC10'
    },
    methods: {
        Cambiar_color1: function(newcolor1) {
            this.color1 = newcolor1
        },
        Cambiar_color2: function(newcolor2) {
            this.color2 = newcolor2
        }


    }
});