@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row" style="margin-top: 10px">
        <div class="col-md-6">
            <div class="custom-border-box">
                <strong>Name:</strong>
                <p>{{ $product->name }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-border-box">
                <strong>Details:</strong>
                <p>{{ $product->detail }}</p>
            </div>
        </div>
    </div>
@endsection
