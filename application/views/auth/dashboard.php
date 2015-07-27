<?php $this->load->view('admintheme/sidebar'); ?>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Statistics</div>
<!--        <div class="pull-right"><span class="badge badge-warning">View More</span></div>-->
    </div>
    <div class="block-content collapse in">
        <div class="span3">
            <div class="chart" data-percent="73">73%</div>
            <div class="chart-bottom-heading"><span class="label label-info">Visitors</span>

            </div>
        </div>
        <div class="span3">
            <div class="chart" data-percent="80"></div>
            <div class="chart-bottom-heading"><span class="label label-info">Total Students</span>

            </div>
        </div>
        <div class="span3">
            <div class="chart" data-percent="83">83%</div>
            <div class="chart-bottom-heading"><span class="label label-info">Users</span>

            </div>
        </div>
        <div class="span3">
            <div class="chart" data-percent="13">13%</div>
            <div class="chart-bottom-heading"><span class="label label-info">Orders</span>

            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Student Attendance</div>
            <div class="pull-right"><span class="badge badge-warning">View More</span></div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <div id="hero-area" style="height: 250px;"></div>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
<?php $this->load->view('admintheme/footer'); ?>
<script type="text/javascript">
    // Morris Area Chart
Morris.Area({
    element: 'hero-area',
    data: [
        {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
        {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
        {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
        {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
        {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
        {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
        {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
        {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
        {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
        {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
    ],
    xkey: 'period',
    ykeys: ['iphone', 'ipad', 'itouch'],
    labels: ['iPhone', 'iPad', 'iPod Touch'],
    lineWidth: 2,
    hideHover: 'auto',
    lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
});
</script>