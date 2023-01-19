@extends('layouts.layout')
   
@section('content')
<div class="box">
        <div class="card">
            <div class="card-header" style="background-color: #E8B5CD">
            <h1 class="mx-auto my-0 text-uppercase" ><center> Detail Buku </center></h1><br> 
            </div>
            <div class="card-body">
    <div class="container d-flex flex-column align-items-center">
        <div class="table-responsive">
                

     
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $product->image }}" width="500px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $product->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis:</strong>
                {{ $product->penulis }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
                {{ $product->penerbit }}
            </div>
        </div>
        <a class="btn btn-secondary" href="{{ route('products.index') }}"> Kembali</a>
    </div>
@endsection