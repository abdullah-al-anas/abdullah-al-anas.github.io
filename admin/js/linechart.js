google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2016', 1000, 400, 200],
          ['2017', 1170, 460, 250],
          ['2018', 660, 1120, 300],
          ['2019', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Resturant Performance',
            subtitle: 'Sales, Expenses, and Profit: 2016-2019',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }