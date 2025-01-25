<template>
	<div class="absolute bottom-0 left-0 p-5 w-52 bg-stone-800 rounded-tr-2xl">
	    <p class="m-1">
	      Social links:
	    </p>
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
	  </div>
</template>

<script setup lang="ts">
import TagSocial from "./TagSocial.vue";
</script>

