<template>
<div class="container my-5">
<h2 class="text-center my-3">Lets Get Started</h2>
<p class="text-center my-2">Create an account and get amazing offers</p>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card border-0">
<form @submit.prevent="register" @keydown="form.onKeydown($event)">
     <div class="form-group row">
       <label for="name" class="col-md-3 col-form-label text-md-right"></label>
       <div class="col-md-6">
        <input v-model="form.name" type="text" name="name"
        class="form-control" :class="{'is-invalid': form.errors.has('name') }" placeholder="Enter Name">
      <has-error :form="form" field="name"></has-error>
    </div>
      
    </div>
    <div class="form-group row">
       <label for="email" class="col-md-3 col-form-label text-md-right"></label>
       <div class="col-md-6">
        <input v-model="form.email" type="text" name="email"
        class="form-control" :class="{ 'is-invalid': form.errors.has('username') }" placeholder="Enter Email Address">
      <has-error :form="form" field="email"></has-error>
    </div>
      
    </div>
 
    <div class="form-group row">
      <label for="password" class="col-md-3 col-form-label text-md-right"></label>
      <div class="col-md-6">
        <input v-model="form.password" type="password" name="password"
        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" placeholder="Enter Password">
      <has-error :form="form" field="password"></has-error>
      </div>
    </div>
<!-- <div class="form-group row">
<label for="password-confirm" class="col-md-3 col-form-label text-md-right"></label>

<div class="col-md-6">
 <input id="password-confirm" type="password" class="form-control" name="confirm password" required autocomplete="new-password" placeholder="Confirm Password">
</div>
</div> -->

<div class="form-group row mb-0">
<div class="col-md-8 offset-md-3">
<button :disabled="form.busy" type="submit" class="btn btn-primary btn-block w-75">Register</button>
                              
 </div>
</div>
<div class="form-group row">
<div class="col-md-6 offset-md-6">

 <span>Already a User?</span> <router-link :to="{name: 'login'}">LOGIN</router-link>
        
</div>
</div>

  </form>
</div>
</div>
</div>
</div>  
</template>

<script>
import { mapActions } from 'vuex'
export default {
    data() {
        return {
            form: new Form({
            name: '',
            email: '',
            password: '',
            // remember: false
            }),
        }
    },
    methods: {
       register () {
         this.form.post('/register').then(response => {
           console.log(response);

         }).catch((err)=>{
           console.log(err);
         });
        // this.$store.dispatch('Auth/register', this.form)
        }
    },
}
</script>