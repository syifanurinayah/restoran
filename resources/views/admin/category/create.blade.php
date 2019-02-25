@extends('admin/template')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <strong>New Categories</strong>
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Categories</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box box-primary">
                            <div class="form-horizon">
                                <div class="box-body">                                   
                                    {!! Form::open(['url' => 'category']) !!}
                                        <div class="form-group">
                                            {!! Form::label('name', 'Name', ['class' => 'control-label col-sm-2']) !!}
                                            <div class="col-lg-5">
                                                {!! Form::text('name', null, ['class' =>'form-control','placeholder' => 'Name category here']) !!}
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                                                        <a href="create" class="btn btn-default btn-reset">Batal</a>
                                                </div>
                                            </div>
                                        </div>                                       
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection