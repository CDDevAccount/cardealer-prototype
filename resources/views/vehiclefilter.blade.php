 <div align="center" >  
 	{!! Form::open(['url' => '/search/','method' => 'get']) !!}


      <div ng-app="carapp" ng-controller="carcontroller" ng-init="loadMake()">  
           <input type="text" name="postcode" class="form-control" placeholder="Post Code" value="{{ old('postcode') }}">
           <br>

          <select name="make" ng-model="make" class="form-control" ng-change="loadModel()">  
                <option value="">Select Manufacturer</option>  
                <option ng-repeat="make in makes" value="<% make.make %>"><% make.make %></option>  
          </select>  
          
          <br />  

          <select name="model_family" ng-model="model" class="form-control" ng-change="loadCity()">  
                <option value="">Select Model</option>  
                <option ng-repeat="model in models" value="<% model.model %>"><% model.model %></option>   
          </select>  

           <br /> 

          <select name="model_type" ngModel="shape" class="form-control" ng-init="loadBodies()">  
                <option value="">Select Body Type</option>  
                <option ng-repeat="shape in shapes" value="<% shape.model_type %>" ><% shape.model_type %></option>   
          </select>  
          
          <br>
             <input type="text" name="minprice" class="form-control" placeholder="Min Price" value="{{ old('minprice') }}">
             <br>
             <input type="text" name="maxprice" class="form-control" placeholder="Max Price" value="{{ old('maxprice') }}">
           <br>
             <input type="text" name="fuel" class = "form-control" placeholder="Fuel Type" value="{{ old('fuel') }}">
          
      </div> 
    <br>
	  <button class="btn btn-md btn-outline-info" type="submit" value="Search Now">Search Now!</button>
	 
	 {!! Form::close() !!}
 </div>  
 <!--
 <div>
    {!! Form::open(['url' => '/search/','method' => 'post']) !!}
              <select name="model_type" ngModel="shape" class="form-control" ng-init="loadBodies()">  
                <option value="">Select Body Type</option>  
                <option ng-repeat="shape in shapes" value="Hatchback" >Hatchback</option>  
                <option ng-repeat="shape in shapes" value="Estate" >Estate</option>  
                <option ng-repeat="shape in shapes" value="Coupe" >Coupe</option>  
                <option ng-repeat="shape in shapes" value="Saloon" >Saloon</option>  
                <option ng-repeat="shape in shapes" value="Van" >Van</option>  
                <option ng-repeat="shape in shapes" value="MPV" >MPV</option>  
                <option ng-repeat="shape in shapes" value="Convertible" >Convertible</option>  
                <option ng-repeat="shape in shapes" value="SUV" >SUV</option>  
              </select>  
           <button class="btn btn-md btn-outline-info" type="submit" value="Search Now">Filter</button>
    {!! Form::close() !!}
  </div>
-->
<script>  

  var app = angular.module('carapp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    app.controller("carcontroller", function($scope, $http){  

      $scope.loadMake = function(){  
         var url="{{url('get-make-list')}}";
         $http.get(url)  
         .success(function(data){  
              $scope.makes = data;  
         })  
      }  

      $scope.loadModel = function(){ 
           var url="{{url('get-model-list')}}?make="+$scope.make; 
           $http.get(url)  
           .success(function(data){  
                $scope.models = data;  
           })  
      }
      $scope.loadBodies=function(){
           var url="{{url('get-body-list')}}"; 
           $http.get(url)  
           .success(function(data){  
                $scope.shapes = data;  
           })  
      }  
/*
      $scope.loadCity = function(){  
           var url="{{url('get-city-list')}}?state_id="+$scope.state
           $http.get(url)  
           .success(function(data){  
                $scope.cities = data;  
           });  
      } 
      
      $scope.loadCars=function(){
          var url="{{url('get/loc')}}?pcode="+$scope.pcode
          $http.get(url)
          .success(function(data){
              $scope.cars = data;
          });
      } 
 */ 
 });  

 </script>