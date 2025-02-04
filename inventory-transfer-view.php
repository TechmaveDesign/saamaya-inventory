<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Inventory Transfer  Details</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="inventory-adjustment-list.php">Inventory Transfer List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Transfer  Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                        <div class="ActionHeadButtons">
                            <a href="inventory-transfer-list.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
                            <a href="edit-transfer.php" class="btn EditBtn"> Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></a>

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
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false">
                                            <iconify-icon icon="mynaui:cart"></iconify-icon>
                                                Item Variants
                                            </a>
                                        </li> -->
                                     
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
                                        <div class="Survey_progressStatus">
                                        <iconify-icon icon="basil:settings-adjust-outline"></iconify-icon> Quantity Adjustment

                                        </div>
                                        <div class="Survey_progressStatus">
                                         <span class="badge bg-soft-success">Adjusted</span>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="CommonContainerAction">
                                   <div class="tab-content">
                                        <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                          <div class="row">
                                            <div class="col-lg-10 pt-3">
                                                <div class="row">
                                                    <div class="col-lg-8">
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
                                                                    <h6>Created Date & Time</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>2025-01-01 09:00 AM	</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Created By</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Jane Smith</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Reason</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Stock Adjustment</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Reference No.</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>INV-12345</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Last Modified By</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>Michael Brown</h6>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Last Modified Time</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                    <h6>2025-01-01 08:30 AM</h6>
                                                                </div>
                                                            </li>
                                                      
                                                            	
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Move</h6>
                                                                </div>
                                                                <div class="itemDetailValue">
                                                                   <div class="moveBox">
                                                                    <h6>Warehouse 1</h6>
                                                                    <span class="moveIcon"><iconify-icon icon="lsicon:move-down-filled"></iconify-icon></span>
                                                                    <h6>Warehouse 2</h6>
                                                                   </div>
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
                                                       
                                                        <!-- <ul class="ProductDetailList">
                                                         
                                                            <li>
                                                                <div class="itemDetailTitle">
                                                                    <h6>Description</h6>
                                                                </div>
                                                                <div class="itemDetailValue description">
                                                                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, dolores!</h6>
                                                                </div>
                                                            </li>
                                                        </ul> -->
                                                        <div class="sectionBox ComboItemsbox">
                                                    <div class="form-check align-items-center mt-2 p-0">
                                                        <!-- <input class="form-check-input varrientCheckbox" type="checkbox" value="" id="flexCheckChecked3" checked> -->
                                                        <label class="form-check-label" for="flexCheckChecked3">
                                                        Adjusted Items
                                                        </label>
                                                    </div>
                                                 </div>
                                                        <div class=" tableBox VariantContainer mb-3" id="QuantityAdjustmentTable">
                                                <table class="table table-bordered AssociateItemTable">
                                                   <thead>
                                                         <tr>
                                                            <th colspan="2">Item Details</th>
                                                            <th>Quantity Available</th>
                                                            <th>New Quantity on hand</th>
                                                            <th>Quantity Adjusted</th>
                                                         
                                                            
                                                        </tr>
                                                   </thead>
                                                        <tbody>
                                                            <tr class="varrientDetailRow">
                                                                <td>
                                                                    <img src="assets/img/new-image/40019371_31-bournvita-chocolate-removebg-preview.png" alt="" class="ItemImg">
                                                                </td>
                                                                <td>
                                                                   Aashirvaad Atta 5kg
                                                                </td>
                                                                <td>
                                                                  0.00
                                                                </td>
                                                                <td>
                                                                  0.00
                                                                </td>
                                                                <td>
                                                                  0.00
                                                                </td>
                                                            </tr>
                                                            <tr class="varrientDetailRow">
                                                                <td>
                                                                    <img src="assets/img/new-image/40189244_8-kelloggs-muesli-break-removebg-preview.png" alt="" class="ItemImg">
                                                                </td>
                                                                <td>
                                                                   Aashirvaad Atta 5kg
                                                                </td>
                                                                <td>
                                                                  0.00
                                                                </td>
                                                                <td>
                                                                  0.00
                                                                </td>
                                                                <td>
                                                                  0.00
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td colspan="6">
                                                                  <a href="javascript:void(0);" class="addrowBtn addRowMultipleBtn"><iconify-icon icon="hugeicons:node-add"></iconify-icon> Add row</a>
                                                                </td>
                                                               
                                                            </tr> -->
                                                            
                                                        </tbody>
                                                    

                                                </table>
                                                
                                            </div>
                                                    </div>
                                                    <div class="col-lg-4">
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

