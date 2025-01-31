<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Edit Vendor Credits</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="purchase-orders.php">Vendor Credits View</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Vendor Credits</li>
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
                            <a href="all-bills.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
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
                                            <h6 class="SectionTitleFG">Edit Vendor Credits</h6>
                                                <div class="InputFelidsContainer">
                                                
                                                    <div class="form-group">
                                                     <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Vendor Name</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select  class=" js-example-basic-single select2">
                                                                <option value="" disabled selected>Select Vendor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Credit Note# <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <div class="skuCode">
                                                            <input type="text" placeholder="" id="name" class="form-control" value="PO-00001">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Order Number</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <div class="skuCode">
                                                            <input type="text" placeholder="" id="name" class="form-control">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Reference Number#</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <div class="skuCode">
                                                            <input type="text" placeholder="" id="name" class="form-control">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>

                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" data-bs-toggle="tooltip" data-placement="top" title="">Vendor Credit Date <span>*</span>
                                                         </div>
                                                            <div class="col-lg-8">
                                                            <input type="text" placeholder=" " id="name" class="form-control datepicker1">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                             <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label for="#" >Subject</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                            <textarea type="text" placeholder=" " id="name" class="form-control" rows="3"></textarea>
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
           
                            <div class="col-lg-10">
                                <div class="sectionBox ComboItemsbox">
                                    <div class="form-check align-items-center mt-2 p-0">
                                        <!-- <input class="form-check-input varrientCheckbox" type="checkbox" value="" id="flexCheckChecked3" checked> -->
                                        <label class="form-check-label" for="flexCheckChecked3">
                                            Item Details
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 tableBox VariantContainer mb-3">
                                <table class="table table-bordered AssociateItemTable">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Item Details</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Amount</th>

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
                                                                <img src="assets/img/new-image/no-action-removebg-preview.png"
                                                                    alt="">
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
                                                                    <h6 class="ItemName">Horlicks <span>250gm</span>
                                                                    </h6>
                                                                    <h6 class="ItemStock">Stock on Hand <span
                                                                            class="text-success">60.00</span></h6>
                                                                </div>
                                                            </li>
                                                            <li class="location-item" style="display: none;">
                                                                <div class="itemDetailBox">
                                                                    <h6 class="ItemName">Horlicks <span>450gm</span>
                                                                    </h6>
                                                                    <h6 class="ItemStock">Stock on Hand <span
                                                                            class="text-success">40.00</span></h6>
                                                                </div>
                                                            </li>
                                                            <li class="location-item" style="display: none;">
                                                                <div class="itemDetailBox">
                                                                    <h6 class="ItemName">Organic Soap <span>125gm</span>
                                                                    </h6>
                                                                    <h6 class="ItemStock">Stock on Hand <span
                                                                            class="text-danger">00.00</span></h6>
                                                                </div>
                                                            </li>

                                                        </div>

                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="QtyInput">
                                                <input type="text" placeholder="1.00" id="name" class="form-control"
                                                    value="">
                                            </td>
                                            <td class="QtyInput">
                                                <input type="text" placeholder="0.00" id="name" class="form-control"
                                                    value="">
                                            </td>
                                            <td class="QtyInput">
                                                <div class="input-group dimension mb-3">
                                                    <input type="text" class="form-control"
                                                        aria-label="Text input with dropdown button">
                                                    <button class="btn btn-outline-primary dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">%</button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#" data-value="%">%</a></li>
                                                        <li><a class="dropdown-item" href="#" data-value="USD">USD</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>

                                            <td>
                                                <strong> 0.00</strong>
                                                <div class="ActionButtonsBoxVarrient">
                                                    <div class="actionButtonsVarnt">
                                                        <a class="action-set" href="javascript:void(0);"
                                                            data-bs-toggle="dropdown" aria-expanded="true">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">

                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item addRowMultipleBtn">
                                                                    <iconify-icon icon="gridicons:add-outline">
                                                                    </iconify-icon> Add Row
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item RemoveRow">
                                                                    <iconify-icon
                                                                        icon="material-symbols:delete-outline">
                                                                    </iconify-icon> Delete
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="7">
                                                <a href="javascript:void(0);" class="addrowBtn addRowMultipleBtn">
                                                    <iconify-icon icon="hugeicons:node-add"></iconify-icon> Add row
                                                </a>
                                            </td>
                                            <!-- <td>
                                               
                                                <div >
                                                    <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Sub Total:</strong> $0.00</p>
                                                    <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Discount:</strong> $0.00</p>
                                                    <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Total VAT:</strong> $0.00</p>
                                                    <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">VAT (20%):</strong> $0.00</p>
                                                    <p style="margin: 10px 0; font-size: 16px; font-weight: bold;"><strong style="width:100px;display:inline-flex;">Total Due:</strong> $0.00</p>
                                                </div>
                                            </td> -->

                                        </tr>

                                    </tbody>


                                </table>

                            </div>

                            <div class="col-lg-10">
                                <div class="row justify-content-end">
                                    <!-- <div class="col-lg-5">
                                        <div class="form-group">
                                            <h6 class="TitleCom">Customer Note</h6>
                                            <textarea type="text" placeholder=" " id="name" class="form-control"
                                                rows="3"></textarea>
                                        </div>
                                         <div class="paymentBoxhu">
                                            <h6 class="TitleCom">Payment by</h6>
                                            <div class="typeBox">
                                                <div class="form-check">
                                                    <input class="form-check-input visually-hidden" type="radio" name="payment" id="Radio5" checked>
                                                    <label class="form-check-label button-style" for="Radio5">
                                                    <iconify-icon icon="mingcute:cash-2-line"></iconify-icon> Cash
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input visually-hidden" type="radio" name="payment" id="Radio6">
                                                    <label class="form-check-label button-style" for="Radio6">
                                                    <iconify-icon icon="material-symbols:qr-code"></iconify-icon>   QR
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input visually-hidden" type="radio" name="payment" id="Radio7">
                                                    <label class="form-check-label button-style" for="Radio7">
                                                    <iconify-icon icon="solar:card-linear"></iconify-icon>   Card
                                                    </label>
                                                </div>
                                            </div>
                                            <p class="paymentmessage">Safe and Secure payment by <img src="assets/img/new-image/mastercard_circles_92px_2x.png" alt=""> <img src="assets/img/new-image/Visa-Logo-2006.png" alt=""></p>
                                        </div> 
                                        

                                    </div> -->
                                    <div class="col-lg-5">
                                        <div class="grandTotal">
                                            <ul class="GrandtotalList">
                                                <li>
                                                    <h6>Sub Total</h6>
                                                    <h6>180.00</h6>
                                                </li>
                                                <li>
                                                    <div class="typeBox">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="tax" id="Radio3" checked>
                                                            <label class="form-check-label" for="Radio3">
                                                            TDS
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="tax" id="Radio4">
                                                            <label class="form-check-label" for="Radio4">
                                                                TCS
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <h6>
                                                        -0.00
                                                    </h6>
                                                </li>
                                                <li>
                                                    <div class="typeBox">
                                                        <input type="text" placeholder="" id="name" class="form-control" style="width:150px;" value="Adjustment">
                                                        <div class="InputGroup">
                                                          <input type="text" placeholder="" id="name" class="form-control" value="" style="width:150px;">
                                                            <a href="#" class="FieldInfo noteIconInput"
                                                             data-bs-toggle="tooltip" 
                                                             data-placement="top" 
                                                             data-bs-original-title="Add any other +ve or -ve charges that need to be applied to adjust the total amount of the transaction Eg. +10 or -10.">
                                                                <iconify-icon icon="lets-icons:setting-line"></iconify-icon>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h6>
                                                        0.00
                                                    </h6>
                                                </li>
                                                <li class="TotalBoxLi">
                                                    <h5>Total</h5>
                                                    <h5>0.00</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>
            </div>
        
        <div class="ItemContainerTop no-bg border-top mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="form-group">
                            <h6 class="TitleCom">Term & Condition</h6>
                        <textarea type="text" placeholder=" " id="name" class="form-control"
                        rows="5"></textarea>
                            </div>
                            
                        </div>
                        <div class="col-lg-5">
                            <h6 class="TitleCom">Attach File(s) to  Purchase Order</h6>
                            <div class="file-upload-container">
                                <label for="file-input" class="custom-file-button">
                                    <span class="upload-icon">
                                        <iconify-icon icon="tabler:upload"></iconify-icon>
                                    </span>
                                    Upload Images
                                </label>
                                <input type="file" id="file-input" multiple accept="image/*">
                                <div class="file-upload-info">You can upload a maximum of 5 images, 10MB each</div>

                            </div>
                            <div id="image-preview-list"></div>
                        </div>
                        
                    </div>
                   
                </div>

            </div>
        </div>

            
         
             
            
            
        <div class="FormSubmit_fix_container">
            <a href="vendor-credits.php">
                <button type="button" class="btn  commonCancleButton">
                    <i class="ti-save-alt"></i> Save as Draft
                </button>
            </a>
            <a href="vendor-credits-view.php">
                <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                    <i class="ti-save-alt"></i> Save & Send
                </button>
            </a>
            <a href="vendor-credits.php">
                <button type="button" class="btn commonCancleButton">
                    Cancel
                </button>
            </a>

        </div>
