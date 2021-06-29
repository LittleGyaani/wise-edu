/*
Main APP JS
Developer : Little Gyaani
*/
$ = jQuery.noConflict();
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
    //launch_toast();

    // Fancybox.bind("[data-fancybox]", {
    //     // Your options go here
    //     animated: true,
    //     preload: 4
    // });

    const opt = {
        animationDuration: 0.5, // in seconds
        callbacks: {
            onFilteringStart: function () { },
            onFilteringEnd: function () { },
            onShufflingStart: function () { },
            onShufflingEnd: function () { },
            onSortingStart: function () { },
            onSortingEnd: function () { }
        },
        controlsSelector: '', // Selector for custom controls
        delay: 0, // Transition delay in ms
        delayMode: 'progressive', // 'progressive' or 'alternate'
        easing: 'ease-out',
        filter: 'all', // Initial filter
        filterOutCss: { // Filtering out animation
            opacity: 0,
            transform: 'scale(0.5)'
        },
        filterInCss: { // Filtering in animation
            opacity: 0,
            transform: 'scale(1)'
        },
        gridItemsSelector: '.filtr-container',
        gutterPixels: 0, // Items spacing in pixels
        layout: 'sameSize', // See layouts
        multifilterLogicalOperator: 'or',
        searchTerm: '',
        setupControls: true, // Should be false if controlsSelector is set 
        spinner: { // Configuration for built-in spinner
            enabled: false,
            fillColor: '#2184D0',
            styles: {
                height: '75px',
                margin: '0 auto',
                width: '75px',
                'z-index': 2,
            },
        },
    }

    $('.filtr-container').filterizr();

    //Detect If Filter is clicked
    $('.gfilter a').click(function () {
        // console.log($(this).text());
        if ($(this).attr('data-filter') != 'all')
            if ($(this).hasClass('bg-red'))
                $(this).removeClass('bg-red').addClass('bg-primary');
            else
                $(this).removeClass('bg-primary').addClass('bg-red');
    });

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
        else if ($('#courseChoice option:selected').val() === "") {
            console.log('Please select Course');
        }
        else {
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

    //Contact Form
    $('#contactForm').submit(function (e) {
        $(this).attr("disabled", true);
        e.preventDefault();
        //Send FORM Data
        $.ajax({
            'type': 'POST',
            'url': apiUri + 'process-form?req=ge',
            data: $(this).serialize(),
            dataType: 'JSON',
            success: function (enquiryResponse) {
                console.log(enquiryResponse.response);
                if (enquiryResponse.code === 100) {

                    //Fire SWAL
                    swal.fire({
                        title: 'We have received your Enquriy!',
                        text: enquiryResponse.response,
                        type: success,
                        timer: 2000,
                        showCancelButton: false,
                        showConfirmButton: false
                    }).then(
                        function () {
                            //Enable the FORM 
                            $(this).attr("disabled", false);
                        },
                    );
                } else {
                    //Fire SWAL
                    swal.fire({
                        title: 'We are unable to receive your Enquriy!',
                        text: enquiryResponse.response,
                        type: error,
                        timer: 2000,
                        showCancelButton: false,
                        showConfirmButton: false
                    }).then(
                        function () {
                            //Enable the FORM 
                            $(this).attr("disabled", false);
                        },
                    );
                }
            }
        });

    });
});