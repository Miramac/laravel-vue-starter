<template>
  <div class="container" id="app-body">
    <div class="jumbotron">
			<hello :msg="helloMsg"></hello>
      <p>{{ someText }}</p>
    </div>cssdfc
    <div>
      <div class="form-group">
        <label for="hello" class="col-sm-2 control-label">Hello:</label> 
        <div class="col-sm-10">
          <input id="sometext" v-model="helloMsg" class="form-control" >
        </div>
      </div>
      <div class="form-group">
        <label for="sometext" class="col-sm-2 control-label">Sometext:</label> 
        <div class="col-sm-10">
          <input id="sometext" v-model="someText" class="form-control" >
        </div>
      </div>
    </div>
		<div>
		<button @click="getData">Get Data</button>
    <pre>{{ users | json }}</pre>
		</div>
  </div>
</template>

<script>
import Hello from './components/Hello.vue'

export default {
  components: {
    Hello
  },
  data () {
    return {
      // note: changing this line won't causes changes
      // with hot-reload because the reloaded component
      // preserves its current state and we are modifying
      // its initial state.
      helloMsg: 'Hello world!',
      someText: 'Welcome to your Vue.js app!',
      users: []
    }
  },
  methods: {
    getData: function (e) {
      var resource = this.$resource('api/users{/?id}')
      resource.get().then((response) => {
        this.users = response.data
      }, (response) => {
          // error callback
      })//.bind(this) // bind the 
    }
  }
}
</script>

<style>
body {
  font-family: Helvetica, sans-serif;
}
</style>
