//Base URL for Ajax calls
var memento = {
	baseUrl: $('base').attr('href') + "/";
}
var baseURL = $('base').attr('href') + "/";

//Ajax Setup to send the CSRF-token
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name=_token]').attr('content')
    }
});

function createSpinner() {


    var spinner = document.createElement('div');
    spinner.className = 'spinner mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active';
    spinner.id = 'loadingSpinner';
    componentHandler.upgradeElement(spinner, 'MaterialSpinner');

    return spinner;
}