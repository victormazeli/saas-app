import Index from '../components/IndexComponent.vue';
import Products from '../components/ProductComponent.vue';
import ProductDetail from '../components/ProductDetailComponent.vue';
import Login from '../components/Login.vue';
import Register from '../components/Register.vue';
import Cart from '../components/CartComponent.vue';
import Pay from '../components/order-summary.vue';


export const routes = [
    {
        name:'home', 
        path: '/', 
        component: Index
    
    },
    {
        name:'collection', 
        path: '/collections', 
        component: Products
    
    },
    {
        name:'product-detail', 
        path: '/product-detail/:id', 
        component: ProductDetail
    },
    {
        name:'login', 
        path: '/login', 
        component: Login
    },
    {
        name:'register', 
        path: '/register', 
        component: Register
    },
    {
        name:'cart', 
        path: '/cart', 
        component: Cart
    },
    {
        name:'pay', 
        path: '/order-summary', 
        component: Pay
    },
];