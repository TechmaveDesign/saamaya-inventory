<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content profile">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Profile</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="me-2 mb-2">
                            <div class="dropdown">
                                <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="settings-wrapper d-flex">
                    <div class="settings-sidebar">
                    <div class="avtar_box">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type="file" id="imageUploadProfile" accept=".png, .jpg, .jpeg">
                                <label for="imageUploadProfile"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreviewProfile" style="background-image: url('assets/img/user.jpg');">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="profile-hadder">
                        <h2>Saamaya Inventory</h2>
                        <h4>inventory534@gmail.com</h4>
                    </div>
                    <div class="tab">
                 <div class="topActionHeader TopHeadEnquiry">
                            <div class="leftSideEnquiryAction">
                            <ul class="nav nav-tabs TabsStyle1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true">
                                        <iconify-icon icon="solar:checklist-minimalistic-linear"></iconify-icon>
                                        Basic Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false">
                                    <iconify-icon icon="fluent-mdl2:company-directory" ></iconify-icon>
                                    Company Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" class="nav-link" id="disabledIcon-tab" data-bs-toggle="tab" href="#disabledIcon" aria-controls="disabled" role="tab" aria-selected="false">
                                    <i data-feather="settings"></i>  Regional Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" class="nav-link" id="Password-tab" data-bs-toggle="tab" href="#Password" aria-controls="disabled" role="tab" aria-selected="false">
                                    <iconify-icon icon="bi:shield-lock"></iconify-icon>  Password Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" class="nav-link" id="Subscription-tab" data-bs-toggle="tab" href="#Subscription" aria-controls="disabled" role="tab" aria-selected="false">
                                    <iconify-icon icon="streamline:subscription-cashflow"></iconify-icon>  Subscription
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.html">
                                    <img src="assets/img/icons/log-out.svg" /> Logout
                                    </a>
                                </li>
                            </ul>
                            </div>
                            
                        </div>


                        <div class="CommonContainerAction tabprofile">
                            <div class="tab-content">
                                <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                    <div class="ItemContainerTop no-bg m-0">
                                        <div class="row">
                                                <div class="col-lg-8">
                                                <div class="ItemNewContainer ">
                                                    <h2>Basic Details</h2>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="InputFelidsContainer">
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#">Name <span>*</span></label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <input type="text" placeholder=" " value="Saamaya Inventory" id="name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Email Address</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <div class="emailBox">
                                                                                <input type="text" placeholder=" " value="inventory534@gmail.com" id="name" class="form-control">
                                                                                <iconify-icon icon="ic:outline-email" class="IconInput"></iconify-icon>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Contact</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <div class="emailBox ">
                                                                                <!-- <input type="text" placeholder=" " id="name" class="form-control">
                                                                                <iconify-icon icon="mingcute:phone-line" class="IconInput"></iconify-icon> -->
                                                                                <input type="tel" name="Mobile Number" id="phoneNumber" placeholder="" class="TelPhoneinput form-control" value="47556567345" />
                                                                                <input type="hidden" name="dilCode" id="dilCode">
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
                                
                                <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                     <div class="ItemContainerTop no-bg m-0">
                                        <div class="row">
                                                <div class="col-lg-8">
                                                <div class="ItemNewContainer ">
                                                    <h2>Company Details</h2>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="InputFelidsContainer">
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#">Company Name <span>*</span></label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <input type="text" placeholder=" " value="Saamaya Inventory" id="name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Industry</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <select  class="country-select js-example-basic-single select2">
                                                                                <option value="" disabled>Select Industry</option>
                                                                                <option value="">Agriculture</option>
                                                                                <option value="" selected>United Kingdom</option>
                                                                                <option value="">Art and Design</option>
                                                                                <option value="">Automotive</option>
                                                                                <option value="">Construction</option>

                                                                            </select>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Company Location</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <select  class="country-select js-example-basic-single select2">
                                                                                <option value="" disabled>Select Location</option>
                                                                                <option value="">United States</option>
                                                                                <option value="" selected>Canada</option>
                                                                                <option value="">Cameroon</option>
                                                                                <option value="">United Kingdom</option>
                                                                                <option value="">Australia</option>
                                                                            </select>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >State/Union Territory </label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <select  class="country-select js-example-basic-single select2">
                                                                                <option value="" disabled>Select State</option>
                                                                                <option value="">Adamawa</option>
                                                                                <option value="" selected>Centre</option>
                                                                                <option value="">East</option>
                                                                                <option value="">Far North</option>
                                                                                <option value="">Littoral</option>
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
                                    </div>
                                    <div class="tab-pane" id="disabledIcon" aria-labelledby="disabledIcon-tab" role="tabpanel">
                                    <div class="ItemContainerTop no-bg m-0">
                                        <div class="row">
                                                <div class="col-lg-8">
                                                <div class="ItemNewContainer ">
                                                    <h2>Regional Settings</h2>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="InputFelidsContainer">
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#">Currency <span>*</span></label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <select  class="country-select js-example-basic-single select2">
                                                                                <option value="" disabled>Select Currency</option>
                                                                                <option value="">United States - USD (US Dollar)</option>
                                                                                <option value="" selected>Canada - CAD (Canadian Dollar)</option>
                                                                                <option value="">United Kingdom - GBP (British Pound)</option>
                                                                                <option value="">Australia - AUD (Australian Dollar)</option>
                                                                                <option value="">India - INR (Indian Rupee)</option>

                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Select Language</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <select  class="country-select js-example-basic-single select2">
                                                                                <option value="" disabled>Select Language</option>
                                                                                <option value="">English</option>
                                                                                <option value="" selected>French</option>
                                                                                <option value="">Spanish</option>
                                                                                <option value="">German</option>
                                                                                <option value="">Chinese (Mandarin)</option>

                                                                            </select>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Fiscal Year</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <select  class="country-select js-example-basic-single select2">
                                                                                <option value="" disabled>Select Fiscal Year</option>
                                                                                <option value="">Jan-Feb</option>
                                                                                <option value="" selected>Feb-March</option>
                                                                                <option value="">March-April</option>
                                                                                <option value="">May-June</option>
                                                                                <option value="">June-July</option>

                                                                            </select>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Select Timezone </label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <select  class="country-select js-example-basic-single select2">
                                                                                <option value="" disabled>Select Timezone</option>
                                                                                <option value="">UTC (Coordinated Universal Time)</option>
                                                                                <option value="" selected>PST (Pacific Standard Time) - UTC-08:00</option>
                                                                                <option value="">MST (Mountain Standard Time) - UTC-07:00</option>
                                                                                <option value="">CST (Central Standard Time) - UTC-06:00</option>
                                                                                <option value="">IST (Indian Standard Time) - UTC+05:30</option>
                                                                            </select>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Inventory Start date </label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                            <input type="text" placeholder=" " id="name" value="Feb 20, 2025" class="form-control datepicker1">
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

                                    <div class="tab-pane" id="Password" aria-labelledby="Password-tab" role="tabpanel">
                                      <div class="ItemContainerTop no-bg m-0">
                                        <div class="row">
                                                <div class="col-lg-8">
                                                <div class="ItemNewContainer ">
                                                    <h2>Change Password</h2>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="InputFelidsContainer">
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Old Password</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <div class="emailBox">
                                                                                <input type="password" placeholder="Old Password" class="form-control" id="oldPassword" name="oldPassword" value="3856rtdhr67t26347c">
                                                                                    <iconify-icon icon="bi:shield-lock" class="IconInput"></iconify-icon>
                                                                                    <span toggle="#oldPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >Confirm Password</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <div class="emailBox">
                                                                                <input type="password" placeholder="New Password" class="form-control" id="newPassword" name="newPassword" 
                                                                                    oninput="checkPasswordStrength()" onfocus="showProgressBar()" onblur="hideProgressBar()">
                                                                                <iconify-icon icon="bi:shield-lock" class="IconInput"></iconify-icon>
                                                                                <span toggle="#newPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-3">
                                                                                <label for="#" >New Password</label>
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <div class="emailBox">
                                                                                <input type="password" placeholder="Confirm Password" class="form-control" id="confirmPassword" name="confirmPassword">
                                                                                    <iconify-icon icon="bi:shield-lock" class="IconInput"></iconify-icon>
                                                                                    <span toggle="#confirmPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
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
                                    <div class="tab-pane" id="Subscription" aria-labelledby="Subscription-tab" role="tabpanel">
                                       <div class="ItemContainerTop no-bg m-0 Subscription-wrap">
                                       <div class="card card-bordered sp-plan">
                                        <div class="row no-gutters Planbox">
                                            <div class="col-md-9">
                                                <div class="sp-plan-info card-inner">
                                                    <div class="row gx-0 gy-3">
                                                        <div class="col-xl-9 col-sm-8">
                                                            <div class="sp-plan-name">
                                                                <h6 class="title"><a href="subscriptions-detail.html">Premium Plan <span class="badge bg-success rounded-pill">Active</span></a></h6>
                                                                <p>Subscription ID: <span class="text-base">100394949</span></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="sp-plan-desc card-inner pt-0">
                                                    <ul class="row gx-1">
                                                        <li class="col-6 col-lg-4">
                                                            <p><span class="text-soft">Plan Added On :</span> Oct 12, 2018</p>
                                                        </li>
                                                        <li class="col-6 col-lg-4">
                                                            <p><span class="text-soft">Plan Amount :</span> $99/mon </p>
                                                        </li>
                                                        <li class="col-6 col-lg-4">
                                                            <p><span class="text-soft">Month</span> 1 Month</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sp-plan-action card-inner">

                                                    <div class="sp-plan-btn">
                                                        <a href="subscriptionplan.php"><span>change Plan</span></a>
                                                    </div>

                                                    <div class="sp-plan-note text-md-center">
                                                        <p>Modify and update subscription details as needed.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Performance Indicator list -->
                                        <div class="card tablemaincard_nopaddingleftright">

                                        <div class="card-body p-0 m-0">
                                            <div class="custom-datatable-filter">
                                                <table class="table common-datatable withoutActionTR nowrap w-100">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Plan</th>
                                                            <th>Plan Type</th>
                                                            <th>Price</th>
                                                            <th>Purchase Date</th>
                                                            <th>Expire Date</th>
                                                            <th>Payment Method</th>
                                                            <!-- <th>Created Time</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                
                                                    <tr>
                                                        <td>#SUB5623</td>
                                                        <td>Monthly Plan</td>
                                                        <td>Standard</td>
                                                        <td>$30/mon</td>
                                                        <td>20 Aug, 2024</td>
                                                        <td>20 Sep, 2024</td>
                                                        <td>Credit Card</td>
                                                        <!-- <td>Credit Card</td> -->
                                                        <!-- <td>2025-01-01 10:00</td> -->
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>##SUB5623</td>
                                                        <td>Monthly Plan</td>
                                                        <td>Professional</td>
                                                        <td>$50/mon</td>
                                                        <td>25 July, 2024</td>
                                                        <td>25 Aug, 2024</td>
                                                        <td>Credit Card</td>
                                                        <!-- <td>Admin</td> -->
                                                    </tr>

                                                    <tr>
                                                        <td>#SUB5356</td>
                                                        <td>Monthly Plan</td>
                                                        <td>Premium</td>
                                                        <td>$99/mon</td>
                                                        <td>15 May, 2024</td>
                                                        <td>15 June, 2024</td>
                                                        <td>Credit Card</td>
                                                        <!-- <td>Admin</td> -->
                                                        
                                                    </tr>

                                                    

                                        </tbody>
                                        </table>
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
            <a href="#">
                <button type="button" class="btn commonCancleButton">
                    Cancel
                </button>
            </a>
            <a href="inventory-adjustment-list.php">
                    <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                        <i class="ti-save-alt"></i> Submit
                    </button>
                </a>
            </div>
    
