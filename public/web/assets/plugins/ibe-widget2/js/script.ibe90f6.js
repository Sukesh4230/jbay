function fncSubmit() {
    if (document.form_booking.chknoofroom.value == "0") {
        $('.tooltip_room').css({"display": "block"});
        document.form_booking.chknoofroom.focus();
        return false;
    }
    document.form_booking.submit();
}

$(document).ready(function () {
    $('.btn_apply').click(function () {
        $("#numberrroomRow").css({"display": "none"});
    });
});