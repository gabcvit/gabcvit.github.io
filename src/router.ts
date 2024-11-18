import { createRouter, createWebHistory } from 'vue-router';
import TechnicalSkillsPage from './views/TechnicalSkillsPage.vue';
import PortfolioPage from './views/PortfolioPage.vue';
import ProfessionalExperiencePage from './views/ProfessionalExperiencePage.vue';
import ProfilePage from './views/ProfilePage.vue';

export const routes = [
    { name: 'profile', path: '/', component: ProfilePage },
    { name: 'technical skills', path: '/technical-skills', component: TechnicalSkillsPage },
    { name: 'portfolio', path: '/portfolio', component: PortfolioPage },
    { name: 'professional experience',  path: '/professional-experience', component: ProfessionalExperiencePage },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
