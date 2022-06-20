<template>
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-white text-white font-weight-bold">
          

                <a class="navbar-brand text-uppercase" href="/" style="font-size:30px">
                    URLShort
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                   <div class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/register">Register</a>
                            </li>
                            <li v-if="user !== 'null'" class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ user.name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#" @click.prevent="logout">
                                        Logout
                                    </a>
                                </div>
                            </li>
                   </div>


                </div>
           
        </nav>
</section>
</template>

<script>
    export default {
        props:['user'],
        mounted() {
           console.log(this.user)
        },
        methods:{
            logout(){
                axios.post('/logout', {}).then((res) =>{ location.href= '/'})
            }
        }// methods
    }
</script>
