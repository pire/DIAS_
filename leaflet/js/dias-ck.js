(function(e,t){"use strict";var n=e("#map"),r=e("#myChart"),i=e(".carousel"),s=e("#contact-form>div"),o=1160;i.length&&i.carousel({interval:!1});if(n.length){var u=L.map("map").setView([51.522755,-0.086504],17);L.tileLayer("http://otile4.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png",{maxZoom:18}).addTo(u);var a=L.marker([51.522555,-0.085304]).addTo(u)}if(r.length)var f=r.get(0).getContext("2d"),l=new Chart(f);s.length&&t.resize(function(){var e=0,n=t.width()-o;n>0&&(e=n/2);s.css("paddingLeft",e+"px")}).resize()})(jQuery,jQuery(window));