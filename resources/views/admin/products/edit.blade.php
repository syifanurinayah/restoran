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
                                {!! Form::model($products, ['method' => 'PATCH', 'action' => ['Admin\ProductController@update', $products->id] , 'enctype' => 'ultipart/form-data' , 'files' => 'true']) !!}
                                    <div class="form-group">
                                       {!! Form::label('code', 'Code', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                          {!! Form::text('code', null, ['class' =>'form-control', 'readonly']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       {!! Form::label('name', 'Name', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                          {!! Form::text('name', null, ['class' =>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       {!! Form::label('price', 'Price', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                          {!! Form::text('price', null, ['class' =>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       {!! Form::label('discount percent', 'Discount Percent', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                          {!! Form::text('discount_percent', null, ['class' =>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       {!! Form::label('stok', 'Stok', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                          {!! Form::number('stok', null, ['class' =>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       {!! Form::label('description', 'Description', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                          {!! Form::textarea('description', null, ['class' =>'form-control']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                      <div class="form-group {{ $errors->has('category_id') ? 'has-error' : 'has-success' }}">
                                      @else
                                      <div class="form-group">
                                      @endif
                                        {!! Form::label('category_id', 'Category', ['class' => 'control-label col-sm-2']) !!}
                                        @if(count($category) > 0)
                                      <div class="col-sm-5">
                                        {!! Form::select('category_id',$category, null, ['class' =>'form-control', 'id' => 'category_id', 'placeholder' => 'Pilih Category']) !!}
                                      @else
                                        <p>Tidak Ada pilihan category</p>
                                      @endif                                    
                                      </div>  
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('status', 'Status', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                            <select class="form-control" name="status">
                                                <option>Pilih</option>
                                                <option value="1">Publish</option>
                                                <option value="0">Draft</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       {!! Form::label('image', 'Image', ['class' => 'control-label col-sm-2']) !!}
                                        <div class="col-sm-5">
                                            <img src="{{ asset('foto/'.$products->image) }}" alt="" style="width:100%">
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