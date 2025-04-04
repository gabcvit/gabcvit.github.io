<script setup lang="ts">
import SectionHeader from "../components/SectionHeader.vue";
import { languages } from "../data/languagesData";
</script>

<template>
  <SectionHeader title="Language skills" />
  <div class="section-wrapper">
    <ul class="text-sm">
      <li v-for="(language, index) in languages" :key="index">
        {{ language.flag }} {{ language.name }}: {{ language.level }}
      </li>
    </ul>
  </div>
</template>
