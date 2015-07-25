$('#addCardForm').submit(function(e){
    e.preventDefault();
    var data = {
        frontside: $("#frontside").val(),
        backside: $("#backside").val(),
        cardpack_id: $("#cardpack_id").val()
    }

    $.ajax({
        type: "POST",
        url: baseURL + "cards",
        data: data,
        success: function(data) {
            //TODO: dynamically reload content...
            //Create loading icon

            $('#cardsTable').replaceWith(createSpinner());
           // location.reload();
        }
    }, "json");

    return false;
});

function createSpinner() {

    var spinner = document.createElement('div');
    spinner.className = 'spinner mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active';
    componentHandler.upgradeElement(spinner, 'MaterialSpinner');

    return spinner;
}