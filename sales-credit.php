<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">All Credit Notes</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                Sales 
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Credit Notes</li>
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
                            <a href="new-sales-credits.php"  class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New Sales Credits</a>
                        </div>
                        <!-- <div class="head-icons ms-2">
                        <a href="#" class="btn-custom" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="filterBox">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Reference No</option>
                                    <option value="us">#RF1101</option>
                                    <option value="ca">#RF1102</option>
                                    <option value="ca">#RF1103</option>
                                    <option value="gb">#RF1104</option>
                                    <option value="au">#RF1105</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Customer Name</option>
                                    <option value="us">John Doe</option>
                                    <option value="ca">Jane Smith</option>
                                    <option value="ca">John Doe</option>
                                    <option value="gb">Emily Clark</option>
                                    <option value="au">Michael Brown</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Status</option>
                                    <option value="ca">Open</option>
                                    <option value="co">Close</option>
                                    <option value="us">Pending Approval</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                    <th>Date</th>
                                    <th>Credit Note#</th>
                                    <th>Customer Name</th>
                                    <th>Reference Number#</th>
                                    <th>Invoice#</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Balance</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                           
                            <tr>
                                
                            <td>2025-01-01 10:00</td>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>#RF56757</td>
                                <td>#INV56757</td>
                                <td><span class="badge bg-soft-success">Close</span></td>
                                <td>$1200</td>
                                <td>$400</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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
                                
                            <td>2025-01-02 11:00</td>
                                <td>102</td>
                                <td>Jane Smith</td>
                                <td>#RF89897</td>
                                <td>#INV45657</td>
                                <td><span class="badge bg-soft-success">Close</span></td>
                                <td>$100</td>
                                <td>NA</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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
                                
                            <td>2025-01-03 14:30</td>
                                <td>3</td>
                                <td>John Doe</td>
                                <td>#RF10434</td>
                                <td>#INV6866</td>
                                <td><span class="badge bg-soft-info">Open</span></td>
                                <td>$300</td>
                                <td>$300</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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
                                
                            <td>2025-01-04 09:45</td>
                                <td>104</td>
                                <td>Emily Clark</td>
                                <td>#RF56757</td>
                                <td>#INV7668</td>
                                <td><span class="badge bg-soft-success">Close</span></td>
                                <td>$400</td>
                                <td>NA</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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
                                
                            <td>2025-01-03 08:15</td>
                                <td>5</td>
                                <td>Michael Brown</td>
                                <td>#RF78769</td>
                                <td>#INV6784</td>
                                <td><span class="badge bg-soft-secondary">Pending Approval</span></td>
                                <td>$1000</td>
                                <td>$1000</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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
                                
                            <td>2025-01-05 12:00</td>
                                <td>1</td>
                                <td>Sophia Green</td>
                                <td>#RF80899</td>
                                <td>#INV2345</td>
                                <td><span class="badge bg-soft-info">Open</span></td>
                                <td>$1200</td>
                                <td>$100</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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
                                
                            <td>2025-01-06 15:30</td>
                                <td>7</td>
                                <td>Lucas Miller</td>
                                <td>#RF56757</td>
                                <td>#INV5767</td>
                                <td><span class="badge bg-soft-success">Close</span></td>
                                <td>$100</td>
                                <td>NA</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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
                                
                            <td>2025-01-07 10:00</td>
                                <td>8</td>
                                <td>Olivia Johnson</td>
                                <td>#RF46570</td>
                                <td>#INV79876</td>
                                <td><span class="badge bg-soft-info">Open</span></td>
                                <td>$1200</td>
                                <td>$200</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="sales-credits-view" href="sales-credits-view.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
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