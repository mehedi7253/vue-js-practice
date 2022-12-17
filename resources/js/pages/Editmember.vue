<template>
    <div>
        <div class="row">
            <div class="col-md-8 mx-auto mt-5 float-left">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12 col-sm-12 float-left">
                            <h5>Update Member Details </h5> <a class="btn btn-info float-right" href="/add-member">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form ref="form_1" @submit.prevent="updateMember">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter Name" v-model="members.name">
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
            members: [],
            errors: {},
        }
    },

    methods: {
        updateMember() {
            let id = this.$route.params.id
            axios.put('/api/update/'+ id, this.members)
                .then((response) => {
                    if (response.status == 200) {
                        this.$toast.success('Member Update Successfully');
                        this.$router.push({ name: 'add-member' });
                    }
                })
                .catch(error => this.errors = error.response.data.errors)
        }
    },
    created() {
        let id = this.$route.params.id
        axios.get('/api/edit/' + id)
            .then(({ data }) => (this.members = data))
            .catch(this.errors)
    }

}
</script>
