<template>
<div>
      <div class="row p-5 m-0">
         <div class="cols-6">
        <div class="card  mt-4 p-2" style="width: 710px; height: 189px;">
          <div class="card-body">
              <h5 class="card-title">Contact Information</h5>
             <div class="container my-4">
                <div class="row">
                    <div class="col-md-2">
                      <label for="inlineFormInputName2">Email</label>
                    </div>
  
                    <div class="col-md-9">
                      <input type="text" class="form-control mb-2 mr-sm-2" id="email" :placeholder="orderSummary[0].customer.email" :value="orderSummary[0].customer.email" />
  
                    </div>
  
                </div>

             </div>
              
          </div>
      </div>    

      <div class="card mt-4 p-2" style="width: 710px; height: 600px;">
        <div class="card-body">
            <h5 class="card-title">Shipping Address</h5>
           <div class="container my-4">
              <div class="row">
                  <div class="col-md-2">
                    <label for="inlineFormInputName2">  Name</label>
                  </div>

                  <div class="col-md-9">
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" />

                  </div>

              </div>

              <!-- <div class="row">
                <div class="col-md-2">
                  <label for="inlineFormInputName2">Last Name</label>
                </div>

                <div class="col-md-9">
                  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" />

                </div>

            </div> -->

            <div class="row">
                <div class="col-md-2">
                  <label for="inlineFormInputName2">Address</label>
                </div>

                <div class="col-md-9">
                  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" />

                </div>

            </div>

            <div class="row">
                <div class="col-md-2">
                  <label for="inlineFormInputName2">State</label>
                </div>

                <div class="col-md-9">
                  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" />

                </div>

            </div>
            <div class="row">
                <div class="col-md-2">
                  <label for="inlineFormInputName2">City</label>
                </div>

                <div class="col-md-9">
                  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" />

                </div>

            </div>
            
            <div class="row">
                <div class="col-md-2">
                  <label for="inlineFormInputName2">Phone No.</label>
                </div>

                <div class="col-md-9">
                  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" />

                </div>

            </div>

            <!-- continue from here -->

           </div>

            
        </div>
    </div>   

    <!-- <div class="card  mt-5 mb-4 p-2" style="width: 710px; height: 189px;">
        <div class="card-body">
            <h5 class="card-title">Shipping Method</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  FLAT RATE - N1,200
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  CUSTOMER PICKUP - N1,200
                </label>
              </div>
        </div>
    </div> -->

     <paystack
    class="btn btn-primary w-50 mx-auto  mt-2 mb-4"
        :amount="kobo"
        :email="email"
        :paystackkey="paystackkey"
        :reference="reference"
        :callback="callback"
        :close="close"
        :embed="false"
    >
       Continue To Payment
    </paystack>

    <!-- <button type="button" id="pay" class="btn btn-primary w-50 mx-auto  mt-2 mb-4">Continue to Payement</button>         -->


         </div>

         <div class="cols-6">

          
      <div class="card bg-light mt-4 ml-4" style="width: 474px;">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5>Your Orders</h5>
            <h6>{{totalItem}} items</h6>
          </div>
          <hr class="w-100"/>

            <div class="container-fluid"> 
              
              <div class="row mt-4"  v-for="summary in orderSummary[0].items" :key="summary.id">
                <div class="col-3">
                  <img :src="summary.product.image" class=" img-fluid w-100 h-100" alt="...">
                </div>
                <div class="col-9">
                  <h5 class="">{{summary.product.name}}</h5>
                  <div class="row">
                    <div class="col-4">
                        <p class="">Qty:  {{summary.quantity}}</p>
                    </div>

                     <div class="col-8">
                        <p class="card-text">Unit price:  {{summary.product.price | currency }}</p>
                    </div>

                  <div class="row">
                     <div class="col-12 ml-3 ">
                        <p class="card-text">Total: {{compute(summary.product.price, summary.quantity) | currency }}</p>
                    </div>
                  </div>
              
                  </div>

               
                </div>

              </div>
              
            <hr/>
            
                <div class="row my-4">
                    <div class="col-4">
                        <p class="card-text">Sub Total</p>
                    </div>

                    <div class="col-6">
                        <p class="card-text">{{orderSummary[0].totalcost | currency }}</p>
                    </div>

                </div>
                <div class="row my-4">
                    <div class="col-4">
                        <p class="card-text">Shipping fee</p>
                    </div>

                    <div class="col-6">
                        <p class="card-text">0.00</p>
                    </div>

                </div>

                <div class="row my-4">
                    <div class="col-4">
                        <p class="card-text">Total:</p>
                    </div>

                    <div class="col-6">
                        <h4 class="card-text" id="total">{{orderSummary[0].totalcost | currency }}</h4>
                    </div>

                </div>

            </div>

          </div>
    </div>      



        </div>

       </div>
    
</div>
   
</template>
 
<script type="text/javascript">
import paystack from 'vue-paystack';
import {mapActions, mapGetters, mapState} from 'vuex';
export default {
    components: {
        paystack
    },
    data(){
        return{
          paystackkey: "pk_test_eaf64b6014125e31720c84847a937053c13586ac", //paystack public key
          // email: this.orderSummary[0].customer.email, // Customer email
          // amount: this.orderSummary[0].totalcost , // in kobo
          
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
    computed: {
      ...mapGetters('Order', ["orderSummary"]),
    //    ...mapState('Order', {
    //   orderSummary: state => state.summary
    // }),
        ...mapState('Auth', {
      token: state => state.token
    }),
    email(){
      if (this.orderSummary[0].customer.email == undefined) {
        return '';
      }else{
        return this.orderSummary[0].customer.email;
      }
    },
    kobo(){
      return parseInt(this.orderSummary[0].totalcost * 100);
    },
      reference(){
        let text = "";
        let possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
 
        for( let i=0; i < 10; i++ )
          text += possible.charAt(Math.floor(Math.random() * possible.length));
 
        return text;
      },
      totalItem(){
        let item = this.orderSummary[0].items.length;
        return item;
      }
    },
    methods: {
      // ...mapActions('Order', ["resetSummary"]),
      
      callback: function(response){
        const data1 =  {
            order_status_id: 2
          }
          const data2 =  {
            order_status_id: 4
          }
        const config =  {
            headers:{
              'Authorization': `Bearer ${this.token}`
            }
          }
        // console.log(token)
        if (response.status === 'success') {
          axios.put(`/orders/${this.orderSummary[0].id}`, data1)
          .then(response => this.$router.push('/'));
        }else{
            axios.put(`/orders/${this.orderSummary[0].id}`, data2)
            .then(response => console.log(response.data));
          
        }
        
        console.log(response)
        
      },
      close: function(){
          console.log("Payment closed")
      },
      compute: function(a, b){
        return a * b;
      },
      

    },
    created() {
      this.$store.dispatch('Order/getOrders');
      // this.$store.dispatch('Order/orderSummary');
      // console.log(this.orderSummary)
    },
   
}
</script>