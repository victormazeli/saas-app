<template>
        <div class="container">
            <div class="row  p-3">
              <div class="col-sm-6">
                <div class="card w-100 h-100">
                  <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img :src="detail.image" data-lightbox="image-1" class="d-block w-100" alt="..." width="512" height="512" id="imgid">
                      
                        </div>

                        
                        <div class="carousel-item">
                          <img src="#" class="d-block w-100" alt="..." width="512" height="512" id="imgid">
                      
                        </div>

                    
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
            
                    
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card w-100 h-100 border-0">
                  <div class="card-body">
                    <h3 class="card-title" id='proname'>{{detail.name}}</h3>
                    <h4 class="card-text" id="prs">{{detail.price | currency }}</h4>
                    <h6 class="card-text">Availability: {{detail.stock}} in stock</h6>
                    <hr/>
                    <!-- <input type="hidden" value="{{product.id}}" id="idp"> -->

                    <!-- <div class="row mt-3">
                      <div class="col-sm-6">
                        <h6 class="card-text" id='opn'>Select option</h6>
                  
                        </div>
                       
                        <div class="col-sm-6 mr-1 mt-1">
                          <select class="custom-select">
                            {% for var in variation %}
                            <option value="{{var.id}}" >{{var.value}}</option>
                            {% endfor %}
                            
                            
  
                          </select>
                        </div> 
    
                    </div> -->
                   

    
                    <div class="row mt-3">
                      <div class="col-sm-6">
                      <!-- <h6 class="card-text">Qty</h6> -->
    
                      </div>
                      <div class="col-sm-6 mr-1">
                        <div class="row">
                          <div class="col-sm-1 ">
                            <button class="btn btn-light mt-1 p-0 border-0" id='minus' style="width: 50px; height: 30px;"  @click="minusQtyBtn">-</button>
                          </div>
                          <div class="col-sm-1 ml-4">
                            <input type="text" class="mt-1" id="qt" style="width: 30px; outline: 0; text-align: center; border: none;" :value="qty" >
                          </div>
                          <div class="col-sm-1 mr-1">
                            <button class="btn btn-light mt-1 p-0 border-0" id='plus' style="width: 50px; height: 30px;" @click="plusQtyBtn">+</button>
                          </div>

                        </div>
    
                      </div>
    
                    </div>
                    <hr/>
    
                    <h6 class="card-text">DESCRIPTION</h6>
                    <P class="card-text">{{detail.short_description}}</P>
                    <hr/>
                    
                    <h6 class="card-text mt-2">EXTRA DETAILS</h6>
                    <P class="card-text">{{detail.product_detail}}</P>
                    <hr/>
    
    
                    <button @click="addProductToCart(detail)" type="button" class="btn btn-primary w-100" id="addcart">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket mb-1 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                      
                      ADD TO CART</button>
                  </div>
                </div>
              </div>
            </div>
 
    </div>
</template>
<script>
import { mapActions, mapState } from 'vuex';
export default {
    data() {
        return {
            qty: 1
        }
    },
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
  
      plusQtyBtn(){
        let value = this.qty;
        if (value < 100) {
          value = value +1;
          
        }else{
          value = 100;
        }
        this.qty = value;

      },
      minusQtyBtn(){
      let value = this.qty;
      if (value > 1) {
      value = value -1;

      }else{
      value = 0
      }

      this.qty = value;

      }
     
    },
    computed: mapState('Product', {
      detail: state => state.productDetail
    }),

     created() {
       this.$store.dispatch('Product/getProductDetail', this.$route.params.id);
    },

}
</script>