</div>
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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>






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
            <td>0.00</td>
            <td class="QtyInput">
                <input type="text" placeholder="0.00" id="name" class="form-control" value="">
            </td>
            <td class="QtyInput">
                    <div class="input-group dimension mb-3">
                        <input type="text" class="form-control"
                            aria-label="Text input with dropdown button">
                        <button class="btn btn-outline-primary dropdown-toggle"
                            type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">%</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#" data-value="%">%</a></li>
                            <li><a class="dropdown-item" href="#" data-value="USD">USD</a>
                            </li>
                        </ul>
                    </div>
                </td>
            <td class="">
            <strong> 0.00</strong>
                <div class="ActionButtonsBoxVarrient">
                    <div class="actionButtonsVarnt">
                        <a class="action-set" href="javascript:void(0);"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="javascript:void(0);"
                                    class="dropdown-item addRowMultipleBtn">
                                    <iconify-icon icon="gridicons:add-outline">
                                    </iconify-icon> Add Row
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    class="dropdown-item RemoveRow">
                                    <iconify-icon
                                        icon="material-symbols:delete-outline">
                                    </iconify-icon> Delete
                                </a>
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

<script>
$(document).ready(function () {
  let uploadedImages = [];

  $('#file-input').on('change', function () {
    const imagePreviewList = $('#image-preview-list');
    const files = Array.from(this.files);

    // Validate total files
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

    for (let file of files) {
      // Validate file size
      if (file.size > 10 * 1024 * 1024) {
        Swal.fire({
          icon: 'error',
          title: 'File Too Large',
          text: `Image "${file.name}" exceeds the 10MB size limit.`,
          confirmButtonText: 'Okay',
        });
        continue;
      }

      // Avoid duplicate files
      if (uploadedImages.some(img => img.name === file.name)) {
        Swal.fire({
          icon: 'warning',
          title: 'Duplicate File',
          text: `Image "${file.name}" is already uploaded.`,
          confirmButtonText: 'Understood',
        });
        continue;
      }

      uploadedImages.push(file);

      // Create an image preview
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
    }

    // Clear input to allow re-selection of the same file if needed
    $(this).val('');
  });

  // Remove image from list
  $(document).on('click', '.remove-image-button', function () {
    const imageItem = $(this).closest('.image-preview-item');
    const fileName = imageItem.data('file-name');

    // Remove file from the array
    uploadedImages = uploadedImages.filter(img => img.name !== fileName);

    // Remove file from the UI
    imageItem.remove();
  });
});
</script>




<script>
$(document).ready(function() {
    // Initialize Select2
    $('.country-select').select2();

    // Fetch country data
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Sort countries alphabetically
            const sortedCountries = data.sort((a, b) => 
                a.name.common.localeCompare(b.name.common)
            );

            // Populate the select element with countries
            sortedCountries.forEach(country => {
                $('.country-select').append(new Option(country.name.common, country.cca2));
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
});
</script>
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