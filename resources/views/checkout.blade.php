@extends('layouts.frontend_master')
@section('frontend_content')
  <main class="main checkout">
			<!-- <div class="page-header bg-dark"
				style="background-image: url('images/shop/page-header-back.jpg'); background-color: #3C63A4;">
				<h1 class="page-title">Checkout</h1>
				<ul class="breadcrumb">
					<li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
					<li>Checkout</li>
				</ul>
			</div> -->
			<!-- End PageHeader -->
			<div class="page-content pt-10 pb-10">
				{{-- <div class="step-by pt-2 pb-2 pr-4 pl-4">
					<h3 class="title title-simple title-step visited"><a href="cart.html">1. Shopping Cart</a></h3>
					<h3 class="title title-simple title-step active"><a href="checkout.html">2. Checkout</a></h3>
					<h3 class="title title-simple title-step"><a href="order.html">3. Order Complete</a></h3>
				</div> --}}
				<div class="container mt-8">
					<form action="{{ url('checkoutPost') }}" class="form" method="post" >
            @csrf
						<div class="row gutter-lg">
							<div class="col-lg-7 mb-6">
								<h3 class="title title-simple text-left">Billing Details</h3>
								<div class="row">
									<div class="col-xs-6">
										<label>First Name *</label>
										<input type="text" class="form-control" name="first_name" required="" />
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control" name="last_name" required="" />
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<label>Town / City *</label>
										<input type="text" class="form-control" name="city" required="" />
									</div>

								</div>
								<div class="row">
									<div class="col-xs-6">
										<label>Postcode / ZIP *</label>
										<input type="text" class="form-control" name="postcode" required="" />
									</div>
									<div class="col-xs-6">
										<label>Phone *</label>
										<input type="text" class="form-control" name="phone" required="" />
									</div>
								</div>
								<label>Email address *</label>
								<input type="text" class="form-control" name="email_address" required="" />
								{{-- <div class="form-checkbox mt-8">
									<input type="checkbox" class="custom-checkbox" id="create-account"
										name="create-account">
									<label class="form-control-label" for="create-account">Create an account?</label>
								</div>
								<div class="form-checkbox mb-6">
									<input type="checkbox" class="custom-checkbox" id="different-address"
										name="different-address">
									<label class="form-control-label" for="different-address">Ship to a different
										address?</label>
								</div> --}}
								<h3 class="title title-simple text-left mb-3">Additional information</h3>
								<label>Order Notes (optional)</label>
								<textarea class="form-control" cols="30" rows="6" name="notes"
									placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
							</div>
							<aside class="col-lg-5 sticky-sidebar-wrapper">
								<div class="sticky-sidebar" data-sticky-options="{'bottom': 50}">
									<h3 class="title title-simple text-left">Your Order</h3>
									<div class="summary mb-4">
										<table class="order-table">
											<thead>
												<tr>
													<th>Product</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
                        @php
                          $sub_total =0;
                        @endphp
                        @foreach (App\Cart::where('ip_address',request()->ip())->get() as $cart_item)

                          <tr>
                            <td class="product-name">{{ App\Product::find($cart_item->product_id)->name }} <strong class="product-quantity">×&nbsp;{{ $cart_item->quantity }}</strong></td>
                            <td class="product-total">${{ $total = App\Product::find($cart_item->product_id)->price * $cart_item->quantity  }}</td>
                          </tr>
                          @php
                            $sub_total = $sub_total + $total;
                          @endphp
                        @endforeach

												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Subtotal</h4>
													</td>
													<td class="summary-subtotal-price">${{ $sub_total }}
													</td>
												</tr>
												<tr class="sumnary-shipping shipping-row-last">
													<td colspan="2">
														<h4 class="summary-subtitle">Shipping</h4>
														<ul>
															<li>
																<div class="custom-radio">
																	<input type="radio" id="free-shipping" name="payment_method" class="custom-control-input" value="1" checked>
																	<label class="custom-control-label" for="free-shipping"> Cash On Delivery</label>
																</div>
															</li>
															<li>
																<div class="custom-radio">
																	<input type="radio" id="standard_shipping" name="payment_method" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="standard_shipping">Online Payment</label>
																</div>
															</li>

														</ul>
													</td>
												</tr>
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Total</h4>
													</td>
													<td>
														<p class="summary-total-price">${{ $total_from_cart }}</p>
													</td>
												</tr>
											</tbody>
										</table>
                    <input type="hidden" name="total" value="{{ $total_from_cart }}">
                    <input type="hidden" name="sub_total" value="{{ $sub_total }}">
										<button type="submit" class="btn btn-dark btn-order">Place Order</button>
                  </form>
									</div>
								</div>
							</aside>
						</div>

				</div>
			</div>
		</main>
		<!-- End Main -->
@endsection
