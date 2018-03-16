    $(document).ready(function() {
        $('input[type="submit"]').on("click", validate);
    });
    

    function validateSignup(event)
    {
        $("#firstError").parent().hide();
        $("#lastError").parent().hide();
        $("#emailError").parent.hide();
        $("#passwordError").parent.hide();
        
        var error = false;
    
        if($("#first").val().length > 50 || $("#first").val().length === 0 ){
            displayError("firstError", "first name must be 50 characters or less");
            error = true;
        }
    
        if($("#last").val().length > 50 || $("#last").val().length === 0 ){
            displayError("lastError", "Last name must be 50 characters or less");
            error = true;
        }
        
        if($("#email").val().length>50 || $("#email").val().length === 0 ){
            displayError ("emailError", "Must be a valid email");
            error = true;
        }
        
        if( ($("#password").val().length<6 && $("#password").val().length>25 )|| $("#password").val().length === 0){
            displayError ("passwordError", "Password must be 6 characters or more");
            error = true;
        }
        
        if(!error) {
            $('#loginForm').submit();
        }
    }
    
    function displayError(id, message)
    {
        $("#" + id).html(message);
        $("#" + id).parent().show();
    }