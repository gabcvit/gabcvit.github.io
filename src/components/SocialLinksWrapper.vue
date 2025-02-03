<template>
  <div class="absolute bottom-0 left-0 p-5 w-[90%] bg-gray-900 rounded-tr-2xl">
    <p class="mb-4">
      Let's connect! 🚀
    </p>
    <div class="flex flex-start flex-wrap gap-2">
      <TagSocial
        iconUrl="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg"
        label="GitHub"
        url="https://github.com/gabcvit"
      />
      <TagSocial
        iconUrl="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/stackoverflow/stackoverflow-original.svg"
        label="Stackoverflow"
        url="https://stackoverflow.com/users/6231562/gabcvit"
      />
      <TagSocial
        iconUrl="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linkedin/linkedin-original.svg"
        label="LinkedIn"
        url="https://www.linkedin.com/in/gabcvit/"
      />
      <TagSocial
        iconUrl="https://upload.wikimedia.org/wikipedia/commons/7/7a/Bluesky_Logo.svg"
        label="BlueSky"
        url="https://bsky.app/profile/gabcvit.bsky.social"
      />
      <TagSocial
        iconUrl="https://cdn2.iconfinder.com/data/icons/social-icon-3/512/social_style_3_rss-1024.png"
        label="RSS"
        url="https://gabcvit.github.io/feed.xml"
      />
    </div>
    
  </div>
</template>

<script setup lang="ts">
import TagSocial from "./TagSocial.vue";
</script>

