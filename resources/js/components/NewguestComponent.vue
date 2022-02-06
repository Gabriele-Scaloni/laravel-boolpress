<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> ci sono {{ employee.lenght }} Guests</div>

                    <div class="card-body">
                        <h3>List: </h3>
                        <ul>
                            <li v-for="employee, i in employees" :key="i">
                                {{employee.id}} {{employee.first_name}}   {{employee.last_name}} 
                            </li>
                        </ul>
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
                employee = []
            };
        },
        mounted() {

            axios.get('/newguest/list')
            .then(res => {

                const data = res.data;

                this.employee = data.lenght;

            }).catch(err => {
                console.error(err)
            });
        }
    }
</script>
