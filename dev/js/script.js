$(document).ready(function() {
    var timer = document.getElementById('timer');
    var deadline = '30 Jan 2018 23:12:00 GMT';
function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());

  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
   'total': t,
   'days': days,
   'hours': hours,
   'minutes': minutes,
   'seconds': seconds
  };
}

function initializeClock(id, endtime){
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

  function updateClock(){
      var t = getTimeRemaining(endtime);
      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML =  t.hours;
      minutesSpan.innerHTML =  t.minutes;
      secondsSpan.innerHTML =  t.seconds;
      if(t.total<=0){clearInterval(timeinterval);}
  }
    updateClock();
    var timeinterval = setInterval(updateClock,1000);
}

if(timer){
   initializeClock('timer', deadline);

 }


 $('.js_mentioned-slider').slick({
            nextArrow: '.mentioned-slider-next',
            prevArrow: '.mentioned-slider-prev',
           dots: false,
          infinite: true,
          centerPadding: '0',
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1100,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true

              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }

          ]
            });


    var teamSlicked = false;

    if ($(window).width() < 581 && !teamSlicked) {

         $('.js_team-slider').slick({
            nextArrow: '.team-slider-next',
            prevArrow: '.team-slider-prev',
            dots: false,
            infinite: true,
            centerPadding: '0',
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1

            });
            teamSlicked = !teamSlicked;
        };

 window.addEventListener('resize', function() {
        if ($(window).width() < 581 && !teamSlicked) {

         $('.js_team-slider').slick({
            nextArrow: '.team-slider-next',
            prevArrow: '.team-slider-prev',
            dots: false,
            infinite: true,
            centerPadding: '0',
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1

            });
            teamSlicked = !teamSlicked;
        }

        if ($(window).width() > 580 && teamSlicked) {
           $('.js_team-slider').slick('unslick');
            teamSlicked = !teamSlicked;
        }



      });


Highcharts.chart('perfomance-graph', {
    chart: {
        fontFamily: 'TrebuchetMS',
        type: 'line',
        spacingTop: 20,
        animation: {
            duration: 1000
        }
    },
    title: {style: {
            display: 'none'
        }


    },
    subtitle: {
        text: ''
    },
    legend: {
        margin: 45,
        itemStyle: {
            color: '#616161',
            fontWeight: 'light',
            fontFamily: 'TrebuchetMS',
            fontSize: 20
        },
        symbolWidth: 60
    },
    credits: {
    	enabled: false
  	},
    exporting: {
        enabled: false
    },
    xAxis: {
        categories: ['11-Sep-17', '22-Sep-17', '29-Sep-17', '06-Oct-17', '13-Oct-17', '20-Oct-17', '27-Oct-17', '03-Nov-17', '10-Nov-17', '17-Nov-17', '24-Nov-17', '01-Dec-17', '08-Dec-17', '15-Dec-17'],
        lineColor: '#e3e3e3'
    },
    yAxis: {
        title: {
            text: ''
        },

        labels: {
            style: {
                color: '#616161',
                fontSize: 16
            }
        }
    },

    plotOptions: {
        line: {
            dataLabels: {
                enabled: false
            },
            enableMouseTracking: true
        },
        series: {
                        marker: {
                            enabled: false
                        },
                        lineWidth: 5
                    }
    },
    series: [{
        name: 'CRIX',
        data: [10000, 9800, 9500, 11000, 12500, 10500, 25000, 26050, 23000, 25000, 24000, 30000, 50000, 62000],
        color: '#3caa32'
    }, {
        name: 'Babylon AI',
        data: [10000, 9200, 8900, 12500, 11000, 12200, 22500, 25000, 24200, 26500, 25000, 32000, 55000, 67500],
         color: '#1772c8'
    }]
});



    Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

    var pieSize;
    if ($(window).width() < 425 ) {
        pieSize = 170;
    } else pieSize = 300;
     window.addEventListener('resize', function() {
         if ($(window).width() < 425 ) {
            pieSize = 170;
        } else pieSize = 300;
     });
    var doSetData = true;
    var fitPie = function(){
        var chart = this;
        if (doSetData) {
                doSetData = false;
                setTimeout(function () {
                    if ($(window).width() < 425) {
                        chart.plotOptions.pie.size.setData([
                            pieSize
                        ]);
                    }}, 0);
            } else {
                doSetData = true;
            }
    }

var pieChart1 = new Highcharts.chart('ico-structure-top-graph', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'


    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            minSize: 170,
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver',
                connectorPadding: 2,
                distance: 20
            }
        }
    },
     credits: {
    	enabled: false
  	},
    exporting: {
        enabled: false
    },
    series: [{
        name: '',
        data: [
            { name: 'Underlying Assets', y: 98},
            {
                name: 'Operational Expenses',
                y: 2,
                color: "#b8b1a4"

            }
        ]
    }]
});


    Highcharts.chart('ico-structure-bottom-graph', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            minSize: 170,
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver',
                connectorPadding: 2,
                distance: 20
            }
        }
    },
     credits: {
    	enabled: false
  	},
    exporting: {
        enabled: false
    },
    series: [{
        name: '',
        data: [
            { name: 'ICO Participants', y: 85},
            {
                name: 'Team',
                y: 10,
                color: "#b8b1a4"

            },
            {
                name: 'Marketing',
                y: 2,
                color: "#b8b1a4"

            },
            {
                name: 'Security',
                y: 1.5,
                color: "#b8b1a4"

            },
            {
                name: 'Legal',
                y: .5,
                color: "#b8b1a4"

            },
            {
                name: 'Advisors',
                y: .5,
                color: "#b8b1a4"

            },
            {
                name: 'Bounty',
                y: .5,
                color: "#b8b1a4"

            }
        ]
    }]
});


    $('.mobile-menu__icon').click(function(){
        $('.side-menu-wrapper').animate({width: '100%'}, 1000);
        $('body').toggleClass('noscroll');
    });
    $('.icon-close').click(function(){
        $('.side-menu-wrapper').animate({width: '0'}, 1000);
        $('body').toggleClass('noscroll');
    });


    $('.faq-item-title').click(function(){
        if ($(this).hasClass('opened')){
            $(this).removeClass('opened');
            $(this).parent().find('.faq-text').slideUp();
        }else{
            $('.faq-item-title').removeClass('opened');
            $('.faq-text').slideUp();
            $(this).addClass('opened');
            $(this).parent().find('.faq-text').slideDown();
        }

    });


    $('#investment-slider').jRange({
        from: 0,
        to: 50.0,
        step: 1,
        scale: [],
        format: '%s',
        width: 500,
        showLabels: true,
        showScale: false
    });
     $('#purchase-slider').jRange({
        from: '01 Jan 2018',
        to: '18 Mar 2018',
        step: 1,
        scale: [],
        format: 'date',
        width: 500,
        showLabels: true,
        showScale: false
    });
    $('#investment-slider-mobile').jRange({
        from: 0,
        to: 50.0,
        step: 1,
        scale: [],
        format: '%s',
        width: 270,
        showLabels: true,
        showScale: false
    });
     $('#purchase-slider-mobile').jRange({
        from: '01 Jan 2018',
        to: '18 Mar 2018',
        step: 1,
        scale: [],
        format: 'date',
        width: 270,
        showLabels: true,
        showScale: false
    });

});