</div>

<!-- Add Category -->
<!-- <div class="modal fade" id="add-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Edit Profile</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form action="profile.php">
                            <div class="mb-3">
                                <label class="form-label"> Company Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Email Address</label>
                                <div class="emailBox">
                                <input type="text" class="form-control" placeholder="Enter Email">
                                <iconify-icon icon="ic:outline-email" class="IconInput"></iconify-icon>
                                </div>
                            </div>
                            <div class="modal-footer-btn">
                                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- /Add Category -->


<?php include "footer.php"?>

<script>
     document.querySelectorAll('.uploadlogo').forEach(uploadSection => {
    const uploadArea = uploadSection.querySelector('.upload-area');
    const fileInput = uploadSection.querySelector('.fileInput');
    const preview = uploadSection.querySelector('.preview');

    // Handle file selection
    fileInput.addEventListener('change', (event) => previewImage(event, preview));

    // Handle click to upload
    uploadArea.addEventListener('click', () => fileInput.click());

    // Handle drag & drop
    uploadArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', (event) => {
        event.preventDefault();
        uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', (event) => {
        event.preventDefault();
        uploadArea.classList.remove('dragover');
        if (event.dataTransfer.files.length > 0) {
            previewImage({ target: { files: event.dataTransfer.files } }, preview);
        }
    });
});

