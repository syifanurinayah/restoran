@extends('admin/template')

@section('content')
    <div class="content-wrapper">   
        <section class="content-header">
            <h1>
                Edit Categories
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Categories</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary"> 
                        <div class="form-horizontal">
                            <div class="box-body">
                                {!! Form::model($category, ['method' => 'PATCH', 'action' => ['Admin\CategoryController@update', $category->id] , 'enctype' => 'ultipart/form-data' , 'files' => 'true']) !!}
                                    <div class="form-group">
                                       {!! Form::label('category', 'Name', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                          {!! Form::text('name', null, ['class' =>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       {!! Form::label('image', 'Image', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                            <img src="{{ asset('foto/'.$category->image) }}" alt="" style="width:100%">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                                <a href="edit" class="btn btn-default btn-reset">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection