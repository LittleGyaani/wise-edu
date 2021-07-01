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

    $('.js-dropzone').each(function () {
        // var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
        Dropzone.autoDiscover = false;
        var galleryDropzone = new Dropzone('#attachFilesLabel',{
            url: apiURI + decodeURIComponent('?action=upload&context=gallery'),
            paramName: "file",
            
            previewTemplate: $('<div>' +
                '  <div class="col mt-2 h-100 mb-5">' +
                '    <div class="dz-preview dz-file-preview">' +
                '      <div class="d-flex justify-content-end dz-close-icon">' +
                '        <small class="tio-clear" data-dz-remove></small>' +
                '      </div>' +
                '      <div class="dz-details media">' +
                '        <div class="dz-img">' +
                '         <img class="img-fluid" data-dz-thumbnail>' +
                '        </div>' +
                '        <div class="media-body dz-file-wrapper">' +
                '         <h6 class="dz-filename">' +
                '          <span class="dz-title" data-dz-name></span>' +
                '         </h6>' +
                '         <div class="dz-size" data-dz-size></div>' +
                '        </div>' +
                '      </div>' +
                '      <div class="dz-progress progress">' +
                '        <div class="dz-upload progress-bar bg-success" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>' +
                '      </div>' +
                '      <div class="d-flex align-items-center">' +
                '        <div class="dz-success-mark">' +
                '          <span class="tio-checkmark-circle"></span>' +
                '        </div>' +
                '        <div class="dz-error-mark">' +
                '          <span class="tio-checkmark-circle-outlined"></span>' +
                '        </div>' +
                '        <div class="dz-error-message">' +
                '          <small data-dz-errormessage></small>' +
                '        </div>' +
                '      </div>' +
                '    </div>' +
                '  </div>' +
                '</div>').html(),
            parallelUploads: 3,
            sending: function (file, xhr, formData) {
                // console.log(formData);
                var galleryTags = JSON.stringify($('#galleryTags').serializeArray());
                galleryTags = galleryTags.replace('\/', '');
                console.log($.parseJSON(galleryTags));
                formData.append("tags", (galleryTags));
            },
            uploadMultiple: true,
            acceptedFiles: '.png,.jpeg,.jpg',
            autoProcessQueue: false,
            success: function (file, response) {
                // console.log(response);
                if (response.code === 'success')
                    runSwal('success', response.message), window.location.reload(2000);
                
            }
        });
        $('#galleryUpload').submit(function (e) {
            e.preventDefault();
            // console.log($('#galleryUpload').serialize());
            var galleryTags = $('#galleryTags').val();
            if (galleryTags != '')
                galleryDropzone.processQueue();
            else
                toastr.error('Select atleast one tag for the Gallery.');
            
            if (!galleryDropzone.files || !galleryDropzone.files.length)
                toastr.error('Select atleast one file to upload for Gallery.');
            
        });
    });

    /* FAQ Page */

    $("#addRow").click(function () {
        var html = '';
        html += '<div class="row faqaddon form-group">';
        html += '<div class="col-lg-5"><label> FAQ Question</label><input type="text" class="form-control form-control-hover-light" name="faq_question[]" placeholder="Type Question here" aria-label="FAQ Question" required /></div>';
        html += '<div class="col-lg-5"><label>FAQ Answer</label><input type="text" class="form-control form-control-hover-light" name="faq_answer[]" placeholder="Type Answer here" aria-label="FAQ Answer" required /></div>';
        html += '<div class="col-lg-2"><label>Action(-)</label><br /><button type="button" class="btn removeRow btn-danger">-</button></div>';
        html += '</div>';

        $('#faqsection').append(html);
    });

    // remove row
    $(document).on('click', '.removeRow', function () {
        $(this).closest('.faqaddon').remove();
    });

    $('#addFAQ').submit(function (e) {
        e.preventDefault();

        var faqQuestions = [];
        $('input[name="faq_question[]"]').each(function () {
            faqQuestions.push(this.value);
        });
        var faqAnswers = [];
        $('input[name="faq_answer[]"]').each(function () {
            faqAnswers.push(this.value);
        });

        $.ajax({
            type: 'POST',
            url: apiURI + '?action=add&context=faq',
            data: { faqQS : faqQuestions, faqAS : faqAnswers },
            dataType: 'json',
            success: function (faqAddResponse) {
                // console.log(faqAddResponse);
                if (faqAddResponse.status === 200)
                    runSwal('success', faqAddResponse.message), window.location.reload(2000);
                else
                    runSwal('error', faqAddResponse.message);
            }

        });
        
    });

    // $(function () {
    //     //Dropzone class
    //     var myDropzone = new Dropzone(".drp", {
    //         url: apiURI,
    //         paramName: "file",
    //         parallelUploads: 3,
    //         uploadMultiple: true,
    //         acceptedFiles: '.png,.jpeg,.jpg',
    //         autoProcessQueue: true,
    //         success: function (file, response) {
    //             console.log(response);
    //         }
    //     });

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
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    //Initialize Select2
    // $('.select2').select2({
    //     customClass: '.custom-select',
    //     width: '100%',
    //     singleMultipleActiveClass: 'active',
    // });

    $('.js-select2-custom').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
    });

    $('#profileCoverUplaoder').change(function () {
        const file = this.files[0];
        // console.log(file);
        if (file)
        {
            var fileName = file.name;
            var ext = fileName.split('.').pop().toLowerCase();
            if (jQuery.inArray(ext, ['png', 'jpg', 'jpeg', 'webp']) == -1) {
                toastr.error('File should only contain png/jpg/jpeg/webp extensions.');
            }
            let reader = new FileReader();
            reader.onload = function (event)
            {
                var image = new Image();
                image.src = event.target.result;
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    // console.log(height);
                    // console.log(width);
                    if ((height >= 1400) || (width >= 800))
                    {
                        $('#universityCoverImg').attr('src', event.target.result);
                        var uid = $('#universityId').val();
                        var uname = $('#universityName').val();
                        var formData = new FormData();
                        formData.append("file", file);
                        formData.append("uid", uid);
                        formData.append("uname", uname);
                        $.ajax({
                            type: 'POST',
                            url: apiURI + '?action=update&context=university-cover',
                            data: formData,
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType: 'json',
                            success: function (universityCoverImageUpload) {

                                if (universityCoverImageUpload.status === 200)
                                    toastr.success(universityCoverImageUpload.message);
                                else
                                    toastr.error(universityCoverImageUpload.message);
                            }

                        });
                    }
                    else
                    {
                        toastr.error('Please upload an image atleast with 1400x800 or more dimension only.');
                        // $('#profileCoverUplaoder').click();
                    }
                    // if (height < 1100 || width < 750) {
                    //     alert("At least you can upload a 1100*750 photo size.");
                    //     return false;
                    // } else {
                    //     alert("Uploaded image has valid Height and Width.");
                    //     return true;
                    // }
                };
                // console.log(event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });
    
    $('.js-tagify').each(function () {

        var input = document.querySelector('input[name=gallery_tags]');

        $.post(decodeURIComponent(apiURI + '?action=fetch&context=tags'), function (tagsData) {
            // console.log(tagsData.data);
            
            if (tagsData.status === 200)
            {
                var galleryTags = new Array();
                var tags = tagsData.data;
                galleryTags = tags.split(',');
                // console.log(galleryTags);
                // console.log($.uniqueSort(galleryTags));
                    tagify = new Tagify(input, {
                        // enforceWhitelist: true,
                        hasManualList: true,
                        maxTags: 2,
                        dropdown: {
                            maxItems: 10,           // <- mixumum allowed rendered suggestions
                            classname: "tagify__dropdown__menu", // <- custom classname for this dropdown, so it could be targeted
                            enabled: 0,             // <- show suggestions on focus
                            closeOnSelect: true    // <- do not hide the suggestions dropdown once an item has been selected
                        },
                        delimiters: null,
                        whitelist: galleryTags,
                        // callbacks: {
                        //     add: console.log,  // callback when adding a tag
                        //     remove: console.log   // callback when removing a tag
                        // }
                    });
            }
            else
            {
                new Tagify(input, {
                    // enforceWhitelist: true,
                    hasManualList: true,
                    maxTags: 2,
                    dropdown: {
                        maxItems: 10,           // <- mixumum allowed rendered suggestions
                        classname: "tagify__dropdown__menu", // <- custom classname for this dropdown, so it could be targeted
                        enabled: 0,             // <- show suggestions on focus
                        closeOnSelect: true    // <- do not hide the suggestions dropdown once an item has been selected
                    },
                    delimiters: null,
                    // whitelist: galleryTags,
                    // callbacks: {
                    //     add: console.log,  // callback when adding a tag
                    //     remove: console.log   // callback when removing a tag
                    // }
                });
                // var tagify = $.HSCore.components.HSTagify.init($(this));
            }
        });
        
        // var tagify = $.HSCore.components.HSTagify.init($(this));
                
    });

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

    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#avatarImg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#avatarUploader').change(function (e) {
        e.preventDefault();
        readURL(this);
    });

    $('#studentTestimonial').summernote({
        height: 250,
        // placeholder: 'Testimonial here...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline',]],
        ]
    });

    $('#studentTestimonialForm').submit(function () {
        // e.preventDefault();
        // alert('yes');
        // console.log($(this).serialize());
        var stfd = new FormData();
        var stdImg = $('#avatarUploader')[0].files[0];
        // console.log(stdImg);
        var stdName = $('#studentName').val();
        var stdTestimonial = $('#studentTestimonial').summernote('code').replace(/\s+/g, '');
        var stdDesignation = $('#studentDesignation').val();
        // console.log(stdTestimonial);
        stfd.append('file', stdImg);
        stfd.append('std_name', stdName);
        stfd.append('std_testimonial', stdTestimonial);
        stfd.append('std_designation', stdDesignation);
        // exit;
        // console.log($('#studentTestimonial').summernote('isEmpty'));
        if (stdTestimonial.length <= 0)
        {
            $('#studentTestimonial').summernote('focus');
            toastr.error('Please add content to testimonial.');
        }
        else
        {
            $.ajax({
                type: 'POST',
                url: apiURI + '?action=add&context=testimonial',
                data: stfd,
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function (testimonailAddResponse) {
                    // console.log(testimonailAddResponse);
                    runSwal(testimonailAddResponse.code, testimonailAddResponse.message);
                }
            });
        }
    });

    //Start All Functionalities Here

    /* Admin Login */
    $('#adminLogin').submit(function (e) {
        e.preventDefault();
        var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var submitBtn = $('#adminLogin :input[type=submit]');
        var email = $(this).find('input[type=email]').val();
        var pass = $(this).find('input[type=password]').val();

        if ((email != '') && (pass != ''))
        {
            if (emailRegex.test(email))
            {
                $.ajax({
                    type: 'POST',
                    url: apiURI + '?action=login&context=admin',
                    data: $(this).serialize(),
                    beforeSend: function () { submitBtn.attr('disabled', 'disabled'); submitBtn.text('Logging in...'); },
                    dataType: 'json',
                    success: function (adminLoginResponse) {
                        setTimeout(function () {
                            if (adminLoginResponse.status === 401) {
                                toastr.success(adminLoginResponse.message);
                                setTimeout(function () {
                                    window.location.reload();
                                }, 3000);
                            }
                            else {
                                toastr.error(adminLoginResponse.message);
                                submitBtn.attr('disabled', false);
                                submitBtn.text('Sign in');
                            }
                        }, 4000);
                        // console.log(adminLoginResponse);
                    }

                });
            }
            else
            {
                toastr.error('Please type a vaild Email address.');
                $(this).find('input[type=email]').focus();
            }
        }
        else
        {
            toastr.error('Both fields must be filled');
        }
    });

    /* Country CRUD */
    
    $('#save').click(function(){
        var mysave = $('#summernote').summernote('code');
        $('#content').val(mysave);
    });


    /* University CRUD */

    $('#universityName').keyup(function (e) {
        // console.log('e');
        var k = e.keyCode || e.which;
        // e.preventDefault();
        var univRegex = ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        var universityURI = $('#universityUrl');
        var universityName = $.trim($(this).val());
        //$(this).val(universityName.replace(/^[a-z][a-z\s]*$/, ''));
        if (!univRegex)
            return false;
        universityURI.val(universityName.replace(/\s+/g, '-').toLowerCase());
    });

    $('#universityAdd').submit(function (e) {
        e.preventDefault();
        // console.log($(this).serialize());
        var universityBasicData = '';
        universityBasicData = $('#universityAdd').serializeArray();
        $.ajax({
            type: 'POST',
            url: apiURI + '?action=add&context=university',
            data: universityBasicData,
            dataType: 'json',
            success: function (universityAddResponse) {
                // console.log(universityAddResponse);
                if (universityAddResponse.status === 200)
                    runSwal('success', universityAddResponse.message), $('#universityAdd')[0].reset();
                else
                    runSwal('error', universityAddResponse.message)
            }

        });
    });

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