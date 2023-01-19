@extends('layouts.layout')
  
@section('content')
<div class="box">
        <div class="card">
            <div class="card-header" style="background-color: #E8B5CD">
            <h1 class="mx-auto my-0 text-uppercase" ><center> Tambah Buku </center></h1><br> 
            </div>
            <div class="card-body">
    <div class="container d-flex flex-column align-items-center">
        <div class="table-responsive">
            

     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                <input type="text" name="judul" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis:</strong>
                <input type="text" name="penulis" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
                <input type="text" name="penerbit" class="form-control" placeholder="Name">
            </div>
        </div>
        <p></p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-secondary" href="{{ route('products.index') }}"> Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection