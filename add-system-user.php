<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Add System User</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="system-user.php">System User</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add System User</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="ActionHeadButtons">
                            <a href="system-user.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
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
                                            <h6 class="SectionTitleFG">User Details</h6>
                                                <div class="InputFelidsContainer">
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#" >User Name</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                        <div class="skuCode">
                                                            <input type="text" placeholder="First Name " id="name" class="form-control">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Mobile Number</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="skuCode">
                                                              <input type="text" placeholder="Mobile Number" id="name" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <label for="#">Email Id</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="skuCode">
                                                              <input type="text" placeholder="Email Id" id="name" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-3">
                                                        <label for="#" >Password</label>
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
                                                                    <label for="#">Role</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <select class="js-example-basic-single select2">
                                                                        <option value="" disabled selected>Select Role</option>
                                                                        <option value="Admin">Admin</option>
                                                                        <option value="Super">Super Admin</option>
                                                                        <option value="Vender">Vender</option>
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
             <div class="FormSubmit_fix_container">
                                <a href="system-user.php">
                                    <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                                        <i class="ti-save-alt"></i> Submit
                                    </button>
                                </a>

                            <a href="system-user.php">
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
  
