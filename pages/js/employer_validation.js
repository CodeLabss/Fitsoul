function emp_validation(){
    // console.log('emp_validation function called');

    var valid = true;

    var img=document.forms['emp_form']['buisness_photo'];
    var validExt=["jpeg","png","jpg"];

    var name = document.getElementById('name').value;
    var fname = document.getElementById('fname').value;
    var add1 = document.getElementById('add1').value;
    var add2 = document.getElementById('add2').value;
    // // // var mname_span = document.getElementById('mname').value;
    var lname = document.getElementById('lname').value;
    
    
    var email = document.getElementById('email').value;
    var  pass = document.getElementById('pass').value;
    var  cpass = document.getElementById('cpass').value;
    var phone = document.getElementById('phone').value;


    if( name == ''){
        valid = false;
        var com = document.getElementById('name_span')
        com.innerHTML = "*Please enter your buisness name"

    } else{
        document.getElementById('name_span').innerHTML='';
        valid = true
    } if( add1 == ''){
        valid = false;
        var com = document.getElementById('add1_span')
        com.innerHTML = "*Please enter your adress"

    } else{
        document.getElementById('add1_span').innerHTML='';
    } if( add2 == ''){
        valid = false;
        var com = document.getElementById('add2_span')
        com.innerHTML = "*Please enter your adress"
        
    } else{
        document.getElementById('add2_span').innerHTML='';
    } if( fname == ''){
        valid = false;
        var com = document.getElementById('fname_span')
        com.innerHTML = "*Please enter your first name"

    } else{
        document.getElementById('fname_span').innerHTML='';
    } if (lname == ''){
            valid = false;
            var com = document.getElementById('lname_span')
            com.innerHTML = "*Please enter your last name";
    
    
    } else{
        document.getElementById('lname_span').innerHTML='';
    } if(email == ''){
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
        com.innerHTML = "*Please re-enter password";
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

  

    if(img.value == ''){
        document.getElementById('img_validate').innerHTML = "No Image selected";
        return false;

    }else{
        var img_ext= img.value.substring(img.value.lastIndexOf('.')+1);

        var result=validExt.includes(img_ext);
        console.log(result);
        if(result == false){
            document.getElementById('img_validate').innerHTML = "Selected file is not an image...";
            // alert("Selected file is not an image...");
            return false;
        }else{
            if(img.files[0].size/(1024*1024)>=1){
            document.getElementById('img_validate').innerHTML = "Image should be smaller than 1 mb";

                // alert("Image should be smaller than 1 mb");
                return false;
            }
        }

    }

    if (!valid) {
        // event.preventDefault(); // prevent the form from submitting
    return valid;

    }
    

    // if(img.value != ''){
    //     var img_ext= img.value.substring(img.value.lastIndexOf('.')+1);

    //     var result=validExt.includes(img_ext);
    //     console.log(result);
    //     if(result == false){
    //         document.getElementById('img_validate').innerHTML = "Selected file is not an image...";
    //         // alert("Selected file is not an image...");
    //         return false;
    //     }else{
    //         if(img.files[0].size/(1024*1024)>=1){
    //         document.getElementById('img_validate').innerHTML = "Image should be smaller than 1 mb";

    //             // alert("Image should be smaller than 1 mb");
    //             return false;
    //         }
    //     }

    // }else{
    //     document.getElementById('img_validate').innerHTML = "No Image selected";

    //     // alert("No Image selected");
    //     return false;
    // }

    

}

