@extends('admin/template')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <strong>Products</strong>
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Products</li>
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
                                   href="{{ url('products/create')}}">
                                    <img src="{{ asset('img/create.png')}}" style="width: 42px;">
                                </a>
                            </div>
                        </div>
                        <div class="box-body">
                            @include('admin/flash_message')
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>image</td>
                                        <td>code</td>                                                             
                                        <td>nama</td>
                                        <td>price</td>
                                        <td>discount percent</td>
                                        <td>description</td>
                                        <td>stok</td>
                                        <td>status</td>
                                        <td>category</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>                            
                                <tbody >
                                    @foreach( $products as $item)
                                    <tr>
                                        <td><img src="{{ asset('foto/'.$item->image) }}" alt="" style="width:100%"></td>
                                        <td>{{ $item->code}}</td>                                        
                                        <td>{{ $item->name}}</td>
                                        <td>
                                            <?php
                                                if ((int) $item->discount_percent > 0) {
                                                    echo 'Rp.' . number_format(($item->price - ($item->price * $item->discount_percent / 100)), 0);
                                                    echo '<br>';
                                                    echo '<strike>Rp' . number_format($item->price, 0) . '</strike>';
                                                } else {
                                                    echo 'Rp' . number_format($item->price, 0);
                                                }
                                            ?>
                                        </td>
                                        <td>{{ $item->discount_percent}} %</td>
                                        <td>{{ $item->description}}</td>
                                        <td>{{ $item->stok}}</td>
                                        <td>
                                            @if ($item->status)
                                                <span class="label label-success">Publish</span>
                                            @else
                                                <span class="label label-warning">Draft</span>
                                             @endif
                                        </td>
                                        <td>{{ $item->category->name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a data-toggle="modal" title="show" class="btn btn-default btn-sm" data-target="#mdl_show_{{ $item->id }}">
                                                show
                                                </a>                                              
                                            </div>
                                            <div id="mdl_show_{{ $item->id }}" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">Product <?php echo $item->name ?></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-striped">
                                                                <tr>
                                                                    <th>Code</th>
                                                                    <td>{{ $item->code }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>{{ $item->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td>
                                                                        <?php
                                                                            if ((int) $item->discount_percent > 0) {
                                                                                echo 'Rp.' . number_format(($item->price - ($item->price * $item->discount_percent / 100)), 0);
                                                                                echo '<br>';
                                                                                echo '<strike>Rp' . number_format($item->price, 0) . '</strike>';
                                                                            } else {
                                                                                echo 'Rp' . number_format($item->price, 0);
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>discount percent</th>
                                                                    <td>{{ $item->discount_percent }} %</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Description</th>
                                                                    <td>{{ $item->description }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Stok</th>
                                                                    <td>{{ $item->stok }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Status</th>
                                                                    <td>
                                                                        @if ($item->status)
                                                                            <span class="label label-success">Publish</span>
                                                                        @else
                                                                            <span class="label label-warning">Draft</span>
                                                                         @endif
                                                                    <td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Category</th>
                                                                    <td>{{ $item->category->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Image</th>
                                                                    <td><img src="{{ asset('foto/'.$item->image) }}" alt="" style="width:100%"></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <a href="products/{{ $item->id }}" title="edit" class="btn btn-default btn-sm">
                                                    Edit
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                {!! Form::open(['method' => 'DELETE','action'=>['Admin\ProductController@destroy', $item->id]]) !!}
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
    <script src="{{ asset('js/products/index.js')}}"></script>
@endsection
