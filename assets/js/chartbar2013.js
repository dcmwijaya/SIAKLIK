// Create the chart
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: ''
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y}'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:18px;">{series.name}</span><br>',
    pointFormat: '<span style="color:black;">{point.name}</span>: Total (<b>{point.y}</b>)<br/>'
  },

  series: [
    {
      name: "Pasien",
      colorByPoint: true,
      data: [
        {
          name: "FEB",
          y: 402
        },
        {
          name: "FT",
          y: 304
        },
        {
          name: "FAD",
          y: 152
        },
        {
          name: "FH",
          y: 72
        },
        {
          name: "Rektorat",
          y: 761
        },
        {
          name: "Pasca",
          y: 22
        },
        {
          name: "Koperasi",
          y: 30
        },
        {
          name: "FISIP",
          y: 252
        },
        {
          name: "FP",
          y: 317
        },
        {
          name: "FIK",
          y: 3
        }
      ]
    }
  ],
});

document.getElementById('small').addEventListener('click', function () {
  chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
  chart.setSize(600);
});

document.getElementById('auto').addEventListener('click', function () {
  chart.setSize(null);
});