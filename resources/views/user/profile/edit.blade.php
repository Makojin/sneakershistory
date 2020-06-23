@extends('layouts.template2')

@section('title','Edit')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
<div class="col-md-9">
    <div class="card">
        <div class="card-header">EDIT PAGE</div>
        <div class="card-body">
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                    <input name="name" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label text-right">Mail</label>
                <div class="col-md-6">
                    <input name="email" value="{{ Auth::user()->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label text-right">Password</label>
                <div class="col-md-6">
                    <input name="password" value="{{ Auth::user()->password }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="bestkicks" class="col-md-3 col-form-label text-right">BestKicks</label>
            </div>
            <div class="form-group row">
                <label for="introduction" class="col-md-3 col-form-label text-right">Introduction</label>
                <div class="col-sm-6">
                    <textarea rows="6" name="introduction" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group-row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection