function validation(){
    // alert("Hii")
    var valid = true;

    var fname = document.getElementById('fname').value;
    // // var mname_span = document.getElementById('mname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var  pass = document.getElementById('pass').value;
    var  cpass = document.getElementById('cpass').value;
    var phone = document.getElementById('phone').value;
    // // var contact2_span = document.getElementById('phone2').value;
    var joining = document.getElementById('joining').value;
    // var profile_span = document.getElementById('profile').value;
    var dob = document.getElementById('dob').value;
    // var gender = document.getElementsByName('gender').value;
    // var male = document.getElementById('male').value;
    // var female = document.getElementById('female').value;
    // var photo_span = document.getElementById('photo').value;
    var add1 = document.getElementById('add1').value;
    var add2 = document.getElementById('add2').value;
    // var exp_span = document.getElementById('exp').value;
    // var intro = document.getElementById('intro').value;
    // var CV_valid = document.getElementById('CV').value;

    if( fname == ''){
        valid = false;
        var com = document.getElementById('fname_span')
        com.innerHTML = "*Please enter your first name"

    }
    
    else{
        document.getElementById('fname_span').innerHTML='';
    }

    if (lname == ''){
            valid = false;
            var com = document.getElementById('lname_span')
            com.innerHTML = "*Please enter your last name";
    
    
    }
    else{
        document.getElementById('lname_span').innerHTML='';
    }

    if(email == ''){
        valid = false;
            var com = document.getElementById('email_span')
            com.innerHTML = "*Please enter valid email";
    }
    else{
        document.getElementById('email_span').innerHTML='';
    }

    if(phone == ''){
        valid = false;
        var com = document.getElementById('contact1_span')
        com.innerHTML = "*Please enter phone number";
    }
    else if(phone.length<10 || phone.length>10){
        valid = false;
        var com = document.getElementById('contact1_span')
        com.innerHTML = "*Please enter 10 digit phone number";
    }
    else{
        document.getElementById('contact1_span').innerHTML='';

    }

    if ( pass == '' ){
        valid = false;
        var com = document.getElementById('pass_span')
        com.innerHTML = "*Please enter password";
    }
    else if(pass.length<8){
        valid = false;
        var com = document.getElementById('pass_span')
        com.innerHTML = "*Password must have 8 characters";
    }
    else{
        document.getElementById('pass_span').innerHTML='';

    }

    if ( cpass == '' ){
        valid = false;
        var com = document.getElementById('cpass_span')
        com.innerHTML = "*Please re-enter  password";
    }
    else if(cpass.length<8){
        valid = false;
        var com = document.getElementById('cpass_span')
        com.innerHTML = "*Password must have 8 characters";
    }
    else{
        document.getElementById('cpass_span').innerHTML='';

    }


    if (cpass !='' && pass!=''){

        if(pass!=cpass){
        valid = false;
        var com = document.getElementById('cpass_span')
        com.innerHTML = "*Password does not match";
        }
        if  (pass==cpass){
        document.getElementById('cpass_span').innerHTML='';

        }
    }

    if( joining.selectedIndex == 0){
        valid = false;
        var com = document.getElementById('joining_span')
        com.innerHTML = "*Please enter your first name"

    }
    
    else{
        document.getElementById('joining_span').innerHTML='';
    }

     if( dob == ''){
        valid = false;
        var com = document.getElementById('dob_span')
        com.innerHTML = "*Please enter your date of birth"

    }
    
    else{
        document.getElementById('dob_span').innerHTML='';
    }

    if( add1 == ''){
        valid = false;
        var com = document.getElementById('add1_span')
        com.innerHTML = "*Please enter your adress"

    }
    
    else{
        document.getElementById('add1_span').innerHTML='';
    }

    if( add2 == ''){
        valid = false;
        var com = document.getElementById('add2_span')
        com.innerHTML = "*Please enter your adress"
        
    }
    
    else{
        document.getElementById('add2_span').innerHTML='';
    }


    // radio button validation
    
    // if(gender == ''){
    //     valid = false;
    //     var com = document.getElementById('gender_span')
    //     com.innerHTML = "*Please enter your gender"
    // }
    // else{
    //     document.getElementById('gender_span').innerHTML='';
    // }

    // if( male.checked == false){
    //     // document.getElementById('gender_span').innerHTML='';
    //     valid = false;
    //     var com = document.getElementById('gender_span')
    //     com.innerHTML = "*Please enter your gender"
        
    // }
    // else if(female.checked == false){
    //     // document.getElementById('gender_span').innerHTML='';
    //     valid = false;
    //     var com = document.getElementById('gender_span')
    //     com.innerHTML = "*Please enter your gender"

    // }
    
    // else{
    //     document.getElementById('gender_span').innerHTML='';
       
    // }

    // if (!document.getElementById('male').checked){
    //     valid = false;
    //         var com = document.getElementById('gender_span')
    //         com.innerHTML = "*Please enter your gender"

    // }
    // else if (!document.getElementById('female').checked){
    //     valid = false;
    //         var com = document.getElementById('gender_span')
    //         com.innerHTML = "*Please enter your gender"

    // }
    // else{
    //     document.getElementById('gender_span').innerHTML='';

    // }
























    return valid;

}