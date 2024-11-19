import { createRouter, createWebHistory } from 'vue-router';
import PortfolioPage from './views/PortfolioPage.vue';
import ResumePage from "./views/ResumePage.vue";

export const routes = [
    { name: 'about', path: '/', component: ResumePage },
    { name: 'portfolio', path: '/portfolio', component: PortfolioPage },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
