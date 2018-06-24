<!-- SHOP CART -->
<section id="shop-cart">
	<div class="container">
		<div class="shop-cart">
			<div class="table table-condensed table-striped table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th class="cart-product-remove"></th>
							<th class="cart-product-thumbnail">Tên sản phẩm</th>
							<th class="cart-product-name">Thông tin chi tiết</th>
							<th class="cart-product-price">Giá</th>
							<th class="cart-product-quantity">Số lượng</th>
							<th class="cart-product-subtotal">Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart-product-remove">
								<a href="#"><i class="fa fa-close"></i></a>
							</td>

							<td class="cart-product-thumbnail">
								<a href="#">
									<img src="img/sp.png" alt="Bolt Sweatshirt">
								</a>
								<div class="cart-product-thumbnail-name">Quần bò xước nam</div>
							</td>

							<td class="cart-product-description">

								<p>
									<span>Size: M</span>
									<span>Màu: Xanh</span>
								</p>
							</td>

							<td class="cart-product-price">
								<span class="amount">87.000đ</span>
							</td>

							<td class="cart-product-quantity">
								<div class="quantity">
									<input type="button" class="minus" value="-" field='quantity'>
			                                        <input type="text" name='quantity' class="qty" value="1">
			                                        <input type="button" class="plus" value="+" field='quantity'>
								</div>
							</td>

							<td class="cart-product-subtotal">
								<span class="amount">87.000đ</span>
							</td>
						</tr>
						<tr>
							<td class="cart-product-remove">
								<a href="#"><i class="fa fa-close"></i></a>
							</td>

							<td class="cart-product-thumbnail">
								<a href="#">
									<img alt="Consume Tshirt" src="img/sp.png">
								</a>
								<div class="cart-product-thumbnail-name">Quần bò xước nam</div>
							</td>

							<td class="cart-product-description">
								<p>
									<span>Size: S</span>
									<span>Màu: Xanh</span>
								</p>
							</td>

							<td class="cart-product-price">
								<span class="amount">87.000đ</span>
							</td>

							<td class="cart-product-quantity">
								<div class="quantity">
									<input type="button" class="minus" value="-" field='quantity1'>
			                                        <input type="text" name='quantity1' class="qty" value="1">
			                                        <input type="button" class="plus" value="+" field='quantity1'>
								</div>
							</td>

							<td class="cart-product-subtotal">
								<span class="amount">87.000đ</span>
							</td>
						</tr>
						

					</tbody>

				</table>

			</div>
			<div class="row">
				<div class="col-md-4">
					<form class="form-inline">
						<div class="form-group">
							<input type="text" placeholder="Mã giảm giá" id="CouponCode" class="form-control">
							<a href="#" class="button border"><span> Áp dụng</span> </a>
							<p class="small">Nhập mã giảm giá hay mã khuyến mãi hợp lệ vào đây để giảm giá cho sản phẩm của bạn.</p>
						</div>
					</form>
				</div>
				<div class="col-md-8 text-right">
					<button type="button" class="btn btn-cart">Tiến hành thanh toán <i class="fa fa-arrow-circle-right"></i></button>
				</div>
			</div>
			<div class="row">
				<hr class="space">
				<div class="col-md-6">
					<h4>Thông tin khách hàng</h4>
					<form class="row">
						<div class="col-md-6 form-group">
							<input type="text" placeholder="Họ" class="form-control">
						</div>
						<div class="col-md-6 form-group">
							<input type="text" placeholder="Tên" class="form-control">
						</div>
						<div class="col-md-12 m-b-20">
							<select>
								<option>--Chọn tỉnh/ thành phố--</option>
								<option value="CT">Cần Thơ</option>
								<option value="TP">TP HCm</option>
								<option value="HN">Hà Nội</option>
								<option value="DN">Đà Nẳng</option>
							</select>
						</div>
						<div class="col-md-6 form-group">
							<select>
								<option>--Chọn quận/ huyện--</option>
								<option value="NK">Ninh Kiều</option>
								<option value="OM">Ô Môn</option>
								<option value="PD">Phong Điền</option>
							</select>
						</div>

						<div class="col-md-6  form-group">
							<select>
								<option>--Chọn phường/ xã--</option>
								<option value="AB">An Bình</option>
								<option value="AL">An Lạc</option>
								<option value="HL">Hưng Lợi</option>
							</select>
						</div>
						<div class="col-md-12 form-group">
							<textarea class="form-control required" placeholder="Nhập địa chỉ vào đây....." name="comment" rows="3" aria-required="true"></textarea>
						</div>

					</form>
				</div>
				<div class="col-md-6 p-r-10 ">
					<div class="table-responsive">
						<h4>Tổng cộng</h4>

						<table class="table">
							<tbody>
								<tr>
									<td class="cart-product-name">
										<strong>Thành tiền</strong>
									</td>

									<td class="cart-product-name text-right">
										<span class="amount">550.000đ</span>
									</td>
								</tr>
								<tr>
									<td class="cart-product-name">
										<strong>Shipping</strong>
									</td>

									<td class="cart-product-name  text-right">
										<span class="amount">Free Shipping</span>
									</td>
								</tr>
								<tr>
									<td class="cart-product-name">
										<strong>Mã giảm giá</strong>
									</td>

									<td class="cart-product-name  text-right">
										<span class="amount">-20%</span>
									</td>
								</tr><tr>
									<td class="cart-product-name">
										<strong>Tổng cộng</strong>
									</td>

									<td class="cart-product-name text-right">
										<span class="amount color lead"><strong>500.000đ</strong></span>
									</td>
								</tr>
							</tbody>

						</table>

					</div>

					<a href="#" class="btn btn-cart icon-left float-right"><span>Tiến hành đặt hàng</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end: SHOP CART -->