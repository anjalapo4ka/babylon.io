//;(function ($) {

	$(document).ready(function() {

		$('.sbc-form form .es_textbox input').attr("placeholder", "Enter your e-mail");

		var timer = document.getElementById('timer');
		var customYear = $('#timer').data('year');
		var customMoun = $('#timer').data('mouth');
		var customDays = $('#timer').data('day');
		var customHour = $('#timer').data('hour');
		var customMinu = $('#timer').data('minut');
		//console.table( customYear, customMoun, customDays, customHour, customMinu );
		//console.log( customMoun );
		//console.log( customYear );
		//var deadline = '2018-1-30';
		//var deadline = '30 Jan 2018 23:12:00 GMT';
		var deadline = customDays + " " + customMoun + " " + customYear + " " + customHour + ":" + customMinu + ":" + "00" + " GMT+0200";
		//var deadline = customYear + "-" + customMoun + "-" + customDays;

		function getTimeRemaining(endtime){
			//var str = endtime.replace();
			var t = Date.parse(endtime) - Date.parse(new Date());
			// console.log("getTimeRemaining() start " + Date.parse(endtime));
			//console.log( t );
			if (t<=0) {
				var seconds = 0;
				var minutes = 0;
				var hours = 0;
				var days = 0;
			} else{
				var seconds = Math.floor( parseFloat((t/1000) % 60) );
				var minutes = Math.floor( parseFloat((t/1000/60) % 60) );
				var hours = Math.floor( parseFloat((t/(1000*60*60)) % 24) );
				var days = Math.floor( parseFloat(t/(1000*60*60*24)) );
			}
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
				if(t.total<=0){
					clearInterval(timeinterval);
				}
			}

			updateClock();
			var timeinterval = setInterval(updateClock,1000);
		}

		if(timer){
			initializeClock('timer', deadline);
			// console.log('deadline'+ Date.parse(deadline));
		}



		/**
		* OTHER
		*
		*/
        
		var graphLane = line_graph_array;
		var graphDate = line_graph_date;

		var testDate = ['11-Sep-17', '22-Sep-17', '29-Sep-17', 
				'06-Oct-17', '13-Oct-17', '20-Oct-17', '27-Oct-17', 
				'03-Nov-17', '10-Nov-17', '17-Nov-17', '24-Nov-17', 
				'01-Dec-17', '08-Dec-17', '15-Dec-17'];

		var testLine = [{
		        name: 'CRIX',
		        data: [10000, 9800, 9500, 11000, 12500, 10500, 25000, 26050, 23000, 25000, 24000, 30000, 50000, 62000],
		        color: '#3caa32'
		    }, 
		    {
		        name: 'Babylon AI',
		        data: [10000, 9200, 8900, 12500, 11000, 12200, 22500, 25000, 24200, 26500, 25000, 32000, 55000, 67500],
				color: '#1772c8'
			}];



        // console.log( line_graph_array );
        // console.log( line_graph_date );

        
		Highcharts.chart('perfomance-graph', {
			chart: {
		        fontFamily: 'TrebuchetMS',
		        type: 'line',
		        spacingTop: 20,
		        animation: {
		            duration: 1000
		        }
		    },
		    title: {
		    	style: {
		            color: '#7c7c7c',
		            fontFamily: 'TrebuchetMS',
		            fontSize: 30
		        },
		        margin: 35,
		        text: ''
		    },
		    subtitle: {
		        text: ''
		    },
		    legend: {
		        margin: 45,
		        itemStyle: {
		            color: '#d8d8d8',
		            fontWeight: 'light',
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
	        	categories: graphDate,
	        	lineColor: '#e3e3e3'
		    },
		    yAxis: {
		        title: {
		            text: ''
		        },
		        labels: {
		            style: {
		                color: '#797979',
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
		    series: graphLane
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

		var topGraphData = top_graph;
		var botGraphData = bot_graph;
		testTopData = [ 
		            { name: 'Underlying Assets', y: 98},
		            { name: 'Operational Expenses', y: 2, color: "#b8b1a4"}
		        ];
		testBotData = [
					{ name: 'ICO Participants', y: 85},
					{ name: 'Team', y: 10, color: "#b8b1a4"},
					{ name: 'Marketing', y: 2, color: "#b8b1a4"},
					{ name: 'Security', y: 1.5, color: "#b8b1a4"},
					{ name: 'Legal', y: .5, color: "#b8b1a4"},
					{ name: 'Advisors', y: .5, color: "#b8b1a4"},
					{ name: 'Bounty', y: .5, color: "#b8b1a4"}
				]
		// console.log( topGraphData );
		// console.log( testTopData );


		Highcharts.chart('ico-structure-top-graph', {
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
		        data: topGraphData
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
		        data: botGraphData
		    }]
		});

		/* END OTHER */

	});// END document ready

	$(window).load(function () {

	});// END window load

	$(window).resize(function () {

	});// END window resize 

	$(document).mouseleave(function(e){

		if ( e.clientY < 0 ) {
			console.log('exit');			
		}

	});

//})(jQuery);