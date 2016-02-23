<!DOCTYPE html>
<html>
<head>
    <title>Dhorstha Fantasy League 2015/16</title>
    <meta name="description" content="chart created using amCharts live editor" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- amCharts javascript sources -->
    <script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- amCharts javascript code -->
    <script type="text/javascript">
    AmCharts.ready(function () {
        chart = new AmCharts.AmSerialChart();
        chart.type = 'serial';
        chart.height = '100%';
        chart.categoryField = 'category';
        chart.startDuration = 0.3;
        chart.color = '#333';
        chart.fontFamily = 'Open Sans';
        chart.startEffect = 'easeOutSine';
        chart.categoryAxis = {
            "gridPosition": "start"
        };
        chart.trendLines = [];
        chart.graphs = [
            {
                "balloonText": "Ahad",
                "bullet": "round",
                "id": "ahad",
                "title": "Ahad",
                "lineColor": "#66BB6A",
                "valueField": "ahad"
            },
            {
                "balloonText": "Ahmed",
                "bullet": "round",
                "id": "ahmed",
                "title": "Ahmed",
                "lineColor": "#26C6DA",
                "valueField": "ahmed"
            },
            {
                "balloonText": "Arfan",
                "bullet": "round",
                "id": "arfan",
                "title": "Arfan",
                "lineColor": "#B71C1C",
                "valueField": "arfan"
            },
            {
                "balloonText": "Belal",
                "bullet": "round",
                "id": "belal",
                "title": "Belal",
                "lineColor": "#42A5F5",
                "valueField": "belal"
            },
            {
                "balloonText": "Danyal",
                "bullet": "round",
                "id": "danyal",
                "title": "Danyal",
                "lineColor": "#CDDC39",
                "valueField": "danyal"
            },
            {
                "balloonText": "Hamza Khan",
                "bullet": "round",
                "id": "hamza-khan",
                "title": "Hamza Khan",
                "lineColor": "#E91E63",
                "valueField": "hamza-khan"
            },
            {
                "balloonText": "Hamzah al Farooq",
                "bullet": "round",
                "id": "hamzah-al-farooq",
                "title": "Hamzah",
                "lineColor": "#1B5E20",
                "valueField": "hamzah-al-farooq"
            },
            {
                "balloonText": "Ibrar",
                "bullet": "round",
                "id": "ibrar",
                "title": "Ibrar",
                "lineColor": "#4A148C",
                "valueField": "ibrar"
            },
            {
                "balloonText": "Ishfaq",
                "bullet": "round",
                "id": "ishfaq",
                "title": "Ishfaq",
                "lineColor": "#FF9800",
                "valueField": "ishfaq"
            },
            {
                "balloonText": "Khizar",
                "bullet": "round",
                "id": "khizar",
                "title": "Khizar",
                "lineColor": "#9E9E9E",
                "valueField": "khizar"
            },
            {
                "balloonText": "Majid",
                "bullet": "round",
                "id": "majid",
                "title": "Majid",
                "lineColor": "#8D6E63",
                "valueField": "majid"
            },
            {
                "balloonText": "Saff",
                "bullet": "round",
                "id": "saff",
                "title": "Saff",
                "lineColor": "#EF5350",
                "valueField": "saff"
            },
            {
                "balloonText": "Saheed",
                "bullet": "round",
                "id": "saheed",
                "title": "Saheed",
                "lineColor": "#E53935",
                "valueField": "saheed"
            },
            {
                "balloonText": "Samad",
                "bullet": "round",
                "id": "samad",
                "title": "Samad",
                "lineColor": "#AB47BC",
                "valueField": "samad"
            },
            {
                "balloonText": "Shakath",
                "bullet": "round",
                "id": "shakath",
                "title": "Shakath",
                "lineColor": "#795548",
                "valueField": "shakath"
            },
            {
                "balloonText": "Shakeal",
                "bullet": "round",
                "id": "shakeal",
                "title": "Shakeal",
                "lineColor": "#FDD835",
                "valueField": "shakeal"
            },
            {
                "balloonText": "Sheraz Sarwar",
                "bullet": "round",
                "id": "sheraz-sarwar",
                "title": "Sheraz Sarwar",
                "lineColor": "#000000",
                "valueField": "sheraz-sarwar"
            },
            {
                "balloonText": "Shiraz Nawaz",
                "bullet": "round",
                "id": "shiraz-nawaz",
                "title": "Shiraz Nawaz",
                "lineColor": "#0D47A1",
                "valueField": "shiraz-nawaz"
            },
        ];

        chart.guides = [];
        chart.valueAxes = [
            {
                "id": "position",
                "title": "Position",
                "reversed": true,
                "maximum": 19,
            }
        ];
        chart.balloon = {};
        chart.legend = {
            "useGraphSettings": true
        };
        chart.titles = [
            {
                "id": "title",
                "size": 15,
                "text": "Dhorstha Fantasy League 2015/16"
            }
        ];
        chart.dataProvider = [
            {
                "category": "Game Week 1",
                "ahad": 12,
                "ahmed": 6,
                "arfan": 4,
                "belal": 7,
                "danyal": 12,
                "hamza-khan": 17,
                "hamzah-al-farooq": 10,
                "ibrar": 14,
                "ishfaq": 8,
                "khizar": 2,
                "majid": 11,
                "saff": 16,
                "saheed": 9,
                "samad": 17,
                "shakath": 14,
                "shakeal": 5,
                "sheraz-sarwar": 1,
                "shiraz-nawaz": 3,
            },
            {
                "category": "Game Week 2",
                "ahad": 12,
                "ahmed": 3,
                "arfan": 7,
                "belal": 1,
                "danyal": 17,
                "hamza-khan": 7,
                "hamzah-al-farooq": 13,
                "ibrar": 18,
                "ishfaq": 7,
                "khizar": 2,
                "majid": 10,
                "saff": 10,
                "saheed": 14,
                "samad": 16,
                "shakath": 15,
                "shakeal": 6,
                "sheraz-sarwar": 5,
                "shiraz-nawaz": 4,
            },
            {
                "category": "Game Week 3",
                "ahad": 6,
                "ahmed": 4,
                "arfan": 7,
                "belal": 1,
                "danyal": 14,
                "hamza-khan": 8,
                "hamzah-al-farooq": 14,
                "ibrar": 18,
                "ishfaq": 10,
                "khizar": 9,
                "majid": 17,
                "saff": 3,
                "saheed": 14,
                "samad": 10,
                "shakath": 12,
                "shakeal": 2,
                "sheraz-sarwar": 5,
                "shiraz-nawaz": 13,
            },
            {
                "category": "Game Week 4",
                "ahad": 3,
                "ahmed": 8,
                "arfan": 11,
                "belal": 1,
                "danyal": 14,
                "hamza-khan": 10,
                "hamzah-al-farooq": 18,
                "ibrar": 17,
                "ishfaq": 13,
                "khizar": 7,
                "majid": 16,
                "saff": 6,
                "saheed": 15,
                "samad": 9,
                "shakath": 4,
                "shakeal": 2,
                "sheraz-sarwar": 5,
                "shiraz-nawaz": 12,
            },
            {
                "category": "Game Week 6",
                "ahad": 3,
                "ahmed": 9,
                "arfan": 13,
                "belal": 1,
                "danyal": 15,
                "hamza-khan": 10,
                "hamzah-al-farooq": 14,
                "ibrar": 17,
                "ishfaq": 11,
                "khizar": 7,
                "majid": 17,
                "saff": 4,
                "saheed": 16,
                "samad": 8,
                "shakath": 6,
                "shakeal": 2,
                "sheraz-sarwar": 5,
                "shiraz-nawaz": 12,
            },
            {
                "category": "Game Week 7",
                "ahad": 3,
                "ahmed": 7,
                "arfan": 14,
                "belal": 2,
                "danyal": 16,
                "hamza-khan": 11,
                "hamzah-al-farooq": 13,
                "ibrar": 18,
                "ishfaq": 5,
                "khizar": 10,
                "majid": 17,
                "saff": 1,
                "saheed": 15,
                "samad": 9,
                "shakath": 5,
                "shakeal": 4,
                "sheraz-sarwar": 8,
                "shiraz-nawaz": 12,
            },
            {
                "category": "Game Week 8",
                "ahad": 2,
                "ahmed": 8,
                "arfan": 10,
                "belal": 7,
                "danyal": 15,
                "hamza-khan": 11,
                "hamzah-al-farooq": 14,
                "ibrar": 18,
                "ishfaq": 6,
                "khizar": 12,
                "majid": 16,
                "saff": 1,
                "saheed": 17,
                "samad": 4,
                "shakath": 5,
                "shakeal": 9,
                "sheraz-sarwar": 3,
                "shiraz-nawaz": 13,
            },
            {
                "category": "Game Week 9",
                "ahad": 2,
                "ahmed": 8,
                "arfan": 11,
                "belal": 5,
                "danyal": 18,
                "hamza-khan": 10,
                "hamzah-al-farooq": 14,
                "ibrar": 17,
                "ishfaq": 6,
                "khizar": 13,
                "majid": 16,
                "saff": 1,
                "saheed": 15,
                "samad": 4,
                "shakath": 7,
                "shakeal": 9,
                "sheraz-sarwar": 3,
                "shiraz-nawaz": 12,
            },
            {
                "category": "Game Week 10",
                "ahad": 4,
                "ahmed": 8,
                "arfan": 11,
                "belal": 2,
                "danyal": 17,
                "hamza-khan": 9,
                "hamzah-al-farooq": 14,
                "ibrar": 16,
                "ishfaq": 6,
                "khizar": 12,
                "majid": 18,
                "saff": 1,
                "saheed": 15,
                "samad": 5,
                "shakath": 7,
                "shakeal": 10,
                "sheraz-sarwar": 3,
                "shiraz-nawaz": 12,
            },
            {
                "category": "Game Week 11",
                "ahad": 4,
                "ahmed": 8,
                "arfan": 12,
                "belal": 2,
                "danyal": 17,
                "hamza-khan": 9,
                "hamzah-al-farooq": 14,
                "ibrar": 16,
                "ishfaq": 6,
                "khizar": 11,
                "majid": 18,
                "saff": 1,
                "saheed": 15,
                "samad": 4,
                "shakath": 7,
                "shakeal": 10,
                "sheraz-sarwar": 3,
                "shiraz-nawaz": 13,
            },
        ];

        chart.chartScrollbar = {
            "autoGridCount": true,
            "scrollbarHeight": 40
        };

        var balloon = chart.balloon;
        balloon.verticalPadding = 3;

        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.cursorAlpha = 0;
        chartCursor.zoomable = false;
        chartCursor.categoryBalloonEnabled = false;
        chart.addChartCursor(chartCursor);

        chart.addListener('init', function() {
            var cat1 = chart.dataProvider.slice(-5)[0].category;
            var cat2 = chart.dataProvider.slice(-1)[0].category;

            console.log(cat1 + '   ' + cat2);
            chart.zoomToCategoryValues(cat1, cat2);
        });

        chart.write("chartdiv");


        chartCursor.showCursorAt(chart.dataProvider.slice(-1)[0].category);
        $(document).ready(function() {
            $('.amcharts-main-div').mouseleave(function() {
                chartCursor.showCursorAt(chart.dataProvider.slice(-1)[0].category);
            });
        });
    });
    </script>
</head>
<body style="background-color: #FAFAFA">
    <div id="chartdiv" style="width: 100%; height: 985px;" ></div>
</body>
</html>
