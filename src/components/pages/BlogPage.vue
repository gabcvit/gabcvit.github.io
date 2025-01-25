<template>
  <SectionHeader title="Blog" />

  <BlogPostPreview
    v-for="post in posts"
    :key="post.path"
    :path="post.path"
    :title="post.title"
    :description="post.description"
    :date="post.date"
    :duration="post.duration"
  />
</template>
  
<script lang="ts" setup>
import { useRouter } from 'vue-router/auto'
import type { Post } from '@/types'
import BlogPostPreview from '@/components/BlogPostPreview.vue';

const router = useRouter()

const posts = computed<Post[]>(() => {
	return router.getRoutes()
		.filter(route => {
			return route.path.startsWith('/blog/')
		})
		.map(route => {
			return ({
				path: route.path,
				title: route.meta.headerMatter.title,
				description: route.meta.headerMatter.description,
				date: route.meta.headerMatter.date,
				duration: route.meta.headerMatter.duration,
			})
		})
})
  


</script>