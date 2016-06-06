<template>
  <div class="container" id="app-main">
      <hello :title="title" :text="msg"></hello>
		<div>
		<button @click="getData">Get Data</button>
    <pre>{{ users | json }}</pre>
		</div>
  </div>
</template>

<script>
import View1 from './components/View1.vue'
import View2 from './components/View2.vue'

import Hello from './components/Hello.vue'

export default {
  components: {
    Hello
  },
  props: ['title', 'msg'],
  data () {
    return {
      // note: changing this line won't causes changes
      // with hot-reload because the reloaded component
      // preserves its current state and we are modifying
      // its initial state.
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
