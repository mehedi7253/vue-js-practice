import { createRouter, createWebHistory } from "vue-router";
import Home from './Home.vue'
import AddMember from './pages/AddMember.vue'
import Editmember from './pages/Editmember.vue'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
         meta: {
            title: 'Shombhob.com Meal System',
            page: 'Home'
        }
    },
    {
        path: '/add-member',
        name: 'Add Member',
        component: AddMember,
         meta: {
            title: 'Add Member',
            page: 'Add Member'
        }
    },
    {
        path: '/edit-member/:id',
        name: 'edit',
        component: Editmember,
         meta: {
            title: 'Update Member Details',
            page: 'Update Member Details'
        }
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
});

router.beforeEach((toRoute, fromRoute, next) => {
    window.document.title = toRoute.meta && toRoute.meta.title ? toRoute.meta.title : 'Home';
    next();
});

export default router;
