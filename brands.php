<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">All Brands</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                Settings 
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Brands</li>
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
                            <a href="vendor-add.php"  class="btn btn-primary d-flex align-items-center themeBtn" data-bs-toggle="modal" data-bs-target="#add-category"><iconify-icon icon="majesticons:plus"></iconify-icon> New Brands</a>
                        </div>
                        <!-- <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="filterBox">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Brand</option>
                                    <option value="us">Lenevo</option>
                                    <option value="ca">Boat</option>
                                    <option value="ca">Nike</option>
                                    <option value="gb">Apple</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Status</option>
                                    <option value="us">Active</option>
                                    <option value="ca">Inactive</option>
                                    <option value="ma">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="#"></label> -->
                                <input type="text" placeholder="Date Range"  class="form-control daterange">
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <!-- Performance Indicator list -->
                    <div class="card tablemaincard_nopaddingleftright">

                <div class="card-body p-0">
                    <div class="custom-datatable-filter">
                        <table class="table common-datatable withoutActionTR nowrap w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th>S.NO</th>
                                    <th>Brand</th>
                                    <th>Logo</th>
                                    <th>Created By</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            <tr>
                                <td>01</td>
                                <td>Lenevo</td>
                                <td><img src="assets/img/brand/brand-icon-01.png" alt=""></td>
                                <td>Admin</td>
                                <td>2025-01-01 10:00</td>
                                <td><span class="badge alert-danger">Inactive</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Boat</td>
                                <td><img src="assets/img/brand/brand-icon-02.png" alt=""></td>
                                <td>Admin</td>
                                <td>2025-01-02 11:00</td>
                                <td><span class="badge bg-soft-warning">Pending</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>03</td>
                                <td>Nike</td>
                                <td><img src="assets/img/brand/brand-icon-03.png" alt=""></td>
                                <td>Super Admin</td>
                                <td>2025-01-03 14:30</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1-2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>Apple</td>
                                <td><img src="assets/img/brand/brand-icon-04.png" alt=""></td>
                                <td>Admin</td>
                                <td>2025-01-04 09:45</td>
                                <td><span class="badge alert-danger">Inactive</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Amazon</td>
                                <td><img src="assets/img/brand/brand-icon-05.png" alt=""></td>
                                <td>Super Admin</td>
                                <td>2025-01-03 08:15</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>06</td>
                                <td>Woodmart</td>
                                <td><img src="assets/img/brand/brand-icon-06.png" alt=""></td>
                                <td>Admin</td>
                                <td>2025-01-05 12:00</td>
                                <td><span class="badge bg-soft-warning">Pending</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>07</td>
                                <td>Versace</td>
                                <td><img src="assets/img/brand/brand-icon-07.png" alt=""></td>
                                <td>Admin</td>
                                <td>2025-01-06 15:30</td>
                                <td><span class="badge bg-soft-warning">Pending</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>08</td>
                                <td>Lava</td>
                                <td><img src="assets/img/brand/brand-icon-08.png" alt=""></td>
                                <td>Admin</td>
                                <td>2025-01-07 10:00</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" data-bs-toggle="modal" data-bs-target="#Edit-category">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="akar-icons:edit"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
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

<!-- Add Category -->
<div class="modal fade" id="add-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Create Brand</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form action="brands.php">
                            <div class="mb-3">
                                <label class="form-label">Brand</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Logo</label>
                            <div class="ImageContainer">
                            <div class="upload-area forbrands" id="activeImageContainer1">
                                <span class="placeholder">Upload Logo</span>
                                <input type="file" id="fileInput1" accept="image/*">
                            </div>
                            <div class="uploaded-images brands" id="uploadedImages1"></div>
                        </div>
                            </div>
                            <div class="mb-0">
                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                    <span class="status-label">Status</span>
                                    <input type="checkbox" id="user2" class="check" checked="">
                                    <label for="user2" class="checktoggle"></label>
                                </div>
                            </div>
                            <div class="modal-footer-btn">
                                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-submit">Add Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Category -->

