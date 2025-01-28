import Alpine from "alpinejs";
import { createPopper } from "@popperjs/core";
import $ from 'jquery';
window.$ = window.jQuery = $;
import SimpleBar from 'simplebar';
import feather from "feather-icons";
import MetisMenu from 'metismenujs';
import Swiper from 'swiper';
import 'swiper/css';
import alertify from 'alertifyjs';
import 'alertifyjs/build/css/alertify.css';
import ApexCharts from 'apexcharts';



window.Alpine = Alpine;

Alpine.start();
feather.replace();

(function () {
    "use strict";

    // MetisMenu js
    function initMetisMenu() {
        // MetisMenu js
        if (document.getElementById("side-menu")) {
            console.log("+++ loaded");
            new MetisMenu("#side-menu");
        }
    }

    // initLeftMenuCollapse
    function initLeftMenuCollapse() {
        var currentSIdebarSize =
            document.body.getAttribute("data-sidebar-size");
        window.onload = function () {
            if (window.innerWidth >= 1024 && window.innerWidth <= 1366) {
                document.body.setAttribute("data-sidebar-size", "sm");
                updateRadio("sidebar-size-small");
            }
        };
        var verticalButton =
            document.getElementsByClassName("vertical-menu-btn");
        for (var i = 0; i < verticalButton.length; i++) {
            (function (index) {
                verticalButton[index] &&
                    verticalButton[index].addEventListener(
                        "click",
                        function (event) {
                            event.preventDefault();
                            document.body.classList.toggle("sidebar-enable");
                            if (window.innerWidth >= 992) {
                                if (currentSIdebarSize == null) {
                                    document.body.getAttribute(
                                        "data-sidebar-size"
                                    ) == null ||
                                    document.body.getAttribute(
                                        "data-sidebar-size"
                                    ) == "lg"
                                        ? document.body.setAttribute(
                                              "data-sidebar-size",
                                              "sm"
                                          )
                                        : document.body.setAttribute(
                                              "data-sidebar-size",
                                              "lg"
                                          );
                                } else if (currentSIdebarSize == "md") {
                                    document.body.getAttribute(
                                        "data-sidebar-size"
                                    ) == "md"
                                        ? document.body.setAttribute(
                                              "data-sidebar-size",
                                              "sm"
                                          )
                                        : document.body.setAttribute(
                                              "data-sidebar-size",
                                              "md"
                                          );
                                } else {
                                    document.body.getAttribute(
                                        "data-sidebar-size"
                                    ) == "sm"
                                        ? document.body.setAttribute(
                                              "data-sidebar-size",
                                              "lg"
                                          )
                                        : document.body.setAttribute(
                                              "data-sidebar-size",
                                              "sm"
                                          );
                                }
                            } else {
                                initMenuItemScroll();
                            }
                        }
                    );
            })(i);
        }
    }

    // menu active
    function initActiveMenu() {
        var menuItems = document.querySelectorAll("#sidebar-menu a");
        menuItems &&
            menuItems.forEach(function (item) {
                var pageUrl = window.location.href.split(/[?#]/)[0];

                if (item.href == pageUrl) {
                    item.classList.add("active");
                    var parent = item.parentElement;
                    if (parent && parent.id !== "side-menu") {
                        parent.classList.add("mm-active");
                        var parent2 = parent.parentElement; // ul .
                        if (parent2 && parent2.id !== "side-menu") {
                            parent2.classList.add("mm-show"); // ul tag
                            var parent3 = parent2.parentElement; // li tag
                            if (parent3 && parent3.id !== "side-menu") {
                                parent3.classList.add("mm-active"); // li
                                var parent4 = parent3.parentElement; // ul
                                if (parent4 && parent4.id !== "side-menu") {
                                    parent4.classList.add("mm-show"); // ul
                                    var parent5 = parent4.parentElement;
                                    if (parent5 && parent5.id !== "side-menu") {
                                        parent5.classList.add("mm-active"); // li
                                    }
                                }
                            }
                        }
                    }
                }
            });
    }

    // sidebarMenu

    function initMenuItemScroll() {
        setTimeout(function () {
            var sidebarMenu = document.getElementById("side-menu");
            if (sidebarMenu) {
                var activeMenu =
                    sidebarMenu.querySelector(".mm-active .active");
                var offset = activeMenu ? activeMenu.offsetTop : 0;
                if (offset > 300) {
                    var verticalMenu = document.getElementsByClassName(
                        "vertical-menu"
                    )
                        ? document.getElementsByClassName("vertical-menu")[0]
                        : "";
                    if (
                        verticalMenu &&
                        verticalMenu.querySelector(".simplebar-content-wrapper")
                    ) {
                        setTimeout(function () {
                            offset == 330
                                ? (verticalMenu.querySelector(
                                      ".simplebar-content-wrapper"
                                  ).scrollTop = offset + 85)
                                : (verticalMenu.querySelector(
                                      ".simplebar-content-wrapper"
                                  ).scrollTop = offset);
                        }, 0);
                    }
                }
            }
        }, 250);
    }

    function initModeSetting() {
        var body = document.body;
        var lightDarkBtn = document.querySelectorAll(".light-dark-mode");
        if (lightDarkBtn) {
            lightDarkBtn.forEach(function (item) {
                item.addEventListener("click", function (event) {
                    if (
                        body.hasAttribute("data-mode") &&
                        body.getAttribute("data-mode") == "dark"
                    ) {
                        body.setAttribute("data-mode", "light");
                        sessionStorage.setItem("data-layout-mode", "light");
                    } else {
                        body.setAttribute("data-mode", "dark");
                        sessionStorage.setItem("data-layout-mode", "dark");
                    }
                });
            });
        }

        if (
            sessionStorage.getItem("data-layout-mode") &&
            sessionStorage.getItem("data-layout-mode") == "light"
        ) {
            body.setAttribute("data-mode", "light");
        } else if (sessionStorage.getItem("data-layout-mode") == "dark") {
            body.setAttribute("data-mode", "dark");
        }
    }

    function init() {
        initMetisMenu();
        initLeftMenuCollapse();
        initActiveMenu();
        initMenuItemScroll();
        initModeSetting();
    }

    init();
})();

/********* Alert common js *********/

// alert dismissible
if (document.querySelectorAll(".alert-dismissible")) {
    var alertDismiss = document.querySelectorAll(".alert-dismissible");

    Array.from(alertDismiss).forEach(function (item) {
        item.querySelector(".alert-close").addEventListener(
            "click",
            function () {
                item.classList.add("hidden");
            }
        );
    });
}

/********* dropdown common js *********/
var dropdownElem = document.querySelectorAll(".dropdown");
var dropupElem = document.querySelectorAll(".dropup");
var dropStartElem = document.querySelectorAll(".dropstart");
var dropendElem = document.querySelectorAll(".dropend");
var isShowDropMenu = false;
var isMenuInside = false;
// dropdown event
dropdownEvent(dropdownElem, "bottom-start");
// dropup event
dropdownEvent(dropupElem, "top-start");
// dropstart event
dropdownEvent(dropStartElem, "left-start");
// dropend event
dropdownEvent(dropendElem, "right-start");

function dropdownEvent(elem, place) {
    Array.from(elem).forEach(function (item) {
        item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
            subitem.addEventListener("click", function (event) {
                subitem.classList.toggle("show");
                var popper = Popper.createPopper(
                    subitem,
                    item.querySelector(".dropdown-menu"),
                    {
                        placement: place,
                    }
                );
                console.log("popper", item.querySelector(".dropdown-menu"));

                if (subitem.classList.contains("show") != true) {
                    item.querySelector(".dropdown-menu").classList.remove(
                        "block"
                    );
                    item.querySelector(".dropdown-menu").classList.add(
                        "hidden"
                    );
                } else {
                    dismissDropdownMenu();
                    item.querySelector(".dropdown-menu").classList.add("block");
                    item.querySelector(".dropdown-menu").classList.remove(
                        "hidden"
                    );
                    if (
                        item
                            .querySelector(".dropdown-menu")
                            .classList.contains("block")
                    ) {
                        subitem.classList.add("show");
                    } else {
                        subitem.classList.remove("show");
                    }
                    event.stopPropagation();
                }

                isMenuInside = false;
            });
        });
    });
}

