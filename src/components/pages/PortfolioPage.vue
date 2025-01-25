<template>
  <SectionHeader title="Portfolio" />

  <PortfolioSingleElement
    title="gabcvit/birth-chart"
    theme="Ongoing personal project that calculates all celestial bodies' positions at the time of birth."
    roles="Main developer"
    link="https://github.com/gabcvit/birth-chart"
    period="2025"
  />

  <PortfolioSingleElement
    title="gabcvit/find-my-btc-wallet"
    theme="Retired personal project that helps users find their Bitcoin wallet inside their computer."
    roles="Main developer"
    link="https://github.com/gabcvit/find-my-btc-wallet"
    period="2021"
  />

  <PortfolioSingleElement
    title="Pellegrini Traduções"
    theme="Forwarding agency"
    roles="Website development and maintenance"
    link="https://pellegrinitraducoes.com.br"
    period="2020"
  />

  <PortfolioSingleElement
    title="Pronto! Cidadania Italiana"
    theme="Forwarding agency"
    roles="Website development and maintenance"
    link="https://prontocidadaniaitaliana.com.br/"
    period="2022"
  />

  <PortfolioSingleElement
    title="Rovigatti"
    theme="Health clinic"
    roles="Main developer and designer"
    link="http://rovigatti.com.br"
    period="2015"
  />
</template>

<script lang="ts" setup>
import PortfolioSingleElement from "@/components/PortfolioSingleElement.vue";
import SectionHeader from "@/components/SectionHeader.vue";

</script>
