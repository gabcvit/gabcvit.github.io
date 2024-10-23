<template>
  <div class="grid grid-cols-4 h-screen w-screen place-items-center bg-stone-900">
    <div class="col-span-1 w-full h-screen pl-16">
      <NavigationBar @onNewPageSelected="renderComponentForOptionId" />
    </div>
    <div class="col-span-3 w-full h-screen overflow-y-scroll pr-16">
      <router-view></router-view>
    </div>
  </div>
</template>

<script lang="ts">
  import ProfileComponent from './views/ProfilePage.vue'
  import KnowledgePage from './views/KnowledgePage.vue'
  import ResumeComponent from './views/ResumePage.vue'
  import PortfolioComponent from './views/PortfolioPage.vue'
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
      KnowledgePage,
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
          component: 'KnowledgePage'
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
