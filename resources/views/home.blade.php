@extends('layouts.app')

@section('content')
<div class="d-wrapper d-master">
    <div class="d-breadcrum_bar">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                    <ul class="d-breadcrum">
                        <li><a href="{{url('')}}"><i class="fa fa-home"></i></a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div> 
            </div>
        </div>
    </div> 
    <div class="d-container">
        <div class="d-welcome_msg text-center">
            <h1>Welcome to 360°</h1>
            <span>Complete School Management Solution...</span>   
        </div>
    </div>  
</div>

@endsection
