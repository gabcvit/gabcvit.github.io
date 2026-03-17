# gabcvit.github.io

Personal website and blog of Gabriel Vitali.

Live website: https://gabcvit.dev

## Overview

This repository contains a statically generated website built with Vue 3 + TypeScript and powered by Vite.

Main characteristics:
- Static-site generation with `vite-ssg`
- File-based routing from the `pages/` directory (`.md` and `.vue`)
- Markdown-driven pages and blog posts with frontmatter metadata
- Tailwind CSS styling with shared global styles
- RSS/Atom/JSON feed generation during the build pipeline
- GitHub Pages deployment via `gh-pages`

## Tech Stack

- Vue 3
- TypeScript (strict mode)
- Vite
- `vite-ssg`
- `unplugin-vue-router`
- `unplugin-vue-markdown`
- `unplugin-auto-import`
- `unplugin-vue-components`
- Tailwind CSS + PostCSS
- Cypress (E2E)

## Project Structure

```text
.
├─ pages/                    # Route source of truth (.md/.vue -> routes)
│  ├─ index.md               # /
│  ├─ resume.md              # /resume
│  ├─ portfolio.md           # /portfolio
│  ├─ [...404].md            # catch-all route
│  └─ blog/
│     ├─ index.md            # /blog
│     └─ *.md                # /blog/<slug>
├─ src/
│  ├─ main.ts                # ViteSSG app creation + route progress
│  ├─ App.vue                # global app layout
│  ├─ components/            # reusable + page-level components
│  ├─ data/                  # static typed datasets used by pages
│  ├─ styles/style.css       # global CSS + typography/base styling
│  └─ types.ts               # shared interfaces
├─ scripts/
│  ├─ update-rss.ts          # generates feed.xml/feed.atom/feed.json
│  └─ add-cname.ts           # writes dist/CNAME for custom domain
└─ cypress/e2e/              # end-to-end tests
```

## How Routing and Content Work

- Routes are auto-generated from files in `pages/`.
- Both `.md` and `.vue` files can become routes.
- Markdown frontmatter is attached to route metadata by Vite config.
- Blog post cards/list are generated dynamically from router metadata, so there is no manual blog manifest file.

### Blog post format

Create new posts in `pages/blog/` using frontmatter like:

```md
---
title: My New Post
description: Short summary
date: 2026-03-17
duration: 5min
---

# Post content
```

## Getting Started

### Prerequisites

- Node.js (current LTS recommended)
- npm

### Install

```bash
npm install
```

### Run locally

```bash
npm run dev
```

Open: http://localhost:5173

## Available Commands

- `npm run dev` — Start Vite dev server with HMR
- `npm run lint` — Run ESLint checks
- `npm run test` — Run Cypress E2E tests
- `npm run build` — Build static site, generate feeds, add CNAME
- `npm run preview` — Preview production build
- `npm run deploy` — Build and publish to GitHub Pages
- `npm run rss` — Generate RSS/Atom/JSON feeds only
- `npm run add-cname` — Write CNAME into `dist/` only

## Build and Deployment

`npm run build` executes the full production pipeline:
1. Build static pages via `vite-ssg`
2. Generate RSS/Atom/JSON feeds from `pages/blog/*.md`
3. Write `dist/CNAME`

`npm run deploy` runs the build and publishes `dist/` to GitHub Pages.

## Testing

E2E tests are implemented with Cypress in `cypress/e2e/`.

Run all E2E tests:

```bash
npm run test
```

## Notes for Contributors

- Keep blog posts inside `pages/blog/` to preserve auto-discovery.
- Keep frontmatter valid for metadata-dependent features (blog list, feeds).
- Do not manually edit generated declaration files:
	- `auto-imports.d.ts`
	- `components.d.ts`
	- `typed-router.d.ts`
	- `shms.d.ts`
- Prefer `@/` alias for imports from `src/`.

## Author

Gabriel Vitali  
Website: https://gabcvit.dev