<!-- Edit Category -->
<div class="modal fade" id="Edit-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Edit Brand</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form action="brands.php">
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Logo</label>
                            <div class="ImageContainer">
                                <div class="upload-area forbrands" id="activeImageContainer2">
                                    <span class="placeholder">Upload Logo</span>
                                    <input type="file" id="fileInput2" accept="image/*">
                                </div>
                                <div class="uploaded-images brands" id="uploadedImages2"></div>
                            </div>
                            </div>
                            <div class="mb-0">
                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                    <span class="status-label">Status</span>
                                    <input type="checkbox" id="user3" class="check" checked="">
                                    <label for="user3" class="checktoggle"></label>
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
<!-- Edit Category -->


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

<!-- Include CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<script>
   $(document).ready(function () {
    $('.daterange').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        },
        ranges: {
            'Today': [moment(), moment()],
            'This Week': [moment().startOf('week'), moment().endOf('week')],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
           
        },
        startDate: moment(),
        endDate: moment()
    }, function (start, end) {
        $('.daterange').val(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});

</script>

<!-- js code for image upload -->

<script>
    function initializeImageUpload(fileInputId, activeImageContainerId, uploadedImagesContainerId, markPrimaryBtnId) {
        const fileInput = document.getElementById(fileInputId);
        const activeImageContainer = document.getElementById(activeImageContainerId);
        const uploadedImagesContainer = document.getElementById(uploadedImagesContainerId);
        const markPrimaryBtn = document.getElementById(markPrimaryBtnId);

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

                    const imageCard = document.createElement('div');
                    imageCard.classList.add('image-card');
                    imageCard.innerHTML = `<img src="${src}" alt="Uploaded Image">`;

                    imageCard.addEventListener('click', () => setActiveImage(src, imageCard));

                    uploadedImagesContainer.appendChild(imageCard);

                    if (!activeImage) {
                        setActiveImage(src, imageCard);
                        setPrimaryImage(imageCard);
                    }
                };
                reader.readAsDataURL(file);
            });
        }

        function setActiveImage(src, imageCard) {
            activeImage = src;

            activeImageContainer.innerHTML = `
                <img src="${src}" alt="Active Image">
                <button class="remove-btn">&times;</button>
            `;

            activeImageContainer.querySelector('.remove-btn').addEventListener('click', () => {
                removeImage(src, imageCard);
            });

            markPrimaryBtn.style.display = 'block';

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
            if (primaryImageCard) {
                primaryImageCard.classList.remove('marked');
            }

            imageCard.classList.add('marked');
            primaryImageCard = imageCard;

            markPrimaryBtn.innerHTML = `
                <img src="assets/img/new-image/check-mark.png" alt="Check" width="16" height="16"> Primary
            `;
            markPrimaryBtn.classList.add('marked');
            markPrimaryBtn.disabled = true;
        }

        function removeImage(src, imageCard) {
            if (imageCard) {
                imageCard.remove();
            }

            if (activeImage === src) {
                activeImage = null;

                if (uploadedImagesContainer.children.length === 0) {
                    resetActiveImage();
                } else {
                    const remainingImages = uploadedImagesContainer.querySelectorAll('.image-card img');
                    if (remainingImages.length > 0) {
                        setActiveImage(remainingImages[0].src, remainingImages[0].closest('.image-card'));
                    }
                }
            }

            if (primaryImageCard && primaryImageCard === imageCard) {
                primaryImageCard = null;
                if (uploadedImagesContainer.children.length > 0) {
                    const nextCard = uploadedImagesContainer.querySelector('.image-card');
                    setPrimaryImage(nextCard);
                } else {
                    markPrimaryBtn.style.display = 'none';
                }
            }

            if (uploadedImagesContainer.children.length === 0) {
                markPrimaryBtn.style.display = 'none';
            }
        }

        function resetActiveImage() {
            activeImageContainer.innerHTML = '<span class="placeholder">Click to upload or drag an image here</span>';
            markPrimaryBtn.style.display = 'none';
            activeImage = null;
        }
    }

    // Initialize two instances
    initializeImageUpload('fileInput1', 'activeImageContainer1', 'uploadedImages1', 'markPrimaryBtn1');
    initializeImageUpload('fileInput2', 'activeImageContainer2', 'uploadedImages2', 'markPrimaryBtn2');
</script>