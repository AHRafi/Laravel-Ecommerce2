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
            <form class="" action="updateCart" method="post">
              @csrf

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
                    </div>
                  </td>


                  <td class="product-subtotal">
                    <span class="amount">${{ App\Product::find($cart_item->product_id)->price }}</span>
                  </td>
                  {{-- <td class="product-quantity">
                    <span class="amount">{{ $cart_item->quantity }}</span>
                  </td> --}}
                  <td class="product-quantity">
                    <div class="input-group">
                      <a class="quantity-minus d-icon-minus"></a>
                      <input class="quantity form-control" type="number" min="1"  name="cart_quantity[{{ $cart_item->id }}]"
                      max="1000000">
                      <a  class="quantity-plus d-icon-plus"></a>
                    </div>
                  </td>
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
              <button type="submit" class="btn btn-md btn-icon-left"><i
                  class="d-icon-refresh"></i>Update</button>
                </form>
              {{-- <div class="coupon">
                <input type="text" name="coupon_code" class="input-text form-control" id="coupon_code" value="" placeholder="Coupon code">
                <button type="submit" class="btn btn-md">Apply Coupon</button>
              </div> --}}

            </div>
          </div>
          <aside class="col-lg-4 sticky-sidebar-wrapper">
            <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
              <div class="summary mb-4">
                {{-- <h3 class="summary-title text-left">Cart Totals</h3> --}}
                {{-- <table class="shipping">
                  <tr class="summary-subtotal">
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
                  </tr>
                </table>
                <div class="shipping-address pb-4">
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
                </div>
                <table> --}}
                  {{-- <tr class="summary-subtotal">
                    <td>
                      <h4 class="summary-subtitle">Total</h4>
                    </td>
                    <td>
                      <p class="summary-total-price">${{$sub_total}}</p>
                    </td>
                  </tr>
                </table> --}}
                {{-- <a href="checkout.html" class="btn btn-dark btn-checkout">Proceed to checkout</a> --}}
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </main>

@endsection