// Preview function
function previewImage(event, previewElement) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewElement.innerHTML = `<img src="${e.target.result}" alt="Uploaded Image">`;
        };
        reader.readAsDataURL(file);
    }
}
  </script>

<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreviewProfile').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreviewProfile').hide();
                    $('#imagePreviewProfile').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUploadProfile").change(function () {
            readURL(this);
        });
    </script>

<script>
$(document).ready(function () {
    // Show/Hide Password Functionality
    $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        const input = $($(this).attr("toggle"));
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
});

// Show Password Strength Progress Bar
function showProgressBar() {
    $("#passwordStrengthContainer").show();
}

// Hide Password Strength Progress Bar
function hideProgressBar() {
    const password = $("#newPassword").val();
    if (!password) {
        $("#passwordStrengthContainer").hide();
    }
}

// Check Password Strength (only for new password)
function checkPasswordStrength() {
    const password = $("#newPassword").val();
    const strengthBar = $("#passwordStrengthBar");
    const strengthText = $("#passwordStrengthText");

    let strength = 0;

    if (password.length >= 6) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;

    switch (strength) {
        case 0:
            strengthBar.css({ width: "0%", backgroundColor: "#dc3545" });
            strengthText.text("");
            break;
        case 1:
            strengthBar.css({ width: "25%", backgroundColor: "#dc3545" });
            strengthText.text("Weak");
            break;
        case 2:
            strengthBar.css({ width: "50%", backgroundColor: "#ffc107" });
            strengthText.text("Average");
            break;
        case 3:
            strengthBar.css({ width: "75%", backgroundColor: "#28a745" });
            strengthText.text("Strong");
            break;
        case 4:
            strengthBar.css({ width: "100%", backgroundColor: "#007bff" });
            strengthText.text("Very Strong");
            break;
    }
}
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.6/css/intlTelInput.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.3/js/intlTelInput.js"></script>
<script>
        $(document).ready(function() {
          $(".TelPhoneinput").intlTelInput({
            initialCountry: "cm", // Set India as the default country
            separateDialCode: true,
            formatOnDisplay: true,
            nationalMode: false,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.3/js/utils.js",
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
              // Ensure placeholder shows with dial code
              return "+(" + selectedCountryData.dialCode + ") - " + selectedCountryPlaceholder;
            }
          });
      
          // Force placeholder update on load
          const iti = $(".TelPhoneinput").intlTelInput("getInstance");
          $(".TelPhoneinput").attr("placeholder", iti.getSelectedCountryData().dialCode);
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



