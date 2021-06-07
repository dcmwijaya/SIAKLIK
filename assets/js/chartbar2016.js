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
          y: 129
        },
        {
          name: "Veteran",
          y: 1
        },
        {
          name: "Anak",
          y: 1
        },
        {
          name: "FT",
          y: 98
        },
        {
          name: "FAD",
          y: 18
        },
        {
          name: "FH",
          y: 66
        },
        {
          name: "Rektorat",
          y: 170
        },
        {
          name: "Pasca",
          y: 1
        },
        {
          name: "Anak",
          y: 1
        },
        {
          name: "Koperasi",
          y: 5
        },
        {
          name: "FISIP",
          y: 82
        },
        {
          name: "FP",
          y: 88
        },
        {
          name: "Swasta",
          y: 1
        },
        {
          name: "FIK",
          y: 1
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