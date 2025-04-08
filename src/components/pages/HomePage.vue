<script setup lang="ts">
import { portfolio } from '@/data/portfolio';
import PageHeader from '../PageHeader.vue';
import { socialLinks } from '@/data/socialLinksData';
import { useRouter } from 'vue-router/auto'

const router = useRouter()

const posts = computed<Post[]>(() => {
	return router.getRoutes()
		.filter(route => {
			return route.path.startsWith('/blog/')
		});
})

const websiteStats = [
  {
    title: 'Blog',
    description: 'Thought-provoking posts in my ',
    count: `${posts.value.length}`,
    url: '/blog',
    urlColor: 'text-pink-500',
  },
  {
    title: 'Portfolio',
    description: 'Successful projects and case studies in my ',
    count: `${portfolio.length}+`,
    url: '/portfolio',
    urlColor: 'text-emerald-500',
  },
  {
    title: 'Resume',
    description: 'Years of experience summarized in my ',
    count: '10 +',
    url: '/resume',
    urlColor: 'text-indigo-500',
  },
  {
    title: '',
    description: 'Links to my Social accounts',
    count: `${socialLinks.length}`,
    url: null,
  },
];

</script>

<template>
  <PageHeader title="Hello there!" />
  <div class="animated-content-wrapper">
    <SectionHeader title="Let me introduce myself" />
    <div class="flex flex-col md:flex-row gap-4">
      <img
        class="md:w-2/6 md:max-w-[300px]"
        src="../../../public/profile.png"
        alt="Gabriel Vitali's picture"
      />
      <div class="md:w-4/6">
        <p>
          My name is <b>Gabriel Vitali</b>
        </p>
        <p>
          I was born and raised in 🇧🇷 Brazil  and I’ve been living in Germany 🇩🇪 for more than 8 years
        </p>
        <p>
          I’m an experienced and Leadership-focused <b>Web and Mobile applications engineer</b> with 10+ years in delivering scalable Web and Mobile solutions, leading cross-functional teams and aligning technical decisions with business goals across multiple industries. I focus on empowering teams by fostering a culture of continuous improvement, clear communication, and technical excellence. 
        </p>
        <p>
          I’m specially passionate about challenging code biases, advocating for equitable and ethical tech, mindful adoption of  GenAI, decentralization in politics and technology and buddhist meditation practices.
        </p>
      </div>
    </div>
    
    <SectionHeader title="In this webside you'll find" />
    <div class="flex justify-between my-4">
      <div class="flex flex-col md:flex-row gap-4">
        <div
        v-for="stat in websiteStats"
        :key="stat.title"
        class="block"
        >
        <p class="font-bold text-4xl">{{ stat.count }}</p>
        <p>
          {{ stat.description }} 
          <a 
            v-if="stat.url" 
            :href="stat.url"
            :class="stat.urlColor">
            {{ stat.title }}
          </a>
        </p>
        </div>
      </div>
    </div>

    <SectionHeader title="Social links" />
    <p>
      Whether you’re a fellow developer, an industry leader, a tech newbie seeking guidance or just curious about the topics I write about, I hope you find something here that sparks your interest! ✨
      Feel free to reach out via my social links or drop me a message, I’m always happy to chat about exciting ideas, collaborations and to receive feedback.
    </p>
    <SocialLinksWrapper />
  </div>
</template>

<style scoped>

</style>