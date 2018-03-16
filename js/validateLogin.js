    $(document).ready(function() {
        $('input[type="submit"]').on("click", validate);
    });
    
    function validateLogin(event)
    {
        $("#emailError").parent.hide();
        $("#passwordError").parent.hide();
        
        var error = false;
        
        if($("#email").val().length>50 || $("#email").val().length === 0 ){
            displayError ("emailError", "Username must be your email");
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