<template>
<div class="container">
    <div class="row align-items-center height-100vh">
        <div class="col-4 mx-auto max-width-none">
            <div class="card w-400 boder-0 login-width">
                <div class="card-body">
                    <div class="form-group col-12">
                        <h5>Create an account</h5>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" v-model="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" v-model="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" v-model="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="form-group">
                            <label for="password-confirmation">Confirm Password</label>
                            <input type="password" id="password-confirmation" v-model="password_confirmation" class="form-control" placeholder="Enter your confirm password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" @click.prevent="submitRegister">Signup</button>
                        </div>
                        <div class="form-row">
                            <div class="form-group">Already have an account? <a href="/login">Login</a></div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
            name: "RegisterComponent",
            data (){
                return{
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                }
            },
            mounted(){
                //console.log('register component')
            },
            methods: {
                submitRegister(){
                    //alert('Click worked')
                    //console.log(this.name)
                    axios.post('/register',{
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.password_confirmation
                    })
                    .then((res) => {
                        //console.log(res);
                        location.href= '/home'
                    })
                    .catch((error) => {
                        console.log(error);
                    })
                } // submitRegister
            } // methods
    }
</script>

<style scoped>

</style>