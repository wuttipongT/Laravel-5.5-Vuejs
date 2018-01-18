
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var axios = require('axios');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('todo-item', {
  props: ['todo'],
  template: '<li>{{ todo.text }}</li>'
})

const app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!',
      seen: true,
      todos: [
        {text: 'Learn JavaScript'},
        {text: 'Learn Vue'},
        {text: 'Build somthing awesome'}
      ],
      groceryList: [
        {id: 0, text: 'Vegetables'},
        {id: 1, text: 'Cheese'},
        {id: 2, text: 'Whatever else humans are supposed to eat'}
      ],
      input1: '',
      checkedNames: [],
      password: '',
      checked: false,
      picked: '',
      selected: 'A',
      options: [
        { text: 'One', value: 'A' },
        { text: 'Two', value: 'B' },
        { text: 'Three', value: 'C' },
      ],
      form: {
        email: '',
        password: '',
        checked: false,
        picked: '',
        selected: 'A',
        checkedNames: [],
        // _token: document.querySelector('[name=_token]').getAttribute('value')
      },
      animals: []
    },
    methods: {
      reverseMessage: function(){
        this.message = this.message.split('').reverse().join('')
      },
      buttonClick: function( event ) {
        event.preventDefault();
        axios.get('/animal')
          .then(function( response ){
            console.log(response);
          })
          .catch(function( error ) {
            console.log(error.message);
          });
      },
      submitData: function( event ){
        event.preventDefault();
        let data = JSON.stringify(this.form);
        axios.put('/add', {data: data})
          .then(function(response) {
            console.log(response);
          })
          .catch((err) => {
            console.log(err.message);
          });
      },
      getAnimal: function(){
        return new Promise(function(resolve, reject) {
          axios.get('/animal')
            .then(function( response ){
              resolve( response )
            })
            .catch(function( error ) {
              reject( error )
            });
        });
      }
    },
    mounted(){
      debugger
      this.input1 = this.message
      this.getAnimal()
        .then( res => {
          this.animals = res.data.animal;
        });
    }
})
