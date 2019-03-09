@extends('admin/template')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i>
              Dashboard</i>
                <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
              <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p style="font-size:15px">
                    <i class="glyphicon glyphicon-user"></i>Welocome {{ Auth::user()->name }}</strong> di Admin panel
                  </p>        
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>60</h3>
                        <p>category</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-list-alt"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-center"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>60</h3>
                        <p>Produtcs</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-product-hunt"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-product-hunt-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection()