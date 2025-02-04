<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">All Sub Category</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                Settings 
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Sub Category</li>
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
                            <!-- <a href="#" class="btn btnImport"><iconify-icon icon="lets-icons:import-light"></iconify-icon> Import</a> -->
                            <a href="vendor-add.php"  class="btn btn-primary d-flex align-items-center themeBtn" data-bs-toggle="modal" data-bs-target="#add-category"><iconify-icon icon="majesticons:plus"></iconify-icon> Add Sub Category</a>
                        </div>
                        <!-- <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="filterBox">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Category</option>
                                    <option value="us">Electronics</option>
                                    <option value="ca">Furniture</option>
                                    <option value="ca">Clothing & Fashion</option>
                                    <option value="gb">Food & Beverages</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Status</option>
                                    <option value="us">Active</option>
                                    <option value="ca">Inactive</option>
                                    <option value="ma">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="#"></label> -->
                                <input type="text" placeholder="Date Range"  class="form-control daterange">
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <!-- Performance Indicator list -->
                    <div class="card tablemaincard_nopaddingleftright">

                <div class="card-body p-0">
                    <div class="custom-datatable-filter">
                        <table class="table common-datatable withoutActionTR nowrap w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th>S.NO</th>
                                    <th>Parent category</th>
                                    <th>Sub Category</th>
                                    <th>Created By</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            <tr>
                                <td>01</td>
                                <td>Electronics</td>
                                <td class="subcategory_row" data-category="Electronics">
                                    <div class="subcategory_items">
                                        <div class="subct_item">Smartphones </div>
                                        <div class="subct_item">Tablets </div>
                                        <div class="subct_item">Laptops </div>
                                        <div class="subct_item">Televisions </div>
                                        <div class="subct_item">Smartwatches </div>
                                        <div class="subct_item">Cameras </div>
                                        <div class="subct_item">Refrigerators</div>
                                        <div class="subct_item">Air Conditioners </div>
                                        <div class="subct_item">Dishwashers</div>
                                        <div class="subct_item">Smart Home Devices</div>
                                    </div>
                                </td>
                                <td>Admin</td>
                                <td>2025-01-01 10:00</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
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
                                <td>02</td>
                                <td>Furniture</td>
                                <td class="subcategory_row" data-category="Furniture">
                                    <div class="subcategory_items">
                                        <div class="subct_item">Sofas & Couches</div>
                                        <div class="subct_item">Sectionals</div>
                                        <div class="subct_item">Recliners</div>
                                        <div class="subct_item">Coffee Tables</div>
                                        <div class="subct_item">End Tables</div>
                                        <div class="subct_item">TV Stands</div>
                                        <div class="subct_item">Ottomans </div>
                                    </div>
                                </td>
                                <td>Admin</td>
                                <td>2025-01-02 11:00</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
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
                                <td>03</td>
                                <td>Clothing & Fashion</td>
                                <td class="subcategory_row" data-category="Clothing & Fashion">
                                    <div class="subcategory_items">
                                        <div class="subct_item">Men’s Wear</div>
                                        <div class="subct_item">Women’s Wear</div>
                                        <div class="subct_item">Children’s Clothing</div>
                                        <div class="subct_item">Footwear</div>
                                        <div class="subct_item">Accessories</div>
                                    </div>
                                </td>
                                <td>Super Admin</td>
                                <td>2025-01-03 14:30</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1-2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>Food & Beverages</td>
                                <td class="subcategory_row" data-category="Food & Beverages">
                                    <div class="subcategory_items">
                                        <div class="subct_item">Fresh Produce</div>
                                        <div class="subct_item">Packaged Foods</div>
                                        <div class="subct_item">Beverages & Soft Drinks</div>
                                        <div class="subct_item">Chicken</div>
                                        <div class="subct_item">Rice</div>
                                        <div class="subct_item">Wheat</div>
                                        <div class="subct_item">Popcorn</div>
                                    </div>
                                </td>
                                
                                <td>Admin</td>
                                <td>2025-01-04 09:45</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
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
                                <td>05</td>
                                <td>Health & Beauty</td>
                                <td class="subcategory_row" data-category="Health & Beauty">
                                    <div class="subcategory_items">
                                        <div class="subct_item">Skincare Products</div>
                                        <div class="subct_item">Cosmetics</div>
                                        <div class="subct_item">Healthcare Supplies</div>
                                        <div class="subct_item">Pharmaceuticals</div>
                                        <div class="subct_item">Facial Cleansers</div>
                                        <div class="subct_item">Sunscreens</div>
                                        <div class="subct_item">Face Masks</div>
                                        <div class="subct_item">Eye Care</div>
                                    </div>
                                </td>
                                
                                <td>Super Admin</td>
                                <td>2025-01-03 08:15</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
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
                                <td>06</td>
                                <td>Sports & Outdoors</td>
                                <td class="subcategory_row" data-category="Sports & Outdoors">
                                    <div class="subcategory_items">
                                        <div class="subct_item">Gym Equipment</div>
                                        <div class="subct_item">Camping & Hiking Gear</div>
                                        <div class="subct_item">Sportswear</div>
                                        <div class="subct_item">Soccer</div>
                                        <div class="subct_item">Basketball</div>
                                        <div class="subct_item">Baseball & Softball</div>
                                        <div class="subct_item">American Football</div>
                                        <div class="subct_item">Volleyball</div>

                                    </div>
                                </td>
                                
                                <td>Admin</td>
                                <td>2025-01-05 12:00</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
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
                                <td>07</td>
                                <td>Automotive & Spare Parts</td>
                                <td class="subcategory_row" data-category="Automotive & Spare Parts">
                                    <div class="subcategory_items">
                                        <div class="subct_item">Car Accessories</div>
                                        <div class="subct_item">Vehicle Parts</div>
                                        <div class="subct_item">Lubricants & Oils</div>
                                        <div class="subct_item">Pistons & Rings</div>
                                        <div class="subct_item">Crankshafts & Camshafts</div>
                                        <div class="subct_item">Gaskets & Seals</div>
                                        <div class="subct_item">Batteries</div>
                                        <div class="subct_item">Sensors & Switches</div>
                                    </div>
                                </td>
                                
                                <td>Admin</td>
                                <td>2025-01-07 10:00</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
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
            </tbody>
        </table>
    </div>
  </div>
