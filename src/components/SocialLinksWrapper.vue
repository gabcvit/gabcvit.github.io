<template>
  <div class="absolute bottom-0 left-0 p-5 w-[90%] bg-gray-900 rounded-tr-2xl">
    <p class="mb-4">
      Let's connect! 🚀
    </p>
    <div class="flex flex-start flex-wrap gap-2">
      <TagSocial
        iconUrl="https://cdn.simpleicons.org/github/dddddd"
        label="GitHub"
        url="https://github.com/gabcvit"
      />
      <TagSocial
        iconUrl="https://cdn.simpleicons.org/stackoverflow"
        label="Stackoverflow"
        url="https://stackoverflow.com/users/6231562/gabcvit"
      />
      <TagSocial
        iconUrl="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linkedin/linkedin-original.svg"
        label="LinkedIn"
        url="https://www.linkedin.com/in/gabcvit/"
      />
      <TagSocial
        iconUrl="https://cdn.simpleicons.org/bluesky"
        label="BlueSky"
        url="https://bsky.app/profile/gabcvit.dev"
      />
      <TagSocial
        iconUrl="https://cdn.simpleicons.org/mailboxdotorg/gray"
        label="Email"
        url="mailto:vitali.gabriel@gmail.com"
      />
      <TagSocial
        iconUrl="https://cdn.simpleicons.org/rss"
        label="RSS"
        url="https://gabcvit.dev/feed.xml"
      />
    </div>
    
  </div>
</template>

<script setup lang="ts">
import TagSocial from "./TagSocial.vue";
</script>

