<template>
    <main>
        <!-- <Header /> -->
        <div class="container">
            <div class="row">
                 <router-view/> 
                <!-- <div class="col-md-12 mx-auto mt-5">
                    <div class="card">
                        <div class="card-body">
                             <router-view/> 
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </main>
   
</template>
<script>
    import Header from './components/Header.vue';
    export default{
        components: {
            Header
        }
    }
</script>
