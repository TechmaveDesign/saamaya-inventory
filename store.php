<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">All Store</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                Settings 
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Store</li>
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
                            <a href="new-store.php"  class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon>  New Store</a>
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
                                    <option value="s-0" disabled selected>Select Warehouse</option>
                                    <option value="us">Main Warehouse A</option>
                                    <option value="ca">Secondary Warehouse B</option>
                                    <option value="ca">Warehouse 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Location</option>
                                    <option value="us">Berlin, Germany</option>
                                    <option value="ca">Munich, Germany</option>
                                    <option value="ca">Delhi, India</option>
                                </select>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <!-- Performance Indicator list -->
                    <div class="card tablemaincard_nopaddingleftright">

                <div class="card-body p-0">
                    <div class="custom-datatable-filter">
                        <table class="table common-datatable withoutActionTR nowrap w-100 Warehouse">
                            <thead class="thead-light">
                                <tr>
                                    <th>Store ID</th>
                                    <th>Warehouse Name</th>
                                    <th>Location</th>
                                    <th>Manager</th>
                                    <th>Contact</th>
                                    <th>Opening Hours</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            <tr>
                                <td>#ST001</td>
                                <td>Main Warehouse A</td>
                                <td>Berlin, Germany</td>
                                <td>john Do</td>
                                <td>+12163547758 | johndoe@example.com</td>
                                <td>8:00 AM - 10:00 PM</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                data-bs-toggle="tooltip" data-placement="top" title="View item Details"
                                                href="item-detail.php">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-placement="top" href="edit-warehouse.php">
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
                                <td>#ST002</td>
                                <td>Secondary Warehouse B</td>
                                <td>Munich, Germany</td>
                                <td>Jane Smith</td>
                                <td>+126578767654 | Smith@example.com</td>
                                <td>9:00 AM - 9:00 PM</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                data-bs-toggle="tooltip" data-placement="top" title="View item Details"
                                                href="item-detail.php">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="edit-warehouse.php">
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
                                <td>#ST003</td>
                                <td>Warehouse 2</td>
                                <td>Delhi, India</td>
                                <td>Michel Stark</td>
                                <td>+9246565757 | Stark8454@example.com</td>
                                <td>10:00 AM - 8:00 PM</td>
                                <td><span class="badge bg-soft-danger">Inactive</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                data-bs-toggle="tooltip" data-placement="top" title="View item Details"
                                                href="item-detail.php">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="edit-warehouse.php">
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
                                <td>#ST004</td>
                                <td>Warehouse 3</td>
                                <td>Munich, Germany</td>
                                <td>Mark Wood</td>
                                <td>+4656578670 | Wood545@example.com</td>
                                <td>9:00 AM - 9:00 PM</td>
                                <td><span class="badge bg-soft-success">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                data-bs-toggle="tooltip" data-placement="top" title="View item Details"
                                                href="item-detail.php">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="edit-warehouse.php">
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

<!-- Bootstrap Modal -->
<div class="modal fade Sub" id="subcategoryModal" tabindex="-1" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subcategoryModalLabel">All Store</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mdheight_small">
                <!-- Search Bar -->
                <div class="searchwrapper_category">
                    <input type="text" id="subcategorySearch" class="form-control" placeholder="Search Store..."
                        style="margin-bottom: 10px;">
                    <iconify-icon icon="proicons:search"></iconify-icon>
                </div>
                <ul class="list-group subcategory_mdListing" id="modalSubcategoryList">
                    <!-- Dynamic content will be populated here -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- All Subcategories -->


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

<!-- sub category dynamic data show count and list in modal start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('.subcategory_row');
        rows.forEach((row) => {
            const container = row.querySelector('.subcategory_items');
            const items = container.querySelectorAll('.subct_item');
            const maxVisible = 4;
            // Hide subcategories beyond the first 4
            items.forEach((item, index) => {
                if (index >= maxVisible) {
                    item.style.display = 'none';
                }
            });
            // Add remaining count circle if needed
            if (items.length > maxVisible) {
                const remainingCount = items.length - maxVisible;
                const countCircle = document.createElement('div');
                countCircle.className = 'subct_item_count';
                countCircle.textContent = `+${remainingCount}`;
                countCircle.setAttribute('data-bs-toggle', 'modal');
                countCircle.setAttribute('data-bs-target', '#subcategoryModal');
                countCircle.setAttribute('data-subcategory', JSON.stringify(Array.from(items).map(
                    item => item.textContent))); // Store all items in data attribute
                countCircle.setAttribute('data-category', row.getAttribute(
                'data-category')); // Store category name
                container.appendChild(countCircle);
            }
        });
        // Populate modal with the correct subcategory items
        document.querySelectorAll('.subct_item_count').forEach(countCircle => {
            countCircle.addEventListener('click', (event) => {
                const categoryName = event.target.getAttribute('data-category');
                const allSubcategories = JSON.parse(event.target.getAttribute(
                    'data-subcategory'));
                const modalTitle = document.getElementById('subcategoryModalLabel');
                const modalList = document.getElementById('modalSubcategoryList');
                const searchInput = document.getElementById('subcategorySearch');
                modalList.innerHTML = ''; // Clear previous list
                // Set modal title to category name
                modalTitle.textContent = `${categoryName} - All Store`;
                // Populate modal list with subcategories
                allSubcategories.forEach(subcategory => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item';
                    listItem.textContent = subcategory;
                    modalList.appendChild(listItem);
                });
                // Add search functionality
                searchInput.addEventListener('input', () => {
                    const searchText = searchInput.value.toLowerCase();
                    const items = modalList.querySelectorAll('.list-group-item');
                    let found = false;
                    items.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        if (text.includes(searchText)) {
                            item.style.display = 'block'; // Show item
                            found = true;
                        } else {
                            item.style.display = 'none'; // Hide item
                        }
                    });
                    // Show "No subcategory found" message if no results match
                    const noResultsMessage = document.getElementById(
                    'noResultsMessage');
                    if (!found) {
                        if (!noResultsMessage) {
                            const noMessage = document.createElement('li');
                            noMessage.id = 'noResultsMessage';
                            noMessage.className = 'list-group-item text-danger';
                            noMessage.textContent = 'No subcategory found';
                            modalList.appendChild(noMessage);
                        }
                    } else {
                        const noMessage = document.getElementById('noResultsMessage');
                        if (noMessage) {
                            noMessage
                        .remove(); // Remove the "No subcategory found" message
                        }
                    }
                });
            });
        });
    });
</script>
<!-- sub category dynamic data show count and list in modal end -->