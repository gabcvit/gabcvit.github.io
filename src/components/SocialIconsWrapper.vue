<template>
	<div class="p-6">
		<div class="flex flex-start flex-wrap gap-4">
			<a
				v-for="(link, index) in socialLinks"
				:key="index"
				:href="link.url"
				target="_blank"
				rel="noopener noreferrer"
				class="group"
			>
				<svg
					xmlns="http://www.w3.org/2000/svg"
					v-html="link.iconSvg"
					class="w-6 h-6 fill-current text-white"
				>
      </svg>
			</a>
		</div>
	</div>
</template>

<script setup lang="ts">
import { socialLinks } from "../data/socialLinksData";
</script>