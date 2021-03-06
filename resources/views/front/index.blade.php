@extends('front/template')

@section('content')
    <section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
            <div class="dplay-tbl">
                <div class="dplay-tbl-cell center-text color-white">
                    <h5><b>BEST IN TOWN</b></h5>
                    <h1 class="mt-30 mb-15">Seblak</h1>
                </div><!-- dplay-tbl-cell -->
            </div><!-- dplay-tbl -->
        </div><!-- container -->
    </section>
    <section class="story-area left-text center-sm-text pos-relative">       
        <div class="container">
            <div class="heading">
                <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2 style="margin-top:-100px">CATEGORY</h2>
            </div>
           
            <div class="row">
                    @foreach ($category as $cat)
                <div class="col-lg-4">
                    <img src="{{ asset('foto/'.$cat->image) }}" style="cursor:pointer;" id="categories" alt="" style="width:100%">
                    <p>{{ $cat->name }}</p>
                </div>  
                @endforeach              
            </div><!-- row -->
           
        </div><!-- container -->
</section>
    <section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
            <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Products Terbaru</h2>
            </div>            
            <div class="row" id="result">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-4  col-sm-6 ">
                    <div class="center-text mb-30">
                        <div class="ïmg-200x mlr-auto pos-relative">
                            <img src="{{ asset('foto/' . $product->image)}}" style="width: 100%;height: 80%;">
                        </div>
                        <h5 class="mt-20">{{ $product->name}}</h5>
                        <h4 class="mt-5">  
                            <b>
                                <?php
                                    if ((int) $product->discount_percent > 0) {
                                        echo 'Rp.' . number_format(($product->price - ($product->price * $product->discount_percent / 100)), 0);
                                        echo '<br>';
                                        echo '<strike>Rp' . number_format($product->price, 0) . '</strike>';
                                    } else {
                                        echo 'Rp' . number_format($product->price, 0);
                                    }
                                ?>     
                            </b> 
                        <h6 class="mt-20">
                            <form action="{{ route('cart') }}" method="post">{{ csrf_field() }}  
                                <input type="hidden" name="id" value="{{ $product->id}}">                              
                                <input type="hidden" name="name" value="{{ $product->name}}">                              
                                <input type="hidden" name="price" value="{{ $product->price - ($product->price * $product->discount_percent / 100)}}">                              
                                <button type="submit" class="btn-brdr-primary plr-25">
										Order Now
								</button>                                
                            </form>
                        </h6>
                    </div><!--text-center-->
                </div><!-- col-md-3 -->
                @endforeach
            </div><!-- row -->           
        </div><!-- container -->
    </section>
    <script type="text/javascript">
        $('#categories').on('change',function(e){
        var id = e.target.value; 
        $.get('{{ url('category')}}/'+id, function(data){
        $('#result').data(data);
        });
        });
        </script>	
@endsection