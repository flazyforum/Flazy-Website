<footer class="page-footer flazy-color">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Flazy</h5>
          <p class="grey-text text-lighten-4">Part of the MGKNeT Family.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Our Partners</h5>
          <ul>
            <li><a class="white-text" href="https://mrgkanev.eu">MrGKanev</a></li>
            <li><a class="white-text" href="https://techwhiskers.com">TechWhiskers</a></li>
			<li><a class="white-text" href="https://ancientcraft.eu">AncientCraft</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contact Us</h5>
			<p class="grey-text text-lighten-4">
				<a href="https://www.facebook.com/flazyforum/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
				<a href="https://twitter.com/flazyforum/"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				<a href="https://github.com/flazyforum/"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
			</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made with <a class="text-lighten-3" href="http://materializecss.com">Materialize</a> and <i class="fa fa-heart" aria-hidden="true"></i>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script>  google.charts.load('current', {
        'packages': ['line', 'corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var chartDiv = document.getElementById('chart_div');

        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Month');
        data.addColumn('number', "Flazy 0.7.1");
        data.addColumn('number', "Flazy 0.7.2 Alpha");

        data.addRows([
          [new Date(2017, 0), 1, 0],
          [new Date(2017, 1), 5, 0],
          [new Date(2017, 2), 9, 3],
          [new Date(2017, 3), 23.9, 3],
          [new Date(2017, 4), 2.3, 1],
          [new Date(2017, 5), 16, 5],
          [new Date(2017, 6), 10.6, 6],
          [new Date(2017, 7), 19.3, 6],
          [new Date(2017, 8), 35.4, 9],
          [new Date(2017, 9), 4, 4],
          [new Date(2017, 10), 15, 2],
          [new Date(2017, 11), 7, 5],
          [new Date(2017, 12), 7, 5]
        ]);

        var materialOptions = {
          chart: {
            title: 'Average Downloads'
          },
          width: 1000,
          height: 500,
          series: {
            // Gives each series an axis name that matches the Y-axis below.
            0: {
              axis: 'Downloads'
            }
          },
          axes: {
            // Adds labels to each axis; they don't have to match the axis names.
            y: {
              Temps: {
                label: 'Downloads'
              }
            }
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Line(chartDiv);
          materialChart.draw(data, materialOptions);
        }


        drawMaterialChart();

      }

</script>
</body>
</html>