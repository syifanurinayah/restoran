@extends('front/template')

@section('content')
    <section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
            <div class="dplay-tbl">
                <div class="left-text color-white" style="margin-top: 55px;">
                    @if ( session()->has('msg'))
				        <div class="alert alert-success">{{ session()->get('msg') }}</div>
                    @endif
                    @if ( Cart::instance('default')->count() > 0 )

                    <h3>Keranjang</h3>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Image</td>
                                <td>Name</td>
                                <td>Quantity</td>
                                <td>Price</td>
                                <td>Total</td>
                                <td>Action</td>
                            </tr>                           
                            @foreach(Cart::instance('default')->content() as $item )                            
                            <tr>
                                <td>
                                    <img src="{{ asset('foto/'.$item->model->image) }}" alt="IMG-PRODUCT" style="width: 25%;height: 25%;">
                                </td>
                                <td>{{ $item->model->name}}</td>
                                <td>
                                    <select name="" id="" class="form-control qty" style="width:4.73em" data-id="{{ $item->rowId}}">
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="5">6</option>
                                            <option value="5">7</option>
                                            <option value="5">8</option>
                                            <option value="5">9</option>
                                            <option value="5">10</option>
                                            <option value="5">11</option>
                                            <option value="5">12</option>
                                            <option value="5">13</option>
                                    </select>
                                </td>
                                <td>                                    
                                    Rp. {{ number_format($item->model->price - ($item->model->price * $item->model->discount_percent / 100))}}
                                </td>
                                <td>
                                    {{ $item->total() }}                                
                                    {{-- Rp.{{ number_format(($item->model->price - ($item->model->price * $item->model->discount_percent / 100)) * $item->qty) }} --}}
                                </td>
                                <td>
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete')}}
                                        <button type="submit">Delete</button>									
                                    </form>
                                </td>                                
                            </tr> 
                                                  
                            @endforeach	                            
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><strong>{{ Cart::total()}}</strong></td>
                                <td>&nbsp;</td>
                            </tr>	                            
                        </table>
                        <div class="row">                         
                            <div class="col-lg-6">
                                <a href="{{ ('/') }}" title="edit" class="btn btn-primary btn-sm">
                                    Continue Shopping
                                </a>
                            </div>  
                            <div class="col-lg-6">                               
                                <a href="{{ URL('checkout')}}" title="checkout" class="btn btn-primary btn-sm">
                                   Checkout
                                </a>                                        
                            </div>  
                        </div>                   
                    @endif
                </div><!-- dplay-tbl-cell -->
            </div><!-- dplay-tbl -->
        </div><!-- container -->
    </section>
@endsection

@section('script')
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		const className = document.querySelectorAll('.qty');

		Array.from(className).forEach(function(el) {
			el.addEventListener('change', function() {
				const id = el.getAttribute('data-id');
				axios.patch('/cart/update/'+id, {
    				quantity: this.value
  				})
  					.then(function (response) {
    				// console.log(response);
					location.reload();
  				})
  					.catch(function (error) {
    				console.log(error);
  				});
			});
		})
    </script>
@endsection