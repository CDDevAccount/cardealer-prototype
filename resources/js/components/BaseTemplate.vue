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