require('./bootstrap');


 
window.Vue = require('vue').default;


window.$ = window.jQuery = require('jquery');
Vue.component('find-doctor', require('./components/FindDoctor.vue').default);
 

 





const app = new Vue({
  el: '#app',
});