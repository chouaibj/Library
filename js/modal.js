

function submitRegisterForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var username = $('#usernameReg').val();
    var email = $('#email').val();
    var password = $('#passwordReg').val();
    var confirm_password = $('#confirm_password').val();
    if(username.trim() == '' ){
        alert('Please enter your name.');
        $('#usernameReg').focus();
        $("#regForm").submit(function(e){
               e.preventDefault();
           });
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#email').focus();
        $("#regForm").submit(function(e){
               e.preventDefault();
           });
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#email').focus();
        $("#regForm").submit(function(e){
               e.preventDefault();
           });
        return false;
    }else if(password.trim() == '' ){
        alert('Please enter a password.');
        $('#passwordReg').focus();
        $("#regForm").submit(function(e){
               e.preventDefault();
           });
        return false;
    }else if ((password.trim()).length < 6) {
      alert('A password must have at least 6 characters');
      $('#passwordReg').focus();
      $("#regForm").submit(function(e){
             e.preventDefault();
         });
    } else if (password.trim() != confirm_password) {
      alert('passwords are not the same');
      $('#passwordReg').focus();
      $("#regForm").submit(function(e){
             e.preventDefault();
         });
    } else {
      $('#regForm').submit( function(ev) {
     ev.preventDefault();
     //later you decide you want to submit
     $(this).unbind('submit').submit()
});
    }
}
