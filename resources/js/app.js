import './bootstrap';

import Alpine from 'alpinejs';
import $ from 'jquery';

window.Alpine = Alpine;
window.$ = $;

Alpine.start();

function getProvinces() {
    return $.getJSON('/api/province', function(data) {
        return data;
    })
}

$(document).ready(function() {
    console.log(getProvinces());
})
