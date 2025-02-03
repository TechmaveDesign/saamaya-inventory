<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content profile">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Profile</h2>
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
                    </div>
                </div>
               <!-- profile first step -->
                <div class="card cardCustom">
						<div class="card-body">
							<div class="profile-set profile-wrap">
								<div class="profile-top">
                                    <div class="pricing-wraps">
                                        <div class="profile-content">
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
                                            <div class="profile-contentname profile-hadder">
                                                <div>
                                                <h2>Saamaya Inventory</h2>
                                                <h4>inventory534@gmail.com</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editBtn">
                                        <button data-bs-toggle="modal" data-bs-target="#add-category">Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></button>
                                    </div>
								</div>
							</div>
						</div>
			    </div>
                <!-- profile first step -->
                 <!-- profile Second step -->
                <div class="card cardCustom">
						<div class="card-body">
							<div class="profile-set profile-wrap">
								<div class="profile-top">
									<div class="profile-content-main">
										<div class="profile-contentname p-0 profile-hadder">
											<h2>Company Details</h2>
                                            <div class="editBtn">
                                                <button data-bs-toggle="modal" data-bs-target="#add-category">Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></button>
                                            </div>
										</div>
                                        <div class="profile-box-wrap">
                                        <div class="profile-box">
                                            <label>Password</label>
                                            <div class="password">
                                                <p id="passwordText" class="password-text">**********</p>
                                                <span class="fa fa-fw fa-eye field-icon toggle-password" onclick="togglePassword()"></span>
                                            </div>
                                        </div>
                                        <div class="profile-box">
                                            <label>Industry</label>
                                            <p>United Kingdom</p>
                                        </div>
                                        </div>
                                        <div class="profile-box-wrap">
                                        <div class="profile-box">
                                            <label>Company Location</label>
                                            <p>Cameroon</p>
                                        </div>
                                        <div class="profile-box">
                                            <label>Company Location</label>
                                            <p>Cameroon</p>
                                        </div>
                                        </div>

									</div>
								</div>
							</div>
						</div>
			    </div>
                <!-- profile Second step -->
                 <!-- profile three step -->
                <div class="card cardCustom mb-0">
						<div class="card-body">
							<div class="profile-set profile-wrap">
								<div class="profile-top">
									<div class="profile-content-main">
										<div class="profile-contentname p-0 profile-hadder">
											<h2>Regional Settings</h2>
                                            <div class="editBtn">
                                                <button data-bs-toggle="modal" data-bs-target="#add-category">Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></button>
                                            </div>
										</div>
                                        <div class="profile-box-wrap">
                                        <div class="profile-box">
                                            <label>Currency</label>
                                            <p>India - INR (Indian Rupee)</p>
                                        </div>
                                        <div class="profile-box">
                                            <label>Select Language</label>
                                            <p>English</p>
                                        </div>
                                        </div>
                                        <div class="profile-box-wrap">
                                            <div class="profile-box">
                                                <label>Select Timezone</label>
                                                <p>UTC (Coordinated Universal Time)</p>
                                            </div>
                                            <div class="profile-box">
                                                <label>Inventory Start date</label>
                                                <p>18/12/2024</p>
                                            </div>
                                        </div>
                                        <div class="profile-box-wrap">
                                            <div class="profile-box">
                                                <label>Fiscal Year</label>
                                                <p>Jan-Feb</p>
                                            </div>
                                        </div>

									</div>
								</div>
							</div>
						</div>
			    </div>
                <!-- profile three step -->
                
<!-- /Performance Indicator list -->
    </div>
    
</div>

<!-- Add Category -->
<div class="modal fade" id="add-category">
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
                                <input type="text" class="form-control">
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
</div>
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

  <!-- upload logo -->
  <script>
    const password = "saamaya_pass00#230@"; // actual password

    function togglePassword() {
        const passwordText = document.getElementById("passwordText");
        if (passwordText.innerText === "**********") {
            passwordText.innerText = password;
        } else {
            passwordText.innerText = "**********";
        }
    }
</script>



