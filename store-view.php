<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Store Details</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="item-list.php">All Store</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Store Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                        <div class="ActionHeadButtons">
                            <a href="item-list.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
                            <a href="item-edit.php" class="btn EditBtn"> Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></a>

                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#add_users" class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New Item</a> -->
                        </div>
                        <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div>
                    </div>
                </div>

                <div class="tab">
                <div class="topActionHeader TopHeadEnquiry">
                                    <div class="leftSideEnquiryAction">
                                    <!-- <button type="button" class="btn inspectionButton" data-bs-toggle="modal" data-bs-target="#createInspectionModal"><iconify-icon icon="solar:checklist-minimalistic-linear"></iconify-icon> Create Inspection</button>
                                    <button type="button" class="btn inspectionButton" data-bs-toggle="modal" data-bs-target="#CreateJobWorkOrderModal"><iconify-icon icon="carbon:task-add"></iconify-icon>Schedule Job Work Order</button>
                                    <a href="create-quotation.php"><button type="button" class="btn inspectionButton"><iconify-icon icon="iconamoon:file-document-light"></iconify-icon> Create Quotation</button></a> -->
                                    <ul class="nav nav-tabs TabsStyle1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true">
                                               <iconify-icon icon="solar:checklist-minimalistic-linear"></iconify-icon>
                                                Overview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false">
                                            <iconify-icon icon="mynaui:cart"></iconify-icon>
                                            Available items
                                            </a>
                                        </li>
                                     
                                        <li class="nav-item">
                                            <a class="nav-link" id="disabledIcon-tab" data-bs-toggle="tab" href="#disabledIcon" aria-controls="disabled" role="tab" aria-selected="false">
                                            <iconify-icon icon="hugeicons:chart-bar-line"></iconify-icon>
                                               Activity
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="aboutIcon-tab" data-bs-toggle="tab" href="#aboutIcon" aria-controls="about" role="tab" aria-selected="false">
                                            <iconify-icon icon="material-symbols:linked-services-outline"></iconify-icon>
                                                Activity
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="NoteHeadIcon-tab" data-bs-toggle="tab" href="#NoteHeadIcon" aria-controls="Note" role="tab" aria-selected="false">
                                            <iconify-icon icon="hugeicons:note-02"></iconify-icon>
                                                Note Head
                                            </a>
                                        </li> -->
                                    </ul>
                                    </div>
                                    <!-- <div class="rightSideEnquiryStatus">
                                        <div class="Survey_progressStatus">
                                        <iconify-icon icon="hugeicons:return-request"></iconify-icon> Returnable Item
                                        </div>
                                        <div class="Survey_progressStatus">
                                         <span class="badge bg-soft-success">In Stock</span>
                                        </div>
                                    </div> -->
                                    
                                </div>


                                <div class="CommonContainerAction">
                                   <div class="tab-content">
                                        <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                          <div class="row">
                                            <div class="col-lg-10 pt-3">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                    <h6 class="DetailTitle">Primary Details</h6>
                                                        <ul class="ProductDetailList">
                                                            
                                                            <!-- <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Item Group Name</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6><a href="#">soap</a></h6>
                                                                </div>
                                                            </li> -->
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Store Name</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Main Store A</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Manager Name</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>john Do</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Contact No.</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>+12163547758 </h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Email</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>johndoe@example.com</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Opening Hours</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>10:00 AM - 8:00 PM</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Location</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Berlin, Germany</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>City/Town</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Berlin</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Region/State</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Centre</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Country / Region</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>North</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Postal Code</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>#5465</h6>
                                                                </div>
                                                            </li>
                                                            <!-- <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Manufacturer</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>William Paul Co.</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Brand</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Venus</h6>
                                                                </div>
                                                            </li> -->
                                                        </ul>
                                                        <!-- <h6 class="DetailTitle mt-3 mb-3">Purchase Information</h6>
                                                        <ul class="ProductDetailList">
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Cost Price</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>$20.00</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Description</h6>
                                                                </div>
                                                                <div class="itemDetailValue description">
                                                                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, dolores!</h6>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <h6 class="DetailTitle mt-3 mb-3">Sales Information </h6>
                                                        <ul class="ProductDetailList">
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Selling Price</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>$20.00</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Description</h6>
                                                                </div>
                                                                <div class="itemDetailValue description">
                                                                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, dolores!</h6>
                                                                </div>
                                                            </li>
                                                        </ul> -->
                                                    </div>
                                                    <div class="col-lg-4">
                                                    <div class="ImageContainer">
                                                            <!-- Upload Area -->
                                                            <div class="upload-area" id="activeImageContainer">
                                                            <span class="placeholder">Click to upload or drag an image here</span>
                                                            <input type="file" id="fileInput" accept="image/*" multiple>
                                                            </div>
                                                            <button class="mark-primary-btn" id="markPrimaryBtn" style="display: none;">
                                                            Mark as Primary
                                                            </button>

                                                            <!-- Uploaded Images -->
                                                            <div class="uploaded-images" id="uploadedImages"></div>
                                                        </div>

                                                        <div class="RightSideBarDT">
                                                            <div class="stockManage">
                                                                <h6>Stock Management</h6>
                                                                <ul>
                                                                    <li>
                                                                        <span>Stock on Hand</span>
                                                                        <span> 20.00</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Last Sale Qty</span>
                                                                        <span> 30.00</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Last Purchase Date</span>
                                                                        <span>24 Nov, 2024</span>
                                                                    </li>
                                                                </ul>

                                                                <div class="ItemCountBox">
                                                                   
                                                                        <div class="card ">
                                                                            <div class="card-body">
                                                                                <h4 class="boxCountTitle">0 <span>Qty</span></h4>
                                                                                <p>To be Shipped</p>
                                                                            </div>
                                                                        </div>
                                                                 
                                                                  
                                                                        <div class="card ">
                                                                            <div class="card-body">
                                                                                <h4 class="boxCountTitle">0 <span>Qty</span></h4>
                                                                                <p>To be Received</p>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                   
                                                                        <div class="card ">
                                                                            <div class="card-body">
                                                                                <h4 class="boxCountTitle">0 <span>Qty</span></h4>
                                                                                <p>To be Invoiced</p>
                                                                            </div>
                                                                        </div>
                                                                  
                                                                   
                                                                        <div class="card ">
                                                                            <div class="card-body">
                                                                                <h4 class="boxCountTitle">0 <span>Qty</span></h4>
                                                                                <p>To be Billed</p>
                                                                            </div>
                                                                        </div>
                                                                   
                                                                </div>

                                                                <div class="reorderPoint">
                                                                    <label>Reorder Point</label>
                                                                    <h5>
                                                                        10
                                                                        <a href="javascript:void(0)" id="popoverLink" data-bs-toggle="popover" data-bs-title="Reorder Point" 
                                                                        data-bs-content='
                                                                        <label class="mb-1">Set Reorder Point <span>*</span></label>
                                                                        <input type="number" class="form-control" id="inputContent" placeholder="Enter reorder value" value="10">
                                                                        <button type="button" class="btn btn-primary mt-2" id="updateButton">Update</button>'
                                                                        >
                                                                        <iconify-icon icon="uil:pen"></iconify-icon>
                                                                        </a>
                                                                    </h5>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                    </div>
                                                    <div class="col-lg-11 mt-4">
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
                                          </div>
                                        </div>
                                        <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                         <div class="row">
                                            <div class="col-lg-12">
                                                 <!-- Performance Indicator list -->
                                                    <div class="card tablemaincard_nopaddingleftright">

                                                            <div class="card-body p-0">
                                                                <div class="custom-datatable-filter">
                                                                    <table class="table common-datatable withoutActionTR nowrap w-100">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <!-- <th>Unit </th> -->
                                                                                <th>Weight</th>
                                                                                <th>Unit Price</th>
                                                                                <th>Selling Price</th>
                                                                                <th>Pack Qty</th>
                                                                                <th>Transfer Date</th>
                                                                                <th>Validity On</th>
                                                                                <th>Status</th>
                                                                                <!-- <th>Action</th> -->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                
                                                                                <td>
                                                                                    <div class="d-flex align-items-center file-name-icon">
                                                                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                                                                            <img src="assets/img/new-image/61nqtHrChIL._SX679_.jpg" class="img-fluid" alt="Stephan Peralt">
                                                                                        </a>
                                                                                        <div class="ms-2">
                                                                                            <h6 class="fw-medium"><a href="#">Horlicks Chocolate</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                   250gm
                                                                                </td>
                                                                                <td>
                                                                                    60.00 
                                                                                </td>
                                                                                <td>80.00</td>
                                                                                <td>
                                                                                   150
                                                                                </td>
                                                                                <td>Mar 01, 2022</td>
                                                                                <td>
                                                                                 Dec 25, 2026
                                                                                </td>
                                                                                <td>
                                                                                  <span class="badge bg-soft-success">In Stock</span>
                                                                                </td>
                                                                            
                                                                            </tr>
                                                                            <tr>
                                                                                
                                                                                <td>
                                                                                    <div class="d-flex align-items-center file-name-icon">
                                                                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                                                                            <img src="assets/img/new-image/61nqtHrChIL._SX679_.jpg" class="img-fluid" alt="Stephan Peralt">
                                                                                        </a>
                                                                                        <div class="ms-2">
                                                                                            <h6 class="fw-medium"><a href="#">Horlicks Chocolate</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                   500gm
                                                                                </td>
                                                                                <td>
                                                                                    160.00 
                                                                                </td>
                                                                                <td>180.00</td>
                                                                                <td>
                                                                                   250
                                                                                </td>
                                                                                <td>jun 04, 2023</td>
                                                                                <td>
                                                                                 Dec 25, 2026
                                                                                </td>
                                                                                <td>
                                                                                  <span class="badge bg-soft-success">In Stock</span>
                                                                                </td>
                                                                            
                                                                            </tr>
                                                                            <tr>
                                                                                
                                                                                <td>
                                                                                    <div class="d-flex align-items-center file-name-icon">
                                                                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                                                                            <img src="assets/img/new-image/61nqtHrChIL._SX679_.jpg" class="img-fluid" alt="Stephan Peralt">
                                                                                        </a>
                                                                                        <div class="ms-2">
                                                                                            <h6 class="fw-medium"><a href="#">Horlicks Chocolate</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                   1kg
                                                                                </td>
                                                                                <td>
                                                                                    260.00 
                                                                                </td>
                                                                                <td>280.00</td>
                                                                                <td>
                                                                                   50
                                                                                </td>
                                                                                <td>Mar 01, 2022</td>
                                                                                <td>
                                                                                 Dec 25, 2027
                                                                                </td>
                                                                                <td>
                                                                                  <span class="badge bg-soft-warning">Low Stock</span>
                                                                                </td>
                                                                            
                                                                            </tr>
                                                                            <tr>
                                                                                
                                                                                <td>
                                                                                    <div class="d-flex align-items-center file-name-icon">
                                                                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                                                                            <img src="assets/img/new-image/61nqtHrChIL._SX679_.jpg" class="img-fluid" alt="Stephan Peralt">
                                                                                        </a>
                                                                                        <div class="ms-2">
                                                                                            <h6 class="fw-medium"><a href="#">Horlicks Chocolate</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                   2Kg
                                                                                </td>
                                                                                <td>
                                                                                    360.00 
                                                                                </td>
                                                                                <td>380.00</td>
                                                                                <td>
                                                                                   0
                                                                                </td>
                                                                                <td>Jan 20, 2021</td>
                                                                                <td>
                                                                                 Dec 25, 2026
                                                                                </td>
                                                                                <td>
                                                                                  <span class="badge bg-soft-danger">Out of Stock</span>
                                                                                </td>
                                                                            
                                                                            </tr>
                                                            
                                                            </tbody>
                                                            </table>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            <!-- /Performance Indicator list -->
                                            </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="disabledIcon" aria-labelledby="disabledIcon-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                 <!-- Performance Indicator list -->
                                                    <div class="card tablemaincard_nopaddingleftright">

                                                            <div class="card-body p-0">
                                                                <div class="custom-datatable-filter">
                                                                    <table class="table common-datatable withoutActionTR nowrap w-100">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <!-- <th>Unit </th> -->
                                                                                <th>Role</th>
                                                                                <th>Activity date & Time</th>
                                                                                <th>Activity</th>
                                                                              
                                                                                <!-- <th>Action</th> -->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="colorgrayLight">John William</td>
                                                                            <td class="colorgrayLight">Sales Manager</td>
                                                                            <td class="colorgrayLight">Dec 24, 2024 04:12 PM</td>
                                                                            <td>Reorder is updated to 10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Jane Doe</td>
                                                                            <td class="colorgrayLight">Inventory Specialist</td>
                                                                            <td class="colorgrayLight">Dec 23, 2024 10:00 AM</td>
                                                                            <td>Item "Widget A" is created</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Michael Smith</td>
                                                                            <td class="colorgrayLight">Warehouse Manager</td>
                                                                            <td class="colorgrayLight">Dec 22, 2024 02:30 PM</td>
                                                                            <td>Stock added: 50 units of "Widget A"</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Emily Davis</td>
                                                                            <td class="colorgrayLight">Sales Representative</td>
                                                                            <td class="colorgrayLight">Dec 21, 2024 11:15 AM</td>
                                                                            <td>10 units of "Widget A" sold</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Robert Brown</td>
                                                                            <td class="colorgrayLight">Operations Manager</td>
                                                                            <td class="colorgrayLight">Dec 20, 2024 03:45 PM</td>
                                                                            <td>Stock adjusted: Reduced 5 units of "Widget A" due to damage</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Sarah Johnson</td>
                                                                            <td class="colorgrayLight">Procurement Officer</td>
                                                                            <td class="colorgrayLight">Dec 19, 2024 09:00 AM</td>
                                                                            <td>New reorder point set for "Widget A" to 20</td>
                                                                        </tr>
                                                            
                                                            </tbody>
                                                            </table>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            <!-- /Performance Indicator list -->
                                            </div>
                                         </div>
                                       
                                        </div>
                                        <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">
                                       
                                        </div>

                                        <div class="tab-pane" id="NoteHeadIcon" aria-labelledby="NoteHeadIcon-tab" role="tabpanel">
                                        
                                        </div>
                                    </div>
                            </div>
                </div>
     </div>
</div>
<?php include "footer.php"?>
  <!-- Bootstrap JS (Bootstrap requires Popper.js for the popover to work) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize popover with HTML content
      var popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
      var popoverList = [...popoverTriggerList].map(popoverTrigger => new bootstrap.Popover(popoverTrigger, {
          html: true, // Enable HTML content
          sanitize: false // Disable sanitization to allow custom HTML
      }));

      // Add event listener for the Update button
      document.addEventListener('click', function (event) {
        if (event.target && event.target.id === 'updateButton') {
          // Close the popover
          var popover = bootstrap.Popover.getInstance(document.getElementById('popoverLink'));
          if (popover) {
            popover.hide();
          }

          // Show SweetAlert success message
          Swal.fire({
            icon: 'success',
            title: 'Reorder Point Updated',
            text: 'The reorder point has been successfully updated!',
            confirmButtonText: 'OK'
          });
        }
      });
    });
  </script>

  <!-- Image upload js code -->
  <script>
    const fileInput = document.getElementById('fileInput');
    const activeImageContainer = document.getElementById('activeImageContainer');
    const uploadedImagesContainer = document.getElementById('uploadedImages');
    const markPrimaryBtn = document.getElementById('markPrimaryBtn');

    let activeImage = null;
    let primaryImageCard = null;

    // Default images to show initially
    const defaultImages = [
        'assets/img/new-image/61nqtHrChIL._SX679_.jpg',
        'assets/img/new-image/61kx9vCj0rL._SX679_.jpg',
        'assets/img/new-image/61Xp+2c1F4L._SX679_.jpg'
    ];

    // Load default images on page load
    window.addEventListener('DOMContentLoaded', () => {
        defaultImages.forEach((src, index) => {
            const imageCard = createImageCard(src);
            uploadedImagesContainer.appendChild(imageCard);

            // Set the first image as active and primary by default
            if (index === 0) {
                setActiveImage(src, imageCard);
                setPrimaryImage(imageCard);
            }
        });
    });

    fileInput.addEventListener('change', handleFiles);
    activeImageContainer.addEventListener('click', (e) => {
        if (e.target.tagName !== 'BUTTON') {
            fileInput.click();
        }
    });

    function handleFiles() {
        const files = Array.from(fileInput.files);

        files.forEach(file => {
            const reader = new FileReader();
            reader.onload = () => {
                const src = reader.result;

                const imageCard = createImageCard(src);
                uploadedImagesContainer.appendChild(imageCard);

                if (!activeImage) {
                    setActiveImage(src, imageCard);
                    setPrimaryImage(imageCard);
                }
            };
            reader.readAsDataURL(file);
        });
    }

    function createImageCard(src) {
        const imageCard = document.createElement('div');
        imageCard.classList.add('image-card');
        imageCard.innerHTML = `<img src="${src}" alt="Uploaded Image">`;

        imageCard.addEventListener('click', () => setActiveImage(src, imageCard));
        return imageCard;
    }

    function setActiveImage(src, imageCard) {
        activeImage = src;
        activeImageContainer.innerHTML = `
            <img src="${src}" alt="Active Image">
            <button class="remove-btn">&times;</button>
        `;
        activeImageContainer.querySelector('.remove-btn').addEventListener('click', () => {
            removeImage(src, imageCard);
        });

        markPrimaryBtn.style.display = 'block';
        if (imageCard === primaryImageCard) {
            markPrimaryBtn.innerHTML = `
                <img src="assets/img/new-image/check-mark.png" alt="Check" width="16" height="16"> Primary
            `;
            markPrimaryBtn.classList.add('marked');
            markPrimaryBtn.disabled = true;
        } else {
            markPrimaryBtn.innerHTML = `Mark as Primary`;
            markPrimaryBtn.classList.remove('marked');
            markPrimaryBtn.disabled = false;
        }

        markPrimaryBtn.onclick = () => setPrimaryImage(imageCard);
    }

    function setPrimaryImage(imageCard) {
        if (primaryImageCard) {
            primaryImageCard.classList.remove('marked');
        }
        imageCard.classList.add('marked');
        primaryImageCard = imageCard;
        markPrimaryBtn.innerHTML = `
            <img src="assets/img/new-image/check-mark.png" alt="Check" width="16" height="16"> Primary
        `;
        markPrimaryBtn.classList.add('marked');
        markPrimaryBtn.disabled = true;
    }

    function removeImage(src, imageCard) {
        if (imageCard) {
            imageCard.remove();
        }
        if (activeImage === src) {
            activeImage = null;

            if (uploadedImagesContainer.children.length === 0) {
                resetActiveImage();
            } else {
                const remainingImages = uploadedImagesContainer.querySelectorAll('.image-card img');
                if (remainingImages.length > 0) {
                    setActiveImage(remainingImages[0].src, remainingImages[0].closest('.image-card'));
                }
            }
        }

        if (primaryImageCard && primaryImageCard === imageCard) {
            primaryImageCard = null;
            if (uploadedImagesContainer.children.length > 0) {
                const nextCard = uploadedImagesContainer.querySelector('.image-card');
                setPrimaryImage(nextCard);
            } else {
                markPrimaryBtn.style.display = 'none';
            }
        }

        if (uploadedImagesContainer.children.length === 0) {
            markPrimaryBtn.style.display = 'none';
        }
    }

    function resetActiveImage() {
        activeImageContainer.innerHTML = '<span class="placeholder">Click to upload or drag an image here</span>';
        markPrimaryBtn.style.display = 'none';
        activeImage = null;
    }
</script>
