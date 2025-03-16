<script setup lang="ts">
import TagWithIcon from "../components/TagWithIcon.vue";
import SectionSubheader from "../components/SectionSubheader.vue";
import SectionHeader from "../components/SectionHeader.vue";

const URL_PREFIX = 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/';

const LANGUAGES = [
  { name: 'Javascript', iconUrl: 'javascript/javascript-plain.svg'},
  { name: 'Typescript', iconUrl: 'typescript/typescript-plain.svg'},
  { name: 'GraphQL', iconUrl: 'graphql/graphql-plain.svg'},
  { name: 'HTML5', iconUrl: 'html5/html5-original.svg'},
  { name: 'CSS3', iconUrl: 'css3/css3-original.svg'},
  { name: 'NodeJS', iconUrl: 'nodejs/nodejs-original.svg'},
  { name: 'Swift', iconUrl: 'swift/swift-original.svg'},
]

const FRAMEWORKS_LIBRARIES = [
  { name: 'Vue', iconUrl: 'vuejs/vuejs-original.svg'},
  { name: 'Jest', iconUrl: 'jest/jest-plain.svg'},
  { name: 'TailwindCSS', iconUrl: 'tailwindcss/tailwindcss-original-wordmark.svg'},
  { name: 'React Native', iconUrl: 'react/react-original.svg'},
  { name: 'Ionic', iconUrl: 'ionic/ionic-original.svg'},
  { name: 'Bootstrap', iconUrl: 'bootstrap/bootstrap-original.svg'},

]

const TOOLS = [
  { name: 'Unity 3D C#', iconUrl: 'unity/unity-original.svg'},
  { name: 'Wordpress', iconUrl: 'wordpress/wordpress-plain.svg'},
  { name: 'Sketch', iconUrl: 'sketch/sketch-original.svg'},
  { name: 'Figma', iconUrl: 'figma/figma-original.svg'},
  { name: 'Android Studio', iconUrl: 'androidstudio/androidstudio-original.svg'},
  { name: 'Xcode', iconUrl: 'xcode/xcode-original.svg'},
]

const DEVOPS = [
  { name: 'GitHub Actions', iconUrl: 'githubactions/githubactions-original.svg'},
  { name: 'AWS', iconUrl: 'amazonwebservices/amazonwebservices-plain-wordmark.svg'},
  { name: 'Terraform', iconUrl: 'terraform/terraform-original.svg'},
  { name: 'Docker', iconUrl: 'docker/docker-original.svg'},
]
</script>

<template>
  <SectionHeader title="Tech Skills" />

  <div class="section-wrapper">
    <SectionSubheader title="Languages" />
    <TagWithIcon
      v-for="(singleLanguage, index) in LANGUAGES"
      :key="`tagWithIcon-language-${index}`"
      :label="singleLanguage.name"
      :iconUrl="`${URL_PREFIX}${singleLanguage.iconUrl}`"
    />

    <SectionSubheader title="Frameworks and Libraries" />
    <TagWithIcon
      v-for="(singleFramework, index) in FRAMEWORKS_LIBRARIES"
      :key="`tagWithIcon-frameworks-${index}`"
      :label="singleFramework.name"
      :iconUrl="`${URL_PREFIX}${singleFramework.iconUrl}`"
    />

    <SectionSubheader title="Tools" />
    <TagWithIcon
      v-for="(singleTool, index) in TOOLS"
      :key="`tagWithIcon-tool-${index}`"
      :label="singleTool.name"
      :iconUrl="`${URL_PREFIX}${singleTool.iconUrl}`"
    />

    <SectionSubheader title="DevOps and Cloud" />
    <TagWithIcon
      v-for="(singleDevop, index) in DEVOPS"
      :key="`tagWithIcon-devop-${index}`"
      :label="singleDevop.name"
      :iconUrl="`${URL_PREFIX}${singleDevop.iconUrl}`"
    />
  </div>
</template>