</div>
<!-- /Performance Indicator list -->
    </div>
    
</div>

<!-- Add Category -->
<div class="modal fade" id="add-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Add Sub Category</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form action="category.php">
                            <div class="mb-3">
                                <!-- <label class="form-label">Parent Category</label>
                                <input type="text" class="form-control"> -->
                                <div class="form-group">
                                <label for="#">Parent Categor</label>
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Category</option>
                                    <option value="us">Electronics</option>
                                    <option value="ca">Furniture</option>
                                    <option value="ca">Clothing & Fashion</option>
                                    <option value="gb">Food & Beverages</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group adding_fildswrap Addprtags_wrap mb-3">
                                <label class="form-label">Category Name </label>
                                <div class="tag-container">
                                    <input type="text" class="form-control tag-input" placeholder="Sub category name.">
                                    <button class="add-tag" type="button"><i class="fa-solid fa-plus"></i>
                                        Add</button>
                                </div>
                                <div class="tags-list">
                                    <!-- Tags will be displayed here -->
                                </div>
                            </div>
                            <div class="mb-0">
                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                    <span class="status-label">Status</span>
                                    <input type="checkbox" id="user2" class="check" checked="">
                                    <label for="user2" class="checktoggle"></label>
                                </div>
                            </div>
                            <div class="modal-footer-btn">
                                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-submit">Sub Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Category -->

