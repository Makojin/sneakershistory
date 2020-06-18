@extends('layouts.template')

@section('title', 'Post')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NEW POST</div>
                 <div class="card-body">
                     <div class="form-group row">
                      <form action="" method="post" enctype="multipart/form-data">
                      <input type="file" value="ファイルを選択" name="image">
                      </form>
                      </div>
                      <div class="form-group row">
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                      </div>
                    
                </div>
           </div>
        </div>
   </div>
</div>
@endsection