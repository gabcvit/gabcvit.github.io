<template>
  <p class="text-2xl mt-16 mb-8">
    Professional Experience
  </p>
  <p class="text-m mb-4 mt-8">
    Working experience
  </p>

  <ResumeSingleElement
    title="Senior Developer Consultant"
    description="Currently working as a Senior Developer Consultant in an Agile,
    dynamic, fast-paced and innovative workspace. Worked together with clients from Sales, Crypto currency (finances)
    and transportation branches, varying across greenfield projects and ongoing ones.
    // Tech stack: Swift, SwiftUI, Vue, Typescript, Javascript, GraphQL, GitHub Actions, Terraform, AWS."
    office="Thoughtworks - Munich, Germany"
    period="2021 - now"
  />

  <ResumeSingleElement
    title="Mobile application developer"
    description="Developed over 10 mobile apps for multiple clients in a customer-centered small consultancy.
    Had a lot of experience building and mocking design proposals, development, test and debug in a fast-paced
    environment for both native and hybrid applications // Tech Stack: React-Native, Ionic 1 and 3,
    Unity, Sketch, InVision, MongoDB, Node."
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
    office="Campinas State University - Limeira, Brazil"
    period="2013 - 2014"
  />

  <p class="text-m mb-4 mt-8">
    Education and Certifications
  </p>

  <ResumeSingleElement
    title="Certificate in Mobile Business Technologies & Applications"
    description="Finished the Certificate in Mobile Business
    Technologies & Applications at School of Continuing Studies, which
    consists in the following courses: a 3-month course of Android application
    development, a 3-month course of iOS application development and a 4-month
    course of Web development for mobile devices."
    office="University of Toronto - Toronto, Canada"
    period="2015-2016"
  />

  <ResumeSingleElement
    title="Graduated in System Analysis and Development"
    description="Focus in System Analysis and Software Development,
    exploring many topics in development such as Planning the best development
    method for each system, modeling methods for Structure-based and object
    oriented languages, Computer architecture and many others."
    office="Campinas State University - Limeira, Brazil"
    period="2012 - 2015"
  />
</template>

<script lang="ts" setup>
import ResumeSingleElement from "../components/ResumeSingleElement.vue";

</script>