<!-- Edit Category -->
<div class="modal fade" id="Edit-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Edit Category</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form action="category.php">
                            <div class="mb-3">
                                <!-- <label class="form-label">Category</label>
                                <input type="text" class="form-control"> -->
                                <div class="form-group">
                                <label for="#">Parent Categor</label>
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Category</option>
                                    <option value="us">Electronics</option>
                                    <option value="ca">Furniture</option>
                                    <option value="ca">Clothing & Fashion</option>
                                    <option value="gb">Food & Beverages</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group adding_fildswrap Addprtags_wrap mb-3">
                                <label class="form-label">Category Name </label>
                                <div class="tag-container">
                                    <input type="text" class="form-control tag-input" placeholder="Sub category name.">
                                    <button class="add-tag" type="button"><i class="fa-solid fa-plus"></i>
                                        Add</button>
                                </div>
                                <div class="tags-list">
                                    <!-- Tags will be displayed here -->
                                </div>
                            </div>
                            <div class="mb-0">
                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                    <span class="status-label">Status</span>
                                    <input type="checkbox" id="user3" class="check" checked="">
                                    <label for="user3" class="checktoggle"></label>
                                </div>
                            </div>
                            <div class="modal-footer-btn">
                                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-submit">Edit Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Category -->

<!-- All Subcategories -->
<!-- Bootstrap Modal -->
<div class="modal fade Sub" id="subcategoryModal" tabindex="-1" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subcategoryModalLabel">All Subcategories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mdheight_small">
                <!-- Search Bar -->
                <div class="searchwrapper_category">
                    <input type="text" id="subcategorySearch" class="form-control" placeholder="Search subcategories..."
                        style="margin-bottom: 10px;">
                    <iconify-icon icon="proicons:search"></iconify-icon>
                </div>
                <ul class="list-group subcategory_mdListing" id="modalSubcategoryList">
                    <!-- Dynamic content will be populated here -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- All Subcategories -->



<?php include "footer.php"?>
<!-- ------------------------------------
Date Picker custom plugin start
-------------------------------------- -->
<link rel="stylesheet" type="text/css" href="assets/css/duDatepicker.css">
<link rel="stylesheet" type="text/css" href="assets/css/duDatepicker-theme.css">

<script type="text/javascript" src="assets/js/duDatepicker.js"></script>
<script type="text/javascript">
    window.onload = function () {
        duDatepicker('.datepicker1', {
            format: 'mmm d, yyyy', // Use 'mmm' for abbreviated month (e.g., Dec)
            range: false, 
            clearBtn: true,
            // theme: 'myTheme',
            // disabledDays: ['Sat', 'Sun'],
        })
    }
</script>
<!-- ------------------------------------
Date Picker custom plugin End
-------------------------------------- -->

<!-- Include CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<script>
   $(document).ready(function () {
    $('.daterange').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        },
        ranges: {
            'Today': [moment(), moment()],
            'This Week': [moment().startOf('week'), moment().endOf('week')],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
           
        },
        startDate: moment(),
        endDate: moment()
    }, function (start, end) {
        $('.daterange').val(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});

</script>

<script>
    $(document).ready(function() {
        // Function to toggle the visibility of the tags list
        function toggleTagList($list, tags) {
            if (tags.length > 0) {
                $list.css('display', 'flex'); // Show if there are tags
            } else {
                $list.css('display', 'none'); // Hide if no tags
            }
        }
        // Loop through each tag container (supporting multiple instances)
        $('.tag-container').each(function() {
            var $container = $(this);
            var $input = $container.find('.tag-input');
            var $addButton = $container.find('.add-tag');
            var $list = $container.siblings('.tags-list');
            var tags = []; // Tags are scoped to this specific container
            // Add tag functionality
            $addButton.on('click', function() {
                var tag = $input.val().trim();
                if (tag !== '') {
                    tags.push(tag);
                    var tagItem = $('<div class="tag">' + tag +
                        '<span class="remove-tag">&times;</span></div>');
                    $list.append(tagItem);
                    $input.val('');
                    toggleTagList($list, tags); // Toggle visibility after adding a tag
                }
            });
            // Enter key functionality
            $input.on('keypress', function(event) {
                if (event.which === 13) { // Enter key
                    event.preventDefault();
                    $addButton.click();
                }
            });
            // Remove tag functionality
            $list.on('click', '.remove-tag', function() {
                var $tagItem = $(this).parent();
                var tag = $tagItem.text().trim();
                tags = tags.filter(function(item) {
                    return item !== tag;
                });
                $tagItem.remove();
                toggleTagList($list, tags); // Toggle visibility after removing a tag
            });
            // Initial toggle of tags list
            toggleTagList($list, tags);
        });
        // Handling the edit modal opening
        $('#Editcategory_modal').on('shown.bs.modal', function() {
            // When the modal is shown, ensure the tags list is displayed even if it's empty
            $('.tags-list').css('display', 'flex');
            // Fix the tag removal issue in the modal by reinitializing tags for each modal
            $('#Editcategory_modal .tags-list').each(function() {
                var $list = $(this);
                var tags = []; // Scoped to each modal
                // Reinitialize the tags for the modal
                $list.find('.remove-tag').each(function() {
                    var tag = $(this).parent().text().trim();
                    tags.push(tag); // Collect the tags in this modal
                });
                // Handle tag removal inside the modal
                $list.on('click', '.remove-tag', function() {
                    var $tagItem = $(this).parent();
                    var tag = $tagItem.text().trim();
                    tags = tags.filter(function(item) {
                        return item !== tag;
                    });
                    $tagItem.remove();
                    toggleTagList($list,
                    tags); // Toggle visibility after removing a tag
                });
                toggleTagList($list, tags); // Ensure visibility is correct in modal
            });
        });
    });
