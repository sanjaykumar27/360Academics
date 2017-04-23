@extends('app.layout')
@section('content')
<?php
 $PermissionFunction = \Session::get('Permission.allow_links'); 
 ?>
<div class="d-wrapper d-master" ng-controller="addFeeStructureController" ng-cloak >
   <div class="d-breadcrum_bar">
     <div class="container">
       <div class="row clearfix">
         <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
           <ul class="d-breadcrum">
             <li><a href="{{url('')}}">Home</a></li>
             <li><span>Fee Structure</span></li>
           </ul>
         </div> 
       </div>
     </div>
   </div>  
   
   <div class="d-container">
       <div class="container">
         <md-toolbar class="md-hue-2">
          <div class="md-toolbar-tools"> 
            <h2>
              <span>@{{formtype}} Fee Structure</span>
            </h2> 
          </div>
         </md-toolbar>  
         <div class="panel panel-default md-padding">
		  <form   method="post" name="frm" id="frm" ng-submit="saverecord(frm.$valid)"  novalidate="novalidate" >
		 <input type="hidden" name="_token"  value="{{csrf_token()}}" ng-model="singledata._token">
           <div class="row clearfix">  
             <div class="clearfix">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <md-input-container class="md-block" ng-class="(submitted && !frm.frequency.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                    <select ui-select2 ng-model="singledata.component" name="component" id="component" required >
					     <option value="">Select Component<span> *</span></option>
						<option ng-repeat="component in components" ng-value="component.id">@{{component.component}}</option>
					</select>
					 <div ng-show="submitted && frm.component.$error " class="md-input-messages-animation md-auto-hide ng-active">
					 <div ng-show="frm.component.$error.required">{{ config('constant.error.SelectValue') }}</div>
				  </div>
                  <div class="md-errors-spacer"></div>
                </md-input-container>
               </div> 
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <md-input-container class="md-block" ng-class="(submitted && !frm.frequency.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
				<select ui-select2 ng-model="singledata.frequency" name="frequency" id="frequency" required >
				 <option value="">Select Frequency<span> *</span></option>
				 <?php $frequency = getCollectionList('fee_frequency');
							if(count($frequency) > 0){
								foreach($frequency as $frequencyval){ ?>
				  <option ng-value="<?php echo $frequencyval->id; ?>" ><?php echo $frequencyval->name; ?></option>
				<?php } } ?>
				</select> 
				 <div ng-show="submitted && frm.frequency.$error " class="md-input-messages-animation md-auto-hide ng-active">
					 <div ng-show="frm.frequency.$error.required">{{ config('constant.error.SelectValue') }}</div>
				  </div>
				<div class="md-errors-spacer"></div>
			  </md-input-container>
			  </div>
             </div>
             <div class="d-class_clone" ng-repeat="past in singledata.pluses">
               <div class="d-class_row clearfix">
                 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                   <md-input-container class="md-block" ng-class="(submitted && !frm.class_@{{past.class}}.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                    <select ui-select2 ng-model="past.class" name="class_@{{past.class}}" class="selectallclass" id="class_{{past.class}}" required >
					     <option value="">Select Class<span> *</span></option>
						<option ng-repeat="class in classes" ng-value="class.id">@{{class.name}}</option>
					</select>
					 <div ng-show="submitted && frm.class_@{{past.class}}.$error " class="md-input-messages-animation md-auto-hide ng-active">
					 <div ng-show="frm.class_@{{past.class}}.$error.required">{{ config('constant.error.SelectValue') }}</div>
				  </div>
                  <div class="md-errors-spacer"></div>
                </md-input-container>
                 </div>
                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <md-input-container class="md-block" ng-class="(submitted && !frm.amount_@{{past.class}}.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                  <label>Amount<span> *</span></label>
                  <input type="number" ng-model="past.amount" name="amount_@{{past.class}}" required  ng-model-options="{debounce : 700}"  >
				  <div ng-show="submitted && frm.amount_@{{past.class}}.$error " class="md-input-messages-animation md-auto-hide ng-active">
					 <div ng-show="frm.amount_@{{past.class}}.$error.required">{{ config('constant.error.Required') }}</div>
				  </div>
                </md-input-container>
             </div>
				 <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4 d-datepicker">    
                <md-datepicker ng-model="past.due_date"  md-placeholder="Due Date" name="due_date">
				</md-datepicker>
                </div>
                 <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1">
                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="addplus()" ng-show="$index==0" >
                      <i class="material-icons">add</i>
                      <md-tooltip md-visible="demo.add_row" md-direction="" >
                          Add Row
                       </md-tooltip>
                    </md-button>
                 </div>
				 <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1" ng-if="formtype=='Add'">
                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="removeplus($index)" ng-show="$index!=0">
                      <i class="material-icons">remove</i>
                      <md-tooltip md-visible="demo.remove_row" md-direction="" >
                          Remove Row
                       </md-tooltip>
                    </md-button>
                 </div>
               </div>
			   
             </div>
			 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 d-radio_outer">
			 <label>Status</label>  
				   <md-switch ng-model="singledata.status"  aria-label="Switch 2" ng-true-value="'Active'" ng-false-value="'Inactive'" class="md-warn">
					@{{ singledata.status }}
				   </md-switch> 
				 </div>
		    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 d-radio_outer">
			 <label>Is Refundable</label>  
				    <input type="checkbox" ng-model="singledata.refundable" ng-true-value="1" ng-false-value="0" value="1">
				 </div>
			 
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
				 <md-button class="md-raised md-button">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                <md-button class="md-raised md-primary" type="submit">Save</md-button>
             </div>
           </div>
         </div>
		 </form>
       </div>
   </div>
 </div>
@endsection
