/**
 * Created by Kaitlin on 5/30/2016.
 */

$(function() {
    $('#cust-submit').click(function() {
        $.ajax({
            url : 'functions/insertCustomer',
            type : 'POST',
            data :JSON.stringify({'first' : $('#newfname').html(),
                'last' : $('#newlname').html(),
                'email' : $('#email').html(),
                'address' : $('#address').html(),
                'city' : $('#city').html(),
                'county' : $('#county').html(),
                'state' : $('#state').html(),
                'zip' : $('#zip').html(),
                'dob' : $("#dob").html()}),
            success : function(data, status, other) {
                alert('yay');
            },
            error : function(other, status, error) {
                alert('error');
            }
        });
    });
});