jQuery.noConflict();
(function ($) {
    $(function () {

        // Initialiser AOS
        if ($('.vts__cerco').length) {
            AOS.init({
                mirror: false,
                once: false,
                disable: window.innerWidth < 768
            });
        } else {
            AOS.init({
                mirror: false,
                once: false,
            });
        }


        // NAVBAR FIXED-TOP HEIGHT
        navHeight = $('.navbar.fixed-top').height();
        $('body').css({
            'margin-top': navHeight + 'px',
            'padding-top': '1rem'
        });


        // REVELIS
        $('#video360').on('shown.bs.modal', function () {
            $('#video1')[0].play();
        })
        $('#video360').on('hidden.bs.modal', function () {
            $('#video1')[0].pause();
        })


        // CAROUSEL NOS VINS
        $('.carousel').each(function () {
            if ($(this).find('.carousel-item').length > 3) {
                $(this).find('.carousel-item').each(function () {
                    var minPerSlide = 3;
                    var next = $(this).next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    next.children(':first-child').clone().appendTo($(this));

                    for (var i = 0; i < minPerSlide; i++) {
                        next = next.next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }

                        next.children(':first-child').clone().appendTo($(this));
                    }
                });
            } else {
                $(this).find('.carousel-item').each(function () {
                    var next = $(this).next();
                    if (!next.length) {
                        return;
                    }

                    next.children(':first-child').clone().appendTo($(this));
                });
            }
        });

    });
})(jQuery);

function showChart() {
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: names,
            datasets: [{
                data: coordonnees,
                fill: true,
                backgroundColor: [
                    areaColor
                ],
                borderColor: [
                    areaColor
                ],
                borderWidth: 1
            },
                {
                    data: coordfake,
                    fill: true,
                    backgroundColor: 'rgba(255, 255, 255, 0)',
                    borderColor: 'rgba(255, 255, 255, 0)',
                    borderWidth: 0
                }]
        },
        options: {
            scale: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(255, 0, 0, 1)' // makes grid lines from y axis red
                    }
                }],
                gridLines: {
                    display: true,
                    color: 'rgba(255, 255, 255, 0.4)'
                },
                angleLines: {
                    color: 'rgba(255, 255, 255, 0.4)' // lines radiating from the center
                },
                ticks: {
                    beginAtZero: true,
                    maxTicksLimit: 5,
                    display: false,
                },
                pointLabels: {
                    fontColor: 'white',
                    display: false
                }
            },
            legend: {
                display: false,
                labels: {
                    // This more specific font property overrides the global property
                    defaultFontSize: '20'
                }
            },
            tooltips: {
                enabled: false
            },
            elements: {
                line: {
                    //tension: 0,
                    //borderWidth: 3
                }
            }
            //defaultColor: 'rgba(255, 255, 255, 0.8)'
        }
    });
    //Positoinnement des Labels du Graph
    var TabPos = [
        [0],
        [['pos1'], [1], [2], [3], [50, 0], [50, 0], [50, 0], [50, 0], [50, 0]],
        [['pos2'], [1], [2], [3], [100, 50], [100, 35], [95, 25], [89, 19], [85, 15]],
        [['pos3'], [1], [2], [3], [50, 100], [78, 90], [95, 75], [100, 61], [100, 50]],
        [['pos4'], [1], [2], [3], [0, 50], [22, 90], [50, 100], [71, 91], [85, 85]],
        [['pos5'], [1], [2], [3], [4], [0, 35], [5, 75], [28, 95], [50, 100]],
        [['pos6'], [1], [2], [3], [4], [5], [5, 25], [0, 61], [15, 85]],
        [['pos7'], [1], [2], [3], [4], [5], [6], [11, 19], [0, 50]],
        [['pos8'], [1], [2], [3], [4], [5], [6], [7], [15, 15]]
    ];

    for (var i = 1; i <= nbPoints; i++) {
        posX = TabPos[i][nbPoints][0];
        posY = TabPos[i][nbPoints][1];
        //
        var el = '#ts-pos_' + i;
        console.log('posX : ', posX);
        console.log('posY : ', posY);
        jQuery(el).css('left', posX + '%');
        jQuery(el).css('top', posY + '%');
    }
}

// Cerço

jQuery(document).ready(function ($) {
    setAnimateBouchonLine2();
    playVideo();
});

function setAnimateBouchonLine2() {
    if (jQuery('.vts__cerco').length) {
        document.addEventListener('aos:in', ({detail}) => {
            if (jQuery(detail).hasClass('vts__cerco__section__game-bio-engagee__bottle_line__bouchon1')) {
                jQuery('.vts__cerco__section__game-bio-engagee__bottle_line__bouchon2')
                    .removeClass('vts__cerco__section__game-bio-engagee__bottle_line__bouchon2__unanimate')
                    .addClass('vts__cerco__section__game-bio-engagee__bottle_line__bouchon2__animate');
            }
        });

        document.addEventListener('aos:out', ({detail}) => {
            if (jQuery(detail).hasClass('vts__cerco__section__game-bio-engagee__bottle_line__bouchon1')) {
                jQuery('.vts__cerco__section__game-bio-engagee__bottle_line__bouchon2')
                    .removeClass('vts__cerco__section__game-bio-engagee__bottle_line__bouchon2__animate')
                    .addClass('vts__cerco__section__game-bio-engagee__bottle_line__bouchon2__unanimate');
            }
        });
    }
}

function playVideo() {
    if (jQuery('.vts__cerco').length) {
        jQuery('.vts__cerco__video').get(0).play();
    }
}
