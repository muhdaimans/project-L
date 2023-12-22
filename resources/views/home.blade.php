@extends('layouts.app')

@section('content')

@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="padding: 1%">
            <div class="row col-12 text-center">
                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Email Verification</span>
                    </a>
                </div>           
                
                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Payment Gateway</span>
                    </a>
                </div>   

                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Queue</span>
                    </a>
                </div>   
            </div>
            <hr>
            <div class="row col-12 text-center">
                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('importExport.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Import</span>
                    </a>
                </div>           
                
                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Export</span>
                    </a>
                </div>   

                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Print</span>
                    </a>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
