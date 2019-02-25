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
                                    {!! Form::open(array('url' => 'products','enctype' => 'multipart/form-data','files' => 'true')) !!}                                
                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            {!! Form::label('name', 'Name', ['class' => 'control-label col-sm-2']) !!}
                                            <div class="col-sm-5">
                                                {!! Form::text('name', null, ['class' =>'form-control','placeholder' => 'Name product here']) !!}
                                            </div>                                       
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            {!! Form::label('price', 'Price', ['class' => 'control-label col-sm-2']) !!}
                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rp.</span>
                                                        {!! Form::text('price', null, ['class' =>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            {!! Form::label('Discount Percent', 'Discount Percent', ['class' => 'control-label col-sm-2']) !!}
                                            <div class="col-sm-5">
                                                <div class="input-group">                                                   
                                                    {!! Form::number('discount_percent', null, ['class' =>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            {!! Form::label('stok', 'Stok', ['class' => 'control-label col-sm-2']) !!}
                                            <div class="col-sm-5">
                                                <div class="input-group">                                                   
                                                    {!! Form::number('stok', null, ['class' =>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            {!! Form::label('description', 'description', ['class' => 'control-label col-sm-2']) !!}
                                            <div class="col-sm-5">
                                                <div class="input-group">                                                   
                                                    {!! Form::textarea('description', null, ['class' =>'form-control','style' => 'width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                            {!! Form::label('image', 'Image', ['class' => 'control-label col-sm-2']) !!}
                                            <div class="col-sm-5">
                                                <div class="input-group">                                                   
                                                    {!! Form::file('image', null, ['class' =>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        @if($errors->any())
                                            <div class="form-group col-lg-12 col-md-12 col-xs-12 {{ $errors->has('category_id') ? 'has-error' : 'has-success' }}">
                                            
                                        @else
                                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                        @endif
                                          {!! Form::label('category_id', 'Category', ['class' => 'control-label col-sm-2']) !!}
                                        @if(count($category) > 0)
                                            <div class="col-sm-5">
                                                {!! Form::select('category_id', $category, null, ['class' =>'form-control', 'id' => 'category_id', 'placeholder' => 'Pilih Category']) !!}
                                        @else
                                            <p>Tidak Ada pilihan category</p>
                                        @endif
                                    </div>                                
                                    </div> 
                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                        {!! Form::label('status', 'Status', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">                                               
                                            <select class="form-control" name="status">
                                                    <option>Pilih</option>
                                                    <option value="1">Publish</option>
                                                    <option value="0">Draft</option>
                                                </select>
                                            </div>
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