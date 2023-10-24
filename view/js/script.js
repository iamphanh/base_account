$(document).ready(function() {
    const $editButton = $('#editButton');
    const $popup = $('#__dialogmain');
    const $saveButton = $('#saveButton');
    const $cancelButton = $('#cancelButton');
    
    const isPopupDisplayed = localStorage.getItem('popupDisplayed');

    if (isPopupDisplayed) {
        $popup.removeClass('hidden');
    } else {
        $popup.addClass('hidden');
    }

    $editButton.click(function() {
        $popup.removeClass('hidden');
        localStorage.setItem('popupDisplayed', 'true');
    });

    $saveButton.click(function() {
        $popup.addClass('hidden');
        localStorage.removeItem('popupDisplayed');
    });

    $cancelButton.click(function() {
        $popup.addClass('hidden');
        localStorage.removeItem('popupDisplayed');
    });
});

$(document).ready(function(){
    $("#cancelButton").click(function(){
        $("#overlay").fadeOut();
    });
});
$(document).ready(function () {
        $("#close-btn").click(function () {
        $("#overlay").fadeOut();
    });
});

$(document).ready(function() {
    $('#editButton').click(function() {
        $('#__dialogmain').css('display', 'block');
    });
});

$(document).ready(function() {
    $('#editButton').click(function() {
        $('#overlay').css('display', 'block');
    });
});


