@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="padding: 1%">
            <div class="float-right">
                <div class="btn-group">
                    <div>
                        <a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span>Download Template</a>
                    </div>
                    <div style="margin-left: 10px;"> <!-- Adjust the margin value as needed -->
                        <a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span>Export</a>
                    </div>                    
                </div>
            </div>
            <hr>
            <form action="{{route('importExport.import')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row col-12">
                    <div class="col-6">
                        <label for="excel_file">Excel File</label>
                        <input class="form-control" type="file" name="excel_file">
                    </div>
                </div>
                <br>
                <center><button class="btn btn-primary" type="save">Submit</button></center>
                
            </form>
        </div>
    </div>
</div>
@endsection
