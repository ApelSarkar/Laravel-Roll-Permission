@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row" style="margin-top: 10px">
        <div class="col-md-6">
            <div class="custom-border-box">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-border-box">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-border-box">
                <strong>Roles:</strong>
                @if (!empty($user->getRoleNames()))
                    @foreach ($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
