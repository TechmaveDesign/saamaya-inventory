<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="salesOrderContainer">
                <div id="SalesOrderInvoice" style="max-width: 650px; margin: 20px auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
    <!-- Header Section -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <div>
            <h2 style="margin: 0; color: #ff5722;">Drongo</h2>
            <p style="margin: 5px 0; font-size: 14px;">25 RUE DE PONTHIEU<br>75008, PARIS 8</p>
        </div>
        <div style="text-align: right;">
            <h3 style="margin: 0;">Invoice</h3>
            <p style="margin: 5px 0; font-size: 14px;"><strong>Invoice No:</strong> F-012023-68</p>
            <p style="margin: 5px 0; font-size: 14px;"><strong>Date Issued:</strong> 17/06/2023</p>
            <p style="margin: 5px 0; font-size: 14px;"><strong>Ref:</strong> BC 5555555</p>
        </div>
    </div>

    <!-- Customer and Deliver To Section -->
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <div>
            <h4 style="margin-bottom: 10px;">Customer</h4>
            <p style="margin: 5px 0; font-size: 14px;">DEVOTEAM</p>
            <p style="margin: 5px 0; font-size: 14px;">SIREN: 403344333</p>
            <p style="margin: 5px 0; font-size: 14px;">74 RUE ANATOLE FRANCEANTOLE FRANCE</p>
        </div>
        <div>
            <h4 style="margin-bottom: 10px;">Deliver To</h4>
            <p style="margin: 5px 0; font-size: 14px;">74 RUE ANATOLE FRANCEANTOLE FRANCE<br>LEVALLOIS-PERRET, 92300, France</p>
        </div>
    </div>

    <!-- Table Section -->
    <h4 style="margin-bottom: 10px;">Order Details</h4>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9; text-align: left;">Item</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Qty</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Unit Price</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Tax</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Discount</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f9f9f9;">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">SAP Consulting</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">10</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: right;">700</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">0%</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">2%</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: right;">7000</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Microsoft 365 Business</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: right;">12.99</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">0%</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1%</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: right;">12.99</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Domiciliation KANDBAZ</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: right;">12.99</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">0%</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1%</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: right;">12.99</td>
            </tr>
        </tbody>
    </table>

    <!-- Totals Section -->
    <div style="text-align: right;">
        <p style="margin: 5px 0; font-size: 14px;"><strong>Total HT:</strong> $7036.99</p>
        <p style="margin: 5px 0; font-size: 14px;"><strong>Discount:</strong> $140</p>
        <p style="margin: 5px 0; font-size: 14px;"><strong>Total VAT:</strong> $1457.32456789</p>
        <p style="margin: 5px 0; font-size: 14px;"><strong>VAT (20%):</strong> $1219.40</p>
        <p style="margin: 5px 0; font-size: 16px; font-weight: bold;"><strong>Total Due:</strong> $8276.99</p>
    </div>

    
</div>
                </div>
                <!-- Buttons Section -->
<div style="text-align: center; margin-top: 20px;">
        <button style="padding: 10px 20px; margin: 5px; font-size: 16px; cursor: pointer; background-color: #007bff; color: #fff; border: none; border-radius: 4px;" onclick="printInvoice()">Print</button>
        <button style="padding: 10px 20px; margin: 5px; font-size: 16px; cursor: pointer; background-color: #28a745; color: #fff; border: none; border-radius: 4px;" onclick="downloadPDF()">Download PDF</button>
    </div>

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

    function downloadPDF() {
        const invoiceElement = document.getElementById('SalesOrderInvoice');
        const options = {
            margin: [10, 10, 10, 10], // Top, Right, Bottom, Left (in mm)
            filename: 'invoice.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { 
                scale: 2, // High resolution for better rendering
                useCORS: true // Avoid issues with external resources
            },
            jsPDF: { 
                unit: 'mm', 
                format: 'a4', // A4 page size
                orientation: 'portrait' 
            }
        };

        // Fix content being cut off by setting `html2pdf` to auto-split content into multiple pages
        html2pdf()
            .set(options)
            .from(invoiceElement)
            .toPdf()
            .get('pdf')
            .then(function (pdf) {
                const totalPages = pdf.internal.getNumberOfPages();
                for (let i = 1; i <= totalPages; i++) {
                    pdf.setPage(i);
                    pdf.setFontSize(10);
                    pdf.text('Page ' + i + ' of ' + totalPages, pdf.internal.pageSize.width - 30, pdf.internal.pageSize.height - 10);
                }
            })
            .save();
    }

</script>
</body>
</html>