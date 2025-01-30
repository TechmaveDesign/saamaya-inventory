<?php include "header.php"?>
<style>

@media print {
    #SalesOrderInvoice {
        page-break-inside: avoid; /* Prevent breaking the div between pages */
    }
    table, tr, td {
        page-break-inside: avoid; /* Avoid breaking rows across pages */
    }
    h4, p {
        page-break-after: avoid; /* Prevent breaking after headings or text */
    }
}
</style>
<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb salesOrderHeader">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Invoice View</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="invoice-list.php">Invoice List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice View</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                        <div class="ActionHeadButtons ">
                           
                            <a href="invoice-list.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
                            <a href="invoice-edit.php" class="btn EditBtn"> Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></a>
                            <a href="javascript:void(0);" class="btn btnImport" onclick="printInvoice()"> <iconify-icon icon="fluent:print-48-regular"></iconify-icon> Print</a>
                            <a href="javascript:void(0);" class="btn btnImport"><iconify-icon icon="ant-design:file-pdf-outlined"></iconify-icon> Download PDF</a>
                            <a href="javascript:void(0);" class="btn btnImport" id="confrimBtn"><iconify-icon icon="tabler:send"></iconify-icon>  Send Invoice</a>
                            <!-- <a href="javascript:void(0);" class="btn btnImport" id="conInvoicebtn"><iconify-icon icon="tabler:send"></iconify-icon> Resend Invoice</a> -->
                            <div class="enquiryID_container" id="invoicedStatus">
                                        <div class="EnquiryID">
                                            Invoice Status
                                        </div>
                                        <div class="IDButton approval_status_update">
                                            <button type="button" class="SourceDataBtn pending" id="approvalStatusBtn">
                                              <span style="color:#0093ff;">Sent</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="enquiryID_container">
                                        <div class="EnquiryID">
                                            Payment Status
                                        </div>
                                        <div class="IDButton approval_status_update">
                                            <button type="button" class="SourceDataBtn pending" id="approvalStatusBtn">
                                                <span style="color:#f00;">Unpaid</span>
                                            </button>
                                        </div>
                                    </div>
                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#add_users" class="btn btn-primary d-flex align-items-center themeBtn"><iconify-icon icon="majesticons:plus"></iconify-icon> New Item</a> -->
                        </div>
                        <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="btn-custom" id="collapse-header"><i data-feather="chevron-up" class="feather-16"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="salesOrderContainer">
                    <div class="row">
                        <div class="col-lg-8">
                            <div id="SalesOrderInvoice" style="max-width: 850px; margin: 20px auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
                                    <!-- Header Section -->
                                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                                        <div>
                                            <!-- <h2 style="margin: 0; color: #ff5722;">Drongo</h2> -->
                                            <img src="assets/img/new-image/Saamaya-Inventory-Logo.png" alt="" style="width:100px;">
                                           
                                        </div>
                                        <div style="text-align: right;">
                                            <h3 style="margin: 0; font-size:35px;">Invoice</h3>
                                            <p style="margin: 5px 0; font-size: 16px;"><strong>Invoice# <span style="color:#ff5c00">INV-00002</span></strong> </p>
                                            <!-- <p style="margin: 5px 0; font-size: 14px;"><strong>Invoice Date:</strong> 17/01/2025</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>Term:</strong> Due On Receipt</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>Due Date:</strong> 25/01/2025</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>S. O.#</strong> SO-00001</p> -->
                                        </div>
                                    </div>

                                    <!-- Customer and Deliver To Section -->
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                                        <div>
                                            <!-- <h3 style="margin: 0;">Sales Order</h3> -->
                                            <p style="margin: 5px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Invoice Date</strong>: &nbsp; 17/01/2025</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Term</strong> : &nbsp; Due On Receipt</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Due Date</strong> : &nbsp; 25/01/2025</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">S. O.#</strong> : &nbsp; SO-00001</p>
                                        </div>
                                        <div>
                                            <h4 style="margin-bottom: 10px;">Bill To</h4>
                                            <h4 style="margin: 5px 0; font-size: 14x;">Invento</h4>
                                            <p style="margin: 5px 0; font-size: 14px;">Akshya Nagar 1st Block 1st Cross
                                            Rammurthy nagar</p>
                                            <p style="margin: 5px 0; font-size: 14px;">Bangalore 560016 Karnataka
                                            India</p>
                                        </div>
                                    </div>

                                    <!-- Table Section -->
                                    <h4 style="margin-bottom: 10px;">Order Details</h4>
                                    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                    <thead>
                                        <tr>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9; text-align: left;">Item & Description</th>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Qty</th>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Price</th>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Discount</th>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border: 1px solid #ddd; padding: 8px;">Soap combo kit</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">1.00 <span>Box</span></td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">60</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">10.00%</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">54</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #ddd; padding: 8px;">Shampoo 500ml</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">2.00 <span>Bottle</span></td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">15</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">5.00%</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">14</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #ddd; padding: 8px;">Conditioner 500ml</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">1.00 <span>Bottle</span></td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">25</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">7.50%</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">23.50</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #ddd; padding: 8px;">Towel Set</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">1.00 <span>Set</span></td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">80</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">15.00%</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">68</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #ddd; padding: 8px;">Body Lotion</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">2.00 <span>Bottle</span></td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">40</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">8.00%</td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">37</td>
                                        </tr>
                                    </tbody>
                                </table>

