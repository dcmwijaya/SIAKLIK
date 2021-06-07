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
          y: 0
        },
        {
          name: "FT",
          y: 0
        },
        {
          name: "FAD",
          y: 0
        },
        {
          name: "FH",
          y: 3
        },
        {
          name: "Rektorat",
          y: 0
        },
        {
          name: "Pasca",
          y: 0
        },
        {
          name: "Koperasi",
          y: 0
        },
        {
          name: "FISIP",
          y: 0
        },
        {
          name: "FP",
          y: 0
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