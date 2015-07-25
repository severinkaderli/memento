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
            console.log(data)
            //Reload content...
        }
    }, "json");

    return false;
});