function dismissDropdownMenu() {
    Array.from(document.querySelectorAll(".dropdown-menu")).forEach(function (
        item
    ) {
        item.classList.remove("block");
        item.classList.add("hidden");
    });
    Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (
        item
    ) {
        item.classList.remove("show");
    });
    isShowDropMenu = false;
}

// dropdown form
Array.from(document.querySelectorAll(".dropdown-menu")).forEach(function (
    item
) {
    if (item.querySelectorAll("form")) {
        Array.from(item.querySelectorAll("form")).forEach(function (subitem) {
            subitem.addEventListener("click", function (event) {
                if (!isShowDropMenu) {
                    isShowDropMenu = true;
                }
            });
        });
    }
});

// data-tw-auto-close
Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (
    item
) {
    var elem = item.parentElement;
    if (item.getAttribute("data-tw-auto-close") == "outside") {
        elem.querySelector(".dropdown-menu").addEventListener(
            "click",
            function () {
                if (!isShowDropMenu) {
                    isShowDropMenu = true;
                }
            }
        );
    } else if (item.getAttribute("data-tw-auto-close") == "inside") {
        item.addEventListener("click", function () {
            isShowDropMenu = true;
            isMenuInside = true;
        });
        elem.querySelector(".dropdown-menu").addEventListener(
            "click",
            function () {
                isShowDropMenu = false;
                isMenuInside = false;
            }
        );
    }
});

