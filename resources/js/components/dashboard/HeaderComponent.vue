<template>
<div class="main-header">
    <div class="logo-header">
        <a href="#">AppName</a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse">
            <i class="fa fabars"></i>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
    </div>
    <nav class="navbar nav-header navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav item dropdown">
                    <a id="navbarDropdown" href="#" class="nav-link dropdown-toggle" data-toggle="dropdwon" aria-haspopup="true" aria-expanded="false">
                        <img height="16" src="/img/default.jpg" alt="image">
                        <span>User Name</span>
                        </a> 
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                            <div class="user-box">
                                <div class="u-img"><img height="16" src="/img/default.jpg" alt="image"></div>
                                <div class="u-text">
                                    <h4>User Name</h4>
                                    <div class="text-muted">info@email.com</div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="/">Home</a>
                                <a href="/profile">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="/logout"></a>
                            </div>
                            </li>
                        </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
</template>

<script>
    export default {
            name: "HeaderComponent"
    }
</script>

<style scoped>

</style>