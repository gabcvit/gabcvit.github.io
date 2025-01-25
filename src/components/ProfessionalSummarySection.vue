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
      Experienced web and mobile software engineer with over {{ yearsOfExperience }} years of experience,
      I have honed my skills in JavaScript, TypeScript, GraphQL, React native and Swift (native iOS).
      I have worked with clients across many industries: social networks, climate and resort platforms,
      educational gaming, crypto/stock trading, transport solutions, and sales, this allowed me to learn
      how to adapt quickly and deliver tailored solutions for each client, keeping them at the centre of
      every technical decision.
    </p>
    <p class="text-sm mb-2">
      Currently working at Thoughtworks, where core values lie in collaborating with software delivery
      teams using agile principles and to deliver high-quality software to clients. My strength lies
      not only in coding and tech excellence, but also in bridging knowledge gaps between technical and
      non-technical stakeholders. Teams I’ve worked with value my ability to simplify complex concepts,
      maintain clarity, lead and keep collaboration engaging and effective.
    </p>
    <p class="text-sm mb-2">
      I thrive in remote environments that foster innovation and value inclusivity. As I grow, I aim to
      transition into leadership roles, leveraging my communication and management skills to guide teams
      toward impactful results. Beyond work, I am deeply passionate about meditation practices, buddhism,
      social justice, DEI (diversity, equity, and inclusion) and challenging code biases.
    </p>
    <p class="text-sm mb-2">
      With a track record of delivering over 10 successful apps, collaborating successfully with over 20
      clients and multiple certifications in key web and mobile technologies, I bring a mix of technical
      proficiency, creative problem-solving, and a positive charisma to every project I land.
    </p>
    <p class="text-sm">
      Located in Munich, Germany 🇩🇪
    </p>
  </div>
</template>
