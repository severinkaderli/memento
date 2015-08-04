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
        }
    }, "json");
});