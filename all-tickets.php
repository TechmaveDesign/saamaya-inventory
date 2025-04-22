<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">All Raise Tickets</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Raise Tickets</li>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#HelpPopup" class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> Raise Ticket</a>
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
                                    <option value="s-0" disabled selected>Select Category</option>
                                    <option value="us">Electronics</option>
                                    <option value="ca">Furniture</option>
                                    <option value="ca">Clothing & Fashion</option>
                                    <option value="gb">Food & Beverages</option>
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
                <th>Ticket Id</th>
                <th>Raised by</th>
                <th>Ticket Title</th>
                <th>Ticket Type</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
    <td>#TC001</td>
    <td>
        <a href="#">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="assets/img/new-image/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Charlie Chaplin</span>
                </div>
            </div>
        </a>
    </td>
    <td>Login Issue</td>
    <td>Technical</td>
    <td>
        <div class="prioritystatus highPriority">
            <span class="highpriority_badge custom_mr_2 dot-label1"></span>
            <span class="priorityStatus_text">High Priority</span>
        </div>
    </td>
    <td><span class="badge bg-soft-info">Raised</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="view-ticket.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
        </div>
    </td>
</tr>

<tr>
    <td>#TC002</td>
    <td>
        <a href="#">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="assets/img/new-image/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Emily Watson</span>
                </div>
            </div>
        </a>
    </td>
    <td>Email Not Working</td>
    <td>IT Support</td>
    <td>
        <div class="prioritystatus MediumPriority">
            <span class="Mediumpriority_badge custom_mr_2 dot-label1"></span>
            <span class="priorityStatus_text">Medium Priority</span>
        </div>
    </td>
    <td><span class="badge bg-soft-warning">In Progress</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="view-ticket.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
        </div>
    </td>
</tr>

<tr>
    <td>#TC003</td>
    <td>
        <a href="#">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="assets/img/new-image/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">John Carter</span>
                </div>
            </div>
        </a>
    </td>
    <td>Printer Offline</td>
    <td>Hardware</td>
    <td>
        <div class="prioritystatus lowPriority">
            <span class="lowpriority_badge custom_mr_2 dot-label1"></span>
            <span class="priorityStatus_text">Low Priority</span>
        </div>
    </td>
    <td><span class="badge bg-soft-success">Resolved</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="view-ticket.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
        </div>
    </td>
</tr>

<tr>
    <td>#TC004</td>
    <td>
        <a href="#">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="assets/img/new-image/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">Sophia Lee</span>
                </div>
            </div>
        </a>
    </td>
    <td>Software Installation</td>
    <td>IT Support</td>
    <td>
        <div class="prioritystatus MediumPriority">
            <span class="Mediumpriority_badge custom_mr_2 dot-label1"></span>
            <span class="priorityStatus_text">Medium Priority</span>
        </div>
    </td>
    <td><span class="badge bg-soft-success">Resolved</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="view-ticket.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
        </div>
    </td>
</tr>

<tr>
    <td>#TC005</td>
    <td>
        <a href="#">
            <div class="media align-items-center">
                <div class="media-head me-2">
                    <div class="avatar avatar-xs avatar-rounded">
                        <img src="assets/img/new-image/userdummy.png" alt="user" class="avatar-img">
                    </div>
                </div>
                <div class="media-body">
                    <span class="d-block text-high-em">David King</span>
                </div>
            </div>
        </a>
    </td>
    <td>VPN Access</td>
    <td>Networking</td>
    <td>
        <div class="prioritystatus highPriority">
            <span class="highpriority_badge custom_mr_2 dot-label1"></span>
            <span class="priorityStatus_text">High Priority</span>
        </div>
    </td>
    <td><span class="badge bg-soft-success">Resolved</span></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="view-ticket.php">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </span>
            </a>
        </div>
    </td>
</tr>

            <!-- You can copy and customize this <tr> block for more rows -->
        </tbody>
    </table>
</div>
  </div>
</div>
<!-- /Performance Indicator list -->
    </div>
    
</div>


<?php include "footer.php"?>



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