<template>
  <p class="text-2xl mt-16 mb-8">
    Profile
  </p>
  <p class="text-m mb-4 mt-8">
    Professional info
  </p>
  <p class="text-sm my-4">
    I'm a Senior Developer with {{ yearsOfExperience }} years of experience.
    My key areas of knowledge are:
  </p>
  <ul class="text-sm">
    <li>- Full Stack development with Javascript, Typescript (Vue), GraphQL and cloud native development</li>
    <li>- Specialist in Stakeholder management and consulting streamlined solutions for greenfield/ongoing projects</li>
    <li>- Expert in refactoring strategies and Test-Driven Development</li>
    <li>- Mobile app development with both React Native (Hybrid) and Swift (Native iOS)</li>
    <li>- UX Designing and prototyping for mobile apps for multiple clients across branches</li>
  </ul>
  <p class="text-sm my-4">
    Currently I'm working as a Senior Developer Consultant at <a
      class="underline"
      href="https://www.thoughtworks.com/"
      target="_blank"
    >Thoughtworks</a> in Munich, Germany. Where I'm polishing every day not only my developer
    skills, but also my leading, consulting and agile skills.
  </p>
  <p class="text-sm my-4">
    What defines me professionally is a very active and curious person who's not afraid to
    dive deep into a brand new framework or project completely far away from my comfort zone.
    Extremely adaptable and highly communicative, my inner drive has always been bringing equitable
    technology and all its features to the service of people.
  </p>

  <p class="text-m mb-4 mt-8">
    Let's get connected!
  </p>
  <a
    class="underline block"
    href="https://github.com/gabcvit"
  >GitHub</a>
  <a
    class="underline block"
    href="https://stackoverflow.com/users/6231562/gabcvit"
  >Stackoverflow</a>
  <a
    class="underline block"
    href="https://www.linkedin.com/in/gabcvit/"
  >LinkedIn</a>
</template>

<script lang="ts" setup>
import {computed} from "vue";

const yearsOfExperience = computed(() => {
  const currentTime = new Date().getTime();
  const firstJobDate= new Date('01-08-2016').getTime();
  const difference = (currentTime - firstJobDate)
  const yearOnlyDiff = Math.floor(difference/(1000*60*60*24*365))
  return `+${yearOnlyDiff}`
})
</script>
