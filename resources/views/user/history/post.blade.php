@extends('layouts.template')

@section('title', 'Post')

@section('content')
<body>
    
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">NEW POST</div>
                <div class="card-body">
                    <form action="{{ action('user\HistoryController@create') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                     <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">名前</label>
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
                            <label for="bland" class="col-md-3 col-form-label text-md-right">ブランド</label>
                            <div class="col-md-6">
                                <select class="form-control" id="exampleFormControlSelect1" name="bland">
                             <option>NIKE</option>
                             <option>ADIDAS</option>
                             <option>CONVERSE</option>
                             <option>VANS</option>
                            </select>
                            
                            </div>
                    </div>
                    <div class="row">
                        <label for="date" class="col-md-3 col-form-label text-md-right">発売日</label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                     <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker"/name="date">
                                     <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
                                     <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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
                   <label for="comment" class="col-md-3 col-form-lavel text-md-right">コメント</label>
                   <div class="col-sm-6">
                       <textarea rows="5" name="comment" class="form-control"></textarea>
                   </div>
              </div>
              <div class="form-group row">
                  <label for="image" class="col-md-3 col-form-lavel text-md-right">画像</label>
                  <div class="col-sm-6">
                  <input type="file" value="ファイルを選択" name="image">
                  </div>
              </div>
                  <div class="form-group-row ">
                      <div class="col-sm-12 text-center">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-success">POST</button>
                      </div>
                 </div>
           </div>
           </form>
        </div>
    </div>
 </div>
 </body>
@endsection


