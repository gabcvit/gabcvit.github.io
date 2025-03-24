import { defineConfig } from 'vite'
import Vue from '@vitejs/plugin-vue'
import VueRouter from 'unplugin-vue-router/vite'
import { resolve } from 'node:path'
import fs from 'fs-extra'
import matter from 'gray-matter'
import Markdown from 'unplugin-vue-markdown/vite'
import Components from 'unplugin-vue-components/vite'
import AutoImport from 'unplugin-auto-import/vite'
import { VueRouterAutoImports } from 'unplugin-vue-router'
import Sitemap from 'vite-plugin-sitemap'

export default defineConfig({
  resolve: {
    alias: [
      { find: '@/', replacement: `${resolve(__dirname, 'src')}/` },
    ],
  },
  optimizeDeps: {
    include: [
      'vue',
      'vue-router',
    ],
  },
  plugins: [
    VueRouter({
      extensions: ['.vue', '.md'],
      routesFolder: [
        {
          src: 'pages',
          path: '',
        }
      ],
      extendRoute(route) {
        const path = route.components.get('default')
        if (!path)
          return

        if (!path.includes('projects.md') && path.endsWith('.md')) {
          const { data } = matter(fs.readFileSync(path, 'utf-8'))
          route.addToMeta({
            headerMatter: data,
          })
        }
      },
    }),

    Vue({
      include: [/\.vue$/, /\.md$/],
    }),

    Markdown({
      headEnabled: true,
      wrapperClasses: (id, code) => {
        return code.includes('@layout-blog-post') ? 'blog-post' : ''
      },
    }),

    AutoImport({
      imports: [
        'vue',
        VueRouterAutoImports,
      ],
      dirs: [
        'src',
      ]
    }),

    Components({
      extensions: ['vue', 'md'],
      dts: true,
      include: [/\.vue$/, /\.vue\?vue/, /\.md$/],
    }),
    Sitemap({
      hostname: 'https://gabcvit.dev',
      dynamicRoutes: [
        '/',
        '/resume',
        '/portfolio',
        '/blog',
      ],
      exclude: [
        '/birth-chart',
      ],
      priority: {
        '/': 1.0,
        '/resume': 0.9,
        '/portfolio': 0.9,
        '/blog': 0.9,
      },
      lastmod: new Date(),
      robots: [{
        userAgent: '*',
        disallow: [
          '/birth-chart',
        ],
        allow: '/',
      }],
    }),
  ],
  ssgOptions: {
    formatting: 'minify',
  },
});