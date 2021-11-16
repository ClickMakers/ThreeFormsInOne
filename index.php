<?php  
session_start();
require('PlayerUpload.php');
$insert = false;
$update = false;
$delete = false;
$fail = false;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Youth Rural Game & Sports Federation of India</title>
    <meta name="description" content="Youth Rural Game & Sports Federation of India" />
    <meta name="author" content="Youth Rural Game & Sports Federation of India" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
 
  </head>


  <style>
      .heading{
        border-bottom: 2px solid red;
      }

      .col{
          width: 100%;
      }
      .logo {
  border-radius: 50%;
}

.btn{
    width: 100%;

}

.hidden_div {
    display: none;
}
.hidden_div2 {
    display: none;
}
.hidden_div3 {
    display: none;
}

.membership{
    width: 100%;
}

.textmembership{
    border: 2px solid rgb(0, 0, 0);
    width: 50%;
}

.badge{
    width: 50%;

}


h2{
  font-size: 25px;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 2px;
}
  </style>


  <body>

    <div class="heading">
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <img class="logo" src="https://youthruralgamesindia.com/images/logo.jpg" alt="Avatar">
              </div>
              <div class="col-md-6 d-flex justify-content-center my-4">
                <h2 class="my-3">Youth Rural Game & Sports Federation of India</h2>
              </div>
              <div class="col-md-3 d-flex justify-content-end">
                <img class="logo" src="https://youthruralgamesindia.com/images/logo.jpg" alt="Avatar">
              </div>
            </div>
          </div>
          <div class="container">
          <div class="row">
            <div class="col d-flex justify-content-start">
                TM No. 3235899
            </div>
            <div class="col d-flex justify-content-center">
                TM By : Government of India
            </div>
            <div class="col d-flex justify-content-end">
                Certificate No. 1488786
            </div>
          </div>

          <div class="row">
            <div class="col d-flex justify-content-center">
                Aff.By: International Youth Rural Game & Sports Federation
            </div>
          </div>
        </div>
    </div>
    <?php
  if($insert){
    echo "
    
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your Record has been inserted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
    
    ";
  }
  
  if($fail){
    echo "
    
    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Failed!</strong> Duo to technical issues failed try again
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  ?>


  <div class="container my-5">
  
    <div id="hidden_div" style="display: none;">
      <h1 class="text-center d-flex justify-content-center"><span class="badge rounded-pill bg-danger "> Affiliaton Form Terms and Conditions</span>
    </h1>
    <div class="membership d-flex justify-content-center">
      <div class="textmembership">
        <p class="d-flex justify-content-center"> *The State Associations must follow and agree for following rules, regulation and guidelines.</p>  
        <a  href="http://localhost/TermsandConditions.php" target="_blank" id="exampleCheck "class="form-check-label d-flex justify-content-start">Read Terms and Conditions</a>

      </div>
    </div>
      </div>

    <div id="hidden_div2" style="display: none;">
        <h1 class="text-center d-flex justify-content-center"><span class="badge rounded-pill bg-danger ">Standard Membership Benefits</span>
      </h1>
      <div class="membership d-flex justify-content-center">
          <p class="textmembership d-flex justify-content-end"> * Become eligible to be affiliated state Member * Eigible to attend National International events organized by
              Traditional Sports Federation of India * Authorize to use the name and Logo of TSFI * Promote TSFI with the
              rules & Regulations of Traditional Sports Federation of India</p>  
      </div>
      </div>


      <script>
        function showDiv(divId, divId2, element)
      {
          document.getElementById(divId).style.display = element.value == "Affiliaton" ? 'block' : 'none';
          document.getElementById(divId2).style.display = element.value == "Membership" ? 'block' : 'none';

      }
      </script>

      <form class="contact100-form validate-form" enctype="multipart/form-data" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
  <div class="row align-items-end">
    <div class="col">
    <div class="col-auto">
    <label for="inputName" class="col-form-label">Apply For</label>
  </div>

  <select id="test" name="form-select" class="form-select" onchange="showDiv('hidden_div', 'hidden_div2',this)"> 
    <option selected value="0">Select Any One</option> 
    <option value="Affiliaton">Affiliaton Form</option> 
    <option value="Membership">Membership Form</option>  
    <option value="Player">Player Registration </option> 

 </select>
  </div>

  </div>

  <div >
 

  <div class="row align-items-end">
    <div class="col">
    <div class="col-auto">
    <label for="inputName" class="col-form-label">Your Name</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputName" name="PLAYERName" placeholder="Your Name" class="form-control" aria-describedby="NameHelpInline" required>
  </div>
  <div class="col-auto">
    <span id="NameHelpInline" class="form-text">
      Must be 4-20 characters long.
    </span>
  </div>
    </div>

    <div class="col d-flex justify-content-center">
    <td class="align-items-end">
        <a href="" onClick="document.getElementById('uploadImagePlayer').click(); return false"><img id="uploadPreviewPlayer" width="100" height="120" src="https://ruralsportsdevelopmentboard.com/Partitions/IMAGES/no-profile-pic-m.gif" onMouseOut="this.style.opacity=1;this.filters.alpha.opacity=100" onMouseOver="this.style.opacity=0.7;this.filters.alpha.opacity=70" /></a><br />
        <input id="uploadImagePlayer" type="file" name="image" onchange="loadFileProfilePlayer(event)" hidden required>
        <div class="col-auto">
            <span id="NameHelpInline" class="form-text">
              Your Profile Picture
            </span>
          </div>
    </td>
        
    </div>
  </div>




  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Father Name</label>
          </div>
          <div class="col-auto">
            <input type="text" id="FatherName" name="fatherName" placeholder="Father Name" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Mother Name</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="MotherName" placeholder="Mother Name" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
  </div>




  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Date Of Birth</label>
          </div>
          <div class="col-auto">
            <input type="date" id="inputName" name="DOB" placeholder="Date Of Birth" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Selection Based</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="SelectionBased" placeholder="Selection Based" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
  
  </div>



  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Adhaar Card</label>
          </div>
          <div class="col-auto">
            <input type="number" id="AdhaarCard" name="PLAYERAadhaarCard" placeholder="Adhaar Card" class="form-control" aria-describedby="NameHelpInline" required>
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Home Address</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="HomeAddress" placeholder="Home Address" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    <!-- <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Date Of Birth</label>
          </div>
          <div class="col-auto">
            <input type="date" id="inputName" name="dobName" placeholder="Date Of Birth" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div> -->
  </div>


  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Qualification</label>
          </div>
          <div class="col-auto">
            <input type="text" id="Qualification" name="Qualification" placeholder="Qualification" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Sports Achievements</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="SportsAchievements" placeholder="Sports Achievements" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
  
  </div>

  
  <div class="row align-items-center my-5">
  <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Profession</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="Profession" placeholder="Profession" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    

    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Coach Name</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="CoachName" placeholder="Coach Name" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    
  </div>

  
  <div class="row align-items-center my-5">
  <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Pin Code</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="PinCode" placeholder="Pin Code" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    

    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">City</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="City" placeholder="City" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    
  </div>





  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Phone Number</label>
          </div>
          <div class="col-auto">
            <input type="number" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">State</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="State" placeholder="State Name" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">E mail</label>
          </div>
          <div class="col-auto">
            <input type="text" id="Email" name="EMAIL" placeholder="E mail" class="form-control" aria-describedby="NameHelpInline"required>
          </div>
    </div>
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>






    <!-- Your content goes here -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

    <script>
  var loadFileProfilePlayer = function(event) {
    var output = document.getElementById('uploadPreviewPlayer');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>



  </div>
  
</form>

</div>

  </body>
</html>