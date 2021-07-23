import Vue from 'vue'
import VueMeta from 'vue-meta'
import PortalVue from 'portal-vue'
import { InertiaProgress } from '@inertiajs/progress'
import { createInertiaApp } from '@inertiajs/inertia-vue'

Vue.config.productionTip = false
Vue.mixin({ methods: { route: window.route } })
Vue.use(PortalVue)
Vue.use(VueMeta)

InertiaProgress.init()

createInertiaApp({
  // resolve: name => require(`./Pages/${name}.vue`),
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue')
    return pages[`./Pages/${name}.vue`]().then(module => module.default)
  },
  setup({ el, app, props }) {
    new Vue({
      metaInfo: {
        titleTemplate: title => (title ? `${title} - Ping CRM (Vue & Vite)` : 'Ping CRM (Vue & Vite)'),
      },
      render: h => h(app, props),
    }).$mount(el)
  },
})
