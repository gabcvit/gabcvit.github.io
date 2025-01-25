import NProgress from 'nprogress'
import { ViteSSG } from 'vite-ssg'
import { routes } from 'vue-router/auto-routes'
import App from './App.vue'
import './styles/style.css'
import './styles/index.css'
import './styles/blog.css'

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