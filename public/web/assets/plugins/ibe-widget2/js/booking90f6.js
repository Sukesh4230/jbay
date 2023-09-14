var ageOption = '';
for (var age = 1; age < 8; age++) {
    ageOption += '<option value="' + age + '">' + age + '</option>';
}
var totalAdultOption = '';
for (var totalAdult = 1; totalAdult <= 5; totalAdult++) {
    totalAdultOption += '<option value="' + totalAdult + '">' + totalAdult + '</option>';
}
var totalChildOption = '';
for (var totalChild = 0; totalChild <= 5; totalChild++) {
    totalChildOption += '<option value="' + totalChild + '">' + totalChild + '</option>';
}
var roomsOption = '';
for (var room = 1; room < 5; room++) {
    roomsOption += '<option value="' + room + '">' + room + '</option>';
}
$(document).ready(function () {
    //$(".lightbox").lightbox();
    $('#btn-booknow').click(function () {
        var indate = $('#indate').val();
        var outdate = $('#outdate').val();
        $('#indateModalbox').val(indate);
        $('#outdateModalbox').val(outdate);
        $('#modalBookNow').modal('show');
    });
    $('#modalBookNow').on('hidden.bs.modal', function (e) {
        var indateModalbox = $('#indateModalbox').val();
        var outdateModalbox = $('#outdateModalbox').val();
        $('#indate').val(indateModalbox);
        $('#outdate').val(outdateModalbox);
        var strDate1 = document.getElementById("indateModalbox").value;
        var strDate2 = document.getElementById("outdateModalbox").value;
        datDate1 = parseDate(strDate1);
        datDate2 = parseDate(strDate2);
        if (((datDate2 - datDate1) / (24 * 60 * 60 * 1000)) >= 0) {
            document.getElementById("night").value = ((datDate2 - datDate1) / (24 * 60 * 60 * 1000));
        }
    })
    var currentTime = new Date();
    var smonth = currentTime.getMonth() + 1;
    var smonth = (smonth < 10) ? '0' + smonth : smonth;
    var sday = currentTime.getDate();
    var sday = (sday < 10) ? '0' + sday : sday;
    var syear = currentTime.getFullYear();
    $("#indate").val(syear + "-" + smonth + "-" + sday);
    $("#indateModalbox").val(syear + "-" + smonth + "-" + sday);

    $("#indate-label").html(dateLetter(currentTime));
    $("#inmonth-label").html(monthLetter(currentTime));
    $("#inyear-label").html(yearLetter(currentTime));
    var outdate = new Date(currentTime.setDate(currentTime.getDate() + 1));
    var emonth = outdate.getMonth() + 1;
    var emonthLetter = outdate.getMonth();
    var emonth = (emonth < 10) ? '0' + emonth : emonth;
    var eday = currentTime.getDate();
    var eday = (eday < 10) ? '0' + eday : eday;
    var eyear = currentTime.getFullYear();
    $("#outdate").val(eyear+ "-" + emonth + "-" + eday );
    $("#outdateModalbox").val(eyear + "-" + emonth + "-" + eday );
    $("#outdate-label").html(dateLetter(outdate));
    $("#outmonth-label").html(monthLetter(outdate));
    $("#outyear-label").html(yearLetter(outdate));
    $("#indate").datepicker({
        minDate: 0,
        onSelect: customStart,
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        numberOfMonths: 2,
        changeFirstDay: false
    });
    $("#outdate").datepicker({
        onSelect: onselectOutDate,
        beforeShow: customEnd,
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        numberOfMonths: 2,
        changeFirstDay: false
    });
    $("#indateModalbox").datepicker({
        minDate: 0,
        onSelect: customStart,
        dateFormat: "yy-mm-dd",
        numberOfMonths: 2,
        firstDay: 1,
        changeFirstDay: false
    });
    $("#outdateModalbox").datepicker({
        onSelect: onselectOutDate,
        beforeShow: customEnd,
        dateFormat: "yy-mm-dd",
        numberOfMonths: 2,
        firstDay: 1,
        changeFirstDay: false
    });
    $('#indate-calendar').on('click', function () {
        $('#indate').datepicker("show");
    });
    $('#outdate-calendar').on('click', function () {
        $('#outdate').datepicker("show");
    });
});
function parseDate(input) {
    var parts = input.match(/(\d+)/g);
    return new Date(parts[0], parts[1] - 1, parts[2]);
}
function customStart(input) {
    var newDate = $(this).datepicker("getDate");
    $("#indate-label").html(dateLetter(newDate));
    $("#inmonth-label").html(monthLetter(newDate));
    if (newDate) {
        newDate.setDate(newDate.getDate() + 1);
    }
    $("#outdate-label").html(dateLetter(newDate));
    $("#outmonth-label").html(monthLetter(newDate));
    $("#outdate").datepicker().datepicker("enable");
    $("#outdate").datepicker("setDate", newDate);
    dateDifference();
    $("#outdateModalbox").datepicker().datepicker("enable");
    $("#outdateModalbox").datepicker("setDate", newDate);
    dateDifference();
}
function customEnd(input) {
    var newDate = $("#indate").datepicker("getDate");
    if (newDate) {
        newDate.setDate(newDate.getDate() + 1);
    }
    $("#outdate").datepicker("option", "minDate", newDate);
}
function onselectOutDate() {
    dateDifference();
    var newDate = $(this).datepicker("getDate");
    $("#outdate-label").html(dateLetter(newDate));
    $("#outmonth-label").html(monthLetter(newDate));
}
function dateLetter(input) {
    var day = input.getDate();
    return day;
}
function monthLetter(input) {
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var monthLetter = input.getMonth();
    return months[monthLetter];
}

