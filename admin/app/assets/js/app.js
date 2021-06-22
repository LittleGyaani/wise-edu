$(document).ready(function () {

    // console.log('Loaded');
    var baseURI = $('meta[name="app-uri"]').attr("content");
    var apiURI = baseURI + "/api/web/v1";
    // Initiate Summernote JS
    $('.summer-note').summernote({
        tabsize: 2,
        height: 200,
        minHeight: null,
        maxHeight: null,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear'],],
            // ['color', ['color'],],
            ['para', ['ul', 'ol', 'paragraph'],],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video'],],
            ['view', ['fullscreen',]]
        ],
    });

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    //Initialize Select2
    $('.select2').select2();

    //Global SWAL Call
    function runSwal(status, message)
    {
        var swal_type = '';
        var swal_status = '';
        var swal_msg = '';

        swal_msg = message;
        swal_type = status;

        if (status === 'success')
            swal_status = 'Done';
        else
            swal_status = 'Error';
        
        Swal.fire({
            title: swal_status,
            text: swal_msg,
            icon: swal_type,
            showCancelButton: false,
            showConfirmButton: false,
            timer: 2000,
        });
    }

    //Start All Functionalities Here

    /* Admin Login */
    $('#adminLogin').submit(function (e) {
        e.preventDefault();
        if ($('#adminLogin :input').val() != '') {
            $.ajax({
                type: 'POST',
                url: apiURI + '?action=login&context=admin',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (adminLoginResponse) {
                    // console.log(adminLoginResponse);
                    if (adminLoginResponse.status === 401)
                    {
                        toastr.success(adminLoginResponse.message);
                        setTimeout(function () {
                            window.location.reload();
                        },3000);
                    }
                    else
                    {
                        toastr.error(adminLoginResponse.message);
                    }
                }

            });
        }
        else
        {
            toastr.error('Both fields must be filled');
        }
        
    });

    /*Country CRUD */
    
    $('#save').click(function(){
        var mysave = $('#summernote').summernote('code');
        $('#content').val(mysave);
    });

    // $('#universityName').keyup(function () {
    //     var universityURI = $('#universityUrl').val();
    //     var universityName = $(this).val();
    //     // console.log(universityURI);
    //     // console.log(universityName);
    //     if (universityName != '')
    //     {
    //         console.log('yes');
    //         $('#universityUrl').val(universityName.replace(' ', '-').toLowerCase());
    //     }
    //     else
    //     {
    //         console.log('no');
    //         $('#universityUrl').val('');
    //     }
    // });

    $('#universityEdit').submit(function (e) {
        e.preventDefault();
        // console.log('hi');
        // console.log($('#universityEdit').serialize());
        // console.log($('#universityProfile').summernote('code'));
        var universityBasicData = '';
        universityBasicData = $('#universityEdit').serializeArray();
        // var universityUpdateData = [];
        // universityUpdateData.push(
        //     { university_profile: $('#universityProfile').summernote('code') },
        //     { university_accomodation: $('#universityAccomodation').summernote('code') },
        //     { university_fee_structure: $('#universityFeeStructure').summernote('code') },
        //     { university_entry_requirement: $('#universityEntryRequirement').summernote('code') },
        //     { university_recognition: $('#universityRecognition').summernote('code') },
        // );
        // console.log(universityUpdateData);
        $.ajax({
            type: 'POST',
            url: apiURI+'?action=edit&context=university',
            data: universityBasicData,
            dataType: 'json',
            success: function (universityUpdateResponse) {
                // console.log(universityUpdateResponse);
                if (universityUpdateResponse.status === 200)
                    runSwal('success', universityUpdateResponse.message);
                else
                    runSwal('error', universityUpdateResponse.message)
            }

        });
    });

    $('#universityWebsiteUrl').keyup(function () {

        var oldvalue = $(this).val();
        var field = this;
        setTimeout(function () {
            if (field.value.indexOf('http://') !== 0) {
                $(field).val(oldvalue);
            }
        }, 1);
    });
    
});