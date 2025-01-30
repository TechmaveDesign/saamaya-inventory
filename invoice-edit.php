<?php include "header.php"?>
<style>
    .ItemImg {
	height: 34px;
}
</style>
<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Edit Invoice</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.php"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="invoice-list.php">All Invoice List</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Invoice</li>
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
                    <a href="invoice-list.php" class="btn btnImport">
                        <iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back
                    </a>
                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#add_users" class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New Item</a> -->
                </div>
                <div class="head-icons ms-2">
                    <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse"
                        id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                </div>
            </div>
        </div>
        <!-- <div class="ItemContainerTop">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ItemNewContainer">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="InputFelidsContainer">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3">
                                            <label for="#">Customer Type</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="typeBox">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="Radio" id="Radio1" checked>
                                                    <label class="form-check-label" for="Radio1">
                                                        New Customer
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="Radio" id="Radio2">
                                                    <label class="form-check-label" for="Radio2">
                                                        Existing Customer
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
        </div> -->


        <div class="ItemContainerTop ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ItemNewContainer1">
                        <div class="row">

                            <div class="col-lg-4">
                                    <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <label for="#">Customer Name <span>*</span></label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" placeholder="Enter Customer Name" id="NewCustomerInput" class="form-control">
                                            <div id="existing" style="display:none;">
                                                <select class="js-example-basic-single select2" >
                                                    <option value="" disabled selected>Select a Customer</option>
                                                    <option value="customer1">John Doe</option>
                                                    <option value="customer2">Jane Smith</option>
                                                    <option value="customer3">Alice Johnson</option>
                                                    <option value="customer4">Michael Brown</option>
                                                    <option value="customer5">Emily Davis</option>
                                                    <option value="customer6">Chris Wilson</option>
                                                    <option value="customer7">Patricia Taylor</option>
                                                    <option value="customer8">David Martinez</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col-lg-4 end -->
                            

                            <div class="col-lg-4">
                                    <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <label for="#">Mobile No </label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" placeholder="Enter Mobile No" class="form-control">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col-lg-4 end -->

                            

                            <div class="col-lg-4">
                                    <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <label for="#">Email Address </label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" placeholder="Enter email address" class="form-control">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col-lg-4 end -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <label for="#">Invoice# <span>*</span></label>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="InputGroup">
                                              <input type="text" placeholder="INV-0001" id="name" readonly
                                                class="form-control" value="INV-0001">
                                                <a href="#" class="FieldInfo noteIconInput"
                                                  data-bs-toggle="tooltip" data-placement="top"
                                                   title="The Invoice ID is automatically generated to ensure each invoice is unique. You don't need to edit it manually.">
                                                    <iconify-icon icon="lets-icons:setting-line"></iconify-icon>
                                                </a>
                                            </div>
                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- col-lg-4 end -->

                            <div class="col-lg-4">
                                    <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <label for="#">Order Number </label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" placeholder="Enter email address" class="form-control">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col-lg-4 end -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <label for="#">Invoice Date <span>*</span></label>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="skuCode">
                                                    <input type="text" placeholder=" " id="name"
                                                        class="form-control datepicker1">

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <!-- col-lg-4 end -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <label for="#">Payments Terms</label>
                                        </div>
                                        <div class="col-lg-7">
                                            <select class="js-example-basic-single select2">
                                                <option value="" disabled selected>Select Terms</option>
                                                <option value="box">Due On Receipt</option>
                                                <option value="cm">Due end of the month</option>
                                                <option value="dz">Due end of next month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col-lg-4 end -->
                            <div class="col-lg-4">
                               <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <label for="#">Due Date <span>*</span></label>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="skuCode">
                                                <input type="text" placeholder=" " id="name"
                                                    class="form-control datepicker1">

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- col-lg-4 end -->

                        </div>
                   
                        
                       
                    </div>
                </div>

            </div>
        </div>
     
        <div class="ItemContainerTop no-bg border-top mb-3">
        <div class="row">
                            <div class="col-lg-6 mb-3">
                            
                            <div class="profile__input profile__input1">
                                <label for="#" class="mb-1">Search Item</label>
                                                    <input type="text" class="input__location input__location1"
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
                            </div>
                            <div class="col-lg-10">
                                <div class="sectionBox ComboItemsbox scanItem">
                                    <div class="form-check align-items-center mt-2 p-0">
                                        <!-- <input class="form-check-input varrientCheckbox" type="checkbox" value="" id="flexCheckChecked3" checked> -->
                                        <label class="form-check-label" for="flexCheckChecked3">
                                            Item Details
                                        </label>
                                    </div>

                                    <!-- Scan Item Button -->
                                    <a href="javascript:void(0);" class="scanItemBtn" data-bs-toggle="modal"
                                        data-bs-target="#scanModal">
                                        <iconify-icon icon="iconoir:cube-scan"></iconify-icon> Scan Item
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 tableBox VariantContainer mb-3">
                                <table class="table table-bordered AssociateItemTable">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Item Details</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Discount</th>
                                            <th>Amount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="varrientDetailRow">
                                            <td style="width:100px;">
                                                <img src="assets/img/new-image/dummyImg.png" alt="" class="ItemImg">
                                            </td>
                                            <td class="ItemDetail">
                                                                                           
                                            </td>
                                            <td class="QtyInput">
                                                <input type="text" placeholder="1" id="name" class="form-control"
                                                    value="">
                                                    <span class="stockStatus">Stock on hand : <span class="StockQty" style="color: #06d055;">6 box</span></span>
                                            </td>
                                            <td class="QtyInput">
                                                <input type="text" placeholder="1" id="name" class="form-control"
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

                                            <td style="width:150px;">
                                                <strong> 1</strong>
                                                <div class="ActionButtonsBoxVarrient">
                                                    <div class="actionButtonsVarnt">
                                                        <a class="action-set" href="javascript:void(0);">
                                                            <iconify-icon icon="fxemoji:crossmark" width="12" height="12"></iconify-icon>
                                                        </a>
                                                        

                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                       

                                    </tbody>


                                </table>



                            </div>

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-5">
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
                                        

                                    </div>
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

        <div class="ItemContainerTop mt-5 mb-3">
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
                            <h6 class="TitleCom">Attach File(s) to Sales Order</h6>
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
            <a href="invoice-view.php">
                <button type="button" class="btn  commonCancleButton">
                    <i class="ti-save-alt"></i> Save as Draft
                </button>
            </a>
            <a href="invoice-view.php">
                <button type="button" class="btn  commonCancleButton">
                <iconify-icon icon="material-symbols:print-outline-rounded"></iconify-icon>  Print & Download
                </button>
            </a>
            <a href="invoice-view.php">
                <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                    <i class="ti-save-alt"></i> Save & Send
                </button>
            </a>

            <a href="#">
                <button type="button" class="btn commonCancleButton">
                    Cancel
                </button>
            </a>

        </div>
    </div>
