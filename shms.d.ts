import 'vue-router'

declare module 'vue-router' {
  interface RouteMeta {
    headerMatter: any
  }
}