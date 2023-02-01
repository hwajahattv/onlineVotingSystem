(function ($) {
    /* "use strict" */


    var dzChartlist = function () {

        var screenWidth = $(window).width();
        var chartTimeline = function () {
            var inputFields = $('.countData');
            var candidateNames = $('.candidateNames');
            var winnerName = $('#leadingCandidate')[0];
            var barHeights = [];
            var xaxisTicks = [];
            var iteration = inputFields.length;
            if (iteration > 3) {
                iteration = 3;
            }
            for (var fieldCount = 0; fieldCount < iteration; fieldCount++) {
                var temp = inputFields[fieldCount].value
                // console.log(temp);
                barHeights.push(parseInt(temp));
                xaxisTicks.push(candidateNames[fieldCount].innerHTML);
            }
            const max = Math.max.apply(Math, barHeights);
            const index = barHeights.indexOf(max);
            winnerName.innerHTML = xaxisTicks[index];
            console.log(barHeights);

            var optionsTimeline = {
                chart: {
                    type: "bar",
                    height: 400,
                    stacked: true,
                    toolbar: {
                        show: false
                    },

                    sparkline: {
                        //enabled: true
                    },
                    zoom: {
                        enabled: true,
                    },
                    offsetX: 0,
                },
                series: [
                    {
                        name: "Votes",
                        data: barHeights
                        // data: [10, 450, 1600, 600, 400, 450, 410, 470, 480, 800, 600, 900, 400]
                    }
                ],

                plotOptions: {
                    bar: {
                        columnWidth: "20%",
                        endingShape: "flat",
                        startingShape: "flat",

                        colors: {
                            backgroundBarColors: ['#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0'],
                            backgroundBarOpacity: 1,
                            backgroundBarRadius: 5,
                        },

                    },
                    distributed: true
                },
                colors: ['#43DC80'],
                grid: {
                    show: true,
                },
                legend: {
                    show: true
                },
                fill: {
                    opacity: 1
                },
                dataLabels: {
                    enabled: true,
                    colors: ['#000'],
                    dropShadow: {
                        enabled: true,
                        top: 1,
                        left: 1,
                        blur: 1,
                        bottom: 0,
                        opacity: 1
                    }
                },
                xaxis: {
                    categories: xaxisTicks,
                    labels: {
                        style: {
                            colors: '#787878',
                            fontSize: '14px',
                            fontFamily: 'poppins',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        },
                    },
                    crosshairs: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
                yaxis: {
                    show: false,
                    labels: {
                        style: {
                            colors: '#3e4954',
                            fontSize: '14px',
                            fontFamily: 'Poppins',
                            fontWeight: 100,

                        },
                        formatter: function (y) {
                            return y.toFixed(0) + "k";
                        }
                    },
                },
                tooltip: {
                    x: {
                        show: true
                    },
                    y: {
                        formatter: function (val) {
                            return val
                        }
                    }
                },
                responsive: [{
                    breakpoint: 575,
                    options: {
                        chart: {
                            height: 250,
                        }
                    }
                }]
            };
            var chartCount = 0;
            var chartArea = document.querySelector("#resultsChart");
            if (chartCount == 0) {
                var chartTimelineRender = new ApexCharts(chartArea, optionsTimeline);
                chartTimelineRender.render();
                chartCount++;
            }
        }

        /* Function ============ */
        return {
            init: function () {
            },


            load: function () {
                chartTimeline();
                // widgetChart1();
                // radialChart();
                // widgetChart2();
                // donutChart1();
            },

            resize: function () {
            }
        }

    }();

    jQuery(document).ready(function () {
    });

    jQuery(window).on('load', function () {
        setTimeout(function () {
            dzChartlist.load();
        }, 2000);

    });

    jQuery(window).on('resize', function () {


    });

})(jQuery);
