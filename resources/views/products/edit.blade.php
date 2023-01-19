@extends('layouts.layout')
     
@section('content')
<div class="box">
        <div class="card">
            <div class="card-header" style="background-color: #E8B5CD">
            <h1 class="mx-auto my-0 text-uppercase" ><center> Edit Detail Buku </center></h1><br> 
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
    
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $product->image }}" width="300px">
                </div>
            </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="judul" value="{{ $product->judul }}" class="form-control" placeholder="judul">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penulis:</strong>
                    <input type="text" name="penulis" value="{{ $product->penulis }}" class="form-control" placeholder="Penulis">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit:</strong>
                    <input type="text" name="penerbit" value="{{ $product->penerbit }}" class="form-control" placeholder="Penerbit">
                </div>
            </div>
        
        </p> <button type="submit" class="btn btn-primary">Submit</button></p>
    </form>
    <a class="btn btn-secondary" href="{{ route('products.index') }}"> Kembali</a></div>
</div>
</div>
</div>
@endsection