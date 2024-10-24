import { createRouter, createWebHistory } from 'vue-router';
import KnowledgePage from './views/KnowledgePage.vue';
import PortfolioPage from './views/PortfolioPage.vue';
import ResumePage from './views/ResumePage.vue';
import ProfilePage from './views/ProfilePage.vue';

const routes = [
    { path: '/', component: ProfilePage },
    { path: '/profile', component: ProfilePage },
    { path: '/knowledge', component: KnowledgePage },
    { path: '/portfolio', component: PortfolioPage },
    { path: '/resume', component: ResumePage },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
