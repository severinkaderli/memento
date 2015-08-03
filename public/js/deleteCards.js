/**
 * Display delete button if cards are selected
 */
function checkCards() {

    //Timeout fix... for checking
    setTimeout(function() {
        if($('.is-selected').length > 0) {
            $('#deleteCardsButton').removeClass('hide');
        } else {
            $('#deleteCardsButton').addClass('hide');
        }
    }, 100);
}

//Call the checkCards function on row click
$(".card-row").click(function() {
    checkCards();
});

//Ajax call to delete cards
$("#deleteCardsButton").click(function() {

    var idArray = [];

    $('.is-selected').each(function() {
        idArray.push($(this).data('id'));
    });

    console.log(idArray);

    $.ajax({
        type: "POST",
        url: baseURL + "cards/delete",
        data: {
            ids: idArray
        },
        success: function(data) {
            console.log(data)
            //TODO: Replace content dynamically?
            location.reload();
        }
    }, "json");
});