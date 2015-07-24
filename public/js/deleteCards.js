/**
 * Display delete button if cards are selected
 */
function checkCards() {
    if($('.is-selected').length > 0) {
        $('#deleteCardsButton').removeClass('hide');
    } else {
        $('#deleteCardsButton').addClass('hide');
    }
}

//Call the checkCards function on row click
checkCards();
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