<template>
  <PageHeader title="Resume" />
  <div class="pb-16">
    <div class="md:float-right animate-fade-in-up">
      <TagSocial
        :iconSvg="DownloadIcon"
        label="Download Resume"
        url="../../../public/CVGabrielVitali.pdf"
      />
    </div>
    <div class="animate-fade-in-up" style="animation-delay: 80ms">
      <ProfessionalSummarySection />
    </div>
    <div class="animate-fade-in-up" style="animation-delay: 160ms">
      <TechnicalSkillsSection />
    </div>
    <div class="animate-fade-in-up" style="animation-delay: 240ms">
      <ProfessionalExperienceSection />
    </div>
    <div class="animate-fade-in-up" style="animation-delay: 320ms">
      <EducationAndCertificationsSection />
    </div>
    <div class="animate-fade-in-up" style="animation-delay: 400ms">
      <LanguagesSection />
    </div>
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
