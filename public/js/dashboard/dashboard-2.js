(function ($) {
    /* "use strict" */
    var dzChartlist = function () {

        const screenWidth = $(window).width();
        var chartTimeline = function () {

            var optionsTimeline = {
                chart: {
                    type: "bar",
                    height: 200,
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
                        name: "New Clients",
                        data: [300, 450, 600, 600, 400, 450, 410, 470, 480, 800, 600, 900, 400]
                    }
                ],

                plotOptions: {
                    bar: {
                        columnWidth: "30%",
                        endingShape: "rounded",
                        startingShape: "rounded",

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
                    show: false,
                },
                legend: {
                    show: false
                },
                fill: {
                    opacity: 1
                },
                dataLabels: {
                    enabled: false,
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
                    categories: ['06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18'],
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
            // var chartTimelineRender = new ApexCharts(document.querySelector("#chartTimeline"), optionsTimeline);
            // chartTimelineRender.render();
        }

        var widgetChart1 = function () {
            var options = {
                series: [{
                    name: "Desktops",
                    data: [30, 40, 30, 50, 40]
                }],
                chart: {
                    height: 270,
                    type: 'line',
                    zoom: {
                        enabled: true
                    },
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                colors: ['#43DC80'],
                title: {
                    text: undefined,
                    align: 'left'
                },
                grid: {
                    strokeDashArray: 5,
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0
                    },
                },
                yaxis: {
                    show: false,
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: '#828690',
                            fontSize: '14px',
                            fontFamily: 'Poppins',
                            fontWeight: 100,

                        }
                    }
                }
            };

            // var chart = new ApexCharts(document.querySelector("#widgetChart1"), options);
            // chart.render();
        }
        var piecharts = function () {
            $('#coverage').change(function () {
                var stats_type = $('#stats')[0].value;
                var urlPart;
                var stats_name;
                // select ajax url on the base of stat type
                switch (stats_type) {
                    case '1':
                        // code block
                        urlPart = '/public/maritalStatusCount/';
                        stats_name = 'Martial Status Distribution Data';
                        break;
                    case '2':
                        // code block
                        urlPart = '/public/occupationCount/';
                        stats_name = 'Occupation Distribution Data';
                        break;
                    case '3':
                        // code block
                        urlPart = '/public/disabilityCount/';
                        stats_name = 'Disabled Person Count';
                        break;
                    case '4':
                        // code block
                        urlPart = '/public/religionCount/';
                        stats_name = 'Religion Distribution Data';
                        break;
                    default:
                        // code block
                        alert('Select Stats type first');
                }

                var series1 = [];
                var names = [];
                // createRadialChart(series1, names);

                const myNode = document.getElementById("radialChartStats");
                myNode.innerHTML = '';
                var queryValue = this.value;

                $('#regionSelectedForMaritalSatus').text(queryValue);

                queryValue = queryValue.replaceAll(' ', '-');
                $.ajax({
                    type: 'GET',
                    url: urlPart + queryValue,

                    success: function (htmlresponse) {
                        if (htmlresponse.length == 0) {
                            $('#no_data').text("No data found in this region");
                            const myNode = document.getElementById("radialChartStats");
                            myNode.innerHTML = '';
                        } else {
                            $('#no_data').text("");

                            for (var key in htmlresponse) {
                                series1.push(htmlresponse[key]);
                                if (key === "") {
                                    key = 'Not defined';
                                }
                                names.push(key)
                            }
                            createRadialChart(series1, names, stats_name);
                        }
                    },
                    error: function (e) {
                        alert(e);
                    }
                });

            });
            // $('#maritalStatus').change(function () {
            //     var series1 = [];
            //     var names = [];
            //     createRadialChart(series1, names)
            //     var queryValue = this.value;
            //     $('#regionSelectedForMaritalSatus').text(queryValue);
            //     queryValue = queryValue.replaceAll(' ', '-');
            //     $.ajax({
            //         type: 'GET',
            //         url: '/maritalStatusCount/' + queryValue,
            //         // data: jQuery.param({ type: queryValue}),
            //         // data: { hps_level: '' + level + '' },
            //         success: function (htmlresponse) {
            //             // $('#opt_lesson_list').append(htmlresponse);
            //             for (var key in htmlresponse) {
            //                 series1.push(htmlresponse[key]);
            //                 if (key === "") {
            //                     key = 'Not defined';
            //                 }
            //                 names.push(key)
            //                 // series1 =htmlresponse;
            //             }
            //             createRadialChart(series1, names);
            //         },
            //         error: function (e) {
            //             alert(e);
            //         }
            //     });

            // });
            // $('#occupation').change(function () {
            //     var series1 = [];
            //     var names = [];
            //     createRadialChart1(series1, names)
            //     var queryValue = this.value;
            //     $('#regionSelectedForOccupation').text(queryValue);
            //     queryValue = queryValue.replaceAll(' ', '-');
            //     $.ajax({
            //         type: 'GET',
            //         url: '/occupationCount/' + queryValue,
            //         // data: jQuery.param({ type: queryValue}),
            //         // data: { hps_level: '' + level + '' },
            //         success: function (htmlresponse) {
            //             // $('#opt_lesson_list').append(htmlresponse);
            //             for (var key in htmlresponse) {
            //                 series1.push(htmlresponse[key]);
            //                 if (key === "") {
            //                     key = 'Not defined';
            //                 }
            //                 names.push(key)
            //                 // series1 =htmlresponse;
            //             }
            //             createRadialChart1(series1, names);
            //         },
            //         error: function (e) {
            //             alert(e);
            //         }
            //     });


            // });
            // $('#disability').change(function () {
            //     var series1 = [];
            //     var names = [];
            //     createRadialChart2(series1, names);
            //     var queryValue = this.value;
            //     $('#regionSelectedForDisability').text(queryValue);
            //     queryValue = queryValue.replaceAll(' ', '-');
            //     $.ajax({
            //         type: 'GET',
            //         url: '/disabilityCount/' + queryValue,
            //         // data: jQuery.param({ type: queryValue}),
            //         // data: { hps_level: '' + level + '' },
            //         success: function (htmlresponse) {
            //             // $('#opt_lesson_list').append(htmlresponse);
            //             for (var key in htmlresponse) {
            //                 series1.push(htmlresponse[key]);
            //                 if (key === "") {
            //                     key = 'Not disabled';
            //                 }
            //                 names.push(key)
            //                 // series1 =htmlresponse;
            //             }
            //             createRadialChart2(series1, names);
            //         },
            //         error: function (e) {
            //             alert(e);
            //         }
            //     });


            // });
            // $('#Religion').change(function () {
            //     var series1 = [];
            //     var names = [];
            //     createRadialChart3(series1, names);
            //     var queryValue = this.value;
            //     $('#regionSelectedForDisability').text(queryValue);
            //     queryValue = queryValue.replaceAll(' ', '-');
            //     $.ajax({
            //         type: 'GET',
            //         url: '/religionCount/' + queryValue,
            //         // data: jQuery.param({ type: queryValue}),
            //         // data: { hps_level: '' + level + '' },
            //         success: function (htmlresponse) {
            //             // $('#opt_lesson_list').append(htmlresponse);
            //             for (var key in htmlresponse) {
            //                 series1.push(htmlresponse[key]);
            //                 if (key === "") {
            //                     key = 'Not defined';
            //                 }
            //                 names.push(key)
            //                 // series1 =htmlresponse;
            //             }
            //             createRadialChart3(series1, names);
            //         },
            //         error: function (e) {
            //             alert(e);
            //         }
            //     });


            // });
        }
        function createRadialChart(data, names, chart_title) {

            var options = {
                series: data,
                noData: {
                    text: 'Loading...'
                },
                title: {
                    text: chart_title,
                },
                chart: {
                    height: 230,
                    type: 'pie',
                    toolbar: {
                        show: true
                    }
                },
                plotOptions: {
                    radialBar: {
                        /* hollow: {
                         margin: 0,
                         size: '70%',
                         background: '#fff',
                         image: undefined,
                         imageOffsetX: 0,
                         imageOffsetY: 0,
                         position: 'front',
                       }, */
                        hollow: {
                            margin: 20,
                            size: '65%',
                            background: '#fff',
                            image: undefined,
                            imageOffsetX: 0,
                            imageOffsetY: 0,
                            position: 'front',
                            dropShadow: {
                                enabled: true,
                                top: 3,
                                left: 0,
                                blur: 10,
                                opacity: 0.1
                            }
                        },
                        track: {
                            background: '#F8F8F8',
                            strokeWidth: '100%',
                            margin: 0, // margin is in pixels
                        },

                        dataLabels: {
                            show: true,
                            value: {
                                offsetY: -7,
                                color: '#111',
                                fontSize: '20px',
                                show: true,
                            }
                        }
                    }
                },
                fill: {
                    colors: ['#0081C9', '#5BC0F8', '#86E5FF', '#FFC93C', '#FF7B54', '#FFB26B'],
                },
                stroke: {},
                labels: names,
            };

            var chart = new ApexCharts(document.querySelector("#radialChartStats"), options);
            // chart.destroy();
            chart.render();
        }


        var widgetChart2 = function () {
            var options = {
                series: [
                    {
                        name: 'Net Profit',
                        data: [500, 500, 400, 400, 600, 600, 300, 300, 500, 500, 700, 700],
                        //radius: 12,
                    },
                ],
                chart: {
                    type: 'area',
                    height: 80,
                    toolbar: {
                        show: false,
                    },
                    zoom: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    }

                },

                colors: ['#43DC80'],
                dataLabels: {
                    enabled: false,
                },
                markers: {
                    shape: "circle",
                },

                legend: {
                    show: false,
                },
                stroke: {
                    show: true,
                    width: 4,
                    curve: 'smooth',
                    colors: ['#43DC80'],
                },

                grid: {
                    show: false,
                    borderColor: '#eee',
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0

                    }
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                xaxis: {
                    categories: ['Jan', 'feb', 'Mar', 'Apr', 'May', 'Jun', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        show: false,
                        style: {
                            fontSize: '12px',
                        }
                    },
                    crosshairs: {
                        show: false,
                        position: 'front',
                        stroke: {
                            width: 1,
                            dashArray: 3
                        }
                    },
                    tooltip: {
                        enabled: true,
                        formatter: undefined,
                        offsetY: 0,
                        style: {
                            fontSize: '12px',
                        }
                    }
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    opacity: 0.0,
                    type: 'solid',
                    colors: '#FAC7B6'
                },
                tooltip: {
                    style: {
                        fontSize: '12px',
                    },
                    y: {
                        formatter: function (val) {
                            return "$" + val + " thousands"
                        }
                    }
                }
            };

            // var chartBar1 = new ApexCharts(document.querySelector("#widgetChart2"), options);
            // chartBar1.render();
        }

        var donutChart1 = function () {
            $("span.donut1").peity("donut", {
                width: "81",
                height: "81"
            });
        }

        /* Function ============ */
        return {
            init: function () {
            },


            load: function () {
                chartTimeline();
                widgetChart1();
                // radialChart();
                piecharts();
                widgetChart2();
                donutChart1();
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
        }, 1000);

    });
    jQuery(window).on('resize', function () {
    });

})(jQuery);
