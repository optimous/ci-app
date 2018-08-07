$( document ).ready(function() {
    $( ".datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
    
    $('#myform').validate({ // initialize the plugin jQuery Validate
        rules: {
            name: {
                required: true
            },
            date_of_birth: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            favorite_color: {
                required: false,
                minlength: 6
            }
        }
    });
    
    $("#myform").submit(function(e) {
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data) {
            $("#result").html('Successfully updated record!'); 
            $("#result").addClass("alert alert-success");
            $('input').val('');
        }
        });
        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
    
});