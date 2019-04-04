
<div class='col-lg-8 offset-lg-2'>
<div class="row">
    <div class="col-sm-6 col-md-8">
        <div>
            <h2 class="search__title"><i aria-hidden="true" class="fa fa-search"></i> Search</h2>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="budget-toggle">
            <h2 class="search__title">&pound; Price</h2>
            <div class="toggle-wrapper">
                <div class="price">Cash Price</div>
                <div class="form-group form-group--budgetswitch">
                    <input type="checkbox" class="a-toggle" name="budgetswitch" id="budgetswitch" data-search-field="" value="1" checked="">
                    <label for="budgetswitch" data-checked="Monthly Price" data-unchecked="Total Price"></label>
                </div>
                <div class="finance">Finance p/m</div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-8 a4_cols_mg_b">

            <div ng-app="carapp" ng-controller="carcontroller" ng-init="loadMake()"> 
            
            <div class="row">
                
                <div class="col-sm-3">
                    
                        <div class="form-group">
                             <select name="make" ng-model="make" class="form-control" ng-change="loadModel()">  
                                  <option value="">Manufacturer</option>  
                                  <option ng-repeat="make in makes" value="<% make.make %>" ><% make.make %>(<% make.total %>)</span></option>  
                            </select>  

                        </div>

                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select name="model_family" ng-model="model" class="form-control" ng-change="loadBodies()">  
                              <option value="">Select Model</option>  
                              <option ng-repeat="model in models" value="<% model.model %>"><% model.model %>(<% model.total %>)</option>   
                        </select>  
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Any Trim</option>
                        </select>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Any doors (204)</option>
                            <option value="0">0 Doors (10)</option>
                            <option value="2">2 Doors (17)</option>
                            <option value="3">3 Doors (9)</option>
                            <option value="4">4 Doors (90)</option>
                            <option value="5">5 Doors (78)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Any Colour (204)</option>
                            <option value="BLACK">Black (78)</option>
                            <option value="BLUE">Blue (30)</option>
                            <option value="dvla1">Buff (2)</option>
                            <option value="dvla2">Bronze (1)</option>
                            <option value="GREY">Grey (34)</option>
                            <option value="PURPLE">Purple (1)</option>
                            <option value="RED">Red (3)</option>
                            <option value="SILVER">Silver (27)</option>
                            <option value="SILVER/GRE">Silver/Grey (1)</option>
                            <option value="WHITE">White (27)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Any Transmission (204)</option>
                            <option value="automatic">Automatic (136)</option>
                            <option value="dvla2">Cvt (13)</option>
                            <option value="manual">Manual (37)</option>
                            <option value="Other">Other (1)</option>
                            <option value="dvla1">Semi Auto (17)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Any Fuel Type (204)</option>
                            <option value="diesel">Diesel (184)</option>
                            <option value="dvla5">Electric (2)</option>
                            <option value="dvla10">Electric Diesel (2)</option>
                            <option value="dvla9">Hybrid Electric (1)</option>
                            <option value="petrol">Petrol (15)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-md-4 a4_cols_mg_b">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control">
                        <option value="">Budget (Min)</option>
                        <option value="25">From £25</option>
                        <option value="50">From £50</option>
                        <option value="75">From £75</option>
                        <option value="100">From £100</option>
                        <option value="125">From £125</option>
                        <option value="150">From £150</option>
                        <option value="175">From £175</option>
                        <option value="200">From £200</option>
                        <option value="225">From £225</option>
                        <option value="250">From £250</option>
                        <option value="275">From £275</option>
                        <option value="300">From £300</option>
                        <option value="325">From £325</option>
                        <option value="350">From £350</option>
                        <option value="375">From £375</option>
                        <option value="400">From £400</option>
                        <option value="425">From £425</option>
                        <option value="450">From £450</option>
                        <option value="475">From £475</option>
                        <option value="500">From £500</option>
                        <option value="525">From £525</option>
                        <option value="550">From £550</option>
                        <option value="575">From £575</option>
                        <option value="600">From £600</option>
                        <option value="625">From £625</option>
                        <option value="650">From £650</option>
                        <option value="675">From £675</option>
                        <option value="700">From £700</option>
                        <option value="725">From £725</option>
                        <option value="750">From £750</option>
                        <option value="775">From £775</option>
                        <option value="800">From £800</option>
                        <option value="825">From £825</option>
                        <option value="850">From £850</option>
                        <option value="875">From £875</option>
                        <option value="900">From £900</option>
                        <option value="925">From £925</option>
                        <option value="950">From £950</option>
                        <option value="975">From £975</option>
                        <option value="1000">From £1,000</option>
                        <option value="1025">From £1,025</option>
                        <option value="1050">From £1,050</option>
                        <option value="1075">From £1,075</option>
                        <option value="1100">From £1,100</option>
                        <option value="1125">From £1,125</option>
                        <option value="1150">From £1,150</option>
                        <option value="1175">From £1,175</option>
                        <option value="1200">From £1,200</option>
                        <option value="1225">From £1,225</option>
                        <option value="1250">From £1,250</option>
                        <option value="1275">From £1,275</option>
                        <option value="1300">From £1,300</option>
                        <option value="1325">From £1,325</option>
                        <option value="1350">From £1,350</option>
                        <option value="1375">From £1,375</option>
                        <option value="1400">From £1,400</option>
                        <option value="1425">From £1,425</option>
                        <option value="1450">From £1,450</option>
                        <option value="1475">From £1,475</option>
                        <option value="1500">From £1,500</option>
                        <option value="1525">From £1,525</option>
                        <option value="1550">From £1,550</option>
                        <option value="1575">From £1,575</option>
                        <option value="1600">From £1,600</option>
                        <option value="1625">From £1,625</option>
                        <option value="1650">From £1,650</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control">
                        <option value="">Budget (Max)</option>
                        <option value="25">From £25</option>
                        <option value="50">From £50</option>
                        <option value="75">From £75</option>
                        <option value="100">From £100</option>
                        <option value="125">From £125</option>
                        <option value="150">From £150</option>
                        <option value="175">From £175</option>
                        <option value="200">From £200</option>
                        <option value="225">From £225</option>
                        <option value="250">From £250</option>
                        <option value="275">From £275</option>
                        <option value="300">From £300</option>
                        <option value="325">From £325</option>
                        <option value="350">From £350</option>
                        <option value="375">From £375</option>
                        <option value="400">From £400</option>
                        <option value="425">From £425</option>
                        <option value="450">From £450</option>
                        <option value="475">From £475</option>
                        <option value="500">From £500</option>
                        <option value="525">From £525</option>
                        <option value="550">From £550</option>
                        <option value="575">From £575</option>
                        <option value="600">From £600</option>
                        <option value="625">From £625</option>
                        <option value="650">From £650</option>
                        <option value="675">From £675</option>
                        <option value="700">From £700</option>
                        <option value="725">From £725</option>
                        <option value="750">From £750</option>
                        <option value="775">From £775</option>
                        <option value="800">From £800</option>
                        <option value="825">From £825</option>
                        <option value="850">From £850</option>
                        <option value="875">From £875</option>
                        <option value="900">From £900</option>
                        <option value="925">From £925</option>
                        <option value="950">From £950</option>
                        <option value="975">From £975</option>
                        <option value="1000">From £1,000</option>
                        <option value="1025">From £1,025</option>
                        <option value="1050">From £1,050</option>
                        <option value="1075">From £1,075</option>
                        <option value="1100">From £1,100</option>
                        <option value="1125">From £1,125</option>
                        <option value="1150">From £1,150</option>
                        <option value="1175">From £1,175</option>
                        <option value="1200">From £1,200</option>
                        <option value="1225">From £1,225</option>
                        <option value="1250">From £1,250</option>
                        <option value="1275">From £1,275</option>
                        <option value="1300">From £1,300</option>
                        <option value="1325">From £1,325</option>
                        <option value="1350">From £1,350</option>
                        <option value="1375">From £1,375</option>
                        <option value="1400">From £1,400</option>
                        <option value="1425">From £1,425</option>
                        <option value="1450">From £1,450</option>
                        <option value="1475">From £1,475</option>
                        <option value="1500">From £1,500</option>
                        <option value="1525">From £1,525</option>
                        <option value="1550">From £1,550</option>
                        <option value="1575">From £1,575</option>
                        <option value="1600">From £1,600</option>
                        <option value="1625">From £1,625</option>
                        <option value="1650">From £1,650</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12">
                <a href="#" title="Apply for finance" class="btn btn--feature-2 btn-block"><i class="fas fa-search"></i> Search</a>
            </div>
        </div>
    </div>
</div>
<hr style="    border-top: 1px solid #bcbcbc;">
<div class=" brdcrumb1">
    <div class="row">
        <div class="col-md-3 col-sm-7">
            <div>
                <p class="rsw">Showing <b>1</b> - <b>20</b> (of <b>204</b>)</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-5">
            <div class="sort_dd3q">
                <label class="d-inline">Sort</label>
                <div class="form-group">
                    <select class="form-control">
                        <option selected="" value="h">Price (high to low)</option>
                        <option value="l">Price (low to high)</option>
                        <option value="m">Make/model</option>
                        <option value="nis">Latest Arrivals</option>
                        <option value="rr">Recently Reduced</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="ttt_c">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
