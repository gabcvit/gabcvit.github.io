import type { FeedOptions, Item } from 'feed'
import { dirname } from 'node:path'
import fg from 'fast-glob'
import { Feed } from 'feed'
import fs from 'fs-extra'
import matter from 'gray-matter'
import MarkdownIt from 'markdown-it'

const DOMAIN = 'https://gabcvit.github.io'
const NAME = 'Gabriel Vitali'
const AUTHOR = {
  name: NAME,
  email: 'vitali.gabriel@gmail.com',
  link: DOMAIN,
}

const MARKDOWN = MarkdownIt({
  html: true,
  breaks: true,
  linkify: true,
})

const OPTIONS = {
	author: AUTHOR,
	description: `${NAME}'s Blog`,
    title: NAME,
	image: `${DOMAIN}/avatar.jpg`,
	favicon: `${DOMAIN}/logo.png`,
    id: `${DOMAIN}/`,
    link: `${DOMAIN}/`,
    copyright: `CC BY-NC-SA 4.0 2025 © ${NAME}`,
    feedLinks: {
      json: `${DOMAIN}/feed.json`,
      atom: `${DOMAIN}/feed.atom`,
      rss: `${DOMAIN}/feed.xml`,
    },
  }

async function run() {
  await buildBlogRSS()
}

async function buildBlogRSS() {
  const files = await fg('./pages/blog/*.md')
  
  const posts: any[] = (
    await Promise.all(
      files.filter(i => !i.includes('index.md'))
        .map(async (i) => {
          const raw = await fs.readFile(i, 'utf-8')
          const { data, content } = matter(raw)

          const html = MARKDOWN.render(content)
            .replace('src="/', `src="${DOMAIN}/`)

          if (data.image?.startsWith('/'))
            data.image = DOMAIN + data.image


		  const clearLink = i.replace(/\.\/pages|\.md/g, '');
          return {
            ...data,
            date: new Date(data.date),
            content: html,
            author: [AUTHOR],
            link: DOMAIN + clearLink,
          }
        }),
    ))
    .filter(Boolean)

  posts.sort((a, b) => +new Date(b.date) - +new Date(a.date))

  await writeFeed('feed', posts)
}

async function writeFeed(name: string, items: Item[]) {
  const feed = new Feed(OPTIONS)

  items.forEach(item => feed.addItem(item))
  await fs.ensureDir(dirname(`./dist/${name}`))
  await fs.writeFile(`./dist/${name}.xml`, feed.rss2(), 'utf-8')
  await fs.writeFile(`./dist/${name}.atom`, feed.atom1(), 'utf-8')
  await fs.writeFile(`./dist/${name}.json`, feed.json1(), 'utf-8')
}

run()