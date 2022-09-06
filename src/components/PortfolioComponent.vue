<template>
  <p class="text-2xl my-16">Portfolio</p>

  <PortfolioSingleElement
      title="Caravana do Absurdo"
      theme="Entertainment channel"
      roles="Website development, Tech guru, Podcaster"
      link="https://caravanadoabsurdo.com.br"
      period="2021 - today"
  />

  <PortfolioSingleElement
      title="Pellegrini Traduções"
      theme="Forwarding agency"
      roles="Website development and maintenance"
      link="https://pellegrinitraducoes.com.br"
      period="2020 - today"
  />

  <PortfolioSingleElement
      title="Pronto! Cidadania Italiana"
      theme="Forwarding agency"
      roles="Website development and maintenance"
      link="https://prontocidadaniaitaliana.com.br/"
      period="2022 - today"
  />

  <PortfolioSingleElement
      title="Rovigatti"
      theme="Health clinic"
      roles="Main developer and designer"
      link="http://rovigatti.com.br"
      period="2015"
  />

  <PortfolioSingleElement
      title="BTC Wallet finder"
      theme="Personal project"
      roles="Main developer"
      link="https://github.com/gabcvit/find-my-btc-wallet"
      period="2021 - today"
  />
</template>

<script>
import PortfolioSingleElement from "./PortfolioSingleElement.vue";
export default {
  name: "PortfolioComponent.vue",
  components: {PortfolioSingleElement}
}
</script>

<style scoped>

</style>
