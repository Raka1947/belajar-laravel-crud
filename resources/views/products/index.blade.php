@extends('layouts.layout')
     
@section('content')
<div class="box">
        <div class="card">
            <div class="card-header" style="background-color: #E8B5CD">
            <h1 class="mx-auto my-0 text-uppercase" ><center> DATA BUKU </center></h1><br> 
            </div>
            <div class="card-body">
    <div class="container d-flex flex-column align-items-center">
        <div class="table-responsive">
        <center>
        <a class="btn btn-success" href="{{ route('products.create') }}"> Tambah Buku</a>
        </center><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td><a class="btn btn-text" href="{{ route('products.show',$product->id) }}">{{ $product->id }}</td>
            <td><img src="/images/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->judul }}</td>
            <td>{{ $product->penulis }}</td>
            <td>{{ $product->penerbit }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
    <a class="btn btn-secondary" href="{{ url('/') }}"> Halaman Utama</a>
@endsection