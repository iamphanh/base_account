const $editButton = $('#editButton');
const $popup = $('#__dialogmain');
const $saveButton = $('#saveButton');
const $cancelButton = $('#cancelButton');
$(document).ready(function(){
    ($editButton,$cancelButton,$saveButton).click(function(){
        $popup.toggleClass("hidden");
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


