<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Edit Payment</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="recevied-payment-view.php">Received Payment View</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Payment</li>
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
                            <a href="recevied-payment-view.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
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
                                                
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Customer Name <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected>Select a user</option>
                                                            <option value="user1">Jenny Smith</option>
                                                            <option value="user2">Michael Brown</option>
                                                            <option value="user3">Sarah Johnson</option>
                                                            <option value="user4">Emily Davis</option>
                                                            <option value="user5">David Wilson</option>
                                                            <option value="user6">Olivia Martinez</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Payment# <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control" value="1" readonly disabled>
                                                         
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Amount Received <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control" value="">
                                                         
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Bank Charges (if any) </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control" value="">
                                                         
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >Payment Date <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control datepicker1">
                                                         
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Payment Mode </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected>Select Mode</option>
                                                            <option value="box">Cash</option>
                                                            <option value="cm">Credit Card</option>
                                                            <option value="dz">Bank Transfer</option>
                                                            <option value="dz">Debit Card</option>
                                                        </select>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label for="#">Note</label>
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
                                                       Unpaid Invoices
                                                        </label>
                                                    </div>
                                                 </div>
                                            </div>
                                            <div class="col-lg-12 tableBox VariantContainer mb-3" id="QuantityAdjustmentTable">
                                                <table class="table table-bordered AssociateItemTable">
                                                   <thead>
                                                         <tr>
                                                            <th>Date</th>
                                                            <th>Invoice Number</th>
                                                            <th>Invoice Amount</th>
                                                            <th>Amount Due</th>
                                                            <th>Payment</th>
                                                            
                                                        </tr>
                                                   </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h6 class="invoiceDate">
                                                                        04/01/2025 <span>Due Date: 27/01/2025</span>
                                                                    </h6>
                                                                </td>
                                                                <td>
                                                                INV-000002
                                                                </td>
                                                                <td>58.8</td>
                                                                <td>58.8</td>
                                                                <td class="QtyInput">
                                                                    <input type="text" placeholder="0.00" id="name" class="form-control"
                                                                        value="">
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                             <tr>
                                                                <td>
                                                                    <h6 class="invoiceDate">
                                                                        04/01/2025 <span>Due Date: 27/01/2025</span>
                                                                    </h6>
                                                                </td>
                                                                <td>
                                                                INV-000003
                                                                </td>
                                                                <td>58.8</td>
                                                                <td>58.8</td>
                                                                <td class="QtyInput">
                                                                    <input type="text" placeholder="0.00" id="name" class="form-control"
                                                                        value="">
                                                                </td>
                                                             </tr>
                                                            <td colspan="3">
                                                              <h6>**List contains only SENT invoices</h6>
                                                            </td>
                                                            <td colspan="2">
                                                                <!-- Totals Section -->
                                                                <div >
                                                                    <p style="margin: 10px 0; font-size: 14px;"><strong style="width:200px;display:inline-flex;">Sub Total:</strong> $0.00</p>
                                                                    <p style="margin: 10px 0; font-size: 14px;"><strong style="width:200px;display:inline-flex;">Amount Received </strong> $0.00</p>
                                                                    <p style="margin: 10px 0; font-size: 16px; font-weight: bold;"><strong style="width:200px;display:inline-flex;">Total Due:</strong> $0.00</p>
                                                                </div>
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
             <div class="ItemContainerTop no-bg border-top mb-3">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer">
                                <h6 class="TitleCom">Attach File(s) to inventory adjustment</h6>
                            <div class="file-upload-container">
                                <label for="file-input" class="custom-file-button">
                                <span class="upload-icon"><iconify-icon icon="tabler:upload"></iconify-icon></span>
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
            
             <div class="FormSubmit_fix_container">
                                <a href="recevied-payment-view.php">
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



