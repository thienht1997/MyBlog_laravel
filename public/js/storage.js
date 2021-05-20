$(document).ready(function () {
    $("#create_form").hide();
    var isShow = false;
    $("#create-link").click(function () {
        if (isShow == false) {
            isShow = true;
            $("#create_form").show();
            $("#create_link").text('Hide Form');
        } else if (isShow == true) {
            $("#create_form").hide();
            isShow = false;
            $("#create_link").text('Show Form');
        }
    });
});

setTimeout(function () {
    $('#success').hide()
}, 2000);

function changeImportantLevel(rowId){
    important_level = $("#link-important" + rowId.slice(6)).val();
    important_level++;
    important_level%3 == 0 ?  $('#' + rowId).css('color', 'red') : (important_level%3 == 1 ?  $('#' + rowId).css('color', 'green') : $('#' + rowId).css('color', 'yellow'));
    return $.ajax({
        type: 'GET',
        url: '/api/ajaxChangeImportantLevel/' + rowId.slice(6) + '/' + important_level,
        dataType: 'json',
        success: function(response){
            
        }
    });
};