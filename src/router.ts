import { createRouter, createWebHistory } from 'vue-router';
import KnowledgePage from './views/KnowledgePage.vue';
import PortfolioPage from './views/PortfolioPage.vue';
import ResumePage from './views/ResumePage.vue';
import ProfilePage from './views/ProfilePage.vue';

const routes = [
    { name: 'profile', path: '/', component: ProfilePage },
    { name: 'profile', path: '/profile', component: ProfilePage },
    { name: 'knowledge', path: '/knowledge', component: KnowledgePage },
    { name: 'portfolio', path: '/portfolio', component: PortfolioPage },
    {name: 'resume',  path: '/resume', component: ResumePage },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
