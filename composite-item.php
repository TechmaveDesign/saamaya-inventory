<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Composite Items</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Inventory
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Composite Items</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <!-- <div class="me-2 mb-2">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <iconify-icon icon="lets-icons:import-light"></iconify-icon> Import
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="ActionHeadButtons">
                            <a href="#" class="btn btnImport"><iconify-icon icon="lets-icons:import-light"></iconify-icon> Import</a>
                            <a href="add-composite-item.php"  class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New Item</a>
                        </div>
                        <!-- <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="filterBox">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Name">
                                <!-- <label for="#">Product</label> -->
                                <!-- <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Item</option>
                                    <option value="us">Bournvita chocolate</option>
                                    <option value="ca">Muesli Fruit & Nut</option>
                                    <option value="ca">Korean Noodle</option>
                                    <option value="gb">Quinoa Penne Pasta</option>
                                    <option value="au">Strawberry Soap</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                               <input type="text" class="form-control" placeholder="Search by SKU Code">
                                <!-- <label for="#">Product</label> -->
                                <!-- <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Brand</option>
                                    <option value="us">Cadbury</option>
                                    <option value="ca">Kellogg's</option>
                                    <option value="ca">Quinoa</option>
                                    <option value="gb">Lux</option>
                                    <option value="au">Kissan</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Status</option>
                                    <option value="us">Active</option>
                                    <option value="ca">Inactive</option>
                                  
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3">
                            <div class="form-group">
                                
                                <select class="js-example-basic-single select2">
                                    <option value="bd" disabled selected>Select Category</option>
                                    <option value="box">Grocery</option>
                                    <option value="cm">Dairy & Milk</option>
                                    <option value="dz">Fruits & Vegetables</option>
                                    <option value="kg">Oil,Ghee & Masala</option>
                                    <option value="g">Bakery & Biscuits</option>
                                    <option value="lb">Cleaners & Repellents</option>
                                    <option value="oz">Electronics</option>
                                    <option value="m">Stationery & Games</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- Performance Indicator list -->
                    <div class="card tablemaincard_nopaddingleftright">

                <div class="card-body p-0">
                    <div class="custom-datatable-filter">
                        <table class="table common-datatable withoutActionTR nowrap w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Stock On Hand</th>
                                    <th>Reorder Point</th>
                                    <th>Items Count</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <iconify-icon icon="line-md:folder-twotone"></iconify-icon>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Chocolate Drink Combo kit</a></h6>
            </div>
        </div>
    </td>
    <td>SKU112365</td>
    <td>200.00</td>
    <td>10</td>
    <td>5</td>
    <td> <span class="badge bg-soft-success">Active</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View item Details" href="composite-item-detail.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <iconify-icon icon="line-md:folder-twotone"></iconify-icon>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Vanilla Drink Combo kit</a></h6>
            </div>
        </div>
    </td>
    <td>SKU112366</td>
    <td>250.00</td>
    <td>15</td>
    <td>6</td>
    <td> <span class="badge bg-soft-success">Active</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View item Details" href="composite-item-detail.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <iconify-icon icon="line-md:folder-twotone"></iconify-icon>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Strawberry Drink Combo kit</a></h6>
            </div>
        </div>
    </td>
    <td>SKU112367</td>
    <td>220.00</td>
    <td>20</td>
    <td>5</td>
    <td> <span class="badge bg-soft-danger">Inactive</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View item Details" href="composite-item-detail.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <iconify-icon icon="line-md:folder-twotone"></iconify-icon>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Mango Drink Combo kit</a></h6>
            </div>
        </div>
    </td>
    <td>SKU112368</td>
    <td>230.00</td>
    <td>12</td>
    <td>7</td>
    <td> <span class="badge bg-soft-success">Active</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View item Details" href="composite-item-detail.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <iconify-icon icon="line-md:folder-twotone"></iconify-icon>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Blueberry Drink Combo kit</a></h6>
            </div>
        </div>
    </td>
    <td>SKU112369</td>
    <td>240.00</td>
    <td>8</td>
    <td>4</td>
    <td> <span class="badge bg-soft-success">Active</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View item Details" href="composite-item-detail.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <iconify-icon icon="line-md:folder-twotone"></iconify-icon>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Pineapple Drink Combo kit</a></h6>
            </div>
        </div>
    </td>
    <td>SKU112370</td>
    <td>260.00</td>
    <td>18</td>
    <td>6</td>
    <td> <span class="badge bg-soft-danger">Inactive</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View item Details" href="composite-item-detail.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<!-- Add 4 more rows similarly with unique data -->

                                
                 
            </tbody>
        </table>
    </div>
  </div>
</div>
<!-- /Performance Indicator list -->
    </div>
    
</div>
<?php include "footer.php"?>
