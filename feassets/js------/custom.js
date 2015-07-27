
jQuery(document).ready(function ($) {
   


$('#mobnav-btn').click(
        function () {
            $('.sf-menu').toggleClass("xactive");
        });



// TRIGGER DROP DOWN SUBS
$('.mobnav-subarrow').click(
        function () {
            $(this).parent().toggleClass("xpopdrop");
        });


    /**
     * New Subject Adder
     */
    $('#addonlineapplicantbtn').click(function (e) {
        e.preventDefault();
		//alert('altab');
        var form = $('#addonlineapplicantForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addonlineapplicantajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            async: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

});