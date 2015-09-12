$('#addCardForm').submit(function(e){
    e.preventDefault();
    var data = {
        frontside: $("#frontside").val(),
        backside: $("#backside").val(),
        cardpackid: $("#cardpackid").val()
    }

    //Clear form inputs
    $("#frontside").val("");
    $("#backside").val("");

    //Show spinner to indicate loading
    $('#cardsTable').replaceWith(createSpinner());

    $.ajax({
        type: "POST",
        url: baseURL + "cards",
        data: data,
        success: function(data) {
            $('#loadingSpinner').replaceWith(data);
            componentHandler.upgradeDom();
            $('#frontside').focus();
            checkCards();
            $(".card-row").change(function() {
                checkCards();
            });
        },
        error: function(data) {

            //Get error message
            var htmlErrors = '<div id="cardsTable" class="error-list"><ul>';
            $.each(data.responseJSON, function(key, value){
                htmlErrors += "<li>" + value + "</li>"
                console.log(value);
            });
            htmlErrors += '</ul></div>';

            $('#loadingSpinner').replaceWith(htmlErrors);
            componentHandler.upgradeDom();
            $('#frontside').focus();
            checkCards();
            $(".card-row").change(function() {
                checkCards();
            });
        }
    }, "json");
});