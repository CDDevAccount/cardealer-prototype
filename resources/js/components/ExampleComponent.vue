<template>
    <div class="container" style="margin-top:50px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><strong> Car Dealer Vue JS Infinite Scroll</strong></div>
 
                    <div class="card-body">
                        <div>
                          <p v-for="item in list">
                            <em>{{item.make}}</em> <a v-bind:href="'https://www.cardealer.co.uk/vehicle/'+item.slug" target="_blank">{{item.model}}</a>
                          </p>
                          <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              list: [],
              page: 1,
            };
          },
          methods: {
            infiniteHandler($state) {
                let vm = this;
 
                this.$http.get('/car?page='+this.page)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        $.each(data.data, function(key, value) {
                                vm.list.push(value);
                        });
                        $state.loaded();
                    });
 
                this.page = this.page + 1;
            },
          },
    }
</script>