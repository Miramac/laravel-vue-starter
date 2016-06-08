import Vue from 'vue'
import VueResource from 'vue-resource'
Vue.use(VueResource)
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// import App from './App.vue'
import View1 from './components/View1.vue'
import View2 from './components/View2.vue'
import Hello from './components/Hello.vue'

// The router needs a root component to render.
// For demo purposes, we will just use an empty one
// because we are using the HTML as the app template.
// !! Note that the App is not a Vue instance.
var App = Vue.extend({})

// Create a router instance.
// You can pass in additional options here, but let's
// keep it simple for now.
var router = new VueRouter()

// Define some routes.
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// Vue.extend(), or just a component options object.
// We'll talk about nested routes later.
router.map({
  '/': {
    component: {} // a empty view
  },
  '/view1': {
    component: View1
  },
  '/view2': {
    component: View2
  }
})

// Now we can start the app!
// The router will create an instance of App and mount to
// the element matching the selector #app.
router.start({ App, components: { Hello } }, '#app')