<div class="bottomSectionInvoice" style="display: flex;align-items: center;justify-content: space-between;">
    <div class="rightSideKLOP" style="width:60%;border-right: 1px dashed #c2c2c2;padding-right: 20px;">
      <p style="margin-bottom:0">Total In Words</p>
      <h6>Eight thousand two hundred seventy-six dollars and ninety-nine cents.</h6>

      <p style="margin-bottom:0; margin-top:20px">Note</p>
      <h6>Thanks for your business.</h6>
    </div>
     <!-- Totals Section -->
     <div style="width:35%;padding-left: 35px;">
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Sub Total:</strong> $7036.99</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Discount:</strong> $140</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Total VAT:</strong> $1457.32456789</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">VAT (20%):</strong> $1219.40</p>
                                        <p style="margin: 10px 0; font-size: 16px; font-weight: bold;"><strong style="width:100px;display:inline-flex;">Total Due:</strong> $8276.99</p>
                                    </div>
</div>
                                   

                                    
                                </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="paymentManage">
                                <div class="messageContainerPay">
                                    <h6><img src="assets/img/new-image/clean.png" alt=""> WHAT'S NEXT?</h6>
                                    <p>Invoice has been sent. Manage payment for it as soon as you receive payment.</p>
                                    <div class="paymentManageButtonArea text-end">
                                    <a href="#" class="ManagePaymentBtn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Manage Payment</a>
                                    </div>
                                    
                                </div>
                            </div>
                           <div class="card mt-3">
                                <div class="card-header">
                                    <h5>Attachments</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="AttachmentsDoc">
                                        <li>
                                            <a  href="assets/img/new-image/passport.png" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
                                            <div class="attachmentIcon">
                                            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                                                </div>
                                                <div class="attachmentContent">
                                                    <div class="rightSideHUi">
                                                        <h6>Attachment document name</h6>
                                                        <p>File Size : 241.8 KB</p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <div class="removeHUi">
                                                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                                                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                                                </div>
                                        </li>
                                        <li>
                                            <a  href="assets/img/new-image/passport.png" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
                                            <div class="attachmentIcon">
                                            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                                                </div>
                                                <div class="attachmentContent">
                                                    <div class="rightSideHUi">
                                                        <h6>Attachment document name</h6>
                                                        <p>File Size : 241.8 KB</p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <div class="removeHUi">
                                                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                                                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                                                </div>
                                        </li>
                                        <li>
                                            <a  href="assets/img/new-image/passport.png" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
                                            <div class="attachmentIcon">
                                            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                                                </div>
                                                <div class="attachmentContent">
                                                    <div class="rightSideHUi">
                                                        <h6>Attachment document name</h6>
                                                        <p>File Size : 241.8 KB</p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <div class="removeHUi">
                                                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                                                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                                                </div>
                                        </li>
                                        <li>
                                            <a  href="assets/img/new-image/passport.png" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
                                            <div class="attachmentIcon">
                                            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                                                </div>
                                                <div class="attachmentContent">
                                                    <div class="rightSideHUi">
                                                        <h6>Attachment document name</h6>
                                                        <p>File Size : 241.8 KB</p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <div class="removeHUi">
                                                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                                                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                                                </div>
                                        </li>
                                        

                                    </ul>
                                </div>
                           </div>
                        </div>
                    </div>
                
                </div>

                
     </div>