</div>



<!-- Modal for Scanning Product Barcode -->
<div class="modal fade" id="scanModal" tabindex="-1" aria-labelledby="scanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scanModalLabel">Scan Product Barcode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Scanner Instructions -->
                <p class="mb-3 text-muted">
                    <strong>Instructions:</strong> Please position the barcode of the product clearly in front of the
                    camera.
                </p>

                <!-- Scanner Camera Placeholder -->
                <div id="barcode-scanner"
                    style="width: 100%; height: 300px; border: 2px dashed #007bff; border-radius: 10px; display: flex; align-items: center; justify-content: center; background: #f8f9fa;">
                    <p class="text-muted">Camera feed will appear here...</p>
                </div>

                <!-- Scanned Result -->
                <div id="barcode-result" class="mt-4">
                    <p><strong>Scanned Result:</strong> <span id="scannedCode" class="text-primary">None</span></p>
                </div>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
        </div>
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


<!-- ------------------------------------
product list append in table js code
-------------------------------------- -->

<script>
    $(document).ready(function () {
        function initializeProfileInput() {
            const profileInputs = document.querySelectorAll('.profile__input');

            profileInputs.forEach(profileInput => {
                const input = profileInput.querySelector('.input__location');
                const dropdownMenu = profileInput.querySelector('.dropdown-menu');
                const noResultsItem = dropdownMenu.querySelector('.no-results');
                const noLocationFoundItem = dropdownMenu.querySelector('.no-location-found');
                const locationItems = dropdownMenu.querySelectorAll('.location-item');
                const tableBody = document.querySelector('.AssociateItemTable tbody'); // Reference to the table body

                let defaultRowUsed = false; // Track whether the default row is used

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

                        // Highlight the selected item
                        locationItems.forEach(item => item.classList.remove('active'));
                        this.classList.add('active');

                        // Extract item details
                        const itemName = this.querySelector('.ItemName').textContent.trim();
                        const itemStock = this.querySelector('.ItemStock span').textContent.trim();

                        // Populate the input field with the selected item's name
                        input.value = itemName;

                        // Check if the default row is unused
                        if (!defaultRowUsed) {
                            const defaultRow = tableBody.querySelector('.varrientDetailRow');
                            const itemDetailCell = defaultRow.querySelector('.ItemDetail');
                            const stockQtySpan = defaultRow.querySelector('.StockQty');
                            itemDetailCell.innerHTML = `<strong>${itemName}</strong>`;
                            stockQtySpan.textContent = itemStock;
                            defaultRowUsed = true; // Mark the default row as used
                        } else {
                            // Create a new row and append it to the table
                            const newRow = document.createElement('tr');
                            newRow.classList.add('varrientDetailRow');
                            newRow.innerHTML = `
                                <td style="width:100px;">
                                    <img src="assets/img/new-image/dummyImg.png" alt="" class="ItemImg">
                                </td>
                                <td class="ItemDetail">
                                    <strong>${itemName}</strong>
                                </td>
                                <td class="QtyInput">
                                    <input type="text" placeholder="1" id="name" class="form-control" value="">
                                    <span class="stockStatus">Stock on hand : <span class="StockQty" style="color: #06d055;">${itemStock}</span></span>
                                </td>
                                <td class="QtyInput">
                                    <input type="text" placeholder="1" id="name" class="form-control" value="">
                                </td>
                                <td class="QtyInput">
                                    <div class="input-group dimension mb-3">
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">%</button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#" data-value="%">%</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="USD">USD</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td style="width:150px;">
                                    <strong>1</strong>
                                    <div class="ActionButtonsBoxVarrient">
                                        <div class="actionButtonsVarnt">
                                            <a class="action-set" href="javascript:void(0);">
                                                <iconify-icon icon="fxemoji:crossmark" width="12" height="12"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            `;
                            tableBody.appendChild(newRow);
                        }

                        // Add event listener for row removal
                        addRowRemovalHandler();

                        // Hide dropdown menu
                        dropdownMenu.style.display = 'none';
                    });
                });

                document.addEventListener('click', function (e) {
                    if (!profileInput.contains(e.target)) {
                        dropdownMenu.style.display = 'none';
                    }
                });

                // Function to add row removal handler
                function addRowRemovalHandler() {
                    const actionSetButtons = tableBody.querySelectorAll('.action-set');
                    actionSetButtons.forEach(button => {
                        button.addEventListener('click', function () {
                            const row = this.closest('tr');
                            const rowCount = tableBody.querySelectorAll('.varrientDetailRow').length;

                            // If there are multiple rows, delete the selected row
                            if (rowCount > 1) {
                                tableBody.removeChild(row);
                            } else {
                                // Ensure at least one row remains, remove only the last row
                                if (rowCount === 1) {
                                    tableBody.removeChild(row);
                                    defaultRowUsed = false; // Mark the default row as unused
                                }
                            }
                        });
                    });
                }

                // Add initial row removal handler
                addRowRemovalHandler();
            });
        }

        // Initialize profile input for existing rows
        initializeProfileInput();
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select all dropdown menus in the document
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');

        dropdownMenus.forEach(menu => {
            menu.addEventListener('click', function (e) {
                if (e.target.tagName === 'A') {
                    const selectedValue = e.target.getAttribute('data-value');
                    const button = menu
                        .previousElementSibling; // Select the button before the menu
                    if (button && selectedValue) {
                        button.textContent = selectedValue; // Change the button text
                    }
                }
            });
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


<!-- Include HTML5-QRCODE Library -->
<script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const scannerElement = document.getElementById('barcode-scanner');
        const resultElement = document.getElementById('scannedCode');
        let html5QrCode;

        // Initialize scanner when modal is shown
        document.getElementById('scanModal').addEventListener('shown.bs.modal', function () {
            html5QrCode = new Html5Qrcode("barcode-scanner");
            html5QrCode.start({
                    facingMode: "environment"
                }, // Use the rear camera
                {
                    fps: 10, // Frames per second
                    qrbox: {
                        width: 250,
                        height: 250
                    }, // Scanning box dimensions
                },
                (decodedText, decodedResult) => {
                    // Handle the decoded text
                    resultElement.textContent = decodedText;

                    // Optionally stop scanning after successful scan
                    html5QrCode.stop().then(() => {
                        console.log("Scanner stopped.");
                    });
                },
                (errorMessage) => {
                    // Handle scanning errors
                    console.warn(errorMessage);
                }
            ).catch(err => {
                console.error("Error starting scanner:", err);
            });
        });

        // Stop scanner when modal is hidden
        document.getElementById('scanModal').addEventListener('hidden.bs.modal', function () {
            if (html5QrCode) {
                html5QrCode.stop().then(() => {
                    console.log("Scanner stopped.");
                }).catch(err => {
                    console.error("Error stopping scanner:", err);
                });
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const radio1 = document.getElementById("Radio1");
        const radio2 = document.getElementById("Radio2");
        const newCustomerInput = document.getElementById("NewCustomerInput");
        const existing = document.getElementById("existing");

        // Function to toggle visibility based on selected radio button
        function toggleVisibility() {
            if (radio1.checked) {
                newCustomerInput.style.display = "block";
                existing.style.display = "none";
            } else if (radio2.checked) {
                newCustomerInput.style.display = "none";
                existing.style.display = "block";
            }
        }

        // Attach event listeners to the radio buttons
        radio1.addEventListener("change", toggleVisibility);
        radio2.addEventListener("change", toggleVisibility);

        // Initial visibility toggle
        toggleVisibility();
    });
</script>