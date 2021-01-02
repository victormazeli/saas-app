import VueRouter from 'vue-router';
import Vue from 'vue';
import {routes} from './route'
import 'nprogress/nprogress.css'
import Nprogress from 'nprogress'


Vue.use(VueRouter);

Nprogress.configure({ showSpinner: false });
Nprogress.configure({ easing: 'ease', speed: 500 });

export const router = new VueRouter({
    routes: routes,
    mode: "history"

});


router.beforeEach((to, from, next) => {
    // to and from are both route objects. must call `next`.
    if (to.name) {
        Nprogress.start();
    }
    next()
})

router.afterEach((to, from) => {
    // to and from are both route objects.
    Nprogress.done();
})

