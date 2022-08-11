<template>
<div class="container-fluid">
    <h4 class="page-title">Dashboard</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-stats card-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <div class="fa fa-link"></div>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="number">
                                <p>Short Links</p>
                                <h4 class="card-title">{{randomNumber()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stats card-info">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <div class="fa fa-users"></div>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="number">
                                <p>Users</p>
                                <h4 class="card-title">{{randomNumber()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stats card-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <div class="fa fa-sack-dollar"></div>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="number">
                                <p>Link Views</p>
                                <h4 class="card-title">{{randomNumber()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stats card-warning">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <div class="fa fa-arrows-rotate"></div>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="number">
                                <p>Guest Links</p>
                                <h4 class="card-title">{{randomNumber()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-sub">
                        <h6>My Links</h6>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Thomton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-stats card-default">
                <div class="card-body">

                    <div class="row" v-for="fund in funds">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <div class="fa fa-angle-right"></div>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="number">
                                <p>{{ fund.title }}</p>
                                <h4 class="card-title">{{randomNumber()}}</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
            name: "DashboardComponent",
            data() {
                return {
                    funds: [
                    { title: 'Add Fund' }, 
                    { title: 'Received' },
                    { title: 'Transfer' },
                    { title: 'Withdraw' },
                    ],
                    icons:  ['angle-down','angles-down','angle-right','angle-up'],
                }                
            },
            methods : {
                randomNumber : function(){
                return Math.floor(Math.random() * (100 - 1 + 1)) + 1;
                }
            }
    }
</script>

<style scoped>

</style>