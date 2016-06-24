import Vue from 'vue'

export default {
  login (credentials, remember) {
    return new Promise((resolve, reject) => {
      Vue.http.post('login', {
        credentials: credentials,
        remember: remember || false
      }).then((response) => {
        if (response.data && response.data.code === 200 ) {
          resolve(response) // login OK
        } else {
          reject(response) // Login failed
        }
      },
      (response) => {
        reject(response)
      })
    })
  },
  logout () {},
  register () {},
  password () {}
}
