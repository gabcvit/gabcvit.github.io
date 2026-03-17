# AGENTS.md

## Purpose
This file defines how coding agents should work in this repository. It provides architecture context, workflow commands, and mandatory execution rules.

## Tech Stack
- Framework: Vue 3 + TypeScript
- Build tool: Vite
- Static generation: `vite-ssg`
- Routing: `unplugin-vue-router` (file-based routes from `pages/`)
- Content: Markdown pages/posts + TypeScript data files
- Styling: Tailwind CSS + global CSS in `src/styles/style.css`
- Testing: Cypress E2E
- Deployment: GitHub Pages via `gh-pages`

## Architecture Overview
- App entry: `src/main.ts`
  - Creates app with `ViteSSG`
  - Uses auto-generated routes from `vue-router/auto-routes`
  - Adds client-side route progress using `nprogress`
- Global layout: `src/App.vue`
  - `NavigationBar` + `Background` + page content (`RouterView`) + `Footer`
- Route source of truth: `pages/`
  - `.md` and `.vue` files become routes automatically
  - `pages/[...404].md` is the catch-all route
- Blog model:
  - Posts are markdown files in `pages/blog/*.md`
  - Blog list is derived dynamically from router metadata in `src/components/pages/BlogPage.vue`
  - No manual blog manifest should be created
- Data source pattern:
  - Structured static data lives in `src/data/*.ts` (portfolio, experience, languages, etc.)
  - Reusable interfaces/types live in `src/types.ts`

## Build/Plugin Pipeline (Key Behavior)
Defined in `vite.config.ts`:
- `unplugin-vue-router`
  - Scans `pages/` and generates typed routes
  - Supports `.vue` and `.md`
  - Adds markdown frontmatter to `route.meta.headerMatter` (except files explicitly skipped by config)
- `unplugin-vue-markdown`
  - Compiles markdown as Vue components
- `unplugin-auto-import` + `unplugin-vue-components`
  - Auto-imports Vue APIs/router helpers and components
- `vite-plugin-sitemap`
  - Generates sitemap with configured routes

## Important Directories
- `pages/`: route source of truth; `.md` and `.vue` files become routes
- `src/components/pages/`: page-level components (`HomePage`, `BlogPage`, `PortfolioPage`, `ResumePage`)
- `src/components/`: shared UI components
  - `*Section.vue` — standalone content sections (e.g., `ProfessionalExperienceSection`)
  - `*Wrapper.vue` — layout containers (e.g., `SocialLinksWrapper`)
  - `*Preview.vue` — card/preview tiles (e.g., `BlogPostPreview`)
- `src/data/`: typed static datasets (no CMS, no API calls — pure TS exports)
- `src/types.ts`: shared interfaces (`Post`, and `Project`/`Portfolio` defined in `portfolio.ts`)
- `src/utils/`: shared utilities (currently only `capitalize.ts`)
- `scripts/`: build-time only — `update-rss.ts` (RSS feeds), `add-cname.ts` (GitHub Pages domain)
- `cypress/e2e/`: end-to-end tests

## Commands and Ways of Working
- Dev server: `npm run dev`
- Lint: `npm run lint`
- Tests: `npm run test`
- Production build (full pipeline): `npm run build`
  - Runs SSG build
  - Generates RSS/Atom/JSON feeds
  - Writes CNAME file into `dist/`
- Preview production build: `npm run preview`
- Deploy: `npm run deploy`

### Expected Work Sequence for Agents
1. Understand scope and affected files.
2. Implement the smallest correct change at root cause.
3. Run targeted verification first (`lint`, relevant tests).
4. Run broader verification only when needed.
5. **If the change affects architecture, conventions, tooling, or workflows, update this file to reflect the new state of the repo.**

### Keeping This Document Up-to-Date
This file is the living source of truth for this repository. Whenever a meaningful change lands — new dependencies, new route conventions, new components patterns, data model changes, build pipeline changes — update the relevant section here so future agents always have accurate context.

## Mandatory Engineering Principles
Agents must enforce these principles in every change:
- Clean Code is mandatory.
  - Keep functions/components focused and readable
  - Use meaningful names
  - Avoid duplication
  - Prefer simple logic over cleverness
- SOLID principles are mandatory.
  - Single Responsibility in components/modules
  - Open/Closed for extension without risky rewrites
  - Liskov-safe abstractions and typings
  - Interface Segregation in types/contracts
  - Dependency Inversion where applicable
- Type safety is mandatory.
  - Preserve strict TypeScript discipline
  - Avoid `any` unless absolutely unavoidable and justified

