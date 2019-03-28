<template>
    <div class="container" style="margin-top:50px;">
    <form id="signup-form" @submit.prevent="processForm">
    <input   type="text"  class="input"  name="postcode"  v-model="postcode" >
    <input   type="text"  class="input"  name="make"  v-model="make">
    <input   type="text"  class="input"  name="model"  v-model="model">

    <v-select multiple v-model="makes" @change="changeType" placeholder="Makes..." :options="['Abarth', 'Alfa Romeo', 'Alpine ', 'Aston Martin', 'Audi', 'Austin ', 'BMW', 'Bentley', 'Caterham', 'Cadillac', 'Chevrolet', 'Chrysler', 'Citroen', 'Dacia', 'Daewoo', 'Daihatsu', 'Daimler', 'Dodge', 'Ds', 'Ferrari', 'Fiat', 'Ford', 'Great Wall', 'Honda', 'Hummer ', 'Hyundai', 'Infiniti', 'Isuzu', 'Iveco', 'Jaguar', 'Jeep', 'Kia', 'LDV ', 'Lamborghini', 'Land Rover', 'Lexus', 'Lotus', 'MG', 'Mini', 'Maserati', 'Maybach ', 'Mazda', 'McLaren', 'Mercedes-Benz', 'Mitsubishi', 'Morgan ', 'Nissan', 'Noble ', 'Peugeot', 'Porsche', 'Proton', 'Reliant ', 'Renault', 'Rolls-Royce', 'Rover', 'Saab', 'Seat', 'Skoda', 'Smart', 'Ssangyong', 'Subaru', 'Suzuki', 'TVR', 'Tesla', 'Toyota', 'Vauxhall', 'Volkswagen', 'Volvo']"></v-select>
     <input type="hidden" v-model="makes" name="makes" />
    <button type="submit" class="button is-danger">Submit</button>
      <button @click="changeType">Reset</button>
    </form>
        
        <div class="row justify-content-center" >

              <div  class="col-sm-6 col-md-4 col-lg-3" v-for="item of cars">
                  
                  <div class="card">
                  
                    <div class="card-header text-white-50 bg-dark text-center">{{item.make}} {{item.model_family}}</div>
                       
                       <div class="card-body text-center  ">
                       
                           <a v-bind:href="'/used-cars/for-sale/'+item.slug" target="_blank">

                              <img class="card-img-top" :src="item.default_image" :alt="item.model" />

                              {{item.year}} - {{item.model}}
                           </a> 
                       </div>
                       
                    </div>

              </div>


        </div>
        <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>
   
    </div>
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