</script>

<!-- sub category dynamic data show count and list in modal start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('.subcategory_row');
        rows.forEach((row) => {
            const container = row.querySelector('.subcategory_items');
            const items = container.querySelectorAll('.subct_item');
            const maxVisible = 4;
            // Hide subcategories beyond the first 4
            items.forEach((item, index) => {
                if (index >= maxVisible) {
                    item.style.display = 'none';
                }
            });
            // Add remaining count circle if needed
            if (items.length > maxVisible) {
                const remainingCount = items.length - maxVisible;
                const countCircle = document.createElement('div');
                countCircle.className = 'subct_item_count';
                countCircle.textContent = `+${remainingCount}`;
                countCircle.setAttribute('data-bs-toggle', 'modal');
                countCircle.setAttribute('data-bs-target', '#subcategoryModal');
                countCircle.setAttribute('data-subcategory', JSON.stringify(Array.from(items).map(
                    item => item.textContent))); // Store all items in data attribute
                countCircle.setAttribute('data-category', row.getAttribute(
                'data-category')); // Store category name
                container.appendChild(countCircle);
            }
        });
        // Populate modal with the correct subcategory items
        document.querySelectorAll('.subct_item_count').forEach(countCircle => {
            countCircle.addEventListener('click', (event) => {
                const categoryName = event.target.getAttribute('data-category');
                const allSubcategories = JSON.parse(event.target.getAttribute(
                    'data-subcategory'));
                const modalTitle = document.getElementById('subcategoryModalLabel');
                const modalList = document.getElementById('modalSubcategoryList');
                const searchInput = document.getElementById('subcategorySearch');
                modalList.innerHTML = ''; // Clear previous list
                // Set modal title to category name
                modalTitle.textContent = `${categoryName} - All Subcategories`;
                // Populate modal list with subcategories
                allSubcategories.forEach(subcategory => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item';
                    listItem.textContent = subcategory;
                    modalList.appendChild(listItem);
                });
                // Add search functionality
                searchInput.addEventListener('input', () => {
                    const searchText = searchInput.value.toLowerCase();
                    const items = modalList.querySelectorAll('.list-group-item');
                    let found = false;
                    items.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        if (text.includes(searchText)) {
                            item.style.display = 'block'; // Show item
                            found = true;
                        } else {
                            item.style.display = 'none'; // Hide item
                        }
                    });
                    // Show "No subcategory found" message if no results match
                    const noResultsMessage = document.getElementById(
                    'noResultsMessage');
                    if (!found) {
                        if (!noResultsMessage) {
                            const noMessage = document.createElement('li');
                            noMessage.id = 'noResultsMessage';
                            noMessage.className = 'list-group-item text-danger';
                            noMessage.textContent = 'No subcategory found';
                            modalList.appendChild(noMessage);
                        }
                    } else {
                        const noMessage = document.getElementById('noResultsMessage');
                        if (noMessage) {
                            noMessage
                        .remove(); // Remove the "No subcategory found" message
                        }
                    }
                });
            });
        });
    });
</script>
<!-- sub category dynamic data show count and list in modal end -->