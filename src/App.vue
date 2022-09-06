<template>
  <div class="grid grid-cols-3 h-screen w-screen place-items-center bg-stone-900">
    <div class="col-span-1 w-full h-screen">
      <NavigationBar @onNewPageSelected="renderComponentForOptionId" />
    </div>
    <div class="col-span-2 w-full h-screen overflow-y-scroll">
      <component :is="currentTab" />
    </div>
  </div>
</template>

<script lang="ts">
  import ProfileComponent from './components/ProfileComponent.vue'
  import KnowledgeComponent from './components/KnowledgeComponent.vue'
  import ResumeComponent from './components/ResumeComponent.vue'
  import PortfolioComponent from './components/PortfolioComponent.vue'
  import NavigationBar from './components/NavigationBar.vue'
  import {reactive, ref} from "vue";

  export default {
    components: {
      ProfileComponent,
      KnowledgeComponent,
      ResumeComponent,
      PortfolioComponent,
      NavigationBar,
    },
    data() {
      return {
        currentTab: 'ProfileComponent',
        tabs: {
          profile: {
            component: 'ProfileComponent'
          },
          knowledge: {
            component: 'KnowledgeComponent'
          },
          resume: {
            component: 'ResumeComponent'
          },
          portfolio: {
            component: 'PortfolioComponent'
          }
        }
      }
    },
    methods: {
      renderComponentForOptionId(optionId: string) {
        if (this.tabs[optionId] !== null) {
          this.currentTab = this.tabs[optionId].component
        }
      },
    }
  }
</script>

<style scoped>

</style>
