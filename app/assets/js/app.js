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

    // $(document).on('click', 'a[href^="#"]', function (e) {
    //     // target element id
    //     var id = $(this).attr('href');

    //     // target element
    //     var $id = $(id);
    //     if ($id.length === 0) {
    //         return;
    //     }

    //     // prevent standard hash navigation (avoid blinking in IE)
    //     e.preventDefault();

    //     // top position relative to the document
    //     var pos = $id.offset().top - 100;

    //     // animated top scrolling
    //     $('body, html').animate({
    //         scrollTop: pos
    //     });

    // });

    // window.onscroll = function () {
    //     myFunction();
    // };

    // // Get the navbar
    // var navbar = document.getElementById("navbar");

    // // Get the offset position of the navbar
    // var sticky = navbar.offsetTop;

    // // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    // function myFunction() {
    //     if (window.pageYOffset >= sticky) {
    //         navbar.classList.add("sticky")
    //     } else {
    //         navbar.classList.remove("sticky");
    //     }
    // }

    /* Handle Form Submit */

    //Quick Contact Form
    $('#studentEnquiry').submit(function (e) {
        e.preventDefault();
        // console.log('yes');
        //Check for Select Values
        if ($('#countryChoice option:selected').val() === "null") {
            console.log('Please select Country');
        }
        else if ($('#courseChoice option:selected').val() === "null")
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
                'url': apiUri + 'quick-contact',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (quickContactResponse) {
                    console.log(quickContactResponse);
                }
            });
        }
    });

});