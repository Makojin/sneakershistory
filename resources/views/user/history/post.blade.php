@extends('layouts.template')

@section('title', 'Post')

@section('content')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">NEW POST</div>
                <div class="card-body">
                     <div class="form-group row">
                      <form action="" method="post" enctype="multipart/form-data">
                      <input type="file" value="ファイルを選択" name="image">
                      </form>
                     </div>
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
                            <label for="bland" class="col-md-3 col-form-label text-md-right">Bland</label>
                            <div class="col-md-6">
                                <input id="bland" type="text" class="form-control @error('bland') is-invalid @enderror" name="bland" value="{{ old('bland') }}" required autocomplete="bland" autofocus>
                                @error('bland')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                    </div>
                    <div class="row">
                        <label for="date" class="col-md-3 col-form-label text-md-right">Date</label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                     <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker"/>
                                     <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
                                     <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
               <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/ja.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
               <script type="text/javascript">
               $(function () {
                   $('#datetimepicker').datetimepicker({
                         locale: 'ja'
                });
                });
               </script>
               <div class="form-group row ">
               <label for="comment" class="col-md-3 col-form-lavel text-md-right">Comment</label>
               <div class="col-sm-6">
                   <textarea rows="5" name="" class="form-control"></textarea>
               </div>
              </div>
              <div class="form-group-row mb-3">
                  <div class="col text-center">
                      <button type="submit" class="btn btn-success">POST</button>
                  </div>
              </div>
           </div>
        </div>
    </div>
</div>
@endsection