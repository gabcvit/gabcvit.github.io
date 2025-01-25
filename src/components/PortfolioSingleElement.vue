<template>
  <div class="grid grid-cols-4 my-4 p-4 rounded border border-emerald-500 bg-gray-950">
    <div class="col-span-3 row-span-1">
      <p class="text-emerald-500 underline-offset-4 underline">
        <a
          :href="link"
          target="_blank"
        >{{ title }}</a>
      </p>
      <p>
        Role(s): {{ roles }}
      </p>
      <p>
        {{ theme }}
      </p>
    </div>
    <div class="col-span-1 mr-16 text-right">
      <p>{{ period }}</p>
    </div>
  </div>
</template>

<script lang="ts" setup>
withDefaults(defineProps<{
  title: string,
  theme: string,
  roles: string,
  link: string,
  period?: string
}>(), {
  period: '',
});
</script>
