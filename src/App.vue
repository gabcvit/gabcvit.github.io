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
  import {reactive, ref, defineComponent } from "vue";

  interface Tabs {
    profile: Tab,
    knowledge: Tab,
    resume: Tab,
    portfolio: Tab,
  }

  interface Tab {
    component: string
  }

  export default defineComponent({
    components: {
      ProfileComponent,
      KnowledgeComponent,
      ResumeComponent,
      PortfolioComponent,
      NavigationBar,
    },
    data(): {
      currentTab: string,
      tabs: Tabs,
    } {
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
    }},
    methods: {
      renderComponentForOptionId(optionId: string) {
        let treatedOptionId = optionId as keyof Tabs;
        if (this.tabs[treatedOptionId]) {
          this.currentTab = this.tabs[treatedOptionId].component
        }
      },
    }
  })
</script>

<style scoped>

</style>
