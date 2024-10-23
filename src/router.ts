import { createRouter, createWebHistory } from 'vue-router';
import KnowledgePage from './views/KnowledgePage.vue';
import PortfolioComponent from './views/PortfolioPage.vue';
import ResumeComponent from './views/ResumePage.vue';
import ProfileComponent from './views/ResumePage.vue';

const routes = [
    { path: '/', component: ProfileComponent },
    { path: '/profile', component: ProfileComponent },
    { path: '/knowledge', component: KnowledgePage },
    { path: '/portfolio', component: PortfolioComponent },
    { path: '/resume', component: ResumeComponent },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
