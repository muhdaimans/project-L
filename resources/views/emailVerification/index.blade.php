@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="padding: 1%">
            <form action="{{route('emailverification.send')}}" method="post">
                @csrf
                <div class="row col-12">
                    <div class="col-6">
                        <label for="first_name">First Name</label>
                        <input class="form-control" type="text" name="first_name">
                    </div>

                    <div class="col-6">
                        <label for="last_name">Last Name</label>
                        <input class="form-control" type="text" name="last_name">
                    </div>

                    <div class="col-4">
                        <label for="birthdate">Birth Date</label>
                        <input class="form-control" type="date" name="birthdate">
                    </div>

                    <div class="col-4">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>

                    <div class="col-4">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="phone">
                    </div>    
                </div>
                <br>
                <button class="btn btn-primary" type="save">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
