<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">New Store</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="vendor.php">Settings</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">New Store</li>
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
                            <a href="vendor.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
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
                                            <!-- <h6 class="SectionTitleFG">Warehouse Details</h6> -->
                                                <div class="InputFelidsContainer">
                                                
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Store Name</label>
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
                                                            <label for="#">Vendor Name</label>
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
                                                                    <label for="#">Select Existing Warehouse</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select class="js-example-basic-single select2">
                                                                        <option value="" disabled selected>Select Warehouse</option>
                                                                        <option value="Warehouse A">Main Warehouse A</option>
                                                                        <option value="Warehouse B">Warehouse B</option>
                                                                        <option value="Warehouse C">Warehouse C</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>

                                            <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label for="#" >Street Address</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                            <textarea type="text" placeholder="Street 1 " id="name" class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                
                                                </div>
                                                <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label for="#" >Street Address 2</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                            <textarea type="text" placeholder="Street 2 " id="name" class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                
                                                </div>
                                                <div class="form-group">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-3">
                                                                    <label for="#">City/Town</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="skuCode">
                                                                    <input type="text" placeholder=" " id="name" class="form-control">
                                                                
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-3">
                                                                    <label for="#">Region/State</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select class="js-example-basic-single select2">
                                                                        <option value="" disabled selected>Select State</option>
                                                                        <option value="adamaoua">Adamaoua</option>
                                                                        <option value="centre">Centre</option>
                                                                        <option value="east">East</option>
                                                                        <option value="far_north">Far North</option>
                                                                        <option value="littoral">Littoral</option>
                                                                        <option value="north">North</option>
                                                                        <option value="north_west">North-West</option>
                                                                        <option value="west">West</option>
                                                                        <option value="south">South</option>
                                                                        <option value="south_west">South-West</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-3">
                                                                    <label for="#">Country / Region</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select  class="country-select js-example-basic-single select2">
                                                                        <option value="" disabled selected>Select Country</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-3">
                                                                    <label for="#">Postal Code</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="skuCode">
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
             </div>



             <div class="ItemNewContainer1 pt-3 mb-5">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div class="sectionBox ComboItemsbox">
                                                            <div class="form-check align-items-center mt-2 p-0">
                                                                <!-- <input class="form-check-input varrientCheckbox" type="checkbox" value="" id="flexCheckChecked3" checked> -->
                                                                <label class="form-check-label" for="flexCheckChecked3">
                                                                Other Details
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                <div class="tab">
                                                    <div class="topActionHeader TopHeadEnquiry">
                                                                <div class="leftSideEnquiryAction">
                                                                
                                                                <ul class="nav nav-tabs TabsStyle1" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true">
                                                                        Contact Information
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="Documents-tab" data-bs-toggle="tab" href="#Documents" aria-controls="Documents" role="tab" aria-selected="false">
                                                                        Documents
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false">
                                                                        Geo-Location
                                                                        </a>
                                                                    </li>
                                                                
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="disabledIcon-tab" data-bs-toggle="tab" href="#disabledIcon" aria-controls="disabled" role="tab" aria-selected="false">
                                                                        Remarks
                                                                        </a>
                                                                    </li>
                                                                
                                                                </ul>
                                                                </div>
                                                                
                                                            </div>


                                                            <div class="CommonContainerAction">
                                                            <div class="tab-content">
                                                                    <div class="tab-pane active mt-3" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                                                        <div class="InputFelidsContainer">
                                                                        <div class="form-group">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-lg-2">
                                                                                    <label for="#">Primary Contact</label>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                    <div class="CustomerKop">
                                                                                    <input type="text" placeholder="First Name" id="name" class="form-control">
                                                                                    <input type="text" placeholder="Last Name" id="name" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-lg-2">
                                                                                    <label for="#">Manager Email address </label>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                <div class="emailBox">
                                                                                <input type="text" placeholder=" " id="name" class="form-control">
                                                                                <iconify-icon icon="ic:outline-email" class="IconInput"></iconify-icon>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-lg-2">
                                                                                    <label for="#">Manager Contact</label>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                    <div class="skuCode emailBox">
                                                                                        <input type="text" placeholder="" id="name" class="form-control">
                                                                                        <iconify-icon icon="mingcute:phone-line" class="IconInput"></iconify-icon>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane mt-3" id="Documents" aria-labelledby="Documents-tab" role="tabpanel">
                                                                    <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-2">
                                                                                <label for="#">Dcuments</label>
                                                                            </div>
                                                                            <div class="col-lg-5">
                                                                            <div class="file-upload-container">
                                                                                <label for="file-input" class="custom-file-button">
                                                                                <span class="upload-icon"><iconify-icon icon="tabler:upload"></iconify-icon></span>
                                                                                Upload Images
                                                                                </label>
                                                                                <input type="file" id="file-input" multiple>
                                                                                <div class="file-upload-info">You can upload a maximum of 5 Dcuments, 10MB each</div>
                                                                            
                                                                            </div>
                                                                            <div id="image-preview-list"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                </div>
                                                                    </div>
                                                                    
                                                                    <div class="tab-pane mt-3" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                                                    <div class="InputFelidsContainer">
                                                                        <div class="form-group">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-lg-2">
                                                                                    <label for="#">Latitude </label>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                    <div class="skuCode">
                                                                                        <input type="text" placeholder="Enter Latitude" id="name" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-lg-2">
                                                                                    <label for="#">Longitude</label>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                    <div class="skuCode">
                                                                                        <input type="text" placeholder="Enter Longitude" id="name" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-lg-2">
                                                                                    <label for="#">Pinpoint Location on Map</label>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                <div id="map_location" style="height: 300px; width: 100%; background-color: #e1e1e1;border-radius:4px">
                                                                                    
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane mt-3" id="disabledIcon" aria-labelledby="disabledIcon-tab" role="tabpanel">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <label for="#">Remarks</label>
                                                                            </div>
                                                                            <div class="col-lg-5">
                                                                            <textarea type="text" placeholder="" id="name" class="form-control" rows="3"></textarea>
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
                                                                <a href="vendor.php">
                                                                    <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                                                                        <i class="ti-save-alt"></i> Submit
                                                                    </button>
                                                                </a>

                                                            <a href="vendor.php">
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