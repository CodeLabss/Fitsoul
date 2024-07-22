<!dOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitsoul</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-9/assets/css/login-9.css">
    <!-- <link rel="stylesheet" href="employeesignup.css"> -->
<!-- <script>
  //For certificate
 var certificateInput = document.getElementById('Certificate');
    var filePlaceholder = document.querySelector('.file-placeholder');
    certificateInput.addEventListener('change', function() {
        if (certificateInput.files.length > 0) {
            filePlaceholder.style.display = 'none';
        } else {
            filePlaceholder.style.display = 'inline-block';
        }
    });
    //For Photo
    var photoInput = document.getElementById('Photo');
    var filePlaceholder = document.querySelector('.file-placeholder');
    photoInput.addEventListener('change', function() {
        if (photoInput.files.length > 0) {
            filePlaceholder.style.display = 'none';
        } else {
            filePlaceholder.style.display = 'inline-block';
        }
    });
</script> -->
</head>
<body>
<section class="bg-primary py-3 py-md-5 py-xl-8">



<?php
        if (isset($_SESSION['status']))
        {
            ?>
            <!-- Button trigger modal -->
                

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    <?php echo $_SESSION['status']; ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                    </div>
                </div>
                </div>

            <?php 
            unset($_SESSION['status']);
        }
            ?>

             
    <div class="container-fluid">
      <div class="row gy-4 align-items-center">
        <div class="col-sm-6">
          <div class="d-flex justify-content-center text-bg-primary">
            <div class="col-12 col-xl-6">
              <center>
              <img class="img-fluid rounded mb-4 " loading="lazy" src="" width="245" height="80" alt=" Logo">
            </center>
              <hr class="border-primary-subtle mb-4">
              <p class="lead mb-5"> </p>
              <p class="lead mb-5"> </p>
              <p class="lead mb-5">Find jobs that match your profile✨</p>
              <h2 class="h1 mb-4">Connect with people who can help </h2>
              <div class="text-endx">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                  <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
              </div>
            </div>
          </div>
        </div> 
        
        <div class="col-12 col-md-6 col-xl-5" >
            <div class="card border-0 rounded-4  " >
                <div class="card-body p-3  p-md-6  p-xl-5 ">
                    <div class="row">
                        <div class="">
                            <div class="mb-4">
                                <h3>Sign Up Now!!</h3>
                            </div>
                        </div>
                    </div>
                    <form action="candidate_connect.php" method="Post" enctype="multipart/form-data" >
                <div class="row g-2 register-form" >
                    <div class="col-md-4">
                      <div class="form-group">
                          <input type="text" class="form-control" name="fname" placeholder="First Name *" id="fname" />
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <input type="text" class="form-control" name="mname" placeholder="Middle Name " id="mname"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                          <input type="text" class="form-control" name="lname" placeholder="Last Name *" id="lname" required/>
                      </div>
                  </div>
                    
                </div>
                <div class="row g-2 register-form pt-3">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email *" id="email" required />
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" id="phone" />
                        </div>
                    </div> -->
                    
                </div>
                <div class="row g-2 register-form pt-3">
                    <div class="col-md-6 ">
                        <div class="form-group ">
                            <input type="password" class="form-control" placeholder="Password *" name="password"  required/>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password *"  required/>
                        </div>
                    </div>
                </div>

                <div class="row g-2 register-form pt-3">
                  <div class="col-md-6 ">
                      <div class="form-group">
                          <!-- <input type="number" class="form-control" name="contact1" placeholder="Your Phone number *" id="" required/> -->
                          <input type="number" minlength="10" maxlength="10" name="contact1" class="form-control" placeholder="Your Phone *" id="phone" />

                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="number" minlength="10" maxlength="10" name="contact2" class="form-control" placeholder="Your Alternate Phone number "  />
                      </div>
                  </div>
                  
              </div>

              <div class="row g-2 register-form pt-3">
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <select disabled class="form-select" id="Category" name="sector">
                            <option selected disabled>Gym</option>
                            <option>Trainer</option>
                            <option>Massager</option>
                            <option>Receptionist</option>
                            <option>Manager</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                  <!-- <div class="col-md-6"> -->
                    <div class="form-group">
                        <input type="number" minlength="10" maxlength="10" name="joining" class="form-control" placeholder="Immediate Joining*"  />
                    <!-- </div> -->
                </div>
              </div>
          </div>  
                <div class="row g-2 register-form pt-3">
                  <div class="col-md-6 ">
                      <div class="form-group " >
                          <select class="form-select"  name="profile">
                              <option selected disabled>Select your Profile</option>
                              <option>Trainer</option>
                              <option>Massager</option>
                              <option>Receptionist</option>
                              <option>Manager</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group ">
                        <!-- <input type="date" class="form-control" id="dobInput"/> -->
                        <input type="text" name="DOB" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="dob">
                    </div>
                </div>
            </div>
            <div class="row g-2 register-form pt-3">
                <div class="col-md-6">
                    <div class="form-group ">
                            <div class="btn-group w-100" role="group" aria-label="Gender">
                              <input
                                mdbRadio
                                type="radio"
                                class="btn-check"
                                name="gender"
                                id="option1"
                                [checked]="gender === 'Male'"
                                (click)="handleButtonClick('option1')"
                                value="Male"
                              />
                              <label class="btn btn-outline-primary" [class.active]="gender === 'Male'" for="option1">Male</label>
                              <input
                                mdbRadio
                                type="radio"
                                class="btn-check"
                                name="gender"
                                id="option2"
                                (click)="handleButtonClick('option2')"
                                value="Female"
                              />
                              <label class="btn btn-outline-primary" [class.active]="gender === 'Female'" for="option2">Female</label>
                            </div>
                      </div>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="Photo" class="btn btn-primary d-block">
                        <span>Upload Your Photo</span>
                        <input type="file" class="form-control " name="picture" id="Photo" style="display: none;">
                    </label>
                </div>
            </div>
            </div>
              <!-- <div class="row g-2 register-form pt-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="btn-group w-100" role="group" aria-label="certification">
                      <input
                        mdbRadio
                        type="radio"
                        class="btn-check"
                        name="certification"
                        id="opt1"
                        autocomplete="off"
                        [checked]="certification === 'Certified'"
                        (click)="handleButtonClick('opt1')"
                        value="Certified"
                      />
                      <label class="btn btn-outline-primary" [class.active]="certification === 'Certified'" for="opt1">  Certified</label>
                      <input
                        mdbRadio
                        type="radio"
                        class="btn-check"
                        name="certification"
                        id="opt2"
                        autocomplete="off"
                        (click)="handleButtonClick('opt2')"
                        value="Non-certified"
                      />
                      <label class="btn btn-outline-primary" [class.active]="certification === 'Non-certified'" for="opt2">Non-certified</label>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="Certificate" class="btn btn-primary d-block">
                        <span>Upload Certificate</span>
                        <input type="file" class="form-control" id="Certificate" style="display: none;">
                    </label>
                </div>
            </div>
          </div>  -->
          <div class="row g-2 register-form pt-3">
            <div class="col-md-6 ">
                <div class="form-group ">
                    <input type="password" class="form-control" name="address1" placeholder="Street name, Apartment No."  id="password"/>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group">
                    <input type="password" class="form-control" name="address2" placeholder="Lane name, Landmark"  id="confirm-password"/>
                </div>
            </div>
            
        </div>

          <div class="row g-2 register-form">
            <div class="col-md-6 pt-3">
                <div class="form-group ">
                    <select class="form-select" id="State" name="state">
                        <option selected disabled>Select your State</option>
                        <option>Trainer</option>
                        <option>Massager</option>
                        <option>Receptionist</option>
                        <option>Manager</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 pt-3">
              <div class="form-group ">
                  <select class="form-select" id="District" name="District">
                      <option selected disabled>Select your District</option>
                      <option>Trainer</option>
                      <option>Massager</option>
                      <option>Receptionist</option>
                      <option>Manager</option>
                  </select>
              </div>
          </div>
      </div>
      <div class="row g-2 register-form">
        <div class="col-md-6 pt-3">
            <div class="form-group ">
                <select class="form-select" id="City" name="City">
                    <option selected disabled>Select your City</option>
                    <option>Trainer</option>
                    <option>Massager</option>
                    <option>Receptionist</option>
                    <option>Manager</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 pt-3">
          <div class="form-group ">
              <select class="form-select" id="Pincode" name="Pincode">
                  <option selected disabled>Select your Pincode</option>
                  <option>Trainer</option>
                  <option>Massager</option>
                  <option>Receptionist</option>
                  <option>Manager</option>
              </select>
          </div>
      </div>
  </div>
  <div class="row g-2 register-form">
    <div class="col-md-6 pt-3">
      <!-- <div class="form-group">
        <div class="btn-group w-100" role="group" aria-label="experience">
          <input
            mdbRadio
            type="radio"
            class="btn-check"
            name="experience"
            id="exp1"
            autocomplete="off"
            [checked]="experience === 'Fresher'"
            (click)="handleButtonClick('exp1')"
            value="Fresher"
          />
          <label class="btn btn-outline-primary" [class.active]="experience === 'Fresher'" for="exp1">Fresher</label>
          <input
            mdbRadio
            type="radio"
            class="btn-check"
            name="experience"
            id="exp2"
            autocomplete="off"
            (click)="handleButtonClick('exp2')"
            value="Experienced"
          />
          <label class="btn btn-outline-primary" [class.active]="experience === 'Experienced'" for="exp2">Experienced</label>
        </div>
      </div> -->
        <div class="form-group ">
            <input type="number" class="form-control" name="exp_year" placeholder="Experience in years" value=""/>
        </div>

         
      
  </div>
    <div class="col-md-6 pt-3">
      <div class="form-group ">
        <select class="form-select" name="exp_month" >
            <option selected disabled>Experience in months</option>
            <option>1</option>
            <option>1</option>
            <option>1</option>
            <option>1</option>
            <option>1</option>
        </select>
    </div>
    </div>
