<?php include "header.php"?>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">System Activity</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <!-- <li class="breadcrumb-item">
                                    Sales 
                                </li> -->
                                <li class="breadcrumb-item active" aria-current="page">System Activity</li>
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
                        <!-- <div class="ActionHeadButtons">
                            <a href="#" class="btn btnImport"><iconify-icon icon="lets-icons:import-light"></iconify-icon> Import</a>
                            <a href="sales-order-create.php"  class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New Sales Order</a>
                        </div> -->
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
                                    <option value="s-0" disabled selected>Select Name</option>
                                    <option value="us">John William</option>
                                    <option value="ca">Robert Brown</option>
                                    <option value="ca">Sarah Johnson</option>
                                    <option value="gb">Emily Davis</option>
                                    <option value="au">Jane Doe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <!-- <label for="#">Product</label> -->
                                <select class="js-example-basic-single select2">
                                    <option value="s-0" disabled selected>Select Role</option>
                                    <option value="us">Inventory Specialist</option>
                                    <option value="ca">Operations Manager</option>
                                    <option value="ca">Procurement Officer</option>
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