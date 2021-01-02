<template>
    <div>
       <div class="container-fluid">
        <div class="d-flex justify-content-center my-4"><h2>SHOPPING CART</h2></div>
        <div class="d-flex justify-content-between mt-5 ml-3">
            <router-link :to="{name:'collection'}" class="nav-link text-dark">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg> COTINUE SHOPPING

            </router-link>
        </div>
      </div>
        
      <table class="table" id='crt' style="margin-bottom: 100px;">
        <thead class="mt-2" style="background: #9E9E9E;">
          <tr>
            <th scope="col">PRODUCT</th>
            <th scope="col">TITLE</th>
            <th scope="col">PRICE</th>
            <th scope="col">QTY</th>
            <th scope="col">TOTAL</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in cartProducts" :key="product.id">
              <td>
                <img :src="product.image" alt="" class="mx-0 my-0 mr-0 ml-0" style="width: 100px; height: 100px;"/>
                </td>
                <td>{{product.title}}</td>
                <td>{{product.price | currency}}</td>
                <td>{{product.quantity}}</td>
                <td>{{product.price | currency }} x {{product.quantity}}</td>
                <td><button @click="deleteItem(product.id)" class="btn btn-light  remove" name="'+data.id+'"><span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></span></button></td>
          </tr>

        </tbody>
      </table>

      <div class="d-flex justify-content-end mr-3 mb-3" >
         
        <span>Total:</span>
        <h3 class="ml-2" id="total">{{cartTotalPrice | currency }}</h3>
               
         </div>
     
      <div class="d-sm-flex justify-content-end mr-2 mb-5">
           
     <button :disabled="!cartProducts.length" @click="checkout(cartProducts)"  class="btn btn-primary w-25 ml-auto" id="checkout">PROCEED TO CHECKOUT</button>
            
      </div> 
    </div>
</template>

<script>
import { mapGetters, mapActions, mapState } from 'vuex'
export default {
  filters: {
    currency: function (value){
      var formatter = new Intl.NumberFormat('en-US', {
          style: 'currency',
          currency: 'NGN',
          minimumFractionDigits: 0, 
  
        });

        return value = formatter.format(value)
      }
  },
  computed: {
    ...mapGetters('Cart', ["cartProducts", "cartTotalPrice"]),
    ...mapState('Auth', {
      token: state => state.token
    })
  },
  methods: {
       checkout (products) {
         if (this.token == '') {
           this.$router.push('/login') 
         }else{
           this.$store.dispatch('Cart/checkout', products)
           this.$router.push('/order-summary')   

         }
          
    },
      deleteItem (id) {
      this.$store.dispatch('Cart/removeItemFormCart', id)
    }
  
  },
 
}
</script>