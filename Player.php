
<?php  
require('PlayerUpload.php');
?>

<div class="container my-5">
  <div class="row align-items-end">
    <div class="col">
    <div class="col-auto">
    <label for="inputName" class="col-form-label">Your Name</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputName" placeholder="Your Name" class="form-control" aria-describedby="NameHelpInline">
  </div>
  <div class="col-auto">
    <span id="NameHelpInline" class="form-text">
      Must be 4-20 characters long.
    </span>
  </div>
    </div>

    <div class="col d-flex justify-content-center">
    <td class="align-items-end">
        <a href="" onClick="document.getElementById('uploadImage').click(); return false"><img id="uploadPreview" width="100" height="120" src="https://ruralsportsdevelopmentboard.com/Partitions/IMAGES/no-profile-pic-m.gif" onMouseOut="this.style.opacity=1;this.filters.alpha.opacity=100" onMouseOver="this.style.opacity=0.7;this.filters.alpha.opacity=70" /></a><br />
        <input id="uploadImage" type="file" name="image" onchange="loadFileProfile(event)" hidden>
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
            <input type="text" id="FatherName" name="fatherName" placeholder="Father Name" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Mother Name</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="MotherName" placeholder="Mother Name" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
  </div>




  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Date Of Birth</label>
          </div>
          <div class="col-auto">
            <input type="date" id="inputName" name="dobName" placeholder="Date Of Birth" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Selection Based</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="SelectionBased" placeholder="Selection Based" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
  
  </div>



  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Adhaar Card</label>
          </div>
          <div class="col-auto">
            <input type="number" id="AdhaarCard" name="AdhaarCard" placeholder="Adhaar Card" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Home Address</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="HomeAddress" placeholder="Home Address" class="form-control" aria-describedby="NameHelpInline">
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
            <label for="inputName" class="col-form-label">Phone Number</label>
          </div>
          <div class="col-auto">
            <input type="number" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">State</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="State" placeholder="State Name" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Coach Name</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="CoachName" placeholder="Coach Name" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</div>





    <!-- Your content goes here -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

    <script>
  var loadFileProfile = function(event) {
    var output = document.getElementById('uploadPreview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
