<template>

            <section class="show_car_S">

                    <div class="flex_dr" v-for="item of cars">

            <div class="title_Car__detailss">
                <div class="flex">
                    <div class="flex_1">
                        <img :src="'/images/'+item.make+'-logo.png'" :alt="item.make">
                    </div>
                    <div class="flex_2">
                        <div class="results-title__wrapper">
                            <h2 class="results-title__heading">
                                <a v-bind:href="'/used-cars/for-sale/'+item.slug">{{item.make}} {{item.model}}</a>
                            </h2>
                            <div class="results-title__variant">{{item.year}} {{item.model}}</div>
                        </div>
                    </div>
                </div>
            </div>





                        <div class="row" >
                            <div class="col-md-4 col-sm-6">
                                <a v-bind:href="'/used-cars/for-sale/'+item.slug" title:item.make class="results-image__link">
                                    <div class="maintain-ratio">
                                        <div class="ratio-content">
                                            <img :src="item.default_image" class="" :alt= "item.make+item.model"  > 
                                            <div class="results-images__ref">{{item.registration}}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4  col-sm-6">
                                <a v-bind:href="'/used-cars/for-sale/'+item.slug">
                                    <div class="maintain-ratio">
                                        <div class="ratio-content">
                                            <img :src="item.default_image" class="" :alt= "item.make+item.model"  > 
                                        </div>

                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4  col-sm-12">

                                <div class="results-prices">
                                    <div class="results-prices__cash-block">
                                        <div class="results-prices__label">Price</div>
                                        <div class="results-prices__cash">£{{item.price}}</div>
                                        <div class="results-prices__saving"></div>
                                    </div>
                                    <div class="results-prices__finance-block">
                                        <div class="results-prices__label">Monthly</div>
                                        <!-- <div class="results-prices__finance">&pound;1651.28</div> -->
                                        <div class="results-prices__finance">
                                            <div>£1651.28 <span>(HP)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns_zzeq">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#" title="Apply for finance" class="btn btn--feature-2 btn-block"><i class="far fa-check-circle"></i></i> Get my FREE Motor Finance Check</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" title="Apply for finance" class="btn btn--feature-2 btn-block">Build & Save Your Deal</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" title="Apply for finance" class="btn btn--feature-2 btn-block">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="results-icons results-icons--loc-18">
                                <ul class="results-icons__list">
                                    <li><span class="spec-icon"><img src="/images/year.png" alt="Year"></span>{{item.year}}</li>
                                    <!-- year -->
                                    <li><span class="spec-icon"><img src="/images/fuel.png" alt="Fuel"></span>{{item.fuel_type}}</li>
                                    <!-- fuel -->
                                    <li><span class="spec-icon"><img src="/images/engine.png" alt="Engine"></span>{{item.engine_size}}</li>
                                    <!-- engine -->
                                    <li><span class="spec-icon"><img src="/images/mileage.png" alt="Mileage"></span>{{item.mileage}}</li>
                                    <!-- Mileage -->
                                    <li><span class="spec-icon"><img src="/images/road-tax.png" alt="Road Tax"></span>road tax</li>
                                    <!-- Road Tax -->
                                    <li><span class="spec-icon"><img src="/images/body-type.png" alt="Body Type"></span>{{item.model_type}}</li>
                                    <!-- body type -->
                                    <li><span class="spec-icon"><img src="/images/doors.png" alt="Doors"></span>{{item.doors}}</li>
                                    <!-- doors -->
                                    <li><span class="spec-icon"><img src="/images/colour.png" alt="Colour"></span>{{item.colour}}</li>
                                    <!-- colour -->
                                    <li><span class="spec-icon"><img src="/images/transmission.png" alt="Gearbox"></span>{{item.transmission}}</li>
                                    <!-- transmission -->
                                </ul>
                            </div>

                        </div>
                    </div>
                    <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>

            </section>

</template>
<script>
    import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
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