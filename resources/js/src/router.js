import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: [
        {
            path: '/app', component: () => import("@/pages/RouterRoot"),
            children: [
                { path: 'page1', component: () => import("@/pages/app/Page1") },
                { path: 'page2', component: () => import("@/pages/app/Page2") },
                { path: 'page3', component: () => import("@/pages/app/Page3") },
                { path: 'page4', component: () => import("@/pages/app/Page4") },
                { path: 'page5', component: () => import("@/pages/app/Page5") },
                { path: 'page6', component: () => import("@/pages/app/Page6") },
                { path: 'settings', component: () => import("@/pages/app/Settings") },
            ]
        },
        { path: '*', redirect: '/app/page1' },
    ],
});

export default router;
