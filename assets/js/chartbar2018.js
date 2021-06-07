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
          y: 80
        },
        {
          name: "Anak",
          y: 1
        },
        {
          name: "FT",
          y: 81
        },
        {
          name: "FAD",
          y: 21
        },
        {
          name: "FH",
          y: 68
        },
        {
          name: "Rektorat",
          y: 240
        },
        {
          name: "Pasca",
          y: 4
        },
        {
          name: "Koperasi",
          y: 2
        },
        {
          name: "FISIP",
          y: 73
        },
        {
          name: "FP",
          y: 77
        },
        {
          name: "FIK",
          y: 7
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