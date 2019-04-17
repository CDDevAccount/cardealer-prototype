<template>
<div class="search-overlay">
    <div data-advanced-search="main" class="o-search o-search--home">
        <form method="get" action="/search">
            <div class="inner-wrapper">
                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <div id="header_form">
                    <div class="container">
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
 
                                <input type="text" id="postcode" placeholder="Post code" required name="postcode"  v-model="postcode" >
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">

                                <select name="make" id="make"  @change="changeMake" v-model="make" >
                                    <option value="">Any make</option>
                                    <option v-for="make in makes">{{ make.make }}</option> 
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <select name="model" id="model" v-model="model">
                                    <option v-for="model in models">{{ model.model }}</option>
                                    <option value="">Any model</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <select name="budgetmin" id="budgetmin" v-model="budgetmin">
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <select name="budgetmax" id="budgetmax" v-model="budgetmax">
                                    <option value="1000000">1000000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="button-group button-group--search">
                                <button type="submit" class="btn"><span aria-hidden="true"class="fa fa-search"></span>
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</template>
<script>
    import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
          axios
            .get('/get-make-list')
            .then(response => (this.makes = response.data.makes))
            .catch(error => {
              console.log(error)
              this.errored = true
            })
            .finally(() => this.loading = false)
        },
        data() {
            return {
              makes:'',
              model:'',
              make:'',
              postcode:'',
              models:'',
              cars: [],
              budgetmin:0,
              budgetmax:0,
              page: 1,
            };
          },
          methods: {
            changeMake(){
                this.$http.get('/get-model-list?make='+this.make)
                .then(response => (this.models = response.data.models))
                .catch(error => {
                  console.log(error)
                  this.errored = true
                })
                .finally(() => this.loading = false)
            },
            infiniteHandler($state) {
                let vm = this;
 
                this.$http.get('/filter?page='+this.page)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        $.each(data.data, function(key, value) {
                                vm.cars.push(value);
                        });
                        $state.loaded();
                    });
 
                this.page = this.page + 1;
            },
            processForm: function(){
                let vm = this;
                axios.post('/setfilter', {
                    make: vm.make,
                    model: vm.model,
                    makes: vm.makes,
                    postcode:vm.postcode,

                })
                .then(data => {
                        console.log('finished');
                  });
             

            },
            changeType() {
              this.page = 1;
              this.cars = [];
              this.infiniteId += 1;
            },
          },
    }
</script>