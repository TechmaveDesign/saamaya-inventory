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
                        <h2 class="mb-1">Payments Made View</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="purchase-orders.php">Payments Made</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Payments Made  View</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                        <div class="ActionHeadButtons ">
                           
                            <a href="payments-made.php" class="btn btnImport"><iconify-icon icon="typcn:arrow-back-outline"></iconify-icon> Back</a>
                            <a href="edit-payment.php" class="btn EditBtn"> Edit <iconify-icon icon="akar-icons:edit"></iconify-icon></a>
                            <a href="javascript:void(0);" class="btn btnImport" onclick="printInvoice()"> <iconify-icon icon="fluent:print-48-regular"></iconify-icon> Print</a>
                            <a href="javascript:void(0);" class="btn btnImport" data-bs-toggle="modal" data-bs-target="#scanModal"><iconify-icon icon="ant-design:file-pdf-outlined"></iconify-icon>  Apply to Bills</a>
                            <a href="javascript:void(0);" class="btn btnImport" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><iconify-icon icon="line-md:circle-twotone-to-confirm-circle-transition"></iconify-icon>Manage Payment</a>
                            <!-- <a href="javascript:void(0);" class="btn btnImport" id="conInvoicebtn"><iconify-icon icon="basil:invoice-outline"></iconify-icon> Convert to Invoice</a> -->
                            <!-- <div class="enquiryID_container" id="invoicedStatus">
                                        <div class="EnquiryID">
                                            Invoice Status
                                        </div>
                                        <div class="IDButton approval_status_update">
                                            <button type="button" class="SourceDataBtn pending" id="approvalStatusBtn">
                                              <span style="color:#0093ff;">Invoiced</span>
                                            </button>
                                        </div>
                                    </div> -->
                                    <!-- <div class="enquiryID_container">
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
                                            <p style="margin: 5px 0; font-size: 16px;"><strong>Purchase Order# <span style="color:#ff5c00">SO-00002</span></strong> </p>
                                        </div>
                                        <div style="text-align: right;">
                                            <h3 style="margin: 0;">Payments Made</h3>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>Payment Date:</strong> 17/06/2023</p>
                                            <p style="margin: 5px 0; font-size: 14px;"><strong>Ref:</strong> BC 5555555</p>
                                        </div>
                                    </div>

                                    <!-- Customer and Deliver To Section -->
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                                        <div>
                                            <h4 style="margin-bottom: 10px;">From</h4>
                                            <p style="margin: 5px 0; font-size: 14px;">Saamaya Inventory</p>
                                            <p style="margin: 5px 0; font-size: 14px;">SIREN: 403344333</p>
                                            <p style="margin: 5px 0; font-size: 14px;">74 RUE ANATOLE FRANCEANTOLE FRANCE</p>
                                        </div>
                                        <div>
                                            <h4 style="margin-bottom: 10px;">To</h4>
                                            <p style="margin: 5px 0; font-size: 14px;">Invento</p>
                                            <p style="margin: 5px 0; font-size: 14px;">Akshya Nagar 1st Block 1st Cross
                                            Rammurthy nagar</p>
                                            <p style="margin: 5px 0; font-size: 14px;">Bangalore 560016 Karnataka
                                            India</p>
                                        </div>
                                    </div>

                                    <!-- Table Section -->
                                    <h4 style="margin-bottom: 10px;">Payments Details</h4>
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


                                    <!-- Totals Section -->
                                    <div style="width: 30%;margin: 0 0 0 auto;">
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Sub Total:</strong> $7036.99</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Discount:</strong> $140</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">Total VAT:</strong> $1457.32456789</p>
                                        <p style="margin: 10px 0; font-size: 14px;"><strong style="width:100px;display:inline-flex;">VAT (20%):</strong> $1219.40</p>
                                        <p style="margin: 10px 0; font-size: 16px; font-weight: bold;"><strong style="width:100px;display:inline-flex;">Total Due:</strong> $8276.99</p>
                                    </div>

                                    
                                </div>
                        </div>
                        <div class="col-lg-4">
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
<!-- Buttons Section -->





