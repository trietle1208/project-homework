@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
         
        <!-- Main content -->
        <div class="container-fluid">
            <div class="col-md-12">
                <form method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" 
                            name="name"
                            class="form-control"
                            id="exampleInputEmail1" 
                            placeholder="Enter Name Category"
                        >
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Desc</label>
                        <input type="text" 
                            name="desc"
                            class="form-control"
                            id="exampleInputEmail1" 
                            placeholder="Enter Desc Category"
                        >
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div> 
        </div><!-- /.container-fluid -->
        <!-- /.content -->
    </div>
@endsection