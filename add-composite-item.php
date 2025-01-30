<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Add Composite Item</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="composite-item.php">Composite Items List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Composite Item</li>
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
                            <a href="composite-item.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
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
                            <div class="ItemNewContainer">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="InputFelidsContainer">
                                                <!-- <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Type </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="typeBox">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="Radio" id="Radio1" checked>
                                                                <label class="form-check-label" for="Radio1">
                                                                    Goods
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="Radio" id="Radio2">
                                                                <label class="form-check-label" for="Radio2">
                                                                   Service
                                                                </label>
                                                            </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                            
                                            </div> -->
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Name <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >SKU <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="The Stock Keeping Unit of the item"><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                         
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group mt-4">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Category  <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="Choose a category to keep products organized."><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected>Select Category</option>
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
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group mt-4">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Sub Category  <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="Select a subcategory for more precise organization."><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected>Select Sub Category</option>
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
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group mt-4">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Unit <span>*</span> <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="The Stock Keeping Unit of the item"><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected>Select Unit</option>
                                                            <option value="box">Box</option>
                                                            <option value="cm">Centimeter (cm)</option>
                                                            <option value="dz">Dozen (dz)</option>
                                                            <option value="kg">Kilogram (kg)</option>
                                                            <option value="g">Gram (g)</option>
                                                            <option value="lb">Pound (lb)</option>
                                                            <option value="oz">Ounce (oz)</option>
                                                            <option value="m">Meter (m)</option>
                                                            <option value="ft">Foot (ft)</option>
                                                            <option value="in">Inch (in)</option>
                                                            <option value="l">Liter (l)</option>
                                                            <option value="ml">Milliliter (ml)</option>
                                                            <option value="pcs">Pieces (pcs)</option>
                                                        </select>
                                                            <div class="form-check align-items-center mt-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                              Returnable Item <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="Enable this option if the item is eligible for sales return"><iconify-icon icon="akar-icons:question"></iconify-icon></a>
                                                            </label>
                                                          </div>
                                                        </div>
                                                    </div>
                                            
                                            </div>

                                                </div>
                                                
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
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
             </div>
             <div class="ItemContainerTop no-bg  mb-3">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="sectionBox ComboItemsbox">
                                                    <div class="form-check align-items-center mt-2 p-0">
                                                        <!-- <input class="form-check-input varrientCheckbox" type="checkbox" value="" id="flexCheckChecked3" checked> -->
                                                        <label class="form-check-label" for="flexCheckChecked3">
                                                        Associate Items *
                                                        </label>
                                                    </div>
                                                 </div>
                                            </div>
                                            <div class="col-lg-12 tableBox VariantContainer mb-3">
                                                <table class="table table-bordered AssociateItemTable">
                                                   <thead>
                                                         <tr>
                                                            <th colspan="2">Item Details</th>
                                                            <th>Quantity</th>
                                                            <th>Selling Price</th>
                                                            <th>Cost Price</th>
                                                         
                                                            
                                                        </tr>
                                                   </thead>
                                                        <tbody>
                                                            <tr class="varrientDetailRow">
                                                                <td>
                                                                    <img src="assets/img/new-image/dummyImg.png" alt="" class="ItemImg">
                                                                </td>
                                                                <td class="SearchInputTd">
                                                                
                                                                    <div class="profile__input profile__input1">
                                                                        <input type="text" class="input__location"
                                                                            placeholder="Search and select an item" aria-expanded="false">
                                                                        <ul class="dropdown-menu">
                                                                            <!-- <iconify-icon icon="bxs:up-arrow" style="color: white"
                                                                                class="arrowupIcon"></iconify-icon> -->
                                                                            <div class="locationList_container">
                                                                                <li class="no-results">
                                                                                    <img src="assets/img/new-image/no-action-removebg-preview.png" alt="">
                                                                                    <p>Please Search Item Here</p>
                                                                                    <!-- <a class="dropdown-item"
                                                                                    href="#"></a> -->
                                                                                </li>
                                                                                <li class="no-location-found" style="display: none;">
                                                                                    
                                                                                    <img src="assets/img/new-image/nodata.jpg" alt="">
                                                                                    <p>Opps, No Item Found !</p>
                                                                                    <!-- <a
                                                                                    class="dropdown-item" href="#">No Item Found</a> -->
                                                                                </li>
                                                                                <li class="location-item active" style="display: none;">
                                                                                 <div class="itemDetailBox">
                                                                                    <h6 class="ItemName">Horlicks <span>250gm</span></h6>
                                                                                    <h6 class="ItemStock">Stock on Hand <span class="text-success">60.00</span></h6>
                                                                                 </div>
                                                                                </li>
                                                                                <li class="location-item" style="display: none;">
                                                                                 <div class="itemDetailBox">
                                                                                    <h6 class="ItemName">Horlicks <span>450gm</span></h6>
                                                                                    <h6 class="ItemStock">Stock on Hand <span class="text-success">40.00</span></h6>
                                                                                 </div>
                                                                                </li>
                                                                                <li class="location-item" style="display: none;">
                                                                                 <div class="itemDetailBox">
                                                                                    <h6 class="ItemName">Organic Soap <span>125gm</span></h6>
                                                                                    <h6 class="ItemStock">Stock on Hand <span class="text-danger">00.00</span></h6>
                                                                                 </div>
                                                                                </li>
                                                                                
                                                                            </div>

                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td class="QtyInput">
                                                                 <input type="text" placeholder="" id="name" class="form-control" value="1">
                                                                 <p class="PricePerUnit">$25.00 per unit</p>
                                                                </td>
                                                                <td>
                                                                  25.00
                                                                </td>
                                                             
                                                               
                                                                <td>
                                                                20.00

                                                                 <div class="ActionButtonsBoxVarrient">
                                                                 <div class="actionButtonsVarnt">
                                                                    <a class="action-set" href="javascript:void(0);"  data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                      
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item addRowMultipleBtn"><iconify-icon icon="gridicons:add-outline"></iconify-icon> Add Row</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item RemoveRow"><iconify-icon icon="material-symbols:delete-outline"></iconify-icon> Delete</a>
                                                                    </li>							
                                                                    </ul>
                                                                   
                                                                 </div>
                                                                 </div>
                                                               
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                  <a href="javascript:void(0);" class="addrowBtn addRowMultipleBtn"><iconify-icon icon="hugeicons:node-add"></iconify-icon> Add row</a>
                                                                </td>
                                                                <td colspan="1">
                                                                    Total ($): 
                                                                </td>
                                                                <td>
                                                                    00.00 
                                                                </td>
                                                                <td >
                                                                    00.00 
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    

                                                </table>
                                                
                                            </div>
                                           
                                           
                                        
                                    </div>
                                </div>
                        </div>
                        
                    </div>
             </div>
            
             <div class="ItemContainerTop no-bg border-top">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="InputFelidsContainer">
                                                 <div class="sectionBox">
                                                    <div class="form-check align-items-center mt-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked="">
                                                        <label class="form-check-label" for="flexCheckChecked2">
                                                         Sales Information
                                                        </label>
                                                    </div>
                                                 </div>
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Selling Price <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Description</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <textarea type="text" placeholder=" " id="name" class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                        
                                          

                                                </div>
                                                
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="InputFelidsContainer">
                                                 <div class="sectionBox">
                                                    <div class="form-check align-items-center mt-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked="">
                                                        <label class="form-check-label" for="flexCheckChecked2">
                                                        Purchase Information
                                                        </label>
                                                    </div>
                                                 </div>
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Cost Price <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Description</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <textarea type="text" placeholder=" " id="name" class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#"> Preferred Vendor</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="js-example-basic-single select2">
                                                                <option value="s-0">Select Vendor</option>
                                                                <option value="us">Jhon William</option>
                                                                <option value="ca">Kenil </option>
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

             <div class="ItemContainerTop border-top no-bg">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="InputFelidsContainer">
                                               
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Dimensions</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <div class="dimension-fields">
                                                            <span class="dimension-input">
                                                            <input id="ember347" class="ember-text-field text-end ember-view form-control" type="text"></span> 
                                                            <span class="dimension-seperator">x</span> 
                                                            <span class="dimension-input"><input id="ember348" class="ember-text-field text-end ember-view form-control" type="text"></span>
                                                            <span class="dimension-seperator">x</span> 
                                                            <span class="dimension-input"><input id="ember349" class="ember-text-field text-end ember-view form-control" type="text"></span> 
                                                            <div class="dimension ">
                                                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">cm</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#" data-value="cm">cm</a></li>
                                                                <li><a class="dropdown-item" href="#" data-value="in">in</a></li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        <!-- <div class="input-group dimension mb-3">
                                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">cm</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#" data-value="cm">cm</a></li>
                                                                <li><a class="dropdown-item" href="#" data-value="in">in</a></li>
                                                            </ul>
                                                        </div> -->
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                        
                                            <div class="form-group mt-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Manufacturer</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="js-example-basic-single select2">
                                                                <option value="s-0">select manufacturer</option>
                                                                <option value="us">Jhon William</option>
                                                                <option value="ca">Karlo</option>
                                                                <option value="ca">Milliam</option>

                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >UPC  <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="Twelve digit unique number associated with the bar code (Universal Product Code)"><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >EAN   <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="Thirteen digit unique number (International Article Number)"><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
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
                                                            <label for="#">Weight</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <div class="input-group dimension mb-3">
                                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">kg</button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#" data-value="kg">kg</a></li>
                                                                <li><a class="dropdown-item" href="#" data-value="g">g</a></li>
                                                                <li><a class="dropdown-item" href="#" data-value="lb">lb</a></li>
                                                                <li><a class="dropdown-item" href="#" data-value="oz">oz</a></li>


                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                        
                                            <div class="form-group mt-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Brand</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="js-example-basic-single select2">
                                                                <option value="s-0">Select brand</option>
                                                                <option value="us">Lux</option>
                                                                <option value="ca">Venus</option>
                                                                <option value="ca">Patanjali</option>

                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >MPN  <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="Manufacturing Part Number unambiguously identifies a part design"><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >ISBN    <a href="#" class="FieldInfo"  data-bs-toggle="tooltip" data-placement="top" title="Thirteen digit unique commercial book identifier (International Standard Book Number)"><iconify-icon icon="akar-icons:question"></iconify-icon></a></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
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
             
             
             <div class="ItemContainerTop no-bg border-top mb-3">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="sectionBox">
                                                    <div class="form-check align-items-center mt-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked="">
                                                        <label class="form-check-label" for="flexCheckChecked2">
                                                        Track Inventory for this item 
                                                        </label>
                                                    </div>
                                                 </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="InputFelidsContainer">
                                               
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="#"  data-bs-toggle="tooltip" data-placement="top" title="The stock available for sale ">Total Stock </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="#" data-bs-toggle="tooltip" data-placement="top" title="When the stock reaches the reorder point, a notification will be sent to you">Reorder Point</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                        
                                          

                                                </div>
                                                
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="InputFelidsContainer">
                                                
                                                <!-- <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="#" data-bs-toggle="tooltip" data-placement="top" title="The rate at which you sale each unit of the opening stock">Stock Rate per Unit
                                                         </div>
                                                            <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control">
                                                        </div>
                                                    </div>
                                            
                                            </div> -->
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="#" data-bs-toggle="tooltip" data-placement="top" title="">Item Validity On
                                                         </div>
                                                            <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control datepicker1">
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
                                <a href="composite-item.php">
                                    <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                                        <i class="ti-save-alt"></i> Submit
                                    </button>
                                </a>

                            <a href="#">
                                <button type="button" class="btn commonCancleButton">
                                    Cancel
                                </button>
                            </a>

                    </div>