<!-- Modal for Scanning Product Barcode -->
<div class="modal fade" id="scanModal" tabindex="-1" aria-labelledby="scanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scanModalLabel">Apply credits from 00002</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="col-lg-12">
                    <div class="sectionBox ComboItemsbox">
                            <div class="form-check align-items-center mt-2 p-0">
                                <!-- <input class="form-check-input varrientCheckbox" type="checkbox" value="" id="flexCheckChecked3" checked> -->
                                <!-- <label class="form-check-label" for="flexCheckChecked3">
                                Available Credits <strong>$.300.00</strong>
                                </label> -->
                                <p>Available Credits <strong>$.300.00</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 tableBox VariantContainer mb-3" id="QuantityAdjustmentTable">
                        <table class="table table-bordered AssociateItemTable">
                        <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Bill Number</th>
                                    <th>Bill Amount</th>
                                    <th>Bill Balance</th>
                                    <th>Credits to Apply</th>
                                    
                                </tr>
                        </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="invoiceDate">
                                                04/01/2025 <span>Due Date: 27/01/2025</span>
                                            </h6>
                                        </td>
                                        <td>
                                        000002
                                        </td>
                                        <td>58.8</td>
                                        <td>58.8</td>
                                        <td class="QtyInput">
                                            <input type="text" placeholder="0.00" id="name" class="form-control"
                                                value="">
                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>
                                            <h6 class="invoiceDate">
                                                04/01/2025 <span>Due Date: 27/01/2025</span>
                                            </h6>
                                        </td>
                                        <td>
                                        000003
                                        </td>
                                        <td>58.8</td>
                                        <td>58.8</td>
                                        <td class="QtyInput">
                                            <input type="text" placeholder="0.00" id="name" class="form-control"
                                                value="">
                                        </td>
                                    </tr>
                                    <td colspan="3">
                                    <!-- <h6>**List contains only SENT Bills</h6> -->
                                    </td>
                                    <td colspan="3">
                                        <!-- Totals Section -->
                                        <div >
                                            <p style="margin: 10px 0; font-size: 14px;"><strong style="width:200px;display:inline-flex;">Credits Applied</strong> $0.00</p>
                                            <!-- <p style="margin: 10px 0; font-size: 14px;"><strong style="width:200px;display:inline-flex;">Bill Amount </strong> $0.00</p> -->
                                            <p style="margin: 10px 0; font-size: 16px; font-weight: bold;"><strong style="width:200px;display:inline-flex;">Remaining credits:</strong> $300.00</p>
                                        </div>
                                    </td>

                                </tr>
                                    
                                </tbody>
                            

                        </table>
                        
                    </div>

                    <div class="text-right">
                        <a href="#">
                            <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                                <i class="ti-save-alt"></i>Send
                            </button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn commonCancleButton">
                                Cancel
                            </button>
                        </a>

                    </div>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
        </div>
    </div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Manage Payment</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->

    <div class="offcanvas-body pt-0">
    <div class="ItemContainerTop">
                <div class="row">
                <div class="col-lg-12">
                <div class="ItemNewContainer1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="InputFelidsContainer">
                                            <div class="profileCustomer">
                                                <img src="assets/img/new-image/userdummy.png" alt="">
                                                <h6>Jane Smith <span>janesmith@example.com	</span></h6>
                                            </div>
                                            
                                <h6 class="SectionTitleFG pt-3 mb-3">Balance <strong> $300</strong></h6>
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-12 mb-1">
                                                            <label for="#" data-bs-toggle="tooltip" data-placement="top" title="">Refunded On <span>*</span>
                                                        </div>
                                                            <div class="col-lg-12">
                                                            <input type="text" placeholder=" " id="name" class="form-control datepicker1">
                                                        </div>
                                                    </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-12 mb-1">
                                                        <label for="#">Payment Method</label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <select  class=" js-example-basic-single select2">
                                                            <option value="" disabled selected>Select Method</option>
                                                            <option value="method1" >Bank Transfer</option>
                                                            <option value="method2" >Mobile Money</option>
                                                            <option value="method3" >Cash</option>
                                                            <option value="method4">Cheque</option>
                                                            <option value="method5">Cash on Delivery</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                            <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 mb-1">
                                                    <label for="#" >Reference Number#</label>
                                                </div>
                                                <div class="col-lg-12">
                                                <div class="skuCode">
                                                    <input type="text" placeholder="" id="name" class="form-control">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 mb-1">
                                                    <label for="#" >Amount <span>*</span></label>
                                                </div>
                                                <div class="col-lg-12">
                                                <div class="skuCode">
                                                    <input type="text" placeholder="" id="name" class="form-control" value="">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            </div>

                                        <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12 mb-1">
                                                <label for="#">Account To</label>
                                            </div>
                                            <div class="col-lg-12">
                                                <select  class=" js-example-basic-single select2">
                                                    <option value="" disabled selected>Cash</option>
                                                    <option value="" >Petty Cash</option>
                                                    <option value="" >Undeposited Funds</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-1">
                                                            <label for="#" >Subject</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                        <textarea type="text" placeholder=" " id="name" class="form-control" rows="3"></textarea>
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
        <div class="text-right mt-3 text-end">
       
        <a href="#">
            <button type="button" class="btn commonCancleButton">
                Cancel
            </button>
        </a>
        <a href="#">
            <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSweetAlert()">
                <i class="ti-save-alt"></i>Send
            </button>
        </a>

    </div>
    </div> <!-- end offcanvas-body-->
</div> <!-- end offcanvas-->
<!-- <div style="text-align: center; margin-top: 20px;">
        <button style="padding: 10px 20px; margin: 5px; font-size: 16px; cursor: pointer; background-color: #007bff; color: #fff; border: none; border-radius: 4px;" onclick="printInvoice()">Print</button>
        <button style="padding: 10px 20px; margin: 5px; font-size: 16px; cursor: pointer; background-color: #28a745; color: #fff; border: none; border-radius: 4px;" onclick="downloadPDF()">Download PDF</button>
    </div> -->
<?php include "footer.php"?>
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
            $('#conInvoicebtn').show();
            $('#confrimBtn').hide();
        })
        $('#conInvoicebtn').click(function(){
            $('#conInvoicebtn').hide();
            $('#confrimBtn').hide();
           $('#invoicedStatus').show();

        })
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