<template>
<div class="container">
    <div class="row align-items-center height-100vh">
        <div class="col-4 mx-auto max-width-none">
            <div class="card w-400 boder-0 login-width">
                <div class="card-body">
                    <div class="form-group col-12">
                        <h5>Sign into your account</h5>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="form-group flexbox py-3 from-style">
                            <div class="custom-control custom checkbox pl-0">
                                <input type="checkbox" name="remember"> Remember Me
                            </div>                
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="form-row">
                            <div class="form-group">Don't have a account? <a href="">Create Account</a></div>
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
            name: "LoginComponent"
    }
</script>

<style scoped>

</style>