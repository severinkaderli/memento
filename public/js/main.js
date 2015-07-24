//Base URL for Ajax calls
var baseURL = $('base').attr('href') + "/";

//Ajax Setup to send the CSRF-token
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name=_token]').attr('content')
    }
});