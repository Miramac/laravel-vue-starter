<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ title }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" @submit.prevent="submitLogin">
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" v-model="login.email" placeholder="E-Mail">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" v-model="login.password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" v-model="login.remember" > Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                                <a class="btn btn-link" href="/password/reset">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
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
      title: 'Login',
      login: {
        email: '',
        password: '',
        remember: false
      }
    }
  },
  methods: {
    submitLogin: function (e, d) {
        console.log(this.login.email, this.login.password, this.login.remember)
        this.$http.post('login', {
          email: this.login.email,
          password: this.login.password,
          remember: this.login.remember
        }).then(
        (data) => {
          router.go('/');
        },
        (data) => {
          console.error(data.data)
        });
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #42b983;
}
</style>