window.addEventListener("click", function (e) {
    if (!isShowDropMenu && !isMenuInside) {
        dismissDropdownMenu();
    }
    isShowDropMenu = false;
});

// Handler that uses various data-* attributes to trigger
// specific actions, mimicing bootstraps attributes
const triggers = Array.from(
    document.querySelectorAll('[data-toggle="collapse"]')
);

window.addEventListener(
    "click",
    (ev) => {
        const elm = ev.target;
        if (triggers.includes(elm)) {
            const selector = elm.getAttribute("data-target");
            collapse(selector, "toggle");
        }
    },
    false
);

const fnmap = {
    toggle: "toggle",
    show: "add",
    hide: "remove",
};
const collapse = (selector, cmd) => {
    const targets = Array.from(document.querySelectorAll(selector));
    targets.forEach((target) => {
        target.classList[fnmap[cmd]]("show");
    });
};

/********* modal common js *********/
// openModal
var modalTrigger = document.querySelectorAll('[data-tw-toggle="modal"]');
var isModalShow = false;
Array.from(modalTrigger).forEach(function (item) {
    item.addEventListener("click", function () {
        var target = this.getAttribute("data-tw-target").substr(1);
        var modalWindow = document.getElementById(target);

        if (modalWindow.classList.contains("hidden")) {
            modalWindow.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
        } else {
            modalWindow.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }
        isModalShow = false;

        if (item.getAttribute("data-tw-backdrop") == "static") {
            isModalShow = true;
        }
    });
});

// closeButton
var closeButton = document.querySelectorAll('[data-tw-dismiss="modal"]');
Array.from(closeButton).forEach(function (subElem) {
    subElem.addEventListener("click", function () {
        var modalWindow = subElem.closest(".modal");
        if (modalWindow.classList.contains("hidden")) {
            modalWindow.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
        } else {
            modalWindow.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }
    });
});

// closeModal
var modalElem = document.querySelectorAll(".modal");
Array.from(modalElem).forEach(function (elem) {
    // modalOverlay
    var modalOverlay = elem.querySelectorAll(".modal-overlay");
    Array.from(modalOverlay).forEach(function (subItem) {
        subItem.addEventListener("click", function () {
            if (!isModalShow) {
                if (elem.classList.contains("hidden")) {
                    elem.classList.remove("hidden");
                    document.body.classList.add("overflow-hidden");
                } else {
                    elem.classList.add("hidden");
                    document.body.classList.remove("overflow-hidden");
                }
            }
        });
    });
});


// // alert
// document.getElementById("alert").addEventListener("click", function() {
//     alertify.alert('Alert Title', 'Alert Message!', function(){ alertify.success('Ok'); });
// });

// // alert-confirm
// document.getElementById("alert-confirm").addEventListener("click", function() {
//     alertify.confirm("This is a confirm dialog.",
//     function(){
//         alertify.success('Ok');
//     },
//     function(){
//         alertify.error('Cancel');
//     });
// });

// // alert-prompt
// document.getElementById("alert-prompt").addEventListener("click", function() {
//     alertify.prompt("This is a prompt dialog.", "Default value",
//     function(evt, value ){
//         alertify.success('Ok: ' + value);
//     },
//     function(){
//         alertify.error('Cancel');
//     });
// });

// // alert success
// document.getElementById("alert-success").addEventListener("click", function() {
//     alertify.success('Success message');
// });

// // alert error
// document.getElementById("alert-error").addEventListener("click", function() {
//     alertify.error('Error message');
// });

// // alert warning
// document.getElementById("alert-warning").addEventListener("click", function() {
//     alertify.warning('Warning message');
// });

// // alert normal
// document.getElementById("alert-message").addEventListener("click", function() {
//     alertify.message('Normal message');
// });
// // With controls

var swiper = new Swiper(".login-slider", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop:true,
});

// get colors array from the string
function getChartColorsArray(chartId) {
    var colors = $(chartId).attr('data-colors');
    var colors = JSON.parse(colors);
    return colors.map(function(value){
        var newValue = value.replace(' ', '');
        if(newValue.indexOf('--') != -1) {
            var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
            if(color) return color;
        } else {
            return newValue;
        }
    })
}

//  MINI CHART

