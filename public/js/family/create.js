$(document).ready(function () {
    $('#proceed').click(function () {
        $('.family_details').hide();
        $('.kt-portlet__head-title').html("Add Members");
        $('.family_users').removeAttr('hidden');
    });
});
