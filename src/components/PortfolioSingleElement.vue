<template>
  <a :href="link"
    target="_blank"
    class="grid grid-cols-4 my-4 p-4 rounded border border-emerald-500 bg-gray-950"
    >
    <div class="col-span-3 row-span-1">
      <p class="font-bold">
        > {{ theme }}
      </p>
      <p class="text-emerald-500">
        {{ title }}
      </p>
      <p>
        Role(s): {{ roles }}
      </p>
    </div>
    <div class="col-span-1 mr-16 text-right">
      <p>{{ period }}</p>
    </div>
  </a>
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
