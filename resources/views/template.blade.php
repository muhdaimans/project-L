@extends('layouts.app')

@section('content')
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
                        <span>Module 3</span>
                    </a>
                </div>   
            </div>
            <hr>
            <div class="row col-12 text-center">
                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Module 4</span>
                    </a>
                </div>           
                
                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Module 5</span>
                    </a>
                </div>   

                <div class="col-4" style="outline-color: aquamarine">
                    <a class="nav-link" href="{!! route('emailverification.index') !!}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; width:200px">
                        <i class="fa fa-fw fa-book" style="margin-right: 5px;"></i>
                        <span>Module 6</span>
                    </a>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
