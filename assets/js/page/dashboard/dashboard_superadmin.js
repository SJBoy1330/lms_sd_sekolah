setTimeout(function() {
    $('.card-stretch').each(function(i) {
        setTimeout(function() {
             $('.card-stretch').eq(i).addClass('fadein-bottom');
        }, 150 * i);
    });
    $('.three-card').each(function(i) {
        setTimeout(function() {
            $('.three-card').eq(i).addClass('fadein-bottom');
        }, 150 * i);
    });
}, 150 );


$(document).ready(function() {
  var slider = tns({
    container: '.my-slider',
    controlsContainer: '#controls',
    prevButton: '.previous',
    nextButton: '.next',
    "items":4,
    "autoplay":false,
    "autoplayTimeout": 18000,
    "loop": false,
    "swipeAngle": false,
    "speed": 1000,
    "controls": true,
    "nav":true,
    "navPosition":"bottom",
    responsive: {
      350: {
        items: 1,
      },
      600: {
        
        items: 3
      },
      900: {
        items: 4
      }
    }
  });


 });

 google.charts.load('current', {
  callback: function () {
    drawChart();
    drawChart2();
    drawVisualization();
  },
  packages: ['corechart']
});

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Language', 'Speakers (in millions)'],
    ['Hadir',  3.85],
    ['Ijin',  1.66],
    ['Sakit', 1.316],
    ['Tidak Hadir', 1.0791]
  ]);

var options = {
  legend: 'none',
  pieSliceText: 'label',
  pieStartAngle: 100,
  colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f'],
  chartArea: {
    height: "74%",
    width: "74%"
  }

};

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}

function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Language', 'Speakers (in millions)'],
    ['Hadir',  5.85],
    ['Tidak Hadir',  1.66]
  ]);

var options = {
  legend: 'none',
  pieSliceText: 'label',
  pieStartAngle: 100,
  colors: ['#e0440e', '#e6693e'],
  chartArea: {
    height: "74%",
    width: "74%"
  }

};

  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
    ['Month', 'Tagihan', 'Pembayaran'],
    ['Januari 2022',  165, 938],
    ['Februari 2022',  135, 1120],
    ['Maret 2022',  157, 1167],
    ['April 2022',  139, 1110],
    ['Mei 2022',  136, 691]
  ]);

  var options = {
    seriesType: 'bars',
    colors: ['#e0440e', '#ec8f6e'],
    width : 1200,
    height: 400
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}


