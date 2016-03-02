'use strict';
var WelcomeCtrl = function($scope) {
    $scope.pageClass = 'page-home';
    $scope.testVar = 'Alertas';
    $scope.data = [
        {
            "hc-key": "hn-ib", // Islas
            "value": 0
        },
        {
            "hc-key": "hn-va", // Valle
            "value": 1
        },
        {
            "hc-key": "hn-at", // Atlantida
            "value": 2
        },
        {
            "hc-key": "hn-gd", // Gracias a Dios
            "value": 3
        },
        {
            "hc-key": "hn-cl", // Colon
            "value": 4
        },
        {
            "hc-key": "hn-ol", // Olancho
            "value": 5
        },
        {
            "hc-key": "hn-fm", // Francisco Morazan
            "value": 6
        },
        {
            "hc-key": "hn-yo", // Yoro
            "value": 7
        },
        {
            "hc-key": "hn-cm", // Comayagua
            "value": 8
        },
        {
            "hc-key": "hn-cr",  //Cortez
            "value": 9
        },
        {
            "hc-key": "hn-in", //Intibuca
            "value": 10
        },
        {
            "hc-key": "hn-lp", // La Paz
            "value": 11
        },
        {
            "hc-key": "hn-sb", // Santa Barbara
            "value": 12
        },
        {
            "hc-key": "hn-cp", //Copan
            "value": 13
        },
        {
            "hc-key": "hn-le", // Lempira
            "value": 14
        },
        {
            "hc-key": "hn-oc", // Ocotepeque
            "value": 15
        },
        {
            "hc-key": "hn-ch", // Choluteca
            "value": 16
        },
        {
            "hc-key": "hn-ep", // El Paraiso
            "value": 17
        }
    ];
    $(function () {
        // Initiate the chart
        $('#container').highcharts('Map', {

            title : {
                text : 'Mapa de Agresiones a la libertad de expresión en Honduras'
            },

            subtitle : {
                text : 'Source map: <a href="https://code.highcharts.com/mapdata/countries/hn/hn-all.js">http://clibrehonduras.com</a>'
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0
            },

            series : [{
                data : $scope.data,
                mapData: Highcharts.maps['countries/hn/hn-all'],
                joinBy: 'hc-key',
                name: 'Random data',
                states: {
                    hover: {
                        color: '#BADA55'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }]
        });
    });

};

module.exports = WelcomeCtrl;