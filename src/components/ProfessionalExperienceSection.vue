<template>
  <SectionHeader title="Professional Experience" />

  <div class="section-wrapper">
    <ResumeSingleElement
      title="Senior Developer Consultant"
      description="Currently working as a Senior Developer Consultant, I collaborate with cross-functional 
      teams, mentor developers and business leaders, and optimize workflows to deliver high-quality, 
      agile-driven software. My strength lies in simplifying complexity, driving collaboration, and 
      guiding teams toward impactful results and high quality software."
      techStack="Swift, SwiftUI, Vue, Typescript, Javascript, GraphQL, GitHub Actions, Terraform, AWS."
      office="Thoughtworks - Munich, Germany"
      period="2021 - now"
    />

    <ResumeSingleElement
      title="Mobile application developer"
      description="Developed over 10 mobile apps for multiple clients in a customer-centered small consultancy.
      Had a lot of experience building and mocking design proposals, development, test and debug in a fast-paced
      environment for both native and hybrid applications."
      techStack="React-Native, Ionic 1 and 3, Unity, Sketch, InVision, MongoDB, Node."
      office="app-affairs GmbH. - Munich, Germany"
      period="2017 - 2021"
    />

    <ResumeSingleElement
      title="Infrastructure internship"
      description="Worked for 1 semester in field services. Got experience in Computer
  infrastructure, user support, internal tools test protocol,
  hardware and software Rollout administration & execution,
  and network maintenance."
      office="Bosch-Rexroth Ltda. - Atibaia, Brazil"
      period="2015"
    />

    <ResumeSingleElement
      title="Research Scholarship"
      description="Participated in user experience software maintenance
      and project development on Educational Flash-platform Game for
      children with Haemophilia. The project was financed by PIBIC
      (Programa institucional de bolsas de iniciação científica –
      Program of Scientific Initiation Scholarships) at Campinas
      State University (UNICAMP)."
      techStack=""
      office="Campinas State University - Limeira, Brazil"
      period="2013 - 2014"
    />
  </div>
</template>

<script lang="ts" setup>
import ResumeSingleElement from "../components/ResumeSingleElement.vue";
import SectionHeader from "../components/SectionHeader.vue";

</script>
