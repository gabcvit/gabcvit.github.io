<template>
  <PageHeader title="My previous work" />

  <div class="animated-content-wrapper grid md:grid-cols-3 gap-4">
    <PortfolioSingleElement v-for="project in portfolioToRender" :project="project" />
  </div>

</template>

<script lang="ts" setup>
import PortfolioSingleElement from "@/components/PortfolioSingleElement.vue";
import { portfolio } from "@/data/portfolio";
import PageHeader from "../PageHeader.vue";

const portfolioToRender = ref(portfolio);

</script>
