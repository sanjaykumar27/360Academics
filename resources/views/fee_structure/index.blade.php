@extends($layout)
@section('content')
<?php
 $PermissionFunction = \Session::get('Permission.allow_links'); 
 ?>
<div class="d-wrapper d-master" ng-controller="feeStructureController" ng-cloak >
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
   <div class="d-container" >
       <div class="container" ng-show = "list.length > 0">
         <md-toolbar class="d-listing_toolbar">
            <div class="d-searchbar" ng-show="showme"> 
              <button ng-click="showme=false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Fee Structure">
                <i class="material-icons">keyboard_backspace</i>
                <md-tooltip md-visible="demo.back" md-direction="demo.back">
                  Back
                </md-tooltip>
              </button> 
              <md-input-container class="md-block" flex-gt-sm>
                <label>Search Fee Structure...</label>
                <input  type="search" ng-model="search">
              </md-input-container>
            </div>
            <div class="d-listing_toolbar_title pull-left"> 
                <span>Fee Structure Listing</span> 
            </div>
            <div class="d-toolbar_icon pull-right">
              <button ng-click="showme=true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Fee Structure">
                <i class="material-icons">search</i>
                <md-tooltip md-visible="demo.search" md-direction="demo.search">
                  Search Fee Structure
                </md-tooltip>
              </button>&nbsp; 
			   <?php if(in_array('Fee Structure Add',$PermissionFunction)){ ?>
			   <a href="{{url('')}}/fee_structure_add">
              <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini pull-right">
                <i class="material-icons">add</i>
                <md-tooltip md-visible="demo.add_fee_structure" md-direction="demo.add_fee_structure">
                    Add Fee Structure
                 </md-tooltip>
              </md-button>
			  </a>
			   <?php } ?>
            </div>
         </md-toolbar>
         <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover">
             <thead>
               <tr>
                 <th>SNo.</th>
				  <th>Class</th>
				  <th>Amount</th>
               </tr>
             </thead>
             <tbody>
               <tr ng-repeat="data in filtered = (list | filter:search ) |  startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                <td>@{{$index + 1}}</td>
                <td> <a ng-click="showComponentList(data.components)">@{{data.class_name}}</a></td>
				<td> <a ng-click="showComponentList(data.components)">@{{data.total_amount}}</a></td>
                </tr> 
             </tbody>
           </table>
         </div>
         
				<div class="pagination" ng-show="filteredItems > 0">
					<pagination total-items="filteredItems" ng-model="currentPage"  rotate="false"  max-size="4" previous-text="< Previous" next-text="Next >" items-per-page="entryLimit" class="paging" boundary-links="true"></pagination>
				</div> 	 
				
       </div>
	 
	  <div class="d-container" ng-show = "list.length == 0">
	  <div class="container">
          <div class="d-no_listing clearfix">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3">
              <h1>NO LISTING</h1>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
              </p>
			   <?php if(in_array('Fee Structure Add',$PermissionFunction)){ ?>
              <a  href="{{url('')}}/fee_structure_add"  class="md-raised md-primary md-button md-ink-ripple">GET STARTED</a>
			   <?php } ?>
            </div>
          </div>
       </div>
	  </div>
	  <div class="modal fade" id="modal-id">
		<div class="modal-dialog">
		 <div class="modal-content"> 
		   <div class="modal-body clearfix">
			  <div class="panel panel-default">
				<div class="panel-heading clearfix">
				  <h3 class="panel-title d-no_padding">Fee structure</h3> 
				</div> 
			  </div>
			  <div class="clearfix well">
			  <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
             <thead>
               <tr>
                 <th>SNo.</th>
				  <th>Fee Component</th>
				  <th>Amount</th>
				  <th>Installment</th>
                 <th>Action</th> 
               </tr>
             </thead>
             <tbody>
               <tr ng-repeat="compdata in compList">
                <td>@{{$index + 1}}</td>
                <td>@{{compdata.component_name}}</td>
				<td> @{{compdata.amount}}</td>
				<td> @{{compdata.installment}}</td>
                <td> 
				<?php if(in_array('Fee Structure Update',$PermissionFunction)){ ?>
				<a href="{{url('')}}/fee_structure_add?id=@{{compdata.fee_strcture_id}}&compid=@{{compdata.component_id}}&classid=@{{compdata.class_id}}">
                  <md-button aria-label="edit"  class="md-fab md-mini md-raised md-mini">
                    <i class="material-icons">mode_edit</i>
                     <md-tooltip  >
                        Edit Fee Structure
                     </md-tooltip>
                  </md-button>
		          </a>
				   <?php } ?>
                </td> 
                </tr> 
             </tbody>
           </table>
         </div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
					<md-button class="md-raised md-button" data-dismiss="modal">Cancle</md-button>&nbsp;&nbsp;&nbsp;
					
				</div>
				
			  </div>
		   </div>  
		 </div>
		</div>
	  </div>
   </div>  
 </div>
@endsection
