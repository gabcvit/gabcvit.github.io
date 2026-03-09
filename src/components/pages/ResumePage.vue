<template>
  <PageHeader title="Resume" />
  <div class="animated-content-wrapper pb-16">
    <div class="md:float-right">
      <TagSocial
        :iconSvg="DownloadIcon"
        label="Download Resume"
        url="../../../public/CVGabrielVitali.pdf"
      />
    </div>
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
import TagSocial from "@/components/TagSocial.vue";
import DownloadIcon from "@/assets/download-icon.svg?raw";
</script>
