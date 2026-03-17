<template>
  <article class="group relative grid md:grid-cols-5 my-0 border-l-2 border-brand-green/30 hover:border-brand-green transition-all duration-300 pl-4 py-4 hover:bg-white/[0.02]">
    <div class="col-span-1 mb-1 md:mb-0">
      <time
        :datetime="date"
        class="text-sm text-white/50 font-mono tracking-wide block"
      >{{ formattedDate }}</time>
      <span
        v-if="duration"
        class="text-xs text-brand-pink font-mono mt-1 block"
        aria-label="Reading duration"
      >{{ duration }}</span>
    </div>
    <div class="col-span-4">
      <h3 class="light-green-color text-lg font-bold pb-1 group-hover:text-white transition-colors duration-200">
        {{ title }}
      </h3>
      <p class="text-white/70 text-sm pb-2 leading-relaxed">
        {{ description }}
      </p>
      <RouterLink
        :to="path"
        class="inline-flex items-center gap-1 text-sm font-bold text-brand-green hover:text-white transition-colors duration-200 no-underline"
        :aria-label="`Read full post: ${title}`"
      >
        Read more
        <span aria-hidden="true" class="transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
      </RouterLink>
    </div>
  </article>
</template>
  
  <script lang="ts" setup>
  const props = withDefaults(defineProps<{
	title: string,
	path: string,
	date: string,
	duration: string,
	description: string,
  }>(), {});

  const formattedDate = new Date(props.date).toLocaleDateString('en-GB', {
    year: 'numeric',
    month: 'short',
    day: 'numeric',
  });
  
  </script>
  