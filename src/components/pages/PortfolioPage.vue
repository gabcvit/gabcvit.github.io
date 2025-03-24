<template>
  <SectionHeader title="Portfolio" />

  <PortfolioSingleElement
    v-for="project in portfolioToRender"
    :project="project"
  />
</template>

<script lang="ts" setup>
import PortfolioSingleElement from "@/components/PortfolioSingleElement.vue";
import SectionHeader from "@/components/SectionHeader.vue";
import { portfolio } from "@/data/portfolio";

const portfolioToRender = ref(portfolio);

</script>
