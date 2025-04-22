<!-- Modal -->
<div class="WindowsStyleModal">
  <form action="#" id="supportTicketForm">
    <div class="modal fade" id="HelpPopup" tabindex="-1" aria-labelledby="HelpPopupLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="HelpPopupLabel">
              <div class="iconModal">
                <iconify-icon icon="streamline:customer-support-1"></iconify-icon>
              </div>
              Raise a Support Ticket
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-label">Subject</label>
                  <input type="text" class="form-control" placeholder="Enter the subject of your issue" required>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" rows="3" placeholder="Describe your issue in detail..." required></textarea>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-label">Priority</label>
                  <select class="form-select select2" required>
                    <option value="" disabled selected>Select priority</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                    <option value="urgent">Urgent</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-label">Category</label>
                  <select class="form-select select2" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="technical">Technical Issue</option>
                    <option value="account">Account Related</option>
                    <option value="billing">Billing/Invoice</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-12">
				<div class="form-group">
					<label class="form-label">Attachments (Optional)</label>

					<!-- Drop Zone -->
					<div id="dropZone" class="border border-dashed p-3 mb-2 text-center rounded bg-light" style="cursor: pointer;">
						<p class="mb-0 text-muted">Drag and drop images here or click to upload</p>
						<input type="file" id="fileInput" class="d-none" multiple accept="image/*">
					</div>

					<!-- Info -->
					<small class="text-muted d-block mb-2">You can upload screenshots or supporting documents (Max 5MB each).</small>

					<!-- Uploaded List -->
					<ul id="previewList" class="list-unstyled row g-2 mb-0"></ul>
					</div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btnClose" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btnSave">Submit Ticket</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div id="mybutton">
 <button class="feedback" data-bs-toggle="modal" data-bs-target="#HelpPopup"><iconify-icon icon="streamline:customer-support-1"></iconify-icon> Help</button>
</div>
<!-- jQuery -->
<script src="assets/js/jquery-3.7.1.min.js"></script>

<!-- Feather Icon JS -->
<script src="assets/js/feather.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/js/jquery.slimscroll.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Chart JS -->
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<!-- Sweetalert 2 -->
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

  <!-- Datatable JS -->
  <script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/contact-data.js"></script>

<!-- Datetimepicker JS -->
<!-- Data Table JS -->
<script src="assets/plugins/datatables.net/js/dataTables.min.js"></script>
<script src="assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>

<link rel="stylesheet" type="text/css" href="assets/customplugins/buttons.dataTables.min.css">
<script type="text/javascript" src="assets/customplugins/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="assets/customplugins/jszip.min.js"></script>
<script type="text/javascript" src="assets/customplugins/pdfmake.min.js"></script>
<script type="text/javascript" src="assets/customplugins/vfs_fonts.js"></script>
<script type="text/javascript" src="assets/customplugins/buttons.html5.min.js"></script>
<script type="text/javascript" src="assets/customplugins/buttons.colVis.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/theme-script.js"></script>	
    <script src="assets/js/script.js"></script>
<!-- Iconify CND -->
<script src="https://code.iconify.design/iconify-icon/2.2.0/iconify-icon.min.js"></script>

<script>
    // Data for the chart
    const chartData = {
        series: [30, 40, 25, 35], // Example values
        labels: ['Low Stock Items', 'All Item Groups', 'All Items', 'Active Items']
    };

    // Configuration for the chart
    const options = {
        chart: {
            type: 'donut',
            height: 220
        },
        series: chartData.series,
        labels: chartData.labels,
        tooltip: {
            enabled: true,
            custom: function({ series, seriesIndex, dataPointIndex, w }) {
                return '<div style="padding: 5px; background: #fff;color:#000; border: 1px solid #ddd; text-align: center;">' +
                    `<strong>${w.globals.labels[seriesIndex]}</strong>` +
                    `<br>Value: ${series[seriesIndex]}` +
                    '</div>';
            }
        },
        legend: {
            show: false // Hide the legend
        }
    };

    // Render the chart
    const chart = new ApexCharts(document.querySelector("#productStock"), options);
    chart.render();
</script>

<!-- JavaScript to Show Modal on Page Load -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
      // Delay in milliseconds (e.g., 3000ms = 3 seconds)
      const delay = 3000;
  
      setTimeout(() => {
        const myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
        myModal.show();
      }, delay);
    });
  </script>


