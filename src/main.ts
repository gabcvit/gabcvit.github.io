import NProgress from 'nprogress'
import { ViteSSG } from 'vite-ssg'
import { routes } from 'vue-router/auto-routes'
import App from './App.vue'
import './style.css'
import './index.css'

export const createApp = ViteSSG(
    App,
    {
      routes,
    },
    ({ router, app, isClient }) => {
      if (isClient) {
        router.beforeEach(() => {
          NProgress.start()
        })
        router.afterEach(() => {
          NProgress.done()
        })
      }
    },
  )