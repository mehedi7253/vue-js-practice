<template>
    <div>
        <div class="row">
            <div class="col-md-5 col-sm-12 mt-5 float-left">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-7 col-sm-12 float-left">
                            <h3>Add Member</h3>
                        </div>
                        <div class="col-md-5 col-sm-12 float-left">
                            <h3>Home</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form ref="form_1" @submit.prevent="AddMember">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter Name" v-model="member.name">
                                <span class="text-danger " v-if="errors.name">
                                    {{ errors.name[0] }}
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success mt-2" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 mt-5 float-left">
                <div class="card">
                    <div class="card-header">
                        <h3>Manage Member </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="tab table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr v-for="member in members" :key="member.id">
                                        <td>{{ member.name }}</td>
                                        <td v-if="member.status == '1'" class="text-center"><span class="text-success">Active</span></td>
                                        <td v-if="member.status == '0'"  class="text-center"><span class="text-danger">In-Active</span></td>
                                        <td>
                                            <router-link :to="{name: 'edit', params:{id:member.id}}" class="btn btn-info">Edit</router-link>
                                            | <a @click="deleteMember(member.id)" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
            member:{
                name: '',
            },
            members: [],
            errors: {},
        }
    },
    methods: {
        allMember() {
            axios.get('/api/members')
                .then(({ data }) => (this.members = data))
                .catch()
        },
        AddMember() {
            axios.post('/api/members/add', this.member)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href = '/add-member';
                        this.$refs.form_1.reset();
                        this.$toast.success('Member Added Successfully')
                    }
                })
                .catch(error => this.errors = error.response.data.errors)
        },
        deleteMember(id) {
            axios.delete('/api/members/'+id)
                .then((response) => {
                    if (response.status == 200) {
                        let i = this.members.map(data => data.id).indexOf(id);
                        this.members.splice(i, 1);
                        this.$toast.success('Member Remove Successfully')
                    }
                })
                .catch(error => this.errors = error.response.data.errors)
        }
    },
    created() {
        this.allMember();
    }
        
    }
</script>
