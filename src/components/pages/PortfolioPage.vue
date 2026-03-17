<template>
  <PageHeader title="My previous work" />

  <div class="grid md:grid-cols-3 gap-4">
    <PortfolioSingleElement
      v-for="(project, index) in portfolioToRender"
      :key="project.title"
      :project="project"
      class="animate-fade-in-up"
      :style="{ animationDelay: `${index * 60}ms` }"
    />
  </div>
</template>

<script lang="ts" setup>
import PortfolioSingleElement from "@/components/PortfolioSingleElement.vue";
import { portfolio } from "@/data/portfolio";
import PageHeader from "../PageHeader.vue";

const portfolioToRender = ref(portfolio);

</script>
