/*Makes a ajax call and gets the next card in a learning set*/
function getNextCard() {

    var baseURL = $('base').attr('href') + "/";
    //Check if it's the last card
    if($('#nextCard').data('cardnumber') == $('#nextCard').data('numberofcards')) {
        window.location = baseURL + "cardpacks";
    }

    //Send the csrf_token
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name=_token]').attr('content')
       }
    });

    var data = {
        'card_id': $('#nextCard').data('cardid'),
        'cardnumber': $('#nextCard').data('cardnumber'),
        'finished': $('#nextCard').data('finished'),
        'singleCard': true
    }

    $.ajax({
        type: "POST",
        url: baseURL + "cardpacks/" + $('#nextCard').data('cardpackid') + "/learn",
        data: data,
        success: function(data) {
            //Replace content with new card...
            console.log(data);
            $('.flipCard').replaceWith(data);

            $('.flipCardTrigger').click(function() {
                $(this).parents('.flipCard').toggleClass('flipped');
            });

            $('#nextCard').click(function() {
                getNextCard();
            });
        }
    }, "json");
}

$('.flipCardTrigger').click(function() {
    $(this).parents('.flipCard').toggleClass('flipped');
});

$('#nextCard').click(function() {
   getNextCard();
});