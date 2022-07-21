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
                        User Name <span class="caret"></span>
                        </a> 
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/">Home</a>
                            <a href="/profile">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="/logout"></a>
                        </div>
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