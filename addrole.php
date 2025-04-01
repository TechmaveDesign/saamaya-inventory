<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Add Role & Permission</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                  <a href="role-permission.php">Role & Permission</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Role & Permission</li>
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
                            <a href="role-permission.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#add_users" class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New Item</a> -->
                        </div>
                        <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div>
                    </div>
                </div>
             <div class="ItemContainerTop">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="InputFelidsContainer">
                                                    <div class="form-group">
                                                        <div class="row row align-items-center">
                                                            <div class="col-lg-3">
                                                                <label for="#" >Role Name</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                            <input type="text" placeholder="Role Name " id="name" class="form-control" rows="3">
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>   
                                        </div>

                                        <div class="col-lg-6">
                                                <div class="InputFelidsContainer">
                                                    <div class="form-group">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-3">
                                                                <label for="#"> Status</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select  class=" js-example-basic-single select2">
                                                                    <option value="" disabled selected>Select Status</option>
                                                                    <option value="Active" >Active</option>
                                                                    <option value="Inactive" >Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                       

                                    </div>
                                </div>
                        </div>
                        
                    </div>
             </div>



            


             <div class="ItemContainerTop no-bg  mb-3">
            <div class="row">
                <div class="col-lg-12">
                <div class="main-accordian-wrap">
                    <h2>User Permission</h2>
                    <div class="accordion" id="accordionExample">

                        <!-- Accordion Items -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                  Dashboard
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="permisson-wrap">
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Overview</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Items Details</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Top Selling Products</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Purchase Order</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Sales Order Summary</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat this block for more accordion items -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                   Inventory
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="permisson-wrap">
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Items</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Composite Items</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Inventory Adjustments</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Inventory Transfer</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                  Sales
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="permisson-wrap">
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Customers</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Sales Orders</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Invoices</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Payments Received</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Sales Returns</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Credit Notes</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Purchases
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="permisson-wrap">
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Vendors</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Purchase Orders</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Purchase Receive</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Bills</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Payment Made</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Vendor Credits</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                  Settings
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="permisson-wrap">
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Category</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Sub Category</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Brands</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div> -->
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Units</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div> -->
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Variant Attributes</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div> -->
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="permisson-box">
                                            <div class="permisson-text">
                                                <p>Store</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Add  
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Edit
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>Delete
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                  System Activity
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="permisson-wrap">
                                        <div class="permisson-box" style="width:100%">
                                            <div class="permisson-text">
                                                <p> System Activity</p>
                                            </div>
                                            <div class="permisson-checkbox">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>View
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
</div>
    <div class="FormSubmit_fix_container">
                <a href="role-permission.php">
                    <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                        <i class="ti-save-alt"></i> Submit
                    </button>
                </a>

            <a href="role-permission.php">
                <button type="button" class="btn commonCancleButton">
                    Cancel
                </button>
            </a>

    </div>
<?php include "footer.php"?>
