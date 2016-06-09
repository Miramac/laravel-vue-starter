<template>
  <div class="container">
    <div class="row">
      <h1>{{ title }}</h1>
    </div>
  </div>
</template>

<script>
  export default {
    components: {
    },
    data () {
      return {title: 'View 1'}
    },
    methods: {
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #42b983;
}
</style>
