<template>
<div class="container my-5">
 <h2 class="text-center my-3">Welcome</h2>
<p class="text-center my-2">if you have an account with us, please log in</p>
  
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card border-0 mb-5">
<form @submit.prevent="login" @keydown="form.onKeydown($event)">
    <div class="form-group row">
       <label for="password" class="col-md-3 col-form-label text-md-right"></label>
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
    <div class="form-group row">
    <div class="col-md-6 offset-md-6">
    <a class="btn btn-link" href="">
    Forgot Your Password?
    </a>
<!-- <div class="form-check">
<input class="form-check-input" type="checkbox" name="remember" id="remember">

<label class="form-check-label" for="remember">
Remember Me
</label>
</div> -->
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-8 offset-md-3">
<button :disabled="form.busy" type="submit" class="btn btn-primary btn-block w-75">Log In</button>
                              
 </div>
</div>
<div class="form-group row">
<div class="col-md-6 offset-md-6">

<span>A new User?</span> <router-link :to="{name: 'register'}"> REGISTER</router-link>
        
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
            email: '',
            password: '',
            // remember: false
            }),
        }
    },
    methods: {
        login () {
           axios.get('/sanctum/csrf-cookie').then(response => {
            this.form.post('/login').then(response => {
                console.log(response);

            }).catch((err) => {
                console.log(err);
            });
        });
        // this.$store.dispatch('Auth/login', this.form)
        }
    },
}
</script>