## Component Authoring Conventions
- Always use `<script setup lang="ts">` (Composition API, no Options API)
- Type props with `defineProps<{ field: Type }>()`; use `withDefaults` only when defaults are needed
- Use `computed<Type[]>(() => {...})` for typed derived state
- Page-level components query `useRouter()` directly — do not prop-drill lists down from a parent
- For router imports use `vue-router/auto` (not bare `vue-router`) to retain typed route metadata
- Auto-imports are active for `ref`, `computed`, `watch`, `useRouter`, `useRoute` — no manual import needed
- `@/` is the canonical alias for `src/`; do not use `~/` in new code

## Naming Conventions
- **Components**: PascalCase (`BlogPostPreview.vue`, `SocialLinksWrapper.vue`)
- **Data exports**: camelCase, plural or noun clarity (`portfolio`, `socialLinks`)
- **Utilities**: camelCase functions in `src/utils/` (`capitalizeString`)
- **Interfaces**: `interface` keyword (not `type`) for data models in `src/types.ts`
- **Vue attributes**: do not hyphenate custom component props (ESLint rule `attribute-hyphenation: never`)

## Content Model

### Blog post frontmatter schema
```yaml
---
title: Post Title          # required — shown in blog list and page heading
description: Short summary # required — shown in blog list preview
date: YYYY-MM-DD           # required — used for sorting and RSS feeds
duration: 5min             # optional — reading time shown on preview card
---
```

To enable the fade-in animation wrapper on the rendered markdown body, include this comment on its own line after the frontmatter:
```
<!-- @layout-animated-content-wrapper -->
```

### Blog discovery pattern (do not break this)
`BlogPage.vue` derives the post list at runtime with no static manifest:
```ts
const posts = computed<Post[]>(() =>
  router.getRoutes()
    .filter(route => route.path.startsWith('/blog/'))
    .map(route => ({
      path: route.path,
      title: route.meta.headerMatter.title,
      description: route.meta.headerMatter.description,
      date: route.meta.headerMatter.date,
      duration: route.meta.headerMatter.duration,
    }))
    .sort((a, b) => new Date(b.date).getTime() - new Date(a.date).getTime())
)
```
Adding a post = adding a file in `pages/blog/`. The list updates automatically.

### Adding structured data (resume, portfolio, etc.)
1. Define or extend an interface in `src/types.ts` (or inline in the data file for local types).
2. Add a new constant export in `src/data/*.ts`.
3. Import directly into the relevant component — no store, no fetch.

## Styling Conventions
- Tailwind utility classes are the primary styling approach; scoped `<style>` blocks are a last resort.
- Custom animations (`animate-fadeIn`, `animate-fadeInUp`) are declared in `tailwind.config.cjs`.
- Global CSS in `src/styles/style.css` defines typography baseline and several named helper classes:
  - `light-green-color` — brand accent colour (`rgb(178, 255, 0)`)
  - `animated-content-wrapper` — applies `animate-fadeInUp` transition to a block
  - `bg-dark` — base dark background (`rgb(10, 10, 10)`)
  - `glow-pink-border` — pink border accent (`rgb(219, 39, 119)`)
- `h1`–`h3`, `p`, `a`, `ul`, `pre`, `code` have global styles; keep markdown content consistent with these.
- The `Regardion` font is used for headings; it is declared in `style.css` and served from `public/fonts/`.

## Known Pitfalls and Gotchas
| Pitfall | Detail |
|---------|--------|
| **New route not detected in dev** | Restart the dev server after adding new files to `pages/`; hot-reload does not trigger route re-scan. |
| **`projects.md` skips frontmatter** | `vite.config.ts` explicitly excludes `projects.md` from frontmatter extraction — do not assume all `.md` files expose `route.meta.headerMatter`. |
| **RSS needs `dist/` to exist** | `scripts/update-rss.ts` writes into `dist/`. Always use `npm run build` (not bare `vite build`) to run the full pipeline in order. |
| **Sitemap is manually maintained** | Individual blog post URLs are **not** auto-added to `vite-plugin-sitemap`. Update `vite.config.ts` `dynamicRoutes` when adding a new top-level page. |
| **Do not create a blog manifest file** | The blog list is computed from `router.getRoutes()` — a separate index would immediately become stale. |
| **Auto-imports do not cover new composables** | If you add a new composable, either import it manually or add it to `AutoImport.imports` in `vite.config.ts`. |
| **CNAME is ephemeral** | `dist/CNAME` is written at build time. A raw `vite build` without `npm run build` will produce a dist without CNAME, breaking the custom domain on deploy. |

## Repository-Specific Guardrails
- Do not manually edit generated files:
  - `auto-imports.d.ts`
  - `components.d.ts`
  - `typed-router.d.ts`
  - `shms.d.ts`
- Keep blog posts under `pages/blog/` to ensure route and metadata discovery works.
- Keep frontmatter valid in markdown posts when metadata is needed.
- Prefer existing aliases/import conventions (`@/`).
- Keep style changes consistent with current Tailwind + global CSS approach.