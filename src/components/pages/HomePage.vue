<script setup lang="ts">
import { portfolio } from '@/data/portfolio';
import PageHeader from '../PageHeader.vue';
import { socialLinks } from '@/data/socialLinksData';
import { useRouter } from 'vue-router/auto'
import RssIcon from "@/assets/rss-icon.svg?raw";

const router = useRouter()

const posts = computed<Post[]>(() => {
	return router.getRoutes()
		.filter(route => {
			return route.path.startsWith('/blog/')
		});
})

const websiteStats = [
  {
    title: 'Portfolio',
    description: 'Projects, experiments and case studies in my ',
    count: `${portfolio.length}`,
    url: '/portfolio',
  },
  {
    title: 'Blog',
    description: 'Oppinionated posts in my ',
    count: `${posts.value.length}`,
    url: '/blog',
  },
  
  {
    title: 'Resume',
    description: 'Years of experience summarized in my ',
    count: '10+',
    url: '/resume',
  },
];

</script>

<template>
  <PageHeader title="Unapologetically human" />
  <div class="animated-content-wrapper">
    <SectionHeader title="Who am I" />
    <p>
      My name is <b>Gabriel Vitali</b>
    </p>
    <p>
      I’m an experienced web and mobile apps dev with 10+ years of experience, heavily focused on empowering self-determined teams, devs and users alike to leverage technology to improve their lives.
    </p>

    <SectionHeader title="What drives me" />
    <p>
      > Ethical tech
    </p>
    <p>
      > Decentralization and self-ownership
    </p>
    <p>
      > Challenging code biases and structures of power
    </p>
    <p>
      > A11y and data privacy
    </p>

    <SectionHeader title="Socials" />
    <SocialLinksWrapper />

    <SectionHeader title="Content in this website" />
    <div
      v-for="stat in websiteStats"
      :key="stat.title"
      class="block flex-1"
    >
      <p class="font-bold text-4xl pt-0 pb-2">{{ stat.count }}</p>
      <p>
        {{ stat.description }} 
        <a 
          v-if="stat.url" 
          :href="stat.url"
          class="light-green-color">
          {{ stat.title }}
        </a>
      </p>
    </div>

    <SectionHeader title="RSS Feed" />
    <p>
      Stay up-to-date every time I post something new! The posts in this website support RSS feed.
    </p>
    <TagSocial
      :iconSvg="RssIcon"
      label="RSS"
      url="https://gabcvit.dev/feed.xml"
    />
  </div>
</template>