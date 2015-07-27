jQuery(document).ready(function ($) {
	
	$('.datepicker').datepicker({
       // format: "dd/mm/yyyy"
    });
	
    /**
     * New Web Page Adder
     */
    $('#createpagebtn').click(function () {
        var form = $('#addwebpageForm');
        var url = baseurl + 'addwebpageajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: form.serialize(),
            success: function (data) {
                //console.log(data.status);
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            }
        });
    });

    /**
     * New Student Adder
     */
    $('#addstudentbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addstudentForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addstudentajax';
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
	
	/**
     * New Talented Student Adder
     */
    $('#addtalentedstudentbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addtalentedstudentForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addtalentedstudentajax';
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
	
	/**
     * New Academic Councillor Adder
     */
    $('#addacademiccouncillorbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addacademiccouncillorForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addacademiccouncillorajax';
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

    /**
     * New Teacher Adder
     */
    $('#addteacherbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addteacherForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addteacherajax';
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

    /**
     * New Applicant Adder
     */
    $('#addapplicantbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addapplicantForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addapplicantajax';
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

    /**
     * New Class Adder
     */
    $('#addclassbtn').click(function () {
        var form = $('#addclassForm');
        var url = baseurl + 'addclassajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: form.serialize(),
            success: function (data) {
                //console.log(data.status);
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            }
        });
    });
    /**
     * New Section Adder
     */
    $('#addsectionbtn').click(function () {
        var form = $('#addsectionForm');
        var url = baseurl + 'addsectionajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: form.serialize(),
            success: function (data) {
                //console.log(data.status);
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            }
        });
    });

    /**
     * Save Settings
     */
    /*$('#settingsFormInsInfo').submit(function (e) {
     $('#codeigniter_profiler').remove();
     e.preventDefault();
     var url = baseurl + 'settingsinsinfoajax';
     var thisForm = this;
     var formData = new FormData(thisForm);
     
     $.ajax({
     type: "POST",
     url: url,
     data: formData,
     processData: false,
     contentType: false,
     mimeType: "multipart/form-data",
     dataType: 'json',
     success: function (html) {
     alert("Saddam");
     }
     });
     });*/





    $('#savesettingsinsinfobtn').click(function (e) {
        e.preventDefault();
        var form = $('#settingsFormInsInfo');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'settingsinsinfoajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert($msg);
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

    $('#savesettingsinsadminbtn').click(function (e) {
        e.preventDefault();
        var form = $('#savesettingsinsadminForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'savesettingsinsadminajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert($msg);
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

    $('#logosettingsbtn').click(function (e) {
        e.preventDefault();
        var form = $('#logosettingsForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'logosettingsajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert($msg);
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

    $('#instituteheaderbtn').click(function (e) {
        e.preventDefault();
        var form = $('#instituteheaderForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'instituteheaderajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert($msg);
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

    $('#adminphotobtn').click(function (e) {
        e.preventDefault();
        var form = $('#adminphotoForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'adminphotoajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert($msg);
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });
	
	$('#headteacherbtn').click(function (e) {
        e.preventDefault();
        var form = $('#headteacherForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'headteacherajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert($msg);
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
				$("#headteacher").load(window.location + " #headteacher");
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

    $('#widgetsbtn').click(function (e) {
        e.preventDefault();
        var form = $('#widgetsForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'widgetsajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert($msg);
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });


    /**
     * New Staff Adder
     */
    $('#addstaffbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addstaffForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addstaffajax';
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


    /**
     * New Book Adder
     */
    $('#addbookbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addbookForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addbookajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            async: false,
            success: function (data) {
                $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
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

    /**
     * New Download Adder
     */
    $('#adddownloadbtn').click(function (e) {
        e.preventDefault();
        var form = $('#adddownloadForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'adddownloadajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            async: false,
            success: function (data) {
                $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
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
    /**
     * Edit Book
     */
    $('#editbookbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editbookForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editbookajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * New Gallery Adder
     */
    $('#addgallerybtn').click(function (e) {
        e.preventDefault();
        var form = $('#addgalleryForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addgalleryajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            async: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " Gallery successfully Added").show().delay(3000).fadeOut();
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

    /**
     * Edit Gallery
     */
    $('#editgallerybtn').click(function (e) {
        e.preventDefault();
        var form = $('#editgalleryForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editgalleryajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * New Photo Adder
     */
    $('#addphotobtn').click(function (e) {
        e.preventDefault();
        var form = $('#addphotoForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addphotoajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            async: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Add").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Photo
     */
    $('#editphotobtn').click(function (e) {
        e.preventDefault();
        var form = $('#editphotoForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editphotoajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Student
     */
    $('#editstudentbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editstudentForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editstudentajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.errormsg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });
	
	/**
     * Edit Student
     */
    $('#edittalentedstudentbtn').click(function (e) {
        e.preventDefault();
        var form = $('#edittalentedstudentForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'edittalentedstudentajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.errormsg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

	/**
     * Edit Academic Councillors
     */
    $('#editacademiccouncillorbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editacademiccouncillorForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editacademiccouncillorajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.errormsg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });
	
    /**
     * Edit Teacher
     */
    $('#editteacherbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editteacherForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editteacherajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Applicant
     */
    $('#editapplicantbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editapplicantForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editapplicantajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Staff
     */
    $('#editstaffbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editstaffForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editstaffajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * New Subject Adder
     */
    $('#addsubjectbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addsubjectForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addsubjectajax';
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

    /**
     * New Credit Adder
     */
    $('#addcreditbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addcreditForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addcreditajax';
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

    /**
     * New Notice Adder
     */
    $('#addnoticebtn').click(function (e) {
        e.preventDefault();
        var form = $('#addnoticeForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addnoticeajax';
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
	
	/**
     * New Others Result Adder
     */
    $('#addothersresultbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addothersresultForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addothersresultajax';
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
    /**
     * New Debit Adder
     */
    $('#adddebitbtn').click(function (e) {
        e.preventDefault();
        var form = $('#adddebitForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'adddebitajax';
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
    /**
     * New Financial Department Adder
     */
    $('#addfinancialdepartmentbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addfinancialdepartmentForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addfinancialdepartmentajax';
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

    /**** Add Routine***/
    // $('.sgroup').hide();
    $('#addroutine').submit(function (e) {
        e.preventDefault();
        /*$('.controls [name=class]').change(function(){
         var clas = $(this).find("option:selected").val();
         if((clas == "Nine") || (clas == "Ten")  || (clas == "X-Ten") || (clas == "Eleven") || (clas == "Twelve")){
         $('.sgroup').show()
         }else{
         $('.sgroup').hide()
         }
         });*/

        var form = $('#addroutine');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'routineajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });

    });

    /**
     * New News Adder
     */
    $('#addnewsbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addnewsForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addnewsajax';
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



    /**
     * Edit Subject
     */
    $('#editsubjectbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editsubjectForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editsubjectajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Credit
     */
    $('#editcreditbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editcreditForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editcreditajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Debit
     */
    $('#editdebitbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editdebitForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editdebitajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });


    /**
     * Edit Notice
     */
    $('#editnoticebtn').click(function (e) {
        e.preventDefault();
        var form = $('#editnoticeForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editnoticeajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });
	
	/**
     * Edit Others Result
     */
    $('#editothersresultbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editothersresultForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editothersresultajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Financial Department
     */
    $('#editfinancialdepartmentbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editfinancialdepartmentForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editfinancialdepartmentajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Section
     */
    $('#editsectionbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editsectionForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editsectionajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Class
     */
    $('#editclassbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editclassForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editclassajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit News
     */
    $('#editnewsbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editnewsForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editnewsajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });
	
	/**
     * Edit webpage
     */
    $('#editwebpagebtn').click(function (e) {
        e.preventDefault();
        var form = $('#editwebpageForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editwebpageajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    /**
     * Edit Download
     */
    $('#editdownloadbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editdownloadForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editdownloadajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });


    // Routine by Saddam
    var currentUrl = window.location.href;
    var lastSegment = currentUrl.split('/').pop();
    if ((lastSegment == "addroutine") || (lastSegment == "viewroutine")) {
        var routineUrl = baseurl + 'getroutineajax';
        var activeClass = $('ul.classSideMenu li.active a').attr('href');
        var activeHrefsep = activeClass.split('#');
        activeId = activeHrefsep[1];
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: routineUrl,
            data: {classid: activeId},
            success: function (html) {
                var routine = html.success;
                if (routine) {
                    routine = routine;
                } else {
                    routine = "<p style='font-weight:bold; color:#ff0000;'>There is no routine right now</p>";
                }
                $('#addroutine_' + activeId).after("<div class='dynamicvroutine'>" + routine + "</div>");
                //$('.dynamicvroutine').load( "addroutine .dynamicvroutine" );
            }
        });

        $('ul.classSideMenu li a').click(function (e) {
            e.preventDefault();
            var attrhref = $(this).attr('href');
            var sep = attrhref.split('#');
            classid = sep[1];
            $('.dynamicvroutine').remove();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: routineUrl,
                data: {classid: classid},
                success: function (html) {
                    var routine = html.success;
                    if (routine) {
                        routine = routine;
                    } else {
                        routine = "<p style='font-weight:bold; color:#ff0000;'>There is no routine right now</p>";
                    }
                    $('#addroutine_' + classid).after("<div class='dynamicvroutine'>" + routine + "</div>");
                }
            });
        });
    }

    if ((lastSegment == "attendance")) {
        $('ul.classSideMenu li a').click(function (e) {
            e.preventDefault();
            var attrhref = $(this).attr('href');
            var sep = attrhref.split('#');
            classid = sep[1];
            $('.dynamicvroutine').remove();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: routineUrl,
                data: {classid: classid},
                success: function (html) {
                    var routine = html.success;
                    if (routine) {
                        routine = routine;
                    } else {
                        routine = "<p style='font-weight:bold; color:#ff0000;'>There is no routine right now</p>";
                    }
                    $('#addroutine_' + classid).after("<div class='dynamicvroutine'>" + routine + "</div>");
                }
            });
        });
    }


    /**** Add Routine***/
// $('.sgroup').hide();
    $('#addroutine').submit(function (e) {
        e.preventDefault();
        /*$('.controls [name=class]').change(function(){
         var clas = $(this).find("option:selected").val();
         if((clas == "Nine") || (clas == "Ten")  || (clas == "X-Ten") || (clas == "Eleven") || (clas == "Twelve")){
         $('.sgroup').show()
         }else{
         $('.sgroup').hide()
         }
         });*/

        var form = $('#addroutine');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'routineajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });

    });


    /* $('span#testSpan_1').click(function (e) {
     alert("Saddam"); 
     });*/

    $('.dynamicaddroutine').submit(function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        //alert(formId);
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'routineajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

    $('.editroutinedy').submit(function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        //alert(formId);
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'editroutineajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

    $('.generetaeresult').submit(function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        //alert(formId);
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'generateresultajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });


    $('.addresult').submit(function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        //alert(formId);
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'addresultajax';
        var activeClass = $('ul.classSideMenu li.active a').attr('href');
        var activeHrefsep = activeClass.split('#');
        activeId = activeHrefsep[1];
        $('.dynamicvroutine').remove();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (html) {
                //var res = html.success;
                var status = html.status;
                //alert(res);
                var msg = html.success;
                if (msg) {
                    var res = msg;
                } else {
                    res = "<p style='font-weight:bold; color:#ff0000;'>Please generate results first</p>";
                }
                $('.showRoutineClass').html("<div class='dynamicvroutine'>" + res + "</div>");
            },
            error: function (html) {

            },
        });
    });
    
    $('.viewresultsub').submit(function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        //alert(formId);
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'viewresultajax';
        var activeClass = $('ul.classSideMenu li.active a').attr('href');
        var activeHrefsep = activeClass.split('#');
        activeId = activeHrefsep[1];
        $('.dynamicvroutine').remove();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (html) {
                //var res = html.success;
                var status = html.status;
                //alert(res);
                var msg = html.success;
                if (msg) {
                    var res = msg;
                } else {
                    res = "<p style='font-weight:bold; color:#ff0000;'>There is no routine right now</p>";
                }
                $('.showRoutineClass').html("<div class='dynamicvroutine'>" + res + "</div>");
            },
            error: function (html) {

            },
        });
    });

    $('.addattendence').submit(function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        //alert(formId);
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'attendanceajax';
        var activeClass = $('ul.classSideMenu li.active a').attr('href');
        var activeHrefsep = activeClass.split('#');
        activeId = activeHrefsep[1];
        $('.dynamicvroutine').remove();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (html) {
                //var res = html.success;
                var res = html.status;
                //alert(res);
                var res = html.success;
                if (res) {
                    res = res;
                } else {
                    res = "<p style='font-weight:bold; color:#ff0000;'>There is student right now</p>";
                }
                $('.showRoutineClass').html("<div class='dynamicvroutine'>" + res + "</div>");
            },
            error: function (html) {

            },
        });
    });


    /*$('input.editres').click(function (e) {
     alert("success"); 
     });
     */

    /* $('body').on('blur', '.marksupdate', function (e) {
     var marks = $(this).val();
     var resultid = this.id;
     var student_marks = resultid + "_" + marks;
     $(this).next(".hiddestudennmark").val(student_marks);
     });*/


    $('body').on('blur', '.commonmarks', function (e) {
        var marks = $(this).val();
        var resultid = this.id;
        var resulttype = $(this).attr('data');
        var url = baseurl + 'resultchangeajax';
        $.ajax({
            type: "POST",
            url: url,
            data: {marks: marks,resultid: resultid,resulttype: resulttype},
            dataType: 'json',
            success: function (html) {
                 var res = html.msg;
                 //$("#successmsg").html(res + " successfully Updated").show().delay(3000).fadeOut();
                 //$('.showRoutineClass').html("<div class='dynamicvroutine'>" + res + "</div>");
            },
            error: function (html) {

            },
        });


        //alert(resultid);
        //var objectivemarks = resultid + "_" + marks;
        //$(this).next(".hiddenobjectivemarks").val(objectivemarks);
    });

    /*$('body').on('blur', '.objectivemarks', function (e) {
     var marks = $(this).val();
     var resultid = this.id;
     var objectivemarks = resultid + "_" + marks;
     $(this).next(".hiddenobjectivemarks").val(objectivemarks);
     });
     
     $('body').on('blur', '.writtenmarks', function (e) {
     var marks = $(this).val();
     var resultid = this.id;
     var writtenmarks = resultid + "_" + marks;
     $(this).next(".hiddenwrittenmarks").val(writtenmarks);
     });
     
     $('body').on('blur', '.practicalmarks', function (e) {
     var marks = $(this).val();
     var resultid = this.id;
     var practicalmarks = resultid + "_" + marks;
     $(this).next(".hiddenpracticalmarks").val(practicalmarks);
     });*/

    $('body').on('change', '#allcheck', function (e) {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });

    $('body').on('change', '.absencecheck', function (e) {
        $(this).prop('checked', $(this).prop("checked"));
    });


    $('body').on('submit', '.sendnotification', function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'sendnotification';
        var not = $("input[name='absencenotify[]']:checked").val();
        if (not) {
            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
                },
            });
        } else {
        }
    });
    $('body').on('submit', '.updateresult', function (e) {
        e.preventDefault();
        var formId = $(this).closest("form").attr('id');
        var formData = new FormData($('#' + formId)[0]);
        var url = baseurl + 'updateresult';
        //alert(formId);
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
            },
        });
    });

});


function deletestudent(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletestudent/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewstudents").load(window.location + " #viewstudents");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletetalentedstudent(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletetalentedstudent/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewtalentedstudents").load(window.location + " #viewtalentedstudents");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deleteacademiccouncillor(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deleteacademiccouncillor/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewacademiccouncillors").load(window.location + " #viewacademiccouncillors");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deleteteacher(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deleteteacher/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewteachers").load(window.location + " #viewteachers");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletestaff(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletestaff/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewstaffs").load(window.location + " #viewstaffs");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deleteclass(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deleteclass/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewclasses").load(window.location + " #viewclasses");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletesection(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletesection/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewsections").load(window.location + " #viewsections");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletebook(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletebook/' + id;
            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                url: url,
                data: id,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    //alert($msg);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewbooks").load(window.location + " #viewbooks");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
                },
            });

        } else {
            return false;
        }
    });
}

$('#savesettingsinsinfobtn').click(function (e) {
    e.preventDefault();
    var form = $('#settingsFormInsInfo');
    var formData = new FormData($(form)[0]);
    var url = baseurl + 'settingsinsinfoajax';
    //var form = $('#settingsForm');
    // var formData = new FormData($(form)[0]);
    //var url = baseurl + 'settingsinsinfoajax';
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            //alert($msg);
            $("#successmsg").html(data.msg + " successfully added").show().delay(3000).fadeOut();
        },
        error: function (data) {
            $("#errormsg").html(data.msg + " failed to add").show().delay(3000).fadeOut();
        },
    });
});

function deletephoto(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletephoto/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewphotos").load(window.location + " #viewphotos");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletegallery(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletegallery/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewgallerys").load(window.location + " #viewgallerys");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletesubject(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletesubject/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewsubjects").load(window.location + " #viewsubjects");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

// delete routine by saddam
function deleteRoutine(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            var url = baseurl + 'deleteroutine/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: {id: id},
                success: function (data) {
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletefinancialdepartment(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletefinancialdepartment/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewfinancialdepartments").load(window.location + " #viewfinancialdepartments");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletecredit(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletecredit/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewcredits").load(window.location + " #viewcredits");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletedebit(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletedebit/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewdebits").load(window.location + " #viewdebits");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletenotice(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletenotice/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewnotices").load(window.location + " #viewnotices");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deleteothersresult(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deleteothersresult/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewothersresults").load(window.location + " #viewothersresults");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletenews(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletenews/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewnewss").load(window.location + " #viewnewss");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deletedownload(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletedownload/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewdownloads").load(window.location + " #viewdownloads");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

function deleteapplicant(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deleteapplicant/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewapplicants").load(window.location + " #viewapplicants");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}
function deletewebpage(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletepage/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewwebpages").load(window.location + " #viewwebpages");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

/**
     * New Slide Adder
     */
    $('#addslidebtn').click(function (e) {
        e.preventDefault();
        var form = $('#addslideForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addslideajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            async: false,
            success: function (data) {
                $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
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

/**
     * Edit Slide
     */
    $('#editslidebtn').click(function (e) {
        e.preventDefault();
        var form = $('#editslideForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editslideajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });
	
	function deleteslide(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deleteslide/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewslides").load(window.location + " #viewslides");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

 /**
     * New Notice Adder
     */
    $('#addsyllabusbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addsyllabusForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addsyllabusajax';
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
	
	
	/**
     * Edit Notice
     */
    $('#editsyllabusbtn').click(function (e) {
        e.preventDefault();
        var form = $('#editsyllabusForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'editsyllabusajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });
	
	
	function deletesyllabus(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletesyllabus/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewsyllabuss").load(window.location + " #viewsyllabuss");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

	/**
     * New TC Adder
     */
    $('#addtcbtn').click(function (e) {
        e.preventDefault();
        var form = $('#addtcForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'addtcajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            async: false,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Submitted").show().delay(3000).fadeOut();
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
	
	function deletetc(id) {
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            //alert(id);

            var url = baseurl + 'deletetc/' + id;
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: url,
                data: id,
                success: function (data) {
                    //console.log(data.status);
                    $("#successmsg").html(data.msg).show().delay(3000).fadeOut();
                    $("#viewtcs").load(window.location + " #viewtcs");
                },
                error: function (data) {
                    $("#errormsg").html(data.msg + " Failed to Delete").show().delay(3000).fadeOut();
                }
            });
        } else {
            return false;
        }
    });
}

/**
     * Edit TC
     */
    $('#edittcbtn').click(function (e) {
        e.preventDefault();
        var form = $('#edittcForm');
        var formData = new FormData($(form)[0]);
        var url = baseurl + 'edittcajax';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data: formData,
            success: function (data) {
                $("#successmsg").html(data.msg + " Successfully Updated").show().delay(3000).fadeOut();
            },
            error: function (data) {
                $("#errormsg").html(data.msg + " Failed To Update").show().delay(3000).fadeOut();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });