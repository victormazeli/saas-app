<template>
    <div class="py-4">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
           
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <router-link :to="{name:'home'}" class="nav-link text-dark">Home</router-link>
                    </li>
                    <li class="nav-item">
                     <router-link :to="{name:'collection'}" class="nav-link text-dark">Products</router-link>
                    </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link text-dark" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg> Search</a>
                    </li>
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-dark dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Account <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <router-link :to="{name:'login'}" class="dropdown-item">
                                        Login
                                    </router-link>
                                 
                                    <router-link :to="{name:'register'}" class="dropdown-item">
                                        Register
                                    </router-link>
                                

                                </div>
                            </li>
                   <li class="nav-item">
                     <router-link :to="{name:'cart'}" class="nav-link text-dark">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg> Cart <span class="badge badge-pill badge-primary p-1" id="crtno">{{count}}</span>
                    </router-link>
                   </li>
                    </ul>
                        
                </div>
            </div>
        </nav>
    <router-view></router-view>
    <!-- <transition name="fade">
        
    </transition>
    <vue-progress-bar></vue-progress-bar> -->
            
        
    </div>
</template>
<script>
import { mapState } from 'vuex';
export default {
    computed: {
        ...mapState('Cart', {
        count: state => state.itemCount
         })
    }
 
}

</script>