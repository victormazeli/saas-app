import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from "vuex-persistedstate";
import Cart from './modules/cart';
import Product from './modules/product';
import Auth from './modules/auth';
import Order from './modules/order';

Vue.use(Vuex)

export const store = new Vuex.Store({

    modules:{
        Cart,
        Product,
        Auth,
        Order
    },
    plugins: [createPersistedState()]


})