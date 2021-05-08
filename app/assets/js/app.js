/*
Main APP JS
Developer : Little Gyaani
*/
$(document).ready(function () {

    var appUri = $('meta[name=app-url]').attr('content');
    var apiUri = appUri + '/api/web/v1/';

    function searchToggle(obj, evt) {
        var container = $(obj).closest('.search-wrapper');
        if (!container.hasClass('active')) {
            container.addClass('active');
            evt.preventDefault();
        } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
    }

    //Address Autocomplete
    var options = {

        url: "https://autocomplete.geocoder.cit.api.here.com/6.2/suggest.json",

        getValue: "name",

        list: {
            match: {
                enabled: true
            },
            maxNumberOfElements: 6,

            showAnimation: {
                type: "slide",
                time: 300
            },
            hideAnimation: {
                type: "slide",
                time: 300
            }
        },

        theme: "round"

    };

    // $("#postalAddress").easyAutocomplete(options);

    /* Handle Form Submit */

    //Quick Contact Form
    $('#studentEnquiry').submit(function (e) {
        e.preventDefault();
        // console.log('yes');
        //Check for Select Values
        if ($('#countryChoice option:selected').val() === "") {
            console.log('Please select Country');
        }
        else if ($('#courseChoice option:selected').val() === "")
        {
            console.log('Please select Course');
        }
        else
        {
            // console.log('Proceed');
            // console.log($(this).serialize());
            //Send FORM Data
            $.ajax({
                'type': 'POST',
                'url': apiUri + 'process-form?req=qc',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (quickContactResponse) {
                    console.log(quickContactResponse);
                }
            });
        }
    });

    //Quick Contact Form
    $('#contactForm').submit(function (e) {
        e.preventDefault();
            //Send FORM Data
            $.ajax({
                'type': 'POST',
                'url': apiUri + 'process-form?req=ge',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (enquiryResponse) {
                    console.log(enquiryResponse);
                }
            });
    });

});