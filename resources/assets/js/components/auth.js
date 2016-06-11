export default {
  data () {
    return {
      credentials: {
        email: '',
        password: '',
        remember: false
      },
      remember: false
    }
  },
  methods: {
    login () {
      this.$http.post('login', {
        credentials: this.credentials,
        remember: this.remember
      }).then(
        (data) => {
          console.log(data.data)
        },
        (data) => {
          console.error(data.data)
        })
    },
    logout () {},
    register () {},
    password () {}
  }
}