<script>
// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {


    // Get all sidebar links
    const links = document.querySelectorAll("#sidebar-menu a");

    // Get the current page URL
    const currentUrl = window.location.pathname;

    // Loop through each link
    links.forEach(link => {
        // Get the href attribute of the link
        const href = link.getAttribute("href");

        // If the href matches the current URL
        if (href && currentUrl.includes(href)) {
            // Remove the active class from all links
            links.forEach(l => l.classList.remove("active"));

            // Add the active class to the matched link
            link.classList.add("active");

            // Also handle active class for parent submenu (if applicable)
            const parentLi = link.closest("li.submenu");
            if (parentLi) {
                parentLi.classList.add("active");
            }
        }
    });

    $(".submenu").each(function () {
        if ($(this).hasClass("active")) {
            // Add class 'subdrop' to the first anchor tag
            $(this).children("a").addClass("subdrop");
            
            // Set the ul within the submenu to display as block
            $(this).children("ul").css("display", "block");
        }
    });
});

</script>

<script>
  $(document).ready(function () {
    const dropZone = $('#dropZone');
    const fileInput = $('#fileInput');
    const previewList = $('#previewList');
    let fileList = [];

    // ✅ Fix: trigger file input on click anywhere in dropZone
    dropZone.on('click', function (e) {
      // Only trigger if user didn't click the paragraph inside
      if (!$(e.target).is('input[type="file"]')) {
        fileInput.trigger('click');
      }
    });

    // Handle file input change
    fileInput.on('change', function (e) {
      handleFiles(e.target.files);
      fileInput.val(''); // reset so same file can be uploaded again
    });

    // Drag-over style
    dropZone.on('dragover', function (e) {
      e.preventDefault();
      dropZone.addClass('border-primary');
    });

    dropZone.on('dragleave', function (e) {
      e.preventDefault();
      dropZone.removeClass('border-primary');
    });

    // Drag & Drop
    dropZone.on('drop', function (e) {
      e.preventDefault();
      dropZone.removeClass('border-primary');
      handleFiles(e.originalEvent.dataTransfer.files);
    });

    // Preview images
    function handleFiles(files) {
      Array.from(files).forEach(file => {
        if (!file.type.startsWith('image/') || file.size > 5 * 1024 * 1024) return;

        fileList.push(file);

        const reader = new FileReader();
        reader.onload = function (e) {
          const li = `
            <li class="position-relative">
              <div class="ImageWrapper border rounded p-2 h-100">
                <img src="${e.target.result}" class="img-fluid rounded mb-1" alt="${file.name}">
                <div class="ImageDetailWrapper">
                  <small class="text-truncate w-75" title="${file.name}">${file.name}</small>
                  <iconify-icon icon="iconamoon:close-duotone" class="text-danger cursor-pointer removeFile" data-name="${file.name}"></iconify-icon>
                </div>
              </div>
            </li>`;
          previewList.append(li);
        };
        reader.readAsDataURL(file);
      });
    }

    // Remove file
    previewList.on('click', '.removeFile', function () {
      const name = $(this).data('name');
      $(this).closest('li').remove();
      fileList = fileList.filter(file => file.name !== name);
    });
  });
</script>
<style>
/* .sidebar .sidebar-menu > ul > li.submenu-open ul > li.active a span{
    color: #e1e1e1;
}
.sidebar .sidebar-menu > ul > li.submenu-open ul > li a.active span{
    color: #FF9800;
}
.sidebar .sidebar-menu > ul > li.submenu-open ul > li.active a{
    background:transparent;
}
.sidebar .sidebar-menu > ul li.active svg{
    color: #e1e1e1;
}
.sidebar .sidebar-menu>ul li .submenu>a.subdrop {
    background: #e08b0f !important;
} */
.sidebar .sidebar-menu > ul > li.active a span, .sidebars .sidebar-menu > ul > li.active a span {
	color: #262626;
}
.sidebar .sidebar-menu > ul > li.active a, .sidebars .sidebar-menu > ul > li.active a {
	background: rgb(238, 240, 244);
	
}
.sidebar .sidebar-menu > ul li.active svg, .sidebars .sidebar-menu > ul li.active svg {
	color: #262626;
}
.sidebar .sidebar-menu > ul > li.submenu ul li a.active, .sidebars .sidebar-menu > ul > li.submenu ul li a.active {
	color: #F78409;
}
.sidebar .sidebar-menu > ul > li.submenu ul li a.active::after, .sidebars .sidebar-menu > ul > li.submenu ul li a.active::after {
	background: #F78409;
	border: 2px solid #FCD0A2;
}
.sidebar .sidebar-menu > ul > li.active ul li a{
 
	border-radius: 0;
}
</style>

</body>

</html>