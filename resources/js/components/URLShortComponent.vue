<template>
    <div>
       
            <div class="row">
                <div class="col-md-8" style="margin:auto;">
                    <form>
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-link" style="margin: 10px;"></i></span>
                            </div>
                            <input type="text" name="link" class="form-control" placeholder="Enter url">
                            <div class="col-md-2 mr-auto">
                                <button class="btn btn-primary btn-lg">Short URL</button>
                            </div>
                        </div>
                   </form>
                </div>
                
            </div>
        
    </div>
</template>

<script>
    export default {
            name: "URLSortComponent"
       
    }
</script>

<style scoped>

</style>
