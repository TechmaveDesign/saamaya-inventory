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