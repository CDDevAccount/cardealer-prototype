      
   <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   ?-->
 <div align="center">  
      <div ng-app="carapp" ng-controller="carcontroller" ng-init="loadMake()">  
         <select name="make" ng-model="make" class="form-control" ng-change="loadModel()">  
              <option value="">Select Manufacturer</option>  
              <option ng-repeat="make in makes" value="<% make.make %>"><% make.make %></option>  
         </select>  
         <br />  
         <select name="model" ng-model="model" class="form-control" ng-change="loadCity()">  
              <option value="">Select Model</option>  
              <option ng-repeat="model in models" value="<% model.model %>"><% model.model %></option>   
         </select>  
         <br />  

      </div>  
 </div>  


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