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
    $('.is-selected').each(function() {
        $.ajax({
            type: "DELETE",
            url: baseURL + "cards/" + $(this).data('id')
        }, "json");
    });

    //TODO: maybe replace content dynamically?
    location.reload();
});