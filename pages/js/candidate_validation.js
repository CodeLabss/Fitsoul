function validation(){
    // alert("Hii")
    var valid = true;

    
    // image validation
    var img1=document.forms['candidate_form']['picture'];
    // var img2=document.forms['candidate_form']['CV'];
    var validExt1=["jpeg","png","jpg"];
    // var validExt2=["jpeg","png","jpg","pdf"];


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

// radio button valid 1
    // if (document.querySelector('input[name="gender"]:checked') === null) {
    //     document.getElementById('gender_span').innerHTML = "*Please select a gender";
    //     valid = false;
    // } else {
    //     document.getElementById('gender_span').innerHTML = '';
    //     // var selectedGender = document.querySelector('input[name="gender"]:checked').value;
    // }

    // radio 2
    var joining = document.getElementById('joining');
    var joiningSpan = document.getElementById('joining_span');
    var selectedValue = joining.value;

    if (selectedValue === '') {
        joiningSpan.textContent = 'Please select an option.';
        valid = false;
    } else {
        joiningSpan.textContent = ''; // Clear error message
        valid = true;
    }

    document.querySelector('form').addEventListener('submit', function(event) {
        if (!validateJoining()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

    // event.preventDefault(); // Prevent form from submitting

    const radioButtons = document.getElementsByName("radioOption");
    const gender_span = document.getElementById("gender_span");
    let isChecked = false;

    // Check if any radio button is selected
    for (const radio of radioButtons) {
        if (radio.checked) {
            isChecked = true;
            break;
        }
    }

    if (isChecked) {
        gender_span.innerText = ""; // Clear error message if valid
        // Submit form or do something else
        document.getElementById("candidate_form").submit(); // Example of form submission
    } else {
        gender_span.innerText = "Please select an option.";
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


    // image validation 1
    // if((img1.value == '')  ){
    //     alert("No image selected...");
    //     // document.getElementById('photo_validate').innerHTML = "No Image selected";
    //     // document.getElementById('CV_validate').innerHTML = "No Image selected";
    //     return false;

    // }else{
    //     var img_ext1= img1.value.substring(img1.value.lastIndexOf('.')+1);
    //     // var img_ext2= img2.value.substring(img1.value.lastIndexOf('.')+1);

    //     var result=validExt1.includes(img_ext1);
    //     // var result=validExt2.includes(img_ext2);
    //     console.log(result);
    //     if(result == false){
    //         // document.getElementById('photo_validate').innerHTML = "Selected file is not an image...";
    //         // document.getElementById('CV_validate').innerHTML = "Selected file is not an image...";
    //         alert("Selected file is not an image...");
    //         return false;
    //     }else{
    //         if((img1.files[0].size/(1024*1024)>=1)){
    //         // document.getElementById('photo_validate').innerHTML = "Image should be smaller than 1 mb";
    //         // document.getElementById('CV_validate').innerHTML = "Image should be smaller than 25 mb";

    //             alert("Image should be smaller than 1 mb");
    //             return false;
    //         }
    //     }

    // }

    if (img1.value == '') {
        alert("No image selected...");
        return false;
    } else {
        var img_ext1 = img1.value.toLowerCase().split('.').pop(); // get file extension in lowercase
        if (!validExt1.includes(img_ext1)) {
            alert("Selected file is not an image...");
            return false;
        } else {
            var fileSize = img1.files[0].size;
            if (fileSize > 1024 * 1024) { // check if file size is greater than 1 MB
                alert("Image should be smaller than 1 mb");
                return false;
            }
        }
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