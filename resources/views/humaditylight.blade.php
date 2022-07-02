<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Charting library -->
      <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
      <!-- Chartisan -->
      <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">

        <!-- here your chart-->
        <div id="chart" style="height: 300px;"></div>

    </div>

    <script>
        const chart = new Chartisan({
          el: '#chart',
          data: {!! $chart !!},
          hooks: new ChartisanHooks()
          .title({
            textAlign: 'center',
            left: '50%',
            text: 'Humadity and Light Vs Time',
          })
          .datasets('line')
          .axis(true)
          .tooltip()
        });
    </script>
    
</body>
</html>