<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/logo.jpg') }}" class="user-image" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">
        MAIN MENU
      </li>
      <li>
        <a href="{{ url('/home') }}">
          <i class="fa fa-dashboard"></i>
            <span>Dashboard</span></a>
      </li>      
      <li>
        <a href="{{ url('category')}}">
          <i class="fa fa-list-alt">
            </i> <span>Categoris</span>
        </a>
      </li>
      <li>
        <a href="{{ url('products')}}">
          <i class="fa fa-product-hunt"></i>
            <span>Product</span>
        </a>
      </li>
      <li>
        <a href="{{ url('order')}}">
          <i class="fa fa-shopping-cart"></i>
            <span>Order</span>
        </a>
      </li>
    </ul>
  </section>


        
   
     
   