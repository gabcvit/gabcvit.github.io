<script setup lang="ts">
import TagWithIcon from "../components/TagWithIcon.vue";

const LANGUAGES = [
  { name: 'Javascript', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-plain.svg'},
  { name: 'Typescript', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-plain.svg'},
  { name: 'GraphQL', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/graphql/graphql-plain.svg'},
  { name: 'HTML5', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg'},
  { name: 'CSS3', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg'},
  { name: 'NodeJS', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original.svg'},
  { name: 'Swift', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/swift/swift-original.svg'},
]

const FRAMEWORKS_LIBRARIES = [
  { name: 'Vue', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg'},
  { name: 'Jest', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jest/jest-plain.svg'},
  { name: 'TailwindCSS', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original-wordmark.svg'},
  { name: 'React Native', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg'},
  { name: 'Ionic', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/ionic/ionic-original.svg'},
  { name: 'Bootstrap', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg'},

]

const TOOLS = [
  { name: 'Unity 3D C#', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/unity/unity-original.svg'},
  { name: 'Wordpress', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/wordpress/wordpress-plain.svg'},
  { name: 'Sketch', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sketch/sketch-original.svg'},
  { name: 'Figma', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg'},
  { name: 'Android Studio', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/androidstudio/androidstudio-original.svg'},
  { name: 'Xcode', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/xcode/xcode-original.svg'},
]

const DEVOPS = [
  { name: 'GitHub Actions', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/githubactions/githubactions-original.svg'},
  { name: 'AWS', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-plain-wordmark.svg'},
  { name: 'Terraform', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/terraform/terraform-original.svg'},
  { name: 'Docker', iconUrl: 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original.svg'},
]
</script>

<template>
  <p class="text-2xl mt-16 mb-8">
    Technical Skills
  </p>

  <p class="text-m mb-4 mt-8">
    Languages
  </p>

  <TagWithIcon
    v-for="(singleLanguage, index) in LANGUAGES"
    :key="`tagWithIcon-language-${index}`"
    :label="singleLanguage.name"
    :iconUrl="singleLanguage.iconUrl"
  />

  <p class="text-m mb-4 mt-8">
    Frameworks and Libraries
  </p>

  <TagWithIcon
    v-for="(singleFramework, index) in FRAMEWORKS_LIBRARIES"
    :key="`tagWithIcon-frameworks-${index}`"
    :label="singleFramework.name"
    :iconUrl="singleFramework.iconUrl"
  />

  <p class="text-m mb-4 mt-8">
    Tools
  </p>

  <TagWithIcon
    v-for="(singleTool, index) in TOOLS"
    :key="`tagWithIcon-tool-${index}`"
    :label="singleTool.name"
    :iconUrl="singleTool.iconUrl"
  />

  <p class="text-m mb-4 mt-8">
    DevOps and Cloud
  </p>

  <TagWithIcon
    v-for="(singleDevop, index) in DEVOPS"
    :key="`tagWithIcon-devop-${index}`"
    :label="singleDevop.name"
    :iconUrl="singleDevop.iconUrl"
  />
</template>
