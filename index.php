<?php include "header.php"?>
<div class="page-wrapper">
			<div class="bannerSection">
				<div class="bocContainer">
					<div class="iconBoxShop">
						<iconify-icon icon="hugeicons:building-06"></iconify-icon>
					</div>
					<h5 class="storeName">Hello, John Smilga <span>Martin Bazzar</span></h5>
				</div>
				<div class="ActionBox">
					<button type="button" data-toggle="tooltip" class="btn btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-16"></i></button>
					<a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
				</div>
				
			</div>
			<div class="content">
            
				<!-- <div class="row">
					<div class="col-lg-3">
						<div class="dashboardWidgetCard">
							<div class="iconWrapper">
								<div class="iconGrp">
									<iconify-icon icon="uil:user"></iconify-icon>
								</div>
								<div class="CountBox">
									<h6 class="cardTitleDB">Total Customers</h6>
									<div class="incrementDecrementBox">
										<h4 class="TotalValue">2056</h4>
										<div class="increBox">
											<h6><iconify-icon class="incrementIcon" icon="mynaui:arrow-long-up-right"></iconify-icon> 26%</h6>
										</div>
										<div class="todayIncreBox">
											+45 today
										</div>
									</div>
									
								</div>
								
							</div>
						
							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="dashboardWidgetCard">
							<div class="iconWrapper">
								<div class="iconGrp">
									<iconify-icon icon="lucide:users"></iconify-icon>
								</div>
								<div class="CountBox">
									<h6 class="cardTitleDB">Total Suppliers</h6>
									<div class="incrementDecrementBox">
										<h4 class="TotalValue">486</h4>
										<div class="increBox">
											<h6><iconify-icon class="incrementIcon" icon="mynaui:arrow-long-up-right"></iconify-icon> 18%</h6>
										</div>
										<div class="todayIncreBox">
											+25 today
										</div>
									</div>
									
								</div>
								
							</div>
						
							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="dashboardWidgetCard">
							<div class="iconWrapper">
								<div class="iconGrp">
									<iconify-icon icon="solar:box-outline"></iconify-icon>
								</div>
								<div class="CountBox">
									<h6 class="cardTitleDB">Total Products</h6>
									<div class="incrementDecrementBox">
										<h4 class="TotalValue">689</h4>
										<div class="increBox">
											<h6><iconify-icon class="incrementIcon" icon="mynaui:arrow-long-up-right"></iconify-icon> 18%</h6>
										</div>
										<div class="todayIncreBox">
											+25 today
										</div>
									</div>
									
								</div>
								
							</div>
						
							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="dashboardWidgetCard">
							<div class="iconWrapper">
								<div class="iconGrp">
									<iconify-icon icon="fluent-mdl2:verified-brand"></iconify-icon>
								</div>
								<div class="CountBox">
									<h6 class="cardTitleDB">Total Brands</h6>
									<div class="incrementDecrementBox">
										<h4 class="TotalValue">150+</h4>
										<div class="increBox">
											<h6><iconify-icon class="incrementIcon" icon="mynaui:arrow-long-up-right"></iconify-icon> 5%</h6>
										</div>
										<div class="todayIncreBox">
											+1 today
										</div>
									</div>
									
								</div>
								
							</div>
						
							
						</div>
					</div>
				</div> -->
				<!-- Button trigger modal -->
				 <div class="row">
					<div class="col-lg-12 mt-3">
						<div class="card">
							<div class="card-header customCardHeader">
								<h5>Overview</h5>
							</div>
							<div class="card-body">
								<div class="DashboardCard">
									<div class="DB_card">
										<h2>2569 </h2>
										<h6><iconify-icon icon="bx:user"></iconify-icon> Total Customer</h6>
									</div>
									<div class="DB_card">
										<h2>1569 </h2>
										<h6><iconify-icon icon="streamline:shipping-truck"></iconify-icon> Total Sales Order</h6>
									</div>
									<div class="DB_card">
										<h2>1268 </h2>
										<h6><iconify-icon icon="hugeicons:package-delivered"></iconify-icon> Total Purchase Order</h6>
									</div>
									<div class="DB_card">
										<h2>1569</h2>
										<h6><iconify-icon icon="basil:invoice-outline"></iconify-icon> To be Invoiced</h6>
									</div>
								
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="card">
							<div class="card-header customCardHeader">
								<h5>Items Details</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6">
										<ul class="StockStatus">
											<li>
												<div class="iconItemDT lowStock">
													<iconify-icon icon="gravity-ui:bars-ascending-align-left-arrow-down"></iconify-icon>
												</div>
												<h6>23 <span>Low Stock Items</span></h6>
											</li>
											<li>
												<div class="iconItemDT  groupStock">
													<iconify-icon icon="uil:layer-group"></iconify-icon>
												</div>
												<h6>250 <span>All Items Group</span></h6>
											</li>
											<li>
												<div class="iconItemDT  allStock">
													<iconify-icon icon="ant-design:product-outlined"></iconify-icon>
												</div>
												<h6>426 <span>All Items</span></h6>
											</li>
										</ul>

									</div>
									<div class="col-lg-6">
										<div id="productStock"></div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="card">
							<div class="card-header customCardHeader d-flex justify-content-between align-items-center">
								<h5>Top Selling Products</h5>
								<div class="graph-sets">
									<div class="dropdown dropdown-wraper">
										<button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center" type="button" id="dropdown-country-sales" data-bs-toggle="dropdown" aria-expanded="false">This Week</button>
										<ul class="dropdown-menu" aria-labelledby="dropdown-country-sales">
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Today</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">This Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">This Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">This Year</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Previous Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Previous Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Previous Year</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">Custom</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3">
										<div class="productcard">
											<div class="imgBox">
												<img src="assets/img/new-image/40019371_31-bournvita-chocolate-removebg-preview.png" alt="">
											</div>
											<h6>Chocolate Nutrition Drink</h6>
											<h5>350 <span>Pcs</span> </h5>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="productcard">
											<div class="imgBox">
												<img src="assets/img/new-image/40189244_8-kelloggs-muesli-break-removebg-preview.png" alt="">
											</div>
											<h6>Muesli Fruit Nut & Seeds</h6>
											<h5>150 <span>Pcs</span> </h5>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="productcard">
											<div class="imgBox">
												<img src="assets/img/new-image/40224575_1-nissin-nissin-geki-ho-removebg-preview.png" alt="">
											</div>
											<h6>Geki - Hot & Spicy Korean Veg</h6>
											<h5>250 <span>Pcs</span> </h5>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="productcard">
											<div class="imgBox">
												<img src="assets/img/new-image/40272681_1-keya-quinoa-penne-pas-removebg-preview.png" alt="">
											</div>
											<h6>Quinoa Penne Pasta Healthy</h6>
											<h5>280 <span>Pcs</span> </h5>
										</div>
									</div>
								</div>
								
							</div>

					</div>
				 </div>
				 <div class="col-lg-4">
					<div class="card">
						<div class="card-header customCardHeader d-flex justify-content-between align-items-center">
							<h5>Purchase Order</h5>
							<div class="graph-sets">
								<div class="dropdown dropdown-wraper">
									<button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center" type="button" id="dropdown-country-sales" data-bs-toggle="dropdown" aria-expanded="false">This Week</button>
									<ul class="dropdown-menu" aria-labelledby="dropdown-country-sales">
										<li>
											<a href="javascript:void(0);" class="dropdown-item">Today</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">This Week</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">This Month</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">This Year</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">Previous Week</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">Previous Month</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">Previous Year</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item">Custom</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="PurchaseOrderView">
								<div class="DB_card pusrcheOrderCard">
									<h2>200 <span>Qty</span></h2>
									<h6><iconify-icon icon="ic:outline-discount"></iconify-icon> Quantity Ordered</h6>
								</div>
								<div class="DB_card pusrcheOrderCard">
									<h2>$2569 <span></span></h2>
									<h6><iconify-icon icon="material-symbols:money-bag-outline"></iconify-icon> Total Cost</h6>
								</div>
							</div>
							
						</div>

				</div>
			 </div>
			 <div class="col-lg-8">
				<div class="card">
					<div class="card-header customCardHeader d-flex justify-content-between align-items-center">
						<h5>Sales Order Summary</h5>
						<div class="graph-sets">
							<div class="dropdown dropdown-wraper">
								<button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center" type="button" id="dropdown-country-sales" data-bs-toggle="dropdown" aria-expanded="false">This Week</button>
								<ul class="dropdown-menu" aria-labelledby="dropdown-country-sales">
									<li>
										<a href="javascript:void(0);" class="dropdown-item">Today</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">This Week</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">This Month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">This Year</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">Previous Week</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">Previous Month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">Previous Year</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item">Custom</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div id="sales-analysis" class="chart-set"></div>
					</div>

			</div>
		 </div>

				
				
			</div>
		</div>

		<!-- <div class="customizer-links" id="setdata">
			<ul class="sticky-sidebar">
				<li class="sidebar-icons">
					<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Theme">
						<i data-feather="settings" class="feather-five"></i>
					</a>
				</li>
			</ul>
		</div> -->

	</div>
	<!-- /Main Wrapper -->

  
 <!-- Modal -->
<div class="modal fade onbordingModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
	
		<div class="modal-body">
		  <div class="topHeadVeri">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  
		  <div class="otpVerifyContainer">
			<img src="assets/img/new-image/istockphoto-1253682988-612x612.jpg" alt="">
			<div class="otpInnerContainer">
			  <h5>Welcome Aboard to <br>Saamaya Inventory</h5>
			  <p>Onboarding complete! Start managing your inventory seamlessly with Saamaya.</p>
			
  
			  <a href="#" class="verifyBtn" data-bs-dismiss="modal">Continue</a>
			</div>
	 
		  
		  </div>
		</div>
		
	  </div>
	</div>
  </div>
  <?php include "footer.php"?>