// mini-1
var minichart1Colors = getChartColorsArray("#mini-chart1");
var options = {
    series: [{
        data: [2, 10, 18, 22, 36, 15, 47, 75, 65, 19, 14, 2, 47, 42, 15, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart1Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart1"), options);
chart.render();

// mini-2
var minichart2Colors = getChartColorsArray("#mini-chart2");
var options = {
    series: [{
        data: [15, 42, 47, 2, 14, 19, 65, 75, 47, 15, 42, 47, 2, 14, 12, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart2Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart2"), options);
chart.render();

// mini-3
var minichart3Colors = getChartColorsArray("#mini-chart3");
var options = {
    series: [{
        data: [47, 15, 2, 67, 22, 20, 36, 60, 60, 30, 50, 11, 12, 3, 8, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart3Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart3"), options);
chart.render();

// mini-4
var minichart4Colors = getChartColorsArray("#mini-chart4");
var options = {
    series: [{
        data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14, 2, 47, 42, 15, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart4Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart4"), options);
chart.render();

//
// Wallet Balance
//
var piechartColors = getChartColorsArray("#wallet-balance");
var options = {
    series: [35, 70, 15],
    chart: {
        width: 227,
        height: 227,
        type: 'pie',
    },
    labels: ['Ethereum', 'Bitcoin', 'Litecoin'],
    colors: piechartColors,
    stroke: {
        width: 0,
    },
    legend: {
        show: false
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#wallet-balance"), options);
chart.render();

//
// Invested Overview
//

var radialchartColors = getChartColorsArray("#invested-overview");
var options = {
    chart: {
        height: 270,
        type: 'radialBar',
        offsetY: -10
    },
    plotOptions: {
        radialBar: {
            startAngle: -130,
            endAngle: 130,
            dataLabels: {
                name: {
                    show: false
                },
                value: {
                    offsetY: 10,
                    fontSize: '18px',
                    color: undefined,
                    formatter: function (val) {
                        return val + "%";
                    }
                }
            }
        }
    },
    colors: [radialchartColors[0]],
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'horizontal',
            gradientToColors: [radialchartColors[1]],
            shadeIntensity: 0.15,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [20, 60]
        },
    },
    stroke: {
        dashArray: 4,
    },
    legend: {
        show: false
    },
    series: [80],
    labels: ['Series A'],
}

var chart = new ApexCharts(
    document.querySelector("#invested-overview"),
    options
);

chart.render();

//
// Market Overview
//
var barchartColors = getChartColorsArray("#market-overview");
var options = {
    series: [{
        name: 'Profit',
        data: [12.45, 16.2, 8.9, 11.42, 12.6, 18.1, 18.2, 14.16, 11.1, 8.09, 16.34, 12.88]
    }, {
        name: 'Loss',
        data: [-11.45, -15.42, -7.9, -12.42, -12.6, -18.1, -18.2, -14.16, -11.1, -7.09, -15.34, -11.88]
    }],
    chart: {
        type: 'bar',
        height: 400,
        stacked: true,
        toolbar: {
            show: false
        },
    },
    plotOptions: {
        bar: {
            columnWidth: '20%',
        },
    },
    colors: barchartColors,
    fill: {
        opacity: 1
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    yaxis: {
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "%";
            }
        }
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        labels: {
            rotate: -90
        }
    }
};

var chart = new ApexCharts(document.querySelector("#market-overview"), options);
chart.render();


// nav-tabs
//
document.querySelectorAll(".nav-tabs").forEach(function (elem) {
    elem.querySelectorAll('[data-tw-toggle="tab"]').forEach(function (item) {
        item.addEventListener("click", function () {
            var tabID = item.getAttribute("data-tw-target");
            var tabContents = elem.querySelectorAll(".tab-content > .tab-pane");

            var activeElem = elem.querySelector('[data-tw-toggle="tab"].active');
            if (activeElem) activeElem.classList.remove("active");


            // clear value
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }

            // change value
            item.classList.add("active");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        });
    });
});


//
// accordion
//
document.querySelectorAll('[data-tw-accordion="collapse"]').forEach(function (elem) {
    elem.querySelectorAll(".accordion-item").forEach(function (item) {
        item.querySelector(".accordion-header").addEventListener("click", function (event) {
            item.querySelector(".accordion-header").classList.toggle("active");

            if (item.querySelector(".accordion-header").classList.contains("active") != true) {
                item.querySelector(".accordion-body").classList.remove("block")
                item.querySelector(".accordion-body").classList.add("hidden")
            } else {
                dismissCollapse(elem)
                item.querySelector(".accordion-body").classList.add("block")
                item.querySelector(".accordion-body").classList.remove("hidden")
                if (item.querySelector(".accordion-body").classList.contains("block")) {
                    item.querySelector(".accordion-header").classList.add("active")
                } else {
                    item.querySelector(".accordion-header").classList.remove("active")
                }
                event.stopPropagation();
            }
        });
    });
});

function dismissCollapse(test) {
    Array.from(test.querySelectorAll(".accordion-body")).forEach(function (item) {
        item.classList.remove("block")
        item.classList.add("hidden")
    });
    Array.from(test.querySelectorAll(".accordion-header")).forEach(function (item) {
        item.classList.remove("active")
    });
}
