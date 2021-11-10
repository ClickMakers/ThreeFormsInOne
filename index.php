<?php  
session_start();

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
        function showDiv(divId, divId2,divId3,divIdfrom,divIdform2, element)
      {
          document.getElementById(divId).style.display = element.value == "Affiliaton" ? 'block' : 'none';
          document.getElementById(divId2).style.display = element.value == "Membership" ? 'block' : 'none';

          document.getElementById(divIdfrom).style.display = element.value == "Affiliaton" ? 'block' : 'none';
          document.getElementById(divIdform2).style.display = element.value == "Membership" ? 'block' : 'none';

          document.getElementById(divId3).style.display = element.value == "Player" ? 'block' : 'none';
      }
      </script>

      <form class="contact100-form validate-form" enctype="multipart/form-data" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
  <div class="row align-items-end">
    <div class="col">
    <div class="col-auto">
    <label for="inputName" class="col-form-label">Apply For</label>
  </div>

  <select id="test" name="form-select" class="form-select"  onchange="showDiv('hidden_div', 'hidden_div2', 'hidden_div3' , 'hidden_divform', 'hidden_div2form' ,this)"> 
    <option selected value="0">Select Any One</option> 
    <option value="Affiliaton">Affiliaton Form</option> 
    <option value="Membership">Membership Form</option>  
    <option value="Player">Player Registration </option> 

 </select>
    </div>

  </div>

  <div id="hidden_divform" style="display: none;">
    </h1>
    <?php  
require('Affiliaton.php');
?>
  </div>
  <div id="hidden_div2form" style="display: none;">
    </h1>
    <?php  
require('Membership.php');
?>
  </div>
  <div id="hidden_div3" style="display: none;">
    <?php  
require('Player.php');
?>
  </div>
  

  </body>
</html>