<template>
  <SectionHeader title="Professional Experience" />

  <div class="section-wrapper">
    <ResumeSingleElement
      title="Senior Developer Consultant"
      description="Acting as a Senior Dev Consultant on a premium quality consultancy with very high 
      standards and sensible defaults on software delivery and culture shift, my role is focused delivering 
      exceptional impact for all clients we engage with."
      :keyResponsibilities="[
        'Shaping technical strategy and mentoring teams to build scalable cloud-native architectures with modern CI/CD practices',
        'Setting technical direction, ensuring best practices, and mentoring developers for high-quality software delivery',
        'Driving stakeholder engagement to enhance account growth, profitability, and strategic alignment',
        'Advocating and mentoring on Agile methodologies and sensible defaults for collaboration improvement',
        'Bridging technical knowledge gaps and business requirements, maintaining stakeholders at the center of every decision and polishing team’s transparency',
        'Partnering with cross-functional teams and C-level leadership to resolve employee concerns, mediate conflicts, and drive impactful company-wide initiatives',
      ]"
      :keyAchievements="[
        'Strengthened client trust and team reputation. Team became the benchmark for excellence in an account of 200+ people',
        'Drove initiatives with C-level leadership, improving workforce satisfaction and increasing transparency in internal processes',
        'Implemented a streamlined process for external developers, accelerating software delivery and earning high praise from key client stakeholders.',
        'Guided the project manager in making a critical mobile architecture decision, leveraging my expertise in hybrid and native development to ensure the best-fit solution for the client’s scope. ',
        'Led intersectional DEI initiatives, raising awareness of challenges faced by LGBTQIA+ and underrepresented gender minorities. Enhanced the company’s DEI visibility and strengthened its reputation in Germany.',
      ]"
      techStack="Swift, SwiftUI, Vue, Typescript, Javascript, GraphQL, GitHub Actions, Terraform, AWS."
      office="Thoughtworks - Munich, Germany"
      period="2021 - now"
    />

    <ResumeSingleElement
      title="Mobile application developer"
      description="Acted as a Mobile and web applications developer and consultant on a 
      small customer-centric consultancy, offering customized solutions and support for 
      clients who needed insights to achieve their goals during the entire duration of 
      the app’s discovery, development, launch and feedback management phases."
      :keyResponsibilities="[
        'Empower clients to achieve their goals, either by developing a new application or by offering them Business Analysis support in order for them to evaluate their requirements ',
        'Translated technical concepts into actionable insights for non-technical stakeholders through effective communication and prototyping; ',
        'Developed design and mock-ups which fulfill the client’s needs and supports them achieving their goals ',
        'Fully supported upload and approval processes of new apps in Google’s Play Store and Apple’s App Store, making sure that the app complies with all the requirements needed ',
        'Managed Feedback and guided customer after app’s release ',
        'Internally developed new innovative apps in order to create a B2C business model to the company ',
      ]"
      :keyAchievements="[
        'Developed and launched over 10 customer mobile apps, achieving a 4.5+ average user rating. ',
        'Safeguarded 100% of customer’s engagement, all of them ending on a positive feedback and the generating new engagements ',
        'Improved company’s visibility online by releasing new self-owned apps and optimizing brand’s website SEO performance online. Raising conversion rates and new contracts from potential clients ',
      ]"
      techStack="React-Native, Ionic 1 and 3, Unity, Sketch, InVision, MongoDB, Node."
      office="app-affairs GmbH. - Munich, Germany"
      period="2017 - 2021"
    />

    <ResumeSingleElement
      title="Infrastructure internship"
      description="Worked for 1 semester in field services. Got experience in Computer
      infrastructure, user support, internal tools test protocol,
      hardware and software Rollout administration & execution,
      and network maintenance."
      :keyResponsibilities="[
        'Managed hardware and leasing contracts',
        'Analyse budget decisions and implement initiatives to reduce costs',
        'Safeguard information and data security',
      ]"
      :keyAchievements="[
        'Rolled off over 300 hardware and software company-wide, ensuring all equipment was up-to-date and in good working order',
        'Fixed contract breaches and improved budget management, saving the branch 20% in leasing costs and fines',
        'Guided users on usage of new tools such as Microsoft Office 2012, improving productivity and reducing support requests',
      ]"
      techStack="Microsoft office, Windows, internal administration tools"
      office="Bosch-Rexroth Ltda. - Atibaia, Brazil"
      period="2015"
    />

    <ResumeSingleElement
      title="Research Scholarship"
      description="Contributed on improving UX and software maintenance
      on an Educational Flash-platform Game for children with Haemophilia. 
      The project was financed by PIBIC (Programa institucional de bolsas de 
      iniciação científica – Program of Scientific Initiation Scholarships) at Campinas
      State University (UNICAMP)."
      :keyResponsibilities="[
        'Improve User Experience through user testing, feedback and applying sensible defaults',
        'Write down findings and heavily document the research and its results',
      ]"
      :keyAchievements="[
        'Improved game receptibility by 100% through user testing and feedback',
        'Finished research with a very positive approval and guaranteed project funding for the next year',
      ]"
      techStack="Adobe Flash, Tortoise SVN, ActionScript"
      office="Campinas State University - Limeira, Brazil"
      period="2013 - 2014"
    />
  </div>
</template>

<script lang="ts" setup>
import ResumeSingleElement from "../components/ResumeSingleElement.vue";
import SectionHeader from "../components/SectionHeader.vue";

</script>
