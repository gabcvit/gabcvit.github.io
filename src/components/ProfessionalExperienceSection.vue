<template>
  <SectionHeader title="Professional Experience" />
  <ResumeSingleElement
    v-for="(item, index) in professionalExperience"
    :key="index"
    :title="item.title"
    :description="item.description"
    :keyResponsibilities="item.keyResponsibilities"
    :keyAchievements="item.keyAchievements"
    :techStack="item.techStack"
    :office="item.office"
    :period="item.period"
  />
</template>

<script lang="ts" setup>
import ResumeSingleElement from "../components/ResumeSingleElement.vue";
import SectionHeader from "../components/SectionHeader.vue";
import { professionalExperience } from "../data/professionalExperienceData";
</script>
