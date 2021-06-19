$(document).ready(function () {

    // console.log('Loaded');

    $('.js-step-form').each(function () {
        var stepForm = new HSStepForm($(this)).init();
    });

    //Start All Functionalities Here

    /* Admin Login */
    $('#adminLogin').submit(function (e) {
        e.preventDefault();
        if ($('#adminLogin :input').val != '')
            console.log('yes');
        else
            console.log('no');
    });

    /*Country CRUD */
    

    
});