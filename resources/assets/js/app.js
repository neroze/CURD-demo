
$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': window.Laravel.csrfToken
            }
        });

var _location = location.href;
if(_location.search('icuser') > 0){
	require('./app/icuser/icuser.js');
}
else{
	require('./app/product/product.js');
}





