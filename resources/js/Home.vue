<template>
    <div>
      <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card" style="margin-top: 20%; border: 2px solid blue;">
                <div class="card-body text-center">
                    <router-link class="btn btn-info col-md-5 mt-2" to="/">Home</router-link><br />
                    <router-link class="btn btn-success col-md-5 mt-2" to="/add-member">Add Member</router-link><br />
                    <router-link class="btn btn-dark col-md-5 mt-2" to="/add-meal">Add Meal</router-link><br />
                    <router-link class="btn btn-dark col-md-5 mt-2" to="/">Report</router-link><br />
                </div>
            </div>
        </div>
      </div>
    </div>
</template>
<script>
    import { VueImageZoomer } from 'vue-image-zoomer'
    import 'vue-image-zoomer/dist/style.css';

    export default {
        name: 'App',
        components: {
            VueImageZoomer
        }
    }
</script>
<style scoped>

</style>
