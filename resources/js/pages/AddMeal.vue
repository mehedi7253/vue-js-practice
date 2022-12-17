<template>
    <div>
        <div class="row">
            <div class="col-md-8 mx-auto mt-5 float-left">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">Add Meal </h5>
                    </div>
                    <div class="card-body">
                        <form action="" @submit.prevent="AddMeal">
                            <div class="form-group">
                                <label>Select Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Add </th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="member in members" :key="member.id">
                                            <td>
                                                <input type="checkbox" v-model="member.id">
                                            </td>
                                            <td>
                                                {{ member.name }}
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success mt-2" value="Submit">
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
    data() {
        return {
            meal: {
              date: '',
              user_id: '',  
            },
            members: [],
            errors: {},
        }
    },
    methods: {
        allMember() {
            axios.get('/api/all-members')
                .then(({ data }) => (this.members = data))
                .catch()
        },
        AddMeal() {
            
        }
    },

    created()
    {
        this.allMember();
    }
}
</script>
