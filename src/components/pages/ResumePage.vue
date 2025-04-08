<template>
  <PageHeader title="Resume" />
  <div class="animated-content-wrapper pb-16">
    <ProfessionalSummarySection />
    <TechnicalSkillsSection />
    <ProfessionalExperienceSection />
    <EducationAndCertificationsSection />
    <LanguagesSection />
  </div>
</template>

<script lang="ts" setup>
import TechnicalSkillsSection from "@/components/TechnicalSkillsSection.vue";
import ProfessionalExperienceSection from "@/components/ProfessionalExperienceSection.vue";
import ProfessionalSummarySection from "@/components/ProfessionalSummarySection.vue";
import EducationAndCertificationsSection from "@/components/EducationAndCertificationsSection.vue";
import LanguagesSection from "@/components/LanguagesSection.vue";
</script>