</div>
<?php include "footer.php"?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Select all dropdown menus in the document
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');

        dropdownMenus.forEach(menu => {
            menu.addEventListener('click', function(e) {
                if (e.target.tagName === 'A') {
                    const selectedValue = e.target.getAttribute('data-value');
                    const button = menu.previousElementSibling; // Select the button before the menu
                    if (button && selectedValue) {
                        button.textContent = selectedValue; // Change the button text
                    }
                }
            });
        });
    });
</script>

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

<!-- js code for varient hide and show -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.getElementById('flexCheckChecked3');
    const variantContainer = document.querySelector('.VariantContainer');

    // Function to toggle the visibility of VariantContainer
    function toggleVariantContainer() {
        if (checkbox.checked) {
            variantContainer.style.display = 'block'; // Show the VariantContainer
        } else {
            variantContainer.style.display = 'none'; // Hide the VariantContainer
        }
    }

    // Initialize the visibility based on the checkbox state
    toggleVariantContainer();

    // Add event listener to toggle visibility when checkbox is clicked
    checkbox.addEventListener('change', toggleVariantContainer);
});

</script>






<!-- js code for image upload -->

<script>
    const fileInput = document.getElementById('fileInput');
    const activeImageContainer = document.getElementById('activeImageContainer');
    const uploadedImagesContainer = document.getElementById('uploadedImages');
    const markPrimaryBtn = document.getElementById('markPrimaryBtn');

    let activeImage = null;
    let primaryImageCard = null;

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

          // Create an image card for the bottom list
          const imageCard = document.createElement('div');
          imageCard.classList.add('image-card');
          imageCard.innerHTML = `<img src="${src}" alt="Uploaded Image">`;

          // Click on image to set it as active
          imageCard.addEventListener('click', () => setActiveImage(src, imageCard));

          // Append to the uploaded images container
          uploadedImagesContainer.appendChild(imageCard);

          // Set the first uploaded image as active and primary by default
          if (!activeImage) {
            setActiveImage(src, imageCard);
            setPrimaryImage(imageCard); // Mark the first image as primary by default
          }
        };
        reader.readAsDataURL(file);
      });
    }

    function setActiveImage(src, imageCard) {
      activeImage = src;

      // Clear the upload area and show the active image with a remove button
      activeImageContainer.innerHTML = `
        <img src="${src}" alt="Active Image">
        <button class="remove-btn">&times;</button>
      `;

      // Add remove button functionality for active image
      activeImageContainer.querySelector('.remove-btn').addEventListener('click', () => {
        removeImage(src, imageCard);
      });

      // Show the "Mark as Primary" button
      markPrimaryBtn.style.display = 'block';

      // Update button text and functionality
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
      // If another image was previously set as primary, remove the mark
      if (primaryImageCard) {
        primaryImageCard.classList.remove('marked');
      }

      // Mark the new image as primary
      imageCard.classList.add('marked');
      primaryImageCard = imageCard;

      // Update the "Mark as Primary" button for the active image
      markPrimaryBtn.innerHTML = `
        <img src="assets/img/new-image/check-mark.png" alt="Check" width="16" height="16"> Primary
      `;
      markPrimaryBtn.classList.add('marked');
      markPrimaryBtn.disabled = true;
    }

    function removeImage(src, imageCard) {
      // Remove the image card from the uploaded list
      if (imageCard) {
        imageCard.remove();
      }

      // Check if the active image is being removed
      if (activeImage === src) {
        activeImage = null;

        // Reset activeImageContainer if no images are left
        if (uploadedImagesContainer.children.length === 0) {
          resetActiveImage();
        } else {
          // Otherwise, set the first remaining image as active
          const remainingImages = uploadedImagesContainer.querySelectorAll('.image-card img');
          if (remainingImages.length > 0) {
            setActiveImage(remainingImages[0].src, remainingImages[0].closest('.image-card'));
          }
        }
      }

      // Reset primary image if the removed image was primary
      if (primaryImageCard && primaryImageCard === imageCard) {
        primaryImageCard = null;
        if (uploadedImagesContainer.children.length > 0) {
          const nextCard = uploadedImagesContainer.querySelector('.image-card');
          setPrimaryImage(nextCard);
        } else {
          // Hide the mark primary button if no primary image left
          markPrimaryBtn.style.display = 'none';
        }
      }

      // If there are no images left, hide the "Mark as Primary" button
      if (uploadedImagesContainer.children.length === 0) {
        markPrimaryBtn.style.display = 'none';
      }
    }

    function resetActiveImage() {
      // Reset the upload area to show the placeholder
      activeImageContainer.innerHTML = '<span class="placeholder">Click to upload or drag an image here</span>';
      markPrimaryBtn.style.display = 'none';
      activeImage = null;
    }
