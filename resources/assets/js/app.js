
$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': window.Laravel.csrfToken
            }
        });

var _location = location.href;
require('./app/product/product.js');



