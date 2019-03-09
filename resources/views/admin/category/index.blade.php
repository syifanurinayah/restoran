@extends('admin/template')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <strong>Categories</strong>
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Categories</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <form action="#" method="get">
                                  <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                          <button type="submit" name="search" id="search-btn" class="btn btn-info">Search
                                          </button>
                                        </span>
                                  </div>
                                </form>
                            </div>
                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <a title="Tambah Cateory"
                                   class="pull-right"                                    
                                   href="{{ url('category/create')}}">
                                    <img src="{{ asset('img/create.png')}}" style="width: 42px;">
                                </a>
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td style="width: 25%;">Nama</td>                                      
                                        <td class="center">Image</td>                                      
                                        <td>Action</td>
                                    </tr>
                                </thead>                            
                                <tbody>
                                    @foreach ($categories as $cat )
                                        <tr>
                                            <td>{{ $cat->name}}</td>
                                            <td>
                                                <img src="{{ asset('foto/'.$cat->image) }}" alt="" style="width:15%;float: right;">
                                            </td>
                                            <td>                                                
                                                <div class="btn-group">
                                                    <a href="category/{{ $cat->id }}" title="edit" class="btn btn-default btn-sm">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="btn-group">
                                                    {!! Form::open(['method' => 'DELETE','action'=>['Admin\CategoryController@destroy', $cat->id]]) !!}
                                                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm','onclick' => 'confirm("Are you sure you want to delete this?")']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>   
@endsection