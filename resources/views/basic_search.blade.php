<div class="search-overlay">
    <div data-advanced-search="main" class="o-search o-search--home">
        <form method="get" action="/search">
            <div class="inner-wrapper">
                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <div id="header_form">
                    <div class="container">
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
 
                                <input type="text" id="postcode" placeholder="postcode" required name="postcode"  v-model="postcode" >

                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">

                                <select name="make" id="make">
                                    <option v-for="make in makes">{{ make }}</option>
                                    <option value="">Any make</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <select name="model" id="model" >
                                    <option v-for="model in models">{{ model }}</option>
                                    <option value="">Any model</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <select name="budgetmin" id="budgetmin" >
                                    <option value="1">Price (Min)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <select name="budgetmax" id="budgetmax" >
                                    <option value="1000">Price (Max)</option>
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

<script>
    import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
             let vm = this;

            this.$http.get('/get-make-list)
                .then(response => {
                    return response.json();
                }).then(data => {
                    $.each(data.data, function(key, value) {
                            vm.makes.push(value);
                    });
                    $state.loaded();
                });
        },
        data() {
            return {
              make:'',
              model:'',
              postcode:'',
              makes:[],
              cars: [],
              page: 1,
            };
          },
          methods: {
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