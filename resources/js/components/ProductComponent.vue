<template>
    <div>    
          <hr >
        <div class="d-flex justify-content-between mb-4">
            <h1 class="zz-heading ml-5">PRODUCTS</h1>
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-sliders mr-5 mt-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
              </svg>
        </div>
        <hr >
        <div class="container">

            <!-- product section     -->
       <div class="row row-cols-1 row-cols-md-3 mb-4 p-0">
        <div class="col mb-4" v-for="product in products" :key="product.id">
         <div class="card text-center border-0 p-0" >
             <img  :src='product.image' class="card-img-top mx-auto"  style="height: 312px; width: 312px; background-repeat: no-repeat; background-size: cover;">
             
           <div class="card-body mt-3">
             <h6 class="card-text">{{product.name}}</h6>
             <h5 class="card-title" id="prs">{{ product.price | currency }}</h5>
            <button @click="addProductToCart(product)" class="btn btn-outline-primary">
                          
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket mb-1 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                </svg>Add To Cart</button>
            
              <div>

                <router-link :to="{name: 'product-detail', params: {id: product.id }}">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                  </svg>
                </router-link>
              </div>
           </div>
 
         </div>
       </div>
 
       </div>

        </div>
         

     <div class="zz-newsletter">
        <!-- New letter section  -->
        <div class="container">
    
            <h4 class="zz-newsletter-heading pt-5">NEWSLETTER SIGNUP</h4>
            <p class="zz-newsletter-content mx-3 p-2">Sign up for our e-mail and be the first who know of our special offers! 
                Furthermore, receive a unique discount on your next order after you sign up.
                </p>
                
            <div class="row">
                <div class="col-3">
    
                </div>
                <div class="col-md-8 col-sm col-lg-6">
                    <div class="input-group mb-5">
                        <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">SUBSCRIBE</span>
                        </div>
                    </div>
                </div>   
            </div>

            
        </div>
    
        </div>
 

 </div>
</template>

<script>
import { mapState, mapActions } from 'vuex';

export default {

    filters:{
      currency: function (value){
      var formatter = new Intl.NumberFormat('en-US', {
          style: 'currency',
          currency: 'NGN',
          minimumFractionDigits: 0, 
  
        });

        return value = formatter.format(value)
      }
    },
    methods: {
       ...mapActions('Cart', ["addProductToCart"]),
    },
    computed:  mapState('Product', {
      products: state => state.all
    }),
    created() {
      this.$store.dispatch('Product/getAllProducts')
    },
}
</script>
