<script setup lang="ts">
import { portfolio } from '@/data/portfolio';
import PageHeader from '../PageHeader.vue';
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
    <div class="flex flex-col md:flex-row gap-8 mb-4">
      <div class="md:w-2/6 flex-none">
        <img
          class="w-full md:max-w-[280px] object-cover border-2 border-brand-green/30 hover:border-brand-green transition-colors duration-300"
          src="../../../public/profile.png"
          alt="Gabriel Vitali's profile picture"
        >
      </div>
      <div class="md:w-4/6">
        <SectionHeader title="Who am I" />
        <p>
          My name is <b>Gabriel Vitali</b>
        </p>
        <p>
          I’m an experienced web and mobile apps dev with 10+ years of experience, heavily focused 
          on empowering independent teams, devs and users alike to leverage technology to improve their lives.
        </p>
        <SectionHeader title="What drives me" />
        <ul>
          <li>Ethical tech</li>
          <li>Decentralization and self-ownership</li>
          <li>Challenging code biases and structures of power</li>
          <li>A11y and data privacy</li>
        </ul>
      </div>
    </div>
    

    

    <SectionHeader title="Socials" />
    <SocialLinksWrapper />

    <SectionHeader title="Content in this website" />
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-2">
      <div
        v-for="stat in websiteStats"
        :key="stat.title"
        class="border border-brand-green/20 hover:border-brand-green/60 transition-colors duration-300 p-4 bg-white/[0.02]"
      >
        <p class="font-bold text-4xl pt-0 pb-1 text-brand-green">{{ stat.count }}</p>
        <p class="text-sm text-white/70 pb-0">
          {{ stat.description }}
          <a
            v-if="stat.url"
            :href="stat.url"
            class="text-brand-green hover:text-white font-bold underline transition-colors duration-200"
          >{{ stat.title }}</a>
        </p>
      </div>
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