
jQuery(document).ready(function ($) {
    $('#studentSearch').submit(function (e) {
        e.preventDefault();
        var error = 0;
        var loc = window.location.href;
        var url = baseurl + 'searchstudent';
        var thisForm = this;
        var formData = new FormData(thisForm);
        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                if(data.status == 1){
                    $('ul.allstdRes').remove();
                    $('ul.pagination').remove();
                    alert(data.stdcount);
                    $("#studentSearch").after("<ul class='allstdRes'>" + data.msg + "</ul>");;
                }else{
                    $("#errormsg").html(data.msg + " ").show().delay(3000).fadeOut();
                }
               // alert(data.msg);
               // $("#successmsg").html(data.msg + "  ").show().delay(3000).fadeOut();
            },
            error: function (data) {
               // 
            },
        });
       


    });


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
        var error = 0;
        var thisForm = this;
        var mobile_match = /^\d{11}$/;
        var numberCheck = /^[1-9]\d*(\.\d+)?$/;
        var namebangla = $('[name=namebangla]').val();
        var nameenglish = $('[name=nameenglish]').val();
        var fathernamebangla = $('[name=fathernamebangla]').val();
        var fathernameenglish = $('[name=fathernameenglish]').val();
        var mothernamebangla = $('[name=mothernamebangla]').val();
        var mothernameenglish = $('[name=mothernameenglish]').val();
        var birthdate = $('[name=birthdate]').val();
        var mobileno = $('[name=mobileno]').val();
        var permanentaddress = $('[name=permanentaddress]').val();
        var presentaddress = $('[name=presentaddress]').val();
        var gurdianmobileno = $('[name=gurdianmobileno]').val();
        var nationality = $('[name=nationality]').val();
        var gender = $('[name=gender]').val();
        var religion = $('[name=religion]').val();
        var classname = $('[name=class]').val();
        var section = $('[name=section]').val();
        var photo = $('[name=photo]').val();
        if (!namebangla) {
            error = 1;
            alert("Name in Bangla is required");
        } else if (!nameenglish) {
            error = 1;
            alert("Name in English is required");
        } else if (!fathernamebangla) {
            error = 1;
            alert("Father Name in Bangla is required");
        } else if (!fathernameenglish) {
            error = 1;
            alert("Father Name in English is required");
        } else if (!mothernamebangla) {
            error = 1;
            alert("Mother Name in Bangla is required");
        } else if (!mothernameenglish) {
            error = 1;
            alert("Mother Name in English is required");
        } else if (!birthdate) {
            error = 1;
            alert("Birthdate is required");
        } else if (!mobileno || !(mobile_match.test(mobileno))) {
            error = 1;
            alert("11 Digit  mobile number required");
        } else if (!permanentaddress) {
            error = 1;
            alert("Permanent Address is required");
        } else if (!presentaddress) {
            error = 1;
            alert("Present Address is required");
        } else if (!gurdianmobileno || !(mobile_match.test(gurdianmobileno))) {
            error = 1;
            alert("11 Digit Gurdian mobile number is required");
        } else if (!nationality) {
            error = 1;
            alert("Nationality is required");
        } else if (!gender) {
            error = 1;
            alert("Select Your Gender");
        } else if (religion == '') {
            error = 1;
            alert("Select Your Religion");
        }
        else if (classname == '') {
            error = 1;
            alert("Select Your Class");
        }
        else if (section == '') {
            error = 1;
            alert("Select Section");
        } else if (!photo) {
            error = 1;
            alert("Select Your photo");
        } else {
            error = 0;
            //alert("Success");
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
        }
        return false;
    });


    /**
     * Contact Form Validation
     */
    $('#emailsendform').submit(function (e) {
        e.preventDefault();
        //alert("Saddam");
        var error = 0;
        var loc = window.location.href;
        var url = loc + '/contactajax';
        var thisForm = this;
        var mobile_match = /^\d{11}$/;
        var numberCheck = /^[1-9]\d*(\.\d+)?$/;
        var email_expression = /^([A-Za-z0-9!#$%^&*()._-]{3,200})@([A-Za-z. _]{3,600})\.([a-z]{2,15}(?:\.[a-z]{1,6})?)$/;
        var fullname = $('[name=fullname]').val();
        var mobileno = $('[name=mobileno]').val();
        var email = $('[name=email]').val();
        var subject = $('[name=subject]').val();
        var message = $('[name=message]').val();
        if (!fullname) {
            error = 1;
            alert("Name is required");
        } else if (!mobileno || !(mobile_match.test(mobileno))) {
            error = 1;
            alert("11 Digit  mobile number required");
        } else if (!email || !(email_expression.test(email))) {
            error = 1;
            alert("Valid Email is required");
        } else if (!message) {
            error = 1;
            alert("Message is required");
        } else {
            error = 0;
            //alert("Success");
        }





        var formData = new FormData(thisForm);



        if (!error) {
            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                dataType: 'json',
                        success: function (data) {
                            $("#successmsg").html(data.msg + "  ").show().delay(3000).fadeOut();
                        },
                error: function (data) {
                    $("#errormsg").html(data.msg + " ").show().delay(3000).fadeOut();
                },
            });
        }


    });


});