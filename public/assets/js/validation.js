$(document).ready(function(){
    ////////Signup Form Start////////
    ///////-----------------/////////
    $('.fnamecheck').hide();
    $('.lnamecheck').hide();
    $('.emailcheck').hide();
    $('.gendercheck').hide();
    $('.rancheck').hide();
    $('.passwordcheck').hide();
    $('.cpasswordcheck').hide();

    var fnameerr     = true;
    var lnameerr     = true;
    var emailerr     = true;
    var gendererr    = true;
    var rankerr      = true;
    var passworderr  = true;
    var cpassworderr = true;

    $('#firstname').keyup(function(){
        checkfirstname();
    });

    //Firstname Check Start
    function checkfirstname(){
        var firstname    = $('#firstname').val();
        var patern_fname = /^[a-zA-Z]+$/;

        if(firstname.length == ""){
            $('.fnamecheck').show();
            $('.fnamecheck').html('Please enter your firstname!');
            $('.fnamecheck').focus();
            $('.fnamecheck').css({'color':'#911'});
            fnameerr = false;
            return false;
        }
        else{
            $('.fnamecheck').hide();
        }

        if(firstname.length <=3){
            $('.fnamecheck').show();
            $('.fnamecheck').html('Firstname must be 4 characters or more!');
            $('.fnamecheck').focus();
            $('.fnamecheck').css({'color':'#911'});
            fnameerr = false;
            return false;
        }else{
            $('.fnamecheck').hide();
        }

        if(!patern_fname.test(firstname)){
            $('.fnamecheck').show();
            $('.fnamecheck').html('Only letters allowed in Firstname!');
            $('.fnamecheck').focus();
            $('.fnamecheck').css({'color':'#911'});
            fnameerr = false;
            return false;
        }else{
            $('.fnamecheck').hide();
        }
    }
    //Firstname Check End

    //Lastname Check Start
    $('#lastname').keyup(function(){
        checklastname();
    });

    function checklastname(){
        var lastname     = $('#lastname').val();
        var patern_lname =/^[a-zA-Z]+$/;

        if(lastname.length == ""){
            $('.lnamecheck').show();
            $('.lnamecheck').html('Please enter your lastname!');
            $('.lnamecheck').focus();
            $('.lnamecheck').css({'color':'#911'});
            lnameerr = false;
            return false;
        }else{
            $('.lnamecheck').hide();
        }

        if(lastname.length <=3){
            $('.lnamecheck').show();
            $('.lnamecheck').html('Lastname must be 4 characters or more!');
            $('.lnamecheck').focus();
            $('.lnamecheck').css({'color':'#911'});
            lnameerr = false;
            return false;
        }else{
            $('.lnamecheck').hide();
        }

        if(!patern_lname.test(lastname)){
            $('.lnamecheck').show();
            $('.lnamecheck').html('Only letters allowed in lastname!');
            $('.lnamecheck').focus();
            $('.lnamecheck').css();
            lnameerr = false;
            return false;
        }else{
            $('.lnamecheck').hide();
        }
    }
    //Lasstname Check End

    //Email Check Start
    $('#email').keyup(function(){
        checkemail();
    });

    function checkemail(){
        var email=$('#email').val();
        var patern_email=/^[a-zA-Z0-9.%_-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,10}$/;

        if(email.length == ""){
            $('.emailcheck').show();
            $('.emailcheck').html('Please enter your email!');
            $('.emailcheck').focus();
            $('.emailcheck').css({'color':'#911'});
            emailerr = false;
            return false;
        }else{
            $('.emailcheck').hide();
        }

        if(!patern_email.test(email)){
            $('.emailcheck').show();
            $('.emailcheck').html('Something wrong! Please Check your email!');
            $('.emailcheck').focus();
            $('.emailcheck').css({'color':'#911'});
            emailerr = false;
            return false;
        }else{
            $('.emailcheck').hide();
        }
    }
    //Email Check End

    //Gender Check Start
    $('#gender').click(function(){
        checkgender();
    });

    function checkgender(){
        var gender = $('#gender').val();

        if(gender == ""){
            $('.gendercheck').show();
            $('.gendercheck').html('Please enter your gender!');
            $('.gendercheck').focus();
            $('.gendercheck').css({'color':'#911'});
            gendererr=false;
            return false;
        }else{
            $('.gendercheck').hide();
        }
    }
    //Gender Check End

    //Rank Check Start
    $('#rank').click(function(){
        checkrank();
    });

    function checkrank(){
        if($('#rank').val()==""){
           $('.rankcheck').show();
           $('.rankcheck').html('Please enter your rank!');
           $('.rankcheck').focus();
           $('.rankcheck').css({'color':'#911'});
           rankerr = false;
           return false;
        }else{
           $('.rankcheck').hide();
        } 
    }
    //Rank Check End

    //Password Chesk Start
    $('#password').keyup(function(){
        checkpassword();
    });

    function checkpassword(){
        var password = $('#password').val();
        var patern_password=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#%_)(!])[a-zA-Z0-9@#%_)(!]{8-15}$/;

        if(password.length == ""){
            $('.passwordcheck').show();
            $('.passwordcheck').html('Please enter your password!');
            $('.passwordcheck').focus();
            $('.passwordcheck').css({'color':'#911'});
            passworderr = false;
            return false;
        }else{
            $('.passwordcheck').hide();
        }

        if(password.length <= 7){
            $('.passwordcheck').show();
            $('.passwordcheck').html('Password must be 8 characters or more!');
            $('.passwordcheck').focus();
            $('.passwordcheck').css({'color':'#911'});
            passworderr = false;
            return false;
        }else{
            $('.passwordcheck').hide();
        }

        if(!patern_password.test(password)){
            $('.passwordcheck').show();
            $('.passwordcheck').html('At least one character will be uppercase!');
            $('.passwordcheck').focus();
            $('.passwordcheck').css({'color':'#911'});
            passworderr = false;
            return false;
        }else{
            $('.passwordcheck').hide();
        }
    }
    //Password Check End

    //Confirm Password Check Start
    $('#cpassword').keyup(function(){
        checkcpassword();
    });

    function checkcpassword(){
        var cpassword=$('#cpassword').val();
        var password=$('#password').val();

        if(cpassword == ""){
            $('.cpasswordcheck').show();
            $('.cpasswordcheck').html('Please enter your confirm password!');
            $('.cpasswordcheck').focus();
            $('.cpasswordcheck').css({'color':'#911'});
            cpassworderr = false;
            return false;
        }else{
            $('.cpasswordcheck').hide();
        }

        if(password != cpassword){
            $('.cpasswordcheck').show();
            $('.cpasswordcheck').html('Password not matched!');
            $('.cpasswordcheck').focus();
            $('.cpasswordcheck').css({'color':'#911'});
            cpassworderr = false;
            return false;
        }else{
            $('.cpasswordcheck').hide();
        }
    }
    //Confirm Password Check End

    $('#signup').click(function(){
        var fnameerr     = true;
        var lnameerr     = true;
        var emailerr     = true;
        var gendererr    = true;
        var rankerr      = true;
        var passworderr  = true;
        var cpassworderr = true;

         checkfirstname();
         checklastname();
         checkemail();
         checkgender();
         checkrank();
         checkpassword();
         checkcpassword();

         if((fnameerr==true) && (lnameerr == true) && (emailerr == true) && (gendererr == true) && (rankerr == true) && (passworderr == true) && (cpassworderr == true)){
        //     $.ajax({
        //         type       : "POST",
        //         url        :"signup/index",
        //         data       : {'firstname':firstname,'lastname':lastname,'email':email,'password':password},
        //         beforeSend : function(data){
                   
        //         },
        //         success :function(response){
        //             // $('.fnamecheck').html(response);
                    
                    
        //         }
        //     });
             return true;
         }
        else{
             return false;
         }
    });

    ////////Signup Form End//////////
    ///////-----------------/////////
});