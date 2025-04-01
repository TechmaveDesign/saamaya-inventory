<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">System User</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">System User</li>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#add-user"  class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New System User</a>
                        </div>
                        <!-- <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div> -->
                    </div>
                </div>
                <!-- Performance Indicator list -->
                    <div class="card tablemaincard_nopaddingleftright">

                <div class="card-body p-0">
                    <div class="custom-datatable-filter">
                        <table class="table common-datatable withoutActionTR nowrap w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <!-- <th>Company Name</th> -->
                                    <th>User Email</th>
                                    <th>Mobile No.</th>
                                    <!-- <th>Vendor Type</th> -->
                                    <th>Role</th>
                                    <th>Created Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            <tr>
                                <td>#1101</td>
                                <td>John Doe</td>
                                <!-- <td>Food Mania Restaurant</td> -->
                                <td>johndoe@example.com</td>
                                <td>1234567890</td>
                                <!-- <td>Business</td> -->
                                <td>Admin</td>
                                <td>2025-01-01 10:00</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                             <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1102</td>
                                <td>Jane Smith</td>
                                <!-- <td>Basic B Burgers</td> -->
                                <td>janesmith@example.com</td>
                                <td>9876543210</td>
                                <!-- <td>Individuals</td> -->
                                <td>Admin</td>
                                <td>2025-01-02 11:00</td>
                                <td><span class="badge bg-soft-secondary">Pending</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>#1103</td>
                                <td>John Doe</td>
                                <!-- <td>Alpha Tech</td> -->
                                <td>johndoe@example.com</td>
                                <td>1234567890</td>
                                <!-- <td>Business</td> -->
                                <td>Admin</td>
                                <td>2025-01-03 14:30</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                           <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>#1104</td>
                                <td>Emily Clark</td>
                                <!-- <td>Fresh Farm Co.</td> -->
                                <td>emilyclark@example.com</td>
                                <td>5678901234</td>
                                <!-- <td>Individuals</td> -->
                                <td>Manager</td>
                                <td>2025-01-04 09:45</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                        <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1105</td>
                                <td>Michael Brown</td>
                                <!-- <td>Urban Solutions</td> -->
                                <td>michaelbrown@example.com</td>
                                <td>5551234567</td>
                                <!-- <td>Business</td> -->
                                <td>SuperAdmin</td>
                                <td>2025-01-03 08:15</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                           <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>#1106</td>
                                <td>Sophia Green</td>
                                <!-- <td>Eco Solutions</td> -->
                                <td>sophiagreen@example.com</td>
                                <td>7894561230</td>
                                <!-- <td>Individuals</td> -->
                                <td>Admin</td>
                                <td>2025-01-05 12:00</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                      <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                           <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>#1107</td>
                                <td>Lucas Miller</td>
                                <!-- <td>Tech Frontier</td> -->
                                <td>lucasmiller@example.com</td>
                                <td>4567893210</td>
                                <!-- <td>Business</td> -->
                                <td>Manager</td>
                                <td>2025-01-06 15:30</td>
                                <td><span class="badge bg-soft-secondary">Pending</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                          <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>#1108</td>
                                <td>Olivia Johnson</td>
                                <!-- <td>Health & Wellness Co.</td> -->
                                <td>oliviajohnson@example.com</td>
                                <td>6543219870</td>
                                <!-- <td>Individuals</td> -->
                                <td>Admin</td>
                                <td>2025-01-07 10:00</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="role.php">
                                          <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
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


<!-- Add user -->
<div class="modal fade" id="add-user">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Add System User</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form action="system-user.php">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Id</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Id</label>
                                <div class="emailBox">
                                <input type="password" placeholder="Old Password" class="form-control" id="oldPassword" name="oldPassword" value="3856rtdhr67t26347c">
                                    <iconify-icon icon="bi:shield-lock" class="IconInput"></iconify-icon>
                                    <span toggle="#oldPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="js-example-basic-single select2">
                                    <option value="" disabled selected>Select Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Super">Super Admin</option>
                                    <option value="Vender">Vender</option>
                                </select>
                            </div>
                            <div class="modal-footer-btn">
                                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-submit">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add user -->

<!-- View user -->
<div class="modal fade" id="view-user">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>View System User</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form action="system-user.php">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="Emily Clark">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" value="5678901234">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Id</label>
                                <input type="text" class="form-control" value="emilyclark@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">password</label>
                                <div class="emailBox">
                                <input type="password" placeholder="Old Password" class="form-control" name="oldPassword" value="3856rtdhr67t26347c">
                                    <iconify-icon icon="bi:shield-lock" class="IconInput"></iconify-icon>
                                    <span class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="js-example-basic-single select2">
                                    <option value="" disabled>Select Role</option>
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Super">Super Admin</option>
                                    <option value="Vender">Vender</option>
                                </select>
                            </div>
                            <div class="modal-footer-btn">
                                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add user -->

<?php include "footer.php"?>

<script>
    $('.select2').select2({
        dropdownParent: $('#add-user')
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
