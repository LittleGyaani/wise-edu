$(document).ready(function () {

    //Start All Functionalities Here
    // alert('working');
    console.log('loaded...');
    $('#adminLogin').submit(function (e) {
        e.preventDefault();
        if ($('#adminLogin :input').val != '')
            console.log('yes');
        else
            console.log('no');
    })
    
});