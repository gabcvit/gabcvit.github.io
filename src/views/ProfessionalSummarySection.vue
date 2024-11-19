<script setup lang="ts">
import SectionHeader from "../components/SectionHeader.vue";
import {computed} from "vue";

const yearsOfExperience = computed(() => {
  const currentTime = new Date().getTime();
  const firstJobDate= new Date('01-08-2016').getTime();
  const difference = (currentTime - firstJobDate)
  const yearOnlyDiff = Math.floor(difference/(1000*60*60*24*365))
  return `+${yearOnlyDiff}`
})
</script>

<template>
  <SectionHeader title="Professional summary" />
  <div class="section-wrapper">
    <p class="text-sm mb-2">
      Senior Frontend (Web and Mobile) Developer with {{ yearsOfExperience }} years
      of experience on the following areas:
    </p>
    <ul class="text-sm">
      <li>
        - Full Stack development with Javascript, Typescript (Vue), GraphQL and cloud native development
      </li>
      <li>
        - Specialist in refactoring strategies, Test-Driven Development and CI/CD solutions
      </li>
      <li>
        - Consultancy with strength in stakeholder management and advocating solutions for greenfield/ongoing projects
      </li>
      <li>
        - Mobile app development with both React Native (Hybrid) and Swift (Native iOS)
      </li>
      <li>
        - UX Designing and prototyping of mobile apps and websites across multiple branches
      </li>
    </ul>
    <p class="text-sm mt-2">
      Located in Munich, Germany 🇩🇪
    </p>
  </div>
</template>