</div>

<div class="row g-2 register-form pt-3">
  <div class="col-md-12 ">
      <div class="form-group ">
        <textarea rows="3" cols="65" name="intro" class="form-control" placeholder="Tell us about yourself"></textarea>
      </div>
  </div>


  <!-- <div class="col-md-6 ">
      <div class="form-group">
          <input type="password" class="form-control" placeholder="Lane name, Landmark" autocomplete="confirm-password" id="confirm-password"/>
      </div>
  </div> -->
  
</div>

  <div class="row g-2 register-form">
    <div class="col">
      <div class="form-group pt-3 ">
          <label for="CV" class="btn btn-primary d-block">
              <span>Upload CV</span>
            </label>
              <input type="file" class="form-control" id="CV" name="CV" style="display: none;">
      </div>
  </div>
</div>
              <center>
                  <div class="pt-4">
                    <!-- <a href="employeeverify.html"> -->
                    <input type="submit" class="btn btn-primary btnRegister" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="Register" />
                    </a>
                </div>
              </center>
            </div>
        </div>
    </div>
</form>
      </div>
    </div>
  </section>
</body>
<!-- <script>
  let auth_token;
  $(document).ready(function(){
      $.ajax({
          type: 'get',
          url: 'https://www.universal-tutorial.com/api/getaccesstoken',
          success: function(data){
              auth_token=data.auth_token
              getState(data.auth_token);
              
              
          },
          error: function(error){
              console.log(error);
          
          },
          headers: {
          }

      })

      $('#state').change(function(){
          getCity();
      })

      $('#city').change(function(){
          getPincode();
      })

  })
  function getState(auth_token){
      $.ajax({
          type: 'get',
          url: 'https://www.universal-tutorial.com/api/countries',
          success: function(data){
          // getState(auth_token);
          
          data.forEach(element => {
              $('#state').append('<option value="'+element.state_name+'">'+element.state_name+'</option>');
              
          });
              
          },
          error: function(error){
              console.log(error);
          
          },
          headers: {   
          }
      })
  }
      function getCity(){
          let state_name = $('#state').val();
      $.ajax({
          type: 'get',
          url: 'https://www.universal-tutorial.com/api/states/'+country_name,
          success: function(data){
              $('#city').empty();
              data.forEach(element => {
              $('#city').append('<option value="'+element.city_name+'">'+element.city_name+'</option>');
              
          });
              
          },
          error: function(error){
              console.log(error);
          },
          headers: {        
          }
      })
  }
  function getPincode(){
          let city_name = $('#city').val();
      $.ajax({
          type: 'get',
          url: ' https://www.universal-tutorial.com/api/cities/'+state_name,
          success: function(data){
              $('#pincode').empty();
              data.forEach(element => {
              $('#pincode').append('<option value="'+element.pincode_name+'">'+element.pincode_name+'</option>');
              
          });
              
          },
          error: function(error){
              console.log(error);
          
          },
          headers: {
              
          }

      })
  }
</script> -->

</html>