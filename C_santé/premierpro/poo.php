<!DOCTYPE  html>
<html>
    <head>
            <meta charset="utf-8"/>
            <title>amch</title>
            <!-- <script src="//www.amcharts.com/lib/4/core.js"></script>
            <script src="//www.amcharts.com/lib/4/maps.js"></script>
            <script src="//www.amcharts.com/lib/4/geodata/worldLow.js"></script> -->
            <link rel="stylesheet" href="poo.css">
            <link rel="stylesheet" href="poo.js">

    </head>
    <body>
     <script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script> 
<div id="chartdiv"><?php // Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = am4core.color("#74B266");

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = am4core.color("#367B25"); ?> </div>

</body>
</html>
