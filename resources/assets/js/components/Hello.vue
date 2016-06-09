<template>
  <div class="container">
    <div class="row">
      <div class="jumbotron">
        <div class="hello">
          <h1>{{ title }}</h1>
        </div>
        <p>{{{ text }}}</p>
      </div>
      <div>
        <div class="form-group">
          <label for="hello" class="col-sm-2 control-label">Hello:</label> 
          <div class="col-sm-10">
            <input id="sometext" v-model="title" class="form-control" >
          </div>
        </div>
        <div class="form-group">
          <label for="sometext" class="col-sm-2 control-label">Sometext:</label> 
          <div class="col-sm-10">
            <input id="sometext" v-model="text" class="form-control" >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      title: 'Laravel Vue',
      text: 'Welcome!'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
