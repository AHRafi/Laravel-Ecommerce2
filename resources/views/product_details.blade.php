@extends('layouts.frontend_master')
@section('frontend_content')
  <main class="main mt-4">
			<div class="page-content mb-10">
				<div class="container">
					<div class="product product-single row mb-4">
						<div class="col-md-6">
							<div class="product-gallery pg-vertical">
								<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
									<figure class="product-image">
										<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}"
											data-zoom-image="images/product/product-1-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}"
											data-zoom-image="images/product/product-2-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}"
											data-zoom-image="images/product/product-3-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}"
											data-zoom-image="images/product/product-4-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}"
											data-zoom-image="images/product/product-5-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
								</div>
								<div class="product-thumbs-wrap">
									<div class="product-thumbs">
										<div class="product-thumb active">
											<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}" alt="product thumbnail"
												width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}" alt="product thumbnail"
												width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}" alt="product thumbnail"
												width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}" alt="product thumbnail"
												width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="{{ asset('uploads/product') }}/{{ $product_info->thumbnail_photo }}" alt="product thumbnail"
												width="109" height="122">
										</div>
									</div>
									{{-- <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
									<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button> --}}
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product-details">
								<div class="product-navigation">
									{{-- <ul class="breadcrumb breadcrumb-lg">
										<li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
										<li><a href="#" class="active">Products</a></li>
										<li>Detail</li>
									</ul> --}}

									{{-- <ul class="product-nav">
										<li class="product-nav-prev">
											<a href="#">
												<i class="d-icon-arrow-left"></i> Prev
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-prev.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
										<li class="product-nav-next">
											<a href="#">
												Next <i class="d-icon-arrow-right"></i>
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-next.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
									</ul> --}}
								</div>
                @if (session('success_msg'))
                  <div class="alert alert-primary text-white">
                    <span>{{ session('success_msg') }}</s>
                  </div>
                @endif
                {{-- @if (session('sad_msg'))
                  <div class="alert alert-primary text-white">
                    <span>{{ session('sad_msg') }}</s>
                  </div>
                @endif --}}
								<h1 class="product-name">{{ $product_info->name }}</h1>
								<div class="product-meta">
									Quantity: <span class="badge badge-danger">{{ $product_info->quantity }}</span>
									Category: <span class="product-brand">{{ App\Category::find($product_info->category_id)->name}}</span>
								</div>
								<div class="product-price">${{ $product_info->price }}</div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6 reviews )</a>
								</div>
								{{-- <p class="product-short-desc">{{ $product_info->short_description }}</p>
								<div class="product-form product-variations product-color">
									<label>Color:</label>
									<div class="select-box">
										<select name="color" class="form-control">
											<option value="" selected="selected">Choose an Option</option>
											<option value="white">White</option>
											<option value="black">Black</option>
											<option value="brown">Brown</option>
											<option value="red">Red</option>
											<option value="green">Green</option>
											<option value="yellow">Yellow</option>
										</select>
									</div>
								</div>
								<div class="product-form product-variations product-size">
									<label>Size:</label>
									<div class="product-form-group">
										<div class="select-box">
											<select name="size" class="form-control">
												<option value="" selected="selected">Choose an Option</option>
												<option value="s">Small</option>
												<option value="m">Medium</option>
												<option value="l">Large</option>
												<option value="xl">Extra Large</option>
											</select>
										</div>
										<a href="#" class="size-guide"><i class="d-icon-ruler"></i>Size Guide</a>
										<a href="#" class="product-variation-clean">Clean All</a>
									</div>
								</div>
								<div class="product-variation-price">
									<span>$239.00</span>
								</div> --}}

								<hr class="product-divider">
                <form action="{{ url('addtocart') }}" method="post">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $product_info->id }}">
                <div class="product-form product-qty">
									<label>QTY:</label>
									<div class="product-form-group">
										<div class="input-group">
											<a class="quantity-minus d-icon-minus"></a>
											<input class="quantity form-control" type="number" name="quantity" min="1" max="{{ $product_info->quantity }}" >
											<a class="quantity-plus d-icon-plus"></a>
										</div>
										<button class="btn btn-danger"><i class="d-icon-bag"></i>Add To
											Cart</button>
									</div>
								</div>
                </form>
								<hr class="product-divider mb-3">

								<div class="product-footer">
									<div class="social-links">
										<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="#" class="social-link social-twitter fab fa-twitter"></a>
										<a href="#" class="social-link social-vimeo fab fa-vimeo-v"></a>
									</div>
									<div class="product-action">
										<a href="#" class="btn-product btn-wishlist"><i class="d-icon-heart"></i>Add To
											Wishlist</a>
										<span class="divider"></span>
										{{-- <a href="#" class="btn-product btn-compare"><i class="d-icon-random"></i>Add To
											Compare</a> --}}
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab tab-nav-simple product-tabs mb-4">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#product-tab-description">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-additional">Additional</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-shipping-returns">Shipping &amp; Returns</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-reviews">Reviews (8)</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active in" id="product-tab-description">
								<p>{{ $product_info->long_description }}</p>
								<ul class="list-type-check ml-2 font-secondary">
									<li>Praesent id enim sit amet.</li>
									<li>Tdio vulputate eleifend in in tortor. ellus massa.Dristique sitiismonec.</li>
									<li>Massa ristique sit amet condim vel, facilisis quimequistiqutiqu amet condim.
									</li>
									<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet</li>
								</ul>
								<p>Praesent id enim sit amet odio vulputate eleifend in in tortor. Sellus massa,
									tristique sitiismonec tellus massa, tristique sit amet condim vel, facilisis
									quimequistiqutiqu amet condim vel, facilisis Facilisis quis sapien. Praesent id enim
									sit amet odio vulputate odio vulputate eleifend in in tortor. Sellus massa,
									tristique sitiismonec tellus massa, tristique sit ametcdimel,facilisis
									quimequistiqutiqu amet condim vel, facilisis Facilisis quis sapien. Praesent id enim
									sit amet odio vulputate</p>
							</div>
							<div class="tab-pane" id="product-tab-additional">
								<ul class="list-none">
									<li><label>Color:</label>
										<p>Black, Brown, Coffee</p>
									</li>
									<li><label>Style:</label>
										<p>Vintage</p>
									</li>
									<li><label>Material:</label>
										<p>PU, Faux Leather</p>
									</li>
									<li><label>Closure Type:</label>
										<p>Hasp</p>
									</li>
									<li><label>Bags Structure:</label>
										<p>Cell phone Pocket, Zipper Pouch</p>
									</li>
									<li><label>Size:</label>
										<p>L</p>
									</li>
									<li><label>Capacity:</label>
										<p>15.6 Inch Laptop</p>
									</li>
								</ul>
							</div>
							<div class="tab-pane " id="product-tab-shipping-returns">
								<h6 class="mb-2">Free Shipping</h6>
								<p class="mb-0">We deliver to over 100 countries around the world. For full details of
									the delivery options we offer, please view our <a href="#"
										class="text-primary">Delivery
										information</a><br />We hope you’ll love every
									purchase, but if you ever need to return an item you can do so within a month of
									receipt. For full details of how to make a return, please view our <br /><a href="#"
										class="text-primary">Returns information</a></p>
							</div>
							<div class="tab-pane " id="product-tab-reviews">
								<div class="d-flex align-items-center mb-5">
									<h4 class="mb-0 mr-2">Average Rating:</h4>
									<div class="ratings-container average-rating mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:80%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
								</div>

								<div class="comments mb-6">
									<ul>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/1.jpg" alt="avatar">
													</a>
												</figure>
												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Jimmy Pearson</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
															libero sodales leo, eget blandit nunc tortor eu nibh. Nullam
															mollis. Ut justo. Suspendisse potenti.
															Sed egestas, ante et vulputate volutpat, eros pede semper
															est, vitae luctus metus libero eu augue. Morbi purus libero,
															faucibus adipiscing, commodo quis, avida id, est. Sed
															lectus. Praesent elementum hendrerit tortor. Sed semper
															lorem at felis. Vestibulum volutpat.</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/3.jpg" alt="avatar">
													</a>
												</figure>

												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Johnathan Castillo</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque
															euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus
															pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- End Comments -->
								<div class="reply">
									<div class="title-wrapper text-left">
										<h3 class="title title-simple text-left text-normal">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
									</div>
									<div class="rating-form">
										<label for="rating">Your rating: </label>
										<span class="rating-stars selected">
											<a class="star-1" href="#">1</a>
											<a class="star-2" href="#">2</a>
											<a class="star-3" href="#">3</a>
											<a class="star-4 active" href="#">4</a>
											<a class="star-5" href="#">5</a>
										</span>

										<select name="rating" id="rating" required="" style="display: none;">
											<option value="">Rate…</option>
											<option value="5">Perfect</option>
											<option value="4">Good</option>
											<option value="3">Average</option>
											<option value="2">Not that bad</option>
											<option value="1">Very poor</option>
										</select>
									</div>
									<form action="#">
										<textarea id="reply-message" cols="30" rows="4" class="form-control mb-4"
											placeholder="Comment *" required></textarea>
										<div class="row">
											<div class="col-md-6 mb-5">
												<input type="text" class="form-control" id="reply-name"
													name="reply-name" placeholder="Name *" required />
											</div>
											<div class="col-md-6 mb-5">
												<input type="email" class="form-control" id="reply-email"
													name="reply-email" placeholder="Email *" required />
											</div>
										</div>
										<button type="submit" class="btn btn-primary btn-md">Submit<i
												class="d-icon-arrow-right"></i></button>
									</form>
								</div>
								<!-- End Reply -->
							</div>
						</div>
					</div>

					<section>
						<h2 class="title">Related Products</h2>

						<div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
							data-owl-options="{
							'items': 5,
							'nav': false,
							'loop': false,
							'dots': true,
							'margin': 20,
							'responsive': {
								'0': {
									'items': 2
								},
								'768': {
									'items': 3
								},
								'992': {
									'items': 4,
									'dots': false,
									'nav': true
								}
							}
						}">
            @forelse ($related_products as $product)

              <div class="product shadow-media">
								<figure class="product-media">
									<a href="product.html">
										<img src="{{ asset('uploads/product') }}/{{ $product->thumbnail_photo }}" alt="product" width="280" height="315">
									</a>
									<div class="product-label-group">
										<label class="product-label label-new">new</label>
									</div>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
									</div>
									<div class="product-action">
										<a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
									</div>
								</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist" title="Add to wishlist"><i
											class="d-icon-heart"></i></a>
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="product-name">
										<a href="product.html">{{ $product->name }}</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">${{  $product->name  }}</del>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
											)</a>
									</div>
								</div>
							</div>
            @empty
              <div class="alert alert-danger">
                <span class="text-white">No Related Product!</span>
              </div>
            @endforelse

						</div>
					</section>
				</div>
			</div>
		</main>
@endsection
