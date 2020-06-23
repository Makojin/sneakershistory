@extends('layouts.template')

@section('title', 'お問い合わせ')

@section('content')

   
        <div class="col-9">
            <form>
                <div class="card">
                  <div class="card-header">お問い合わせ</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ask" class="col-md-3 col-form-lavel text-md-right">お問い合わせ内容</label>
                               <div class="col-sm-6">
                                <textarea rows="6" name="" class="form-control"></textarea>
                               </div>
                        </div>
                        <div class="form-group-row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-success">送信</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection