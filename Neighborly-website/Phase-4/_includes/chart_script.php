<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Date', 'Total Visitors', 'Returning Visitors', 'Unique Visitors'],
            ['May 8,2021',  500,      0,      500],
            ['May 9,2021',  600,      400,      200],
            ['May 10,2021',  1000,       500,      500],
            ['May 11,2021',  800,      700,      100],
            ['May 12,2021',  900,      200,      700],
            ['May 13,2021',  1200,      400,      800],
            ['May 14,2021',  2000,      1000,      1000]
        ]);

        var options = {
            title: 'VISITORS INDEX',
            hAxis: {title: 'DATE',  titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
