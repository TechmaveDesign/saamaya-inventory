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
                        <h2 class="mb-1">Received Payment View</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="recevied-payment.php">Received Payment List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Received Payment View</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                        <div class="ActionHeadButtons ">
                           
                            <a href="recevied-payment.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
                            <a href="recevied-payment-edit.php" class="btn EditBtn"> Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></a>
                            <a href="javascript:void(0);" class="btn btnImport" onclick="printInvoice()"> <iconify-icon icon="fluent:print-48-regular"></iconify-icon> Print</a>
                            <a href="javascript:void(0);" class="btn btnImport"><iconify-icon icon="ant-design:file-pdf-outlined"></iconify-icon> Download PDF</a>
                            <!-- <a href="javascript:void(0);" class="btn btnImport" id="confrimBtn"><iconify-icon icon="tabler:send"></iconify-icon>  Send Invoice</a> -->
                            <!-- <a href="javascript:void(0);" class="btn btnImport" id="conInvoicebtn"><iconify-icon icon="tabler:send"></iconify-icon> Resend Invoice</a> -->
                            <!-- <div class="enquiryID_container" id="invoicedStatus">
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
                                    </div> -->
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
                                            <h3 style="margin: 0; font-size:20px;">Payment Receipt</h3>
                                            <!-- <p style="margin: 5px 0; font-size: 16px;"><strong>Invoice# <span style="color:#ff5c00">INV-00002</span></strong> </p> -->
                                            <!-- <p style="margin: 5px 0; font-size: 14px;"><strong>Invoice Date:</strong> 17/01/2025</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>Term:</strong> Due On Receipt</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>Due Date:</strong> 25/01/2025</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>S. O.#</strong> SO-00001</p> -->
                                        </div>
                                    </div>

                                    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                        <tbody>
                                            <td>
                                                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-bottom:15px">Payment Date</td>
                                                            <td  style="padding-bottom:15px;border-bottom:1px solid #ececec;">17/01/2025</td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="padding-bottom:15px">Payment Mode</td>
                                                            <td  style="padding-bottom:15px;border-bottom:1px solid #ececec;">
                                                            Cash</td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="padding-bottom:15px">Amount Received In Words</td>
                                                            <td  style="padding-bottom:15px;border-bottom:1px solid #ececec;">Sixty dollars and zero cents</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </td>
                                            <td>
                                                <h6 style="padding: 50px;background: #f5f5f5;margin-left: 35px;font-size: 25px;text-align:center;color: #000;">
                                                   <span style="display:block; font-size:16px;margin-bottom:10px;">Amount Received</span>
                                                    $460.00 
                                                </h6>
                                            </td>
                                        </tbody>

                                    </table>

                                    <!-- Customer and Deliver To Section -->
                                    <table style="margin-bottom: 20px;width: 100%;">
                                        <tr>
                                            <td >
                                                <div>
                                                    <h4 style="margin-bottom: 10px;">Received From</h4>
                                                    <h4 style="margin: 5px 0; font-size: 14x;color:#0297f1;">Invento</h4>
                                                    <p style="margin: 5px 0; font-size: 14px;">Akshya Nagar 1st Block 1st Cross
                                                    Rammurthy nagar</p>
                                                    <p style="margin: 5px 0; font-size: 14px;">Bangalore 560016 Karnataka
                                                    India</p>
                                                </div>
                                            </td>
                                            <td>
                                            <div>
                                                <h3 style="margin: 0; font-size:14px;color:#000;border-bottom: 1px solid #ececec;padding-bottom: 40px;margin-top: 20px;">Authorized Signature</h3>
                                                
                                            </div>
                                            </td>
                                        </tr>
                                     
                                    
                                        
                                    </table>

                                    <!-- Table Section -->
                                    <h4 style="margin-bottom: 10px;">Payment for</h4>
                                    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                    <thead>
                                        <tr>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9; text-align: left;">Invoice Number </th>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Invoice Date</th>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Invoice Amount</th>
                                            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Payment Amount </th>
                                            <!-- <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Amount</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border: 1px solid #ddd; padding: 8px;"><a href="invoice-view.php" style="color:#0297f1;">INV-000004</a></td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">17/01/2025 </td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">$ 60.00 </td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">$ 60.00</td>
                                           
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #ddd; padding: 8px;"><a href="invoice-view.php" style="color:#0297f1;">INV-000005</a></td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">17/01/2025 </td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">$ 500.00 </td>
                                            <td style="border: 1px solid #ddd; padding: 8px;">$ 400.00</td>
                                           
                                        </tr>
                                       
                                    </tbody>
                                </table>

                                <!-- <div class="bottomSectionInvoice" style="display: flex;align-items: center;justify-content: space-between;">
                                    <div class="rightSideKLOP" style="width:60%;border-right: 1px dashed #c2c2c2;padding-right: 20px;">
                                    <p style="margin-bottom:0">Total In Words</p>
                                    <h6>Eight thousand two hundred seventy-six dollars and ninety-nine cents.</h6>

                                    <p style="margin-bottom:0; margin-top:20px">Note</p>
                                    <h6>Thanks for your business.</h6>
                                    </div>
                               
                                    <div style="width:35%;padding-left: 35px;">
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Sub Total:</strong> $7036.99</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Discount:</strong> $140</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Total VAT:</strong> $1457.32456789</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">VAT (20%):</strong> $1219.40</p>
                                        <p style="margin: 10px 0; font-size: 16px; font-weight: bold;"><strong style="width:100px;display:inline-flex;">Total Due:</strong> $8276.99</p>
                                    </div>
                                </div> -->
                                   

                                    
                                </div>
                        </div>
                        <div class="col-lg-4">
                            
                           <div class="card mt-3">
                                <div class="card-header">
                                    <h5>Attachments</h5>
                                </div>
                                <div class="card-body">
                                    <!-- <ul class="AttachmentsDoc">
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
                                        

                                    </ul> -->

                                    <div class="noAttachment">
                                        <img src="assets/img/new-image/no-aatachment.png" alt="">
                                        <h6>No Attachments Available</h6>
                                        <p>No attachments are currently available for viewing.</p>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                
                </div>

                
     </div>
</div>


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