function yearLetter(input) {
    return input.getFullYear();
}

function available(frmObj) {
    var noOfRoom = $('#chknoofroom').val();
    var noOfAdult = $('#chknoadult').val();
    if (noOfRoom > noOfAdult) {
        alert("Number fo Adult must be " + noOfRoom + " or more.");
        $('#chknoadult').focus();
        return false;
    }
    var form = document.getElementById(frmObj);
    form.setAttribute("method", "get");
    form.setAttribute("action", "https://ibe.hoteliers.guru/ibe/search-room-rate");
    var HotelhiddenField = document.createElement("input");
    HotelhiddenField.setAttribute("type", "hidden");
    HotelhiddenField.setAttribute("id", "hotel");
    HotelhiddenField.setAttribute("name", "hotel");
    HotelhiddenField.setAttribute("value", "2");
    form.appendChild(HotelhiddenField);
    var HotelhiddenField = document.createElement("input");
    HotelhiddenField.setAttribute("type", "hidden");
    HotelhiddenField.setAttribute("id", "sd");
    HotelhiddenField.setAttribute("name", "sd");
    HotelhiddenField.setAttribute("value", $('#indate').val());
    form.appendChild(HotelhiddenField);
    var HotelhiddenField = document.createElement("input");
    HotelhiddenField.setAttribute("type", "hidden");
    HotelhiddenField.setAttribute("id", "ed");
    HotelhiddenField.setAttribute("name", "ed");
    HotelhiddenField.setAttribute("value", $('#outdate').val());
    form.appendChild(HotelhiddenField);
    var HotelhiddenField = document.createElement("input");
    HotelhiddenField.setAttribute("type", "hidden");
    HotelhiddenField.setAttribute("id", "rooms");
    HotelhiddenField.setAttribute("name", "rooms");
    HotelhiddenField.setAttribute("value", $('#chknoofroom :selected').val());
    form.appendChild(HotelhiddenField);
    var HotelhiddenField = document.createElement("input");
    HotelhiddenField.setAttribute("type", "hidden");
    HotelhiddenField.setAttribute("id", "adult");
    HotelhiddenField.setAttribute("name", "adult");
    HotelhiddenField.setAttribute("value", $('#chknoadult :selected').val());
    form.appendChild(HotelhiddenField);
    var HotelhiddenField = document.createElement("input");
    HotelhiddenField.setAttribute("type", "hidden");
    HotelhiddenField.setAttribute("id", "child");
    HotelhiddenField.setAttribute("name", "child");
    HotelhiddenField.setAttribute("value", $('#chknochild :selected').val());
    form.appendChild(HotelhiddenField);
    var ageOfChildrenValue = '';
    var currentNoOfChildren = $('#current_no_children').val();
    currentNoOfChildren = parseInt(currentNoOfChildren);
    for (var num = 1; num <= currentNoOfChildren; num++) {
        ageOfChildrenValue += $('#age_of_children' + num).val();
        if (num < currentNoOfChildren) {
            ageOfChildrenValue += '|';
        }
    }
    var HotelhiddenField = document.createElement("input");
    HotelhiddenField.setAttribute("type", "hidden");
    HotelhiddenField.setAttribute("id", "childage");
    HotelhiddenField.setAttribute("name", "childage");
    HotelhiddenField.setAttribute("value", ageOfChildrenValue);
    form.appendChild(HotelhiddenField);
    form.submit();
}
function dateDifference() {
    var strDate1 = document.getElementById("indate").value;
    var strDate2 = document.getElementById("outdate").value;
    datDate1 = parseDate(strDate1);
    datDate2 = parseDate(strDate2);
    if (((datDate2 - datDate1) / (24 * 60 * 60 * 1000)) >= 0) {
        document.getElementById("night").value = ((datDate2 - datDate1) / (24 * 60 * 60 * 1000));
    }
}
function displayAgeOfChildren2(noOfChildren, numOfRoom) {
    $('#clearfixAgeOfChildren').addClass('clearfix');
    var currentNoOfChildren = $('#current_no_children' + numOfRoom).val();
    $('#current_no_children' + numOfRoom).val(noOfChildren);
    if (noOfChildren == 0) {
        $('#ageRow' + numOfRoom).fadeOut();
    }
    if (parseInt(noOfChildren) < parseInt(currentNoOfChildren)) {
        for (var i = parseInt(noOfChildren); i <= parseInt(currentNoOfChildren); i++) {
            $('#field_age_of_child' + numOfRoom + i).remove();
        }
    }
    else {
        var ageOfChildrenTag = '';
        for (var num = parseInt(currentNoOfChildren); num < parseInt(noOfChildren); num++) {
            ageOfChildrenTag += '<div class="col-sm-12" id="field_age_of_child' + numOfRoom + num + '">' + '<div class="form-group">' + '<div class="input-group select-no-rd select-wrapper">' + ' <div class="input-group-addon">Child ' + parseInt(num + 1) + '</div>' + '<i class="fa fa-angle-down arrow" aria-hidden="true"></i>' + '<select id="age_of_child' + parseInt(numOfRoom - 1) + num + '" name="age_of_child[' + parseInt(numOfRoom - 1) + '][' + num + ']" class="no-radius select-form ">' +
                ageOption + '</select>' + '</div>' + '</div>' + '</div>';
        }
        $('#ageOfChildren' + numOfRoom).append(ageOfChildrenTag);
        if ($('#ageRow' + numOfRoom).css('display') == 'none') {
            $('#ageRow' + numOfRoom).fadeIn();
        }
    }
}
function displayAgeOfChildren(noOfChildren, numOfRoom) {
    var currentNoOfChildren = $('#current_no_children').val();
    var currentnoOfRoom = $('#current_no_rooms').val();
    noOfChildren = parseInt(noOfChildren);
    currentNoOfChildren = parseInt(currentNoOfChildren);
    if (noOfChildren == 0) {
        if ($('#ageRow' + numOfRoom).css('display') != 'none') {
            $('#current_no_children').val(0);
            $('#ageOfChildren' + numOfRoom).html('');
            $('#ageRow' + numOfRoom).fadeOut();
        }
    }
    else {
        if (noOfChildren > currentNoOfChildren) {
            currentNoOfChildren++;
            var ageOfChildrenTag = '';
            for (var num = currentNoOfChildren; num <= noOfChildren; num++) {
                ageOfChildrenTag += '<div id="field_age_of_children' + numOfRoom + noOfChildren + '"> ' + num + '.'
                    + '<select id="age_of_children' + num + '" name="age_of_children' + num + '"class="form-control no-radius">'
                    + ageOption
                    + '</select>'
                    + '</div>';
            }
            $('#ageOfChildren' + numOfRoom).append(ageOfChildrenTag);
        }
        else {
            for (var num = noOfChildren + 1; num <= currentNoOfChildren; num++) {
                $('#field_age_of_children' + numOfRoom + noOfChildren).remove();
            }
        }
        $('#current_no_children').val(noOfChildren);
        if ($('#ageRow' + numOfRoom).css('display') == 'none') {
            $('#ageRow' + numOfRoom).fadeIn();
        }
    }
}
function displayNumberOfrooms(noOfRoom, page) {
    if(noOfRoom > 0) {
        if (page == 'main-page') {
            var selectValue = $('#chknoofroom').find(":selected").val();
            $('#chknoofroomModal option[value="' + selectValue + '"]').attr('selected', 'selected');
        }
        else {
            var selectValue = $('#chknoofroomModal').find(":selected").val();
            $('#chknoofroom option[value="' + selectValue + '"]').attr('selected', 'selected');
        }
        if (noOfRoom == 1) {
            $('#numberrroomRow').css({"display": "block"});
            $("#adultRoom1").css({"float": "left", "margin": "0", "width": "100%"});
            $("#childRoom1").css({"float": "left", "margin": "0", "width": "100%"});
        }
        else {
            $('#numberrroomRow').css({"display": "block"});
            $("#adultRoom1").removeAttr("style");
            $("#childRoom1").removeAttr("style");
        }
        var currentnoOfRoom = $('#current_no_rooms').val();
        noOfRoom = parseInt(noOfRoom);
        currentnoOfRoom = parseInt(currentnoOfRoom);
        if (noOfRoom == 0) {
            if ($('#numberrroomRow').css('display') != 'none') {
                $('#current_no_rooms').val(1);
                $('#numOfroom').html('');
                $('#numberrroomRow').fadeOut();
                $('#ageRow1').fadeOut();
                $('#total_adult_child').html('');
            }
        }
        else {
            if (noOfRoom > currentnoOfRoom) {
                currentnoOfRoom++;
                var numOfroomTag = '';
                for (var num = currentnoOfRoom; num <= noOfRoom; num++) {
                    numOfroomTag += '<div id="field_total_adult_children' + num + '">' + '<div class="clearfix"></div>' + '<div style="width: 100%;">' + '<div id="numberrroomRow" class="numberroom"><label>Number Of Room</label> <label id="numberOfRoom' + num + '">' + num + '/' + noOfRoom + '</label></div>' + '<div class="col-sm-12">' + '<div class="form-group form_group_half">' + '<div id="adultRoom1" class="input-group select-no-rd select-wrapper">' + '<div class="input-group-addon">Adults</div>' + '<i class="fa fa-angle-down arrow" aria-hidden="true"></i>' + '<select id="chknoadult" class="no-radius select-form" name="total_adult[' + parseInt(num - 1) + ']">' +
                        totalAdultOption + '</select>' + '</div>' + '</div>' + '</div>' + '<div class="">' + '<div class="form-group form_group_half">' + '<div id="childRoom1" class="input-group select-no-rd select-wrapper">' + '<div class="input-group-addon">Children</div>' + '<i class="fa fa-angle-down arrow" aria-hidden="true"></i>' + '<select id="chknochild" class="no-radius select-form" name="total_child[' + parseInt(num - 1) + ']" onchange="javascript: displayAgeOfChildren2(this.value,' + num + ');">' +
                        totalChildOption + '</select>' + '</div>' + '</div>' + '</div>' + '<label id="ageRow' + num + '" style="display: none;" class="text-reser">Age of Children (Yrs)</label>' + '<div id="ageOfChildren' + num + '" style=""></div>' + '<input type="hidden" id="current_no_children' + num + '" value="0">' + '</div>' + '</div>';
                }
                $('#total_adult_child').append(numOfroomTag);
            }
            else {
                for (var num = noOfRoom + 1; num <= currentnoOfRoom; num++) {
                    $('#field_total_adult_children' + num).remove();
                }
            }
            $('#current_no_rooms').val(noOfRoom);
        }
        for (var i = 1; i <= noOfRoom; i++) {
            $('#numberOfRoom' + i).html(i + '/' + noOfRoom);
        }
    }
    else {
        $('#numberrroomRow').css({"display": "none"});
    }
    setPopupPosition();
}

