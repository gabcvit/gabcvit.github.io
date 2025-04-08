<script setup lang="ts">
import SectionHeader from "../components/SectionHeader.vue";
import ResumeSingleElement from "../components/ResumeSingleElement.vue";
import { educationAndCertifications } from "../data/educationAndCertificationsData";
</script>

<template>
  <SectionHeader title="Education and Certifications" />
  <ResumeSingleElement
    v-for="(item, index) in educationAndCertifications"
    :key="index"
    :title="item.title"
    :description="item.description"
    :office="item.office"
    :period="item.period"
  />
</template>
