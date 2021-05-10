/*
Main APP JS
Developer : Little Gyaani
*/
$(document).ready(function () {

    //First Console Message to Stucker
    if (typeof console != "undefined") {
        console.log("Wise Education - Official Website. (c) 2021 Wise Education Group.");
        console.log("Hello Stucker! Thank you for digging-in 😜. This is Little Gyaani 😎, developer of this Portal. Want to hire me!");
        console.log("Connect with me : BRAHMA | P/WA : 9853 233 951 | E : bmohanty@live.com | W : www.meetlittlegyaani.com | twitter.com/LittleGyaani | facebook.com/brahmanmohanty | linkedin.com/in/brahmanmohanty");
    }

    var appUri = $('meta[name=app-url]').attr('content');
    var apiUri = appUri + '/api/web/v1/';

    //Open Toast
    launch_toast();

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
    function launch_toast() {
    var x = document.getElementById("toast")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }

});