function displayRoomList(noOfRoom) {
    // if(noOfRoom > 0) {
    //     $('#numberrroomRow').css({"display": "block"});
    // }
    // else {
    //     $('#numberrroomRow').css({"display": "none"});
    //     $('.tooltip_room').css({"display": "none"});
    // }
    //
    // setPopupPosition();
    var numberrroomRow = document.getElementById('numberrroomRow');
    if(noOfRoom >1){
//$('.engine').css({"top": "150px"});
        numberrroomRow.style.height = "332px";
        numberrroomRow.style.overflow = "scroll";
    }
    else if(noOfRoom > 0) {
        $('#numberrroomRow').css({"display": "block"});
        numberrroomRow.style.height = "auto";

    }

    else {
        $('#numberrroomRow').css({"display": "none"});
        $('.tooltip_room').css({"display": "none"});
//$('.engine').css({"top": "500px"});
    }
    setPopupPosition();
}

function setPopupPosition() {
    var scrollPosition = $(window).scrollTop();
    var elementOffset = $('#chknoofroom').offset().top;
    var elementDistance = (elementOffset - scrollPosition);
    var windowHeight = $(window).height();
    var popup_room_list = $('#popup_room_list').height();
    var bottomPosition = windowHeight - elementDistance;

    if(bottomPosition < popup_room_list) {
        $('#popup_room_list').addClass('popupTop');
    }
    else {
        // $('#popup_room_list').removeClass('popupTop');
    }
}


$(document).click(function(event) {
    if(!$(event.target).closest('.popup_content').length && !$(event.target).closest('#chknoofroom').length) {
        if ($('#numberrroomRow').css('display') != 'none') {
            $('#numberrroomRow').fadeOut();
        }
    }
});