</div>

<div class="offcanvas offcanvas-end MangePaymentOffcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Manage Payment</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->

    <div class="offcanvas-body pt-0">
    <div class="ItemContainerTop">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="InputFelidsContainer">
                                                
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <label for="#">Customer Name <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" placeholder=" " id="name" value="Invento" class="form-control" disabled readonly>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <label for="#">Payment # <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control" disabled readonly value="1">
                                                         
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                           

                                                </div>
                                                
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <label for="#">Amount Received <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control" value="8276.99">
                                                         
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <label for="#">Bank Charges (if any) </label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="skuCode">
                                                            <input type="text" placeholder=" " id="name" class="form-control" value="">
                                                         
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
             <div class="ItemContainerTop no-bg">
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="ItemNewContainer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="InputFelidsContainer">
                                                
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <label for="#">Payment Date <span>*</span></label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" placeholder=" " id="name" value="" class="form-control datepicker1">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <label for="#">Payment Mode </label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected>Select Mode</option>
                                                            <option value="box">Cash</option>
                                                            <option value="cm">Credit Card</option>
                                                            <option value="dz">Bank Transfer</option>
                                                            <option value="dz">Debit Card</option>
                                                        </select>
                                                            
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="#">Note</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <textarea type="text" placeholder=" " id="name" class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <hr>

                                            <div class="form-group">
                                                <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                            <label for="#">Attachments</label>
                                                        </div>
                                                    <div class="col-lg-12">
                                                    <div class="file-upload-container w-100">
                                                        <label for="file-input" class="custom-file-button">
                                                            <span class="upload-icon">
                                                                <iconify-icon icon="tabler:upload"></iconify-icon>
                                                            </span>
                                                            Upload Images
                                                        </label>
                                                        <input type="file" id="file-input" multiple accept="image/*">
                                                        <div class="file-upload-info">You can upload a maximum of 5 images, 10MB each</div>

                                                    </div>
                                                    <div id="image-preview-list"></div>
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
    <!-- end offcanvas-body-->
    <div class="offcanvas-footer">
        <div class="actionManagePayment">
            <a href="#" class="btn btn-primary">Manage Payment</a>
            <a href="#" class="btn themeBtnCancel" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</a>

        </div>
     </div>
</div> <!-- end offcanvas-->
<!-- Buttons Section -->
<!-- <div style="text-align: center; margin-top: 20px;">
        <button style="padding: 10px 20px; margin: 5px; font-size: 16px; cursor: pointer; background-color: #007bff; color: #fff; border: none; border-radius: 4px;" onclick="printInvoice()">Print</button>
        <button style="padding: 10px 20px; margin: 5px; font-size: 16px; cursor: pointer; background-color: #28a745; color: #fff; border: none; border-radius: 4px;" onclick="downloadPDF()">Download PDF</button>
    </div> -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    function printInvoice() {
        const invoiceElement = document.getElementById('SalesOrderInvoice');
        const printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Print Invoice</title></head><body>');
        printWindow.document.write(invoiceElement.outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
        printWindow.close();
    }
</script>

  <script>
    $(document).ready(function(){
        $('#conInvoicebtn').hide();
        $('#invoicedStatus').hide();

        $('#confrimBtn').click(function(){
            $('#confrimBtn').hide();
            $('#invoicedStatus').show();
        })
        // $('#conInvoicebtn').click(function(){
        //     $('#conInvoicebtn').hide();
          

        // })
    });
  </script>
 

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
 <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
 <script>
    // Initialize Fancybox with custom buttons
    Fancybox.bind("[data-fancybox]", {
        Toolbar: {
            display: [
                "close", // Default close button
                "download", // Add download button to Fancybox
            ],
        },
        buttons: {
            download: {
                type: "link",
                label: "Download",
                class: "fancybox__button--download",
                src: (fancybox) => fancybox.current.src,
                download: true, // Enable the download link
            },
        },
    });
</script>


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