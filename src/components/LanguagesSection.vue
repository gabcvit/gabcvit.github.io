<script setup lang="ts">
import SectionHeader from "../components/SectionHeader.vue";
import { languages } from "../data/languagesData";
</script>

<template>
  <SectionHeader title="Language skills" />
  <ul>
    <li v-for="(language, index) in languages" :key="index">
      {{ language.flag }} {{ language.name }}: {{ language.level }}
    </li>
  </ul>
</template>
