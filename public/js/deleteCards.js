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
$(".card-row").change(function() {
    checkCards();
});

//Ajax call to delete cards
$("#deleteCardsButton").click(function() {

    var cardpackid = $(this).data('cardpackid');
    var idArray = [];

    $('.is-selected').each(function() {
        idArray.push($(this).data('id'));
    });

    //Show spinner to indicate loading
    $("#cardsTable").replaceWith(createSpinner());

    $.ajax({
        type: "POST",
        url: baseURL + "cards/delete",
        data: {
            ids: idArray,
            cardpackid: cardpackid
        },
        success: function(data) {
            $("#loadingSpinner").replaceWith(data);
            //TODO: Maybe get this to work with upgradeElement
            componentHandler.upgradeDom();
            $(".card-row").change(function() {
                checkCards();
            });
        }
    }, "json");
});