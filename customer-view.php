<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Customer Details</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="customer-list.php">Customer List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Customer Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                        <div class="ActionHeadButtons">
                            <a href="customer-list.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
                            <a href="customer-edit.php" class="btn EditBtn"> Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></a>

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
                                               Purchase History
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
                                    <div class="rightSideEnquiryStatus">
                                        <div class="PointsBox">
                                        <img src="assets/img/new-image/gift-box.png" alt=""> Reward Points 200

                                        </div>
                                        <!-- <div class="RewardsBox">
                                            Rewards
                                        </div> -->
                                    </div>
                                    
                                </div>


                                <div class="CommonContainerAction">
                                   <div class="tab-content">
                                        <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                          <div class="row">
                                            <div class="col-lg-10 pt-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="profileCustomer">
                                                            <img src="assets/img/new-image/userdummy.png" alt="">
                                                            <h6>Jane Smith <span>janesmith@example.com	</span></h6>
                                                        </div>
                                                        <ul class="ProductDetailList">
                                                            <li><h6>Basic Details</h6></li>
                                                            <!-- <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Description</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6><a href="#">soap</a></h6>
                                                                </div>
                                                            </li> -->
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Customer Type</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Business</h6>
                                                                </div>
                                                            </li>
                                                            <!-- <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Customer Name</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Jane Smith</h6>
                                                                </div>
                                                            </li> -->
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Company Name</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Fresh Farm Co.</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Email Address</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>janesmith@example.com	</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Phone No.</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>278934790</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Mobile No.</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>9873900234</h6>
                                                                </div>
                                                            </li>
                                                      
                                                            	
                                                           
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Description</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Discrepancy resolved during audit</h6>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                       
                                                        <ul class="ProductDetailList">
                                                          <li><h6>Other Details</h6></li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>TIN (Taxpayer Identification Number)</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>1234567890</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Payments Terms</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Due On Receipt</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Currency</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>USD</h6>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        
                                                        
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="DocMainContainer">
                                                            <h6 class="mb-3">Uploaded Documents</h6>
                                                            <div class="DocContainer">
                                                                <div class="documents">
                                                                    <img src="assets/img/new-image/photo-id.jpg" alt="">
                                                                </div>
                                                                <div class="documents">
                                                                    <img src="assets/img/new-image/passport.png" alt="">
                                                                </div>
                                                                <div class="documents">
                                                                    <img src="assets/img/new-image/aadhaar-card-7579588_1280.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12 mt-3">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="dashboardWidgetCard">
                                                            <div class="iconWrapper">
                                                                
                                                                <div class="CountBox">
                                                                    <h6 class="cardTitleDB">Total Orders</h6>
                                                                    <div class="incrementDecrementBox">
                                                                        <h4 class="TotalValue">2056</h4>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="iconGrp">
                                                                <iconify-icon icon="solar:box-linear"></iconify-icon>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="dashboardWidgetCard">
                                                            <div class="iconWrapper">
                                                                
                                                                <div class="CountBox">
                                                                    <h6 class="cardTitleDB">Total Amount</h6>
                                                                    <div class="incrementDecrementBox">
                                                                        <h4 class="TotalValue">$2056</h4>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="iconGrp">
                                                                <iconify-icon icon="tdesign:money"></iconify-icon>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="dashboardWidgetCard">
                                                            <div class="iconWrapper">
                                                                
                                                                <div class="CountBox">
                                                                    <h6 class="cardTitleDB">Total Due Amount</h6>
                                                                    <div class="incrementDecrementBox">
                                                                        <h4 class="TotalValue">$1056</h4>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="iconGrp">
                                                                <iconify-icon icon="material-symbols:money-bag-outline-rounded"></iconify-icon>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="dashboardWidgetCard">
                                                            <div class="iconWrapper">
                                                                
                                                                <div class="CountBox">
                                                                    <h6 class="cardTitleDB">Total Paid Amount</h6>
                                                                    <div class="incrementDecrementBox">
                                                                        <h4 class="TotalValue">$1000</h4>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="iconGrp">
                                                                <iconify-icon icon="solar:bill-check-outline"></iconify-icon>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        
                                            <div class="col-lg-12">
                                                <!-- Performance Indicator list -->
                                                <div class="card tablemaincard_nopaddingleftright">
                                                    <div class="card-body p-0">
                                                        <div class="custom-datatable-filter">
                                                            <table class="table common-datatable withoutActionTR nowrap w-100">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Invoice</th>
                                                                        <th>Order Items</th>
                                                                        <th>Status</th>
                                                                        <th>Due Date</th>
                                                                        <th>Amount</th>
                                                                        <th>Balance Due</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2025-01-03</td>
                                                                        <td><a href="invoice-view.php" class="invoiceLink">INV-00001</a></td>
                                                                        <td>5</td>
                                                                        <td><span class="badge bg-soft-info">Sent</span></td>
                                                                        <td>2025-01-24</td>
                                                                        <td>$ 240</td>
                                                                        <td>$ 120</td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Invoice Detail" href="invoice-view.php">
                                                                                    <span class="icon">
                                                                                        <span class="feather-icon">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2025-01-04</td>
                                                                        <td><a href="invoice-view.php" class="invoiceLink">INV-00002</a></td>
                                                                        <td>3</td>
                                                                        <td><span class="badge bg-soft-success">Full Paid</span></td>
                                                                        <td>2025-01-30</td>
                                                                        <td>$ 150</td>
                                                                        <td>$ 0</td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Invoice Detail" href="invoice-view.php">
                                                                                    <span class="icon">
                                                                                        <span class="feather-icon">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2025-01-05</td>
                                                                        <td><a href="invoice-view.php" class="invoiceLink">INV-00003</a></td>
                                                                        <td>7</td>
                                                                        <td><span class="badge bg-soft-warning">Partial Paid</span></td>
                                                                        <td>2025-02-01</td>
                                                                        <td>$ 350</td>
                                                                        <td>$ 150</td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Invoice Detail" href="invoice-view.php">
                                                                                    <span class="icon">
                                                                                        <span class="feather-icon">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2025-01-06</td>
                                                                        <td><a href="invoice-view.php" class="invoiceLink">INV-00004</a></td>
                                                                        <td>4</td>
                                                                        <td><span class="badge bg-soft-info">Sent</span></td>
                                                                        <td>2025-02-05</td>
                                                                        <td>$ 200</td>
                                                                        <td>$ 200</td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Invoice Detail" href="invoice-view.php">
                                                                                    <span class="icon">
                                                                                        <span class="feather-icon">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2025-01-07</td>
                                                                        <td><a href="invoice-view.php" class="invoiceLink">INV-00005</a></td>
                                                                        <td>6</td>
                                                                        <td><span class="badge bg-soft-warning">Partial Paid</span></td>
                                                                        <td>2025-02-10</td>
                                                                        <td>$ 300</td>
                                                                        <td>$ 100</td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Invoice Detail" href="invoice-view.php">
                                                                                    <span class="icon">
                                                                                        <span class="feather-icon">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
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
                                                                            <th>Customer Name</th>
                                                                            <th>Role</th>
                                                                            <th>Activity Date & Time</th>
                                                                            <th>Invoice No.</th>
                                                                            <th>Activity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="colorgrayLight">John William</td>
                                                                            <td class="colorgrayLight">Sales Manager</td>
                                                                            <td class="colorgrayLight">Dec 24, 2024 04:12 PM</td>
                                                                            <td class="colorgrayLight">INV-1024</td>
                                                                            <td>Generated invoice for "Widget A" (10 units)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Jane Doe</td>
                                                                            <td class="colorgrayLight">Customer Service Rep</td>
                                                                            <td class="colorgrayLight">Dec 23, 2024 03:30 PM</td>
                                                                            <td class="colorgrayLight">INV-1018</td>
                                                                            <td>Accepted return of "Widget B" (5 units) from invoice INV-1018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Michael Smith</td>
                                                                            <td class="colorgrayLight">Warehouse Manager</td>
                                                                            <td class="colorgrayLight">Dec 22, 2024 11:45 AM</td>
                                                                            <td class="colorgrayLight">INV-1012</td>
                                                                            <td>Received returned "Widget C" (2 units) for restocking</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Emily Davis</td>
                                                                            <td class="colorgrayLight">Sales Representative</td>
                                                                            <td class="colorgrayLight">Dec 21, 2024 10:20 AM</td>
                                                                            <td class="colorgrayLight">INV-1008</td>
                                                                            <td>Processed refund for returned "Widget A" (3 units)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Robert Brown</td>
                                                                            <td class="colorgrayLight">Operations Manager</td>
                                                                            <td class="colorgrayLight">Dec 20, 2024 02:15 PM</td>
                                                                            <td class="colorgrayLight">INV-1005</td>
                                                                            <td>Updated return status for "Widget D" (1 unit)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="colorgrayLight">Sarah Johnson</td>
                                                                            <td class="colorgrayLight">Procurement Officer</td>
                                                                            <td class="colorgrayLight">Dec 19, 2024 01:30 PM</td>
                                                                            <td class="colorgrayLight">INV-1001</td>
                                                                            <td>Approved replacement request for "Widget E" (4 units)</td>
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
                                        <!-- <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">
                                       
                                        </div>

                                        <div class="tab-pane" id="NoteHeadIcon" aria-labelledby="NoteHeadIcon-tab" role="tabpanel">
                                        
                                        </div> -->
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
$(document).ready(function () {
  let uploadedImages = [
    { name: 'image1.png', path: 'assets/img/new-image/40019371_31-bournvita-chocolate-removebg-preview.png' },
    { name: 'image2.png', path: 'assets/img/new-image/40189244_8-kelloggs-muesli-break-removebg-preview.png' },
    { name: 'image3.png', path: 'assets/img/new-image/40224575_1-nissin-nissin-geki-ho-removebg-preview.png' },
  ];

  const imagePreviewList = $('#image-preview-list');

  // Add existing images to preview
  uploadedImages.forEach(file => {
    const imageItem = $(`
      <div class="image-preview-item" data-file-name="${file.name}">
        <img src="${file.path}" alt="Preview">
        <button class="remove-image-button">✖</button>
      </div>
    `);
    imagePreviewList.append(imageItem);
  });

  // Handle file input change
  $('#file-input').on('change', function () {
    const files = Array.from(this.files);

    if (uploadedImages.length + files.length > 5) {
      Swal.fire({
        icon: 'error',
        title: 'Too Many Images',
        text: 'You can upload a maximum of 5 images at a time.',
        confirmButtonText: 'Got it!',
      });
      $(this).val(''); // Clear the input to allow re-selection
      return;
    }

    files.forEach(file => {
      if (file.size > 10 * 1024 * 1024) {
        Swal.fire({
          icon: 'error',
          title: 'File Too Large',
          text: `Image "${file.name}" exceeds the 10MB size limit.`,
          confirmButtonText: 'Okay',
        });
        return;
      }

      if (uploadedImages.some(img => img.name === file.name)) {
        Swal.fire({
          icon: 'warning',
          title: 'Duplicate File',
          text: `Image "${file.name}" is already uploaded.`,
          confirmButtonText: 'Understood',
        });
        return;
      }

      uploadedImages.push({ name: file.name, path: 'new-path-here' });

      const reader = new FileReader();
      reader.onload = function (e) {
        const imageItem = $(`
          <div class="image-preview-item" data-file-name="${file.name}">
            <img src="${e.target.result}" alt="Preview">
            <button class="remove-image-button">✖</button>
          </div>
        `);
        imagePreviewList.append(imageItem);
      };
      reader.readAsDataURL(file);
    });

    $(this).val('');
  });

  $(document).on('click', '.remove-image-button', function () {
    const imageItem = $(this).closest('.image-preview-item');
    const fileName = imageItem.data('file-name');

    uploadedImages = uploadedImages.filter(img => img.name !== fileName);
    imageItem.remove();
  });
});
</script>