</script>

   <!-- booking Engine  Input dropdown js start-->
  

<script>
    $(document).ready(function () {
    // Function to initialize profile__input functionality
    function initializeProfileInput() {
        const profileInputs = document.querySelectorAll('.profile__input');

        profileInputs.forEach(profileInput => {
            const input = profileInput.querySelector('.input__location');
            const dropdownMenu = profileInput.querySelector('.dropdown-menu');
            const noResultsItem = dropdownMenu.querySelector('.no-results');
            const noLocationFoundItem = dropdownMenu.querySelector('.no-location-found');
            const locationItems = dropdownMenu.querySelectorAll('.location-item');

            function updateDropdown() {
                const filter = input.value.toLowerCase();
                let hasResults = false;

                if (filter) {
                    locationItems.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        if (text.includes(filter)) {
                            item.style.display = '';
                            hasResults = true;
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    noLocationFoundItem.style.display = filter && !hasResults ? '' : 'none';
                    noResultsItem.style.display = 'none';
                } else {
                    noResultsItem.style.display = '';
                    noLocationFoundItem.style.display = 'none';
                    locationItems.forEach(item => item.style.display = 'none');
                }
            }

            input.addEventListener('input', updateDropdown);

            input.addEventListener('focus', function () {
                dropdownMenu.style.display = 'block';
                if (!input.value) {
                    noResultsItem.style.display = '';
                    locationItems.forEach(item => item.style.display = 'none');
                }
            });

            locationItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    locationItems.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');
                    input.value = this.querySelector('.ItemName').textContent.trim();
                    dropdownMenu.style.display = 'none';
                });
            });

            document.addEventListener('click', function (e) {
                if (!profileInput.contains(e.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });
        });
    }

    // Initialize profile input for existing rows
    initializeProfileInput();

    // Event listener for adding a new row
    $(document).on('click', '.addRowMultipleBtn', function () {
        let newRow = `
        <tr class="varrientDetailRow">
            <td>
                <img src="assets/img/new-image/dummyImg.png" alt="" class="ItemImg">
            </td>
            <td class="SearchInputTd">
                <div class="profile__input profile__input1">
                    <input type="text" class="input__location" placeholder="Search and select an item" aria-expanded="false">
                    <ul class="dropdown-menu">
                        <div class="locationList_container">
                            <li class="no-results">
                                <img src="assets/img/new-image/no-action-removebg-preview.png" alt="">
                                <p>Please Search Item Here</p>
                            </li>
                            <li class="no-location-found" style="display: none;">
                                <iconify-icon icon="system-uicons:location" style="color: white"></iconify-icon><a class="dropdown-item" href="#">No Item Found</a>
                            </li>
                            <li class="location-item active" style="display: none;">
                                <div class="itemDetailBox">
                                    <h6 class="ItemName">Horlicks <span>250gm</span></h6>
                                    <h6 class="ItemStock">Stock on Hand <span class="text-success">60.00</span></h6>
                                </div>
                            </li>
                            <li class="location-item" style="display: none;">
                                <div class="itemDetailBox">
                                    <h6 class="ItemName">Horlicks <span>450gm</span></h6>
                                    <h6 class="ItemStock">Stock on Hand <span class="text-success">40.00</span></h6>
                                </div>
                            </li>
                            <li class="location-item" style="display: none;">
                                <div class="itemDetailBox">
                                    <h6 class="ItemName">Organic Soap <span>125gm</span></h6>
                                    <h6 class="ItemStock">Stock on Hand <span class="text-danger">00.00</span></h6>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </td>
            <td class="QtyInput">
                <input type="text" placeholder="" id="name" class="form-control" value="1">
                <p class="PricePerUnit">$25.00 per unit</p>
            </td>
            <td>25.00</td>
            <td>20.00
                <div class="ActionButtonsBoxVarrient">
                    <div class="actionButtonsVarnt">
                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item addRowMultipleBtn"><iconify-icon icon="gridicons:add-outline"></iconify-icon> Add Row</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item RemoveRow"><iconify-icon icon="material-symbols:delete-outline"></iconify-icon> Delete</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>`;

        $('table.AssociateItemTable tbody').find('tr:last').before(newRow);

        // Reinitialize profile input for the newly added row
        initializeProfileInput();
    });

    // Event listener for removing a row
    $(document).on('click', '.RemoveRow', function () {
        $(this).closest('tr').remove();
    });
});

</script>