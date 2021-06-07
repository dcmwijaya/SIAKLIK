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
          y: 112
        },
        {
          name: "FT",
          y: 85
        },
        {
          name: "FAD",
          y: 20
        },
        {
          name: "FH",
          y: 10
        },
        {
          name: "Rektorat",
          y: 96
        },
        {
          name: "Pasca",
          y: 4
        },
        {
          name: "Koperasi",
          y: 3
        },
        {
          name: "FISIP",
          y: 74
        },
        {
          name: "FP",
          y: 76
        },
        {
          name: "FIK",
          y: 0
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