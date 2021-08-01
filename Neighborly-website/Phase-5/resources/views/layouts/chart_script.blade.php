<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Date', 'Total Users', 'Total Visitors', 'Total immigrants'],
            <?php
            if ($selectreports->num_rows > 0) {
                // output data of each row
                while ($row = $selectreports->fetch_assoc()) {
                    echo "['" . date('jS F Y', strtotime($row["count_date"])) . "'," . $row["total_users"] . "," . $row["total_visitors"] . "," . $row["total_immigrants"] . "],";
                }
            }
            ?>
        ]);

        var options = {
            title: 'USERS INDEX',
            hAxis: {title: 'DATE', titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>