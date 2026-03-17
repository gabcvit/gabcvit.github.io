<template>
	<div class="p-6">
		<div class="flex flex-start flex-wrap gap-4">
			<a
				v-for="(link, index) in socialLinks"
				:key="index"
				:href="link.url"
				target="_blank"
				rel="noopener noreferrer"
				class="text-white/70 hover:text-brand-green transition-colors duration-200"
				:aria-label="link.label"
			>
				<svg
					xmlns="http://www.w3.org/2000/svg"
					v-html="link.iconSvg"
					class="w-6 h-6 fill-current"
					aria-hidden="true"
				>
				</svg>
			</a>
		</div>
	</div>
</template>

<script setup lang="ts">
import { socialLinks } from "../data/socialLinksData";
</script>