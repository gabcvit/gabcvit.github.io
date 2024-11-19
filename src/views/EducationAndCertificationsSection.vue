<script setup lang="ts">

import SectionHeader from "../components/SectionHeader.vue";
import ResumeSingleElement from "../components/ResumeSingleElement.vue";
</script>

<template>
  <SectionHeader title="Education and Certifications" />

  <div class="section-wrapper">
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
  </div>
</template>
