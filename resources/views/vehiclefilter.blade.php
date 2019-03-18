 <div align="center" >  
  
 


 	{!! Form::open(['url' => '/search/','method' => 'get']) !!}


      <div ng-app="carapp" ng-controller="carcontroller" ng-init="loadMake()">  

           <input type="text" name="postcode" class="form-control" placeholder="Post Code" value="{{ old('postcode') }}">
         
           <br>

          <select name="make" ng-model="make" class="form-control" ng-change="loadModel()">  
                <option value="">Select Manufacturer</option>  
                <option ng-repeat="make in makes" value="<% make.make %>" ><% make.make %>(<% make.total %>)</span></option>  
          </select>  
          
          <br />  

          <select name="model_family" ng-model="model" class="form-control" ng-change="loadBodies()">  
                <option value="">Select Model</option>  
                <option ng-repeat="model in models" value="<% model.model %>"><% model.model %>(<% model.total %>)</option>   
          </select>  

           <br /> 
          
          <select name="model_type" ng-model="Ttype" class="form-control" >  
                <option value="">Select Body Type</option>  
                <option ng-repeat="type in types" value="<% type.model_type %>" ><% type.model_type %>(<% type.total %>)</option>   
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

