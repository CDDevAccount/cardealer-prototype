<!DOCTYPE html>
 <html>  
  <head>  
       <title>Dependent Dynamic dropdown using Angular Js and Laravel 5.6 - ExpertPHP.in</title>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>  
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  </head>  


  <body>  
     <div class="container" style="width:500px;">  
          <h3 align="center">Dependent Dynamic dropdown using Angular Js </h3>  
          <br />  
          <div ng-app="demoapp" ng-controller="democontroller" ng-init="loadMake()">  
             <select name="make" ng-model="make" class="form-control" ng-change="loadModel()">  
                  <option value="">Select Manufacturer</option>  
                  <option ng-repeat="make in makes" value="<% make.make %>"><% make.make %></option>  
             </select>  
             <br />  
             <select name="model_family" ng-model="model" class="form-control" ng-change="loadCity()">  
                  <option value="">Select Modelaa</option>  
                  <option ng-repeat="model in models" value="<% model.model %>"><% model.model %></option>   
             </select>  
             <br />  
             <select name="city" ng-model="city" class="form-control">  
                  <option value="">Select city</option>  
                  <option ng-repeat="city in cities" value="<% city.id %>">  
                       <% city.name %>
                  </option>  
             </select>  
          </div>  
     </div>  
  </body>  


 </html>  


 <script>  

var app = angular.module('demoapp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });


 app.controller("democontroller", function($scope, $http){  

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


      $scope.loadCity = function(){  
           var url="{{url('get-city-list')}}?state_id="+$scope.state
           $http.get(url)  
           .success(function(data){  
                $scope.cities = data;  
           });  
      }  


 });  


 </script>