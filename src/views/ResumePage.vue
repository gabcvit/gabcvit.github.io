<template>
  <p class="text-2xl my-16">
    My Resume
  </p>
  <p class="text-xl my-12 underline-offset-4 underline">
    Working experience
  </p>

  <ResumeSingleElement
    title="Senior Developer Consultant"
    description="Currently working as a Developer Consultant in an Agile,
    diverse, equitable, inclusive, innovative workspace. Which is currently
    bringing extraordinary impact to many clients all around the globe.
    Tech stack: Swift, SwiftUI, Vue3, Typescript, GraphQL, GitHub Actions, Terraform, AWS."
    office="Thoughtworks"
    period="2021 - now"
  />

  <ResumeSingleElement
    title="Mobile application developer"
    description="Worked in mobile aplication development,
    design, test and debug in a fast-paced environment. For both
    native apps and hybrid. Tech Stack: React-Native, Ionic 1 and 3,
    Unity, Sketch, InVision, MongoDB, Node."
    office="app-affairs GmbH."
    period="2017 - 2021"
  />

  <ResumeSingleElement
    title="Infrastructure internship"
    description="Have worked for 1 semester. Got experience in Computer
    infrastructure, user support, internal tools test protocol,
    hardware and software Rollout administration and execution,
    and network maintenance."
    office="Bosch-Rexroth Ltda."
    period="2015"
  />

  <ResumeSingleElement
    title="Research Scholarship"
    description="Participated in user experience software maintenance
    and project development on Educational Flash-platform Game for
    children with Haemophilia. The project was financed by PIBIC
    (Programa institucional de bolsas de iniciação científica –
    Program of Scientific Initiation Scholarships) at Campinas
    State University(UNICAMP)."
    office="Campinas State University"
    period="2013 - 2014"
  />

  <p class="text-xl my-12 underline-offset-4 underline">
    Education and Certifications
  </p>

  <ResumeSingleElement
    title="Certificate in Mobile Business Technologies & Applications"
    description="Finished the Certificate in Mobile Business
    Technologies & Applications at School of Continuing Studies, which
    consists in the following courses: a 3-month course of Android application
    development, a 3-month course of iOS application development and a 4-month
    course of Web development for mobile devices."
    office="University of Toronto"
    period="2015-2016"
  />

  <ResumeSingleElement
    title="Graduated in System Analysis and Development"
    description="Focus in System Analysis and Software Development,
    exploring many topics in development such as Planning the best development
    method for each system, modeling methods for Structure-based and object
    oriented languages, Computer architecture and many others."
    office="Campinas State University"
    period="2012 - 2015"
  />
</template>

<script lang="ts" setup>
import ResumeSingleElement from "../components/ResumeSingleElement.vue";

</script>
