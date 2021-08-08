@extends('layouts.frontend_master')
@section('frontend_content')
  <main class="main cart">
    <div class="page-content pt-10 pb-10">
      {{-- <div class="step-by pt-2 pb-2 pr-4 pl-4">
        <h3 class="title title-simple title-step active"><a href="cart.html">1. Shopping Cart</a></h3>
        <h3 class="title title-simple title-step"><a href="checkout.html">2. Checkout</a></h3>
        <h3 class="title title-simple title-step"><a href="order.html">3. Order Complete</a></h3>
      </div> --}}
      <div class="container mt-8 mb-4">
        <div class="row gutter-lg">
          <div class="col-lg-8 col-md-12">
            @if (session('invalid_coupon'))
              <div class="container">

                <div class="alert alert-info">
                  {{ session('invalid_coupon') }}
                </div>
              </div>
            @endif

            @if (session('invalid_coupon_date'))
              <div class="container">
                <div class="alert alert-info">
                  {{ session('invalid_coupon_date') }}
                </div>
              </div>
            @endif
            <table class="table table-dark">
              <thead class="thead-dark">
                <tr>
                  <th><h4><span>Product</span></h4></th>
                  <th><span></span></th>
                  <th><span>Price</span></th>
                  <th><span>quantity</span></th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $sub_total = 0;
                  $flag= 0;
                @endphp
                @foreach (App\Cart::where('ip_address',request()->ip())->get() as $cart_item)
                <tr>
                  <td class="product-thumbnail">
                    <figure>
                      <a href="product-simple.html">
                        <img src="{{ asset('uploads\product')}}/{{ App\Product::find($cart_item->product_id)->thumbnail_photo }}" width="100" height="100"
                        alt="product">
                      </a>
                      <a href="{{ url('deleteCart') }}/{{ $cart_item->id }}" class="product-remove" title="Remove this product">
                        <i class="fas fa-times"></i>
                      </a>
                    </figure>
                  </td>
                  <td class="product-name">
                    <div class="product-name-section">
                      <a href="product-simple.html">{{ App\Product::find($cart_item->product_id)->name }}</a>
                      <br>
                      @if ($cart_item->quantity > App\Product::find($cart_item->product_id)->quantity )
                        <span class="badge badge-danger">You Can not add more than</span>  {{ App\Product::find($cart_item->product_id)->quantity }}
                        @php
                          $flag++;
                        @endphp
                      @endif
                    </div>
                  </td>


                  <td class="product-subtotal">
                    <span class="amount">${{ App\Product::find($cart_item->product_id)->price }}</span>
                  </td>
                  <td class="product-quantity">

                      <span class="amount">{{ $cart_item->quantity }}</span>


                  </td>
                  {{-- <td class="product-quantity">
                    <div class="input-group">
                      <button class="quantity-minus d-icon-minus"></button>
                      <input class="quantity form-control" type="number" min="1"
                        max="1000000">
                      <button class="quantity-plus d-icon-plus"></button>
                    </div>
                  </td> --}}
                  <td class="product-price">
                    <span class="amount">${{ $cart_item->quantity * (App\Product::find($cart_item->product_id)->price)}}</span>
                  </td>
                  @php
                    $sub_total = $sub_total + ($cart_item->quantity * (App\Product::find($cart_item->product_id)->price));
                  @endphp
                </tr>
                @endforeach
              </tbody>

            </table>
            <div class="cart-actions mb-6 pt-6">
              <a href="{{ url('updateCartPage') }}" class="btn btn-md btn-icon-left"><i
                  class="d-icon-refresh"></i>Update Cart Page</a>
              <div class="coupon">
                <input type="text" name="coupon_code" class="input-text form-control" id="coupon_text" value="{{ $coupon_name ?? "" }}" placeholder="Coupon code">
                <a type="button" class="btn btn-md" id="apply-coupon-btn">Apply Coupon</a>
              </div>

            </div>
          </div>
          <aside class="col-lg-4 sticky-sidebar-wrapper">
            <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
              <div class="summary mb-4">
                <h3 class="summary-title text-left">Cart Totals</h3>
                {{-- <table class="shipping"> --}}
                  {{-- <tr class="summary-subtotal">
                    <td>
                      <h4 class="summary-subtitle">Subtotal</h4>
                    </td>
                    <td>
                      <p class="summary-subtotal-price">$426.99</p>
                    </td>
                  </tr>
                  <tr class="sumnary-shipping shipping-row-last">
                    <td colspan="2">
                      <h4 class="summary-subtitle">Shipping</h4>
                      <ul>
                        <li>
                          <div class="custom-radio">
                            <input type="radio" id="free-shipping" name="shipping" class="custom-control-input" checked>
                            <label class="custom-control-label" for="free-shipping">Free
                              Shipping</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-radio">
                            <input type="radio" id="standard_shipping" name="shipping" class="custom-control-input">
                            <label class="custom-control-label" for="standard_shipping">Standard</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-radio">
                            <input type="radio" id="express_shipping" name="shipping" class="custom-control-input">
                            <label class="custom-control-label" for="express_shipping">Express</label>
                          </div>
                        </li>
                      </ul>
                    </td>
                  </tr> --}}
                {{-- </table> --}}
                {{-- <div class="shipping-address pb-4">
                  <label>Shipping to CA.</label>
                  <div class="select-box">
                    <select name="country" class="form-control">
                      <option value="us" selected>United States</option>
                      <option value="uk">United Kingdom</option>
                      <option value="fr">France</option>
                      <option value="aus">Austria</option>
                    </select>
                  </div>
                  <div class="select-box">
                    <select name="country" class="form-control">
                      <option value="default" selected="selected">California</option>
                    </select>
                  </div>
                  <input type="text" class="form-control" name="code" placeholder="Town / city" />
                  <input type="text" class="form-control" name="code" placeholder="zip" />
                  <a href="#" class="btn btn-md">Update totals</a>
                </div> --}}
                <table>
                  <tr class="summary-subtotal">
                    <td>
                      <h4 class="summary-subtitle">Total</h4>
                    </td>
                    <td>
                      <p class="summary-total-price">${{$sub_total}}</p>
                    </td>
                  </tr>
                  @isset($discount_persentage)

                    <tr class="summary-subtotal" >
                    <td><span class="pull-left"> Discount Persentage (-) </span> {{ $discount_persentage }}%</td>
                  </tr>
                  @endisset
                  @isset($discount_persentage)

                    <tr class="summary-subtotal" >
                    <td><span class="pull-left"> Discount Amount (-) </span> {{ $discount_amount = $sub_total*($discount_persentage/100) }}</td>
                    </tr>
                  @endisset
                  @isset($discount_persentage)

                    <tr class="summary-subtotal" >
                    <td><span class="pull-left"> Total </span> ${{ $total = $sub_total - $discount_amount }}</td>
                    </tr>
                    @else
                      <tr class="summary-subtotal">
                    <td><span class="pull-left"> Total </span> ${{ $total = $sub_total }}</td>
                    </tr>
                  @endisset
                </table>
                @if ($flag==0)
                  <form  action="{{ url('checkout') }}" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{$total}}">
                    <button type="submit" class="btn btn-dark btn-checkout">Proceed to checkout</button>
                  </form>
                @endif
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </main>

@endsection
