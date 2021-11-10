<?php  
require('AffiliatonUploadDatabase.php');
?>

<div class="row align-items-end">
    <div class="col">
    <div class="col-auto">
    <label for="inputName" class="col-form-label">Name of Candidate</label>
  </div>

  <div class="col-auto">
    <input type="text" id="inputName" name="Name" placeholder="Your Name" class="form-control" aria-describedby="NameHelpInline">
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
              Candidate photo
            </span>
          </div>
    </td>
        
    </div>
  </div>




  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Permanent Address</label>
          </div>
          <div class="col-auto">
            <textarea type="text" id="Address" name="Address" placeholder="Address" class="form-control" aria-describedby="NameHelpInline"> </textarea>
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">City</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="City" placeholder="City" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
  </div>




  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">State</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="State" placeholder="State" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Pin Code</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="PinCode" placeholder="Pin Code" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
  
  </div>



  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Profession</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="Profession" placeholder="Profession" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Address proof ID Name Number Aadhaar Card</label>
          </div>
          <div class="col-auto">
            <input type="number" id="inputName" name="AadhaarCard" placeholder="Aadhaar Card" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
  
  </div>



  <div class="row align-items-center my-5">
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Qualification</label>
          </div>
          <div class="col-auto">
            <input type="text" id="Qualification" name="Qualification" placeholder="Qualification" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Sports Achievements</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputName" name="SportsAchievements" placeholder="Sports Achievements" class="form-control" aria-describedby="NameHelpInline">
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
            <label for="inputName" class="col-form-label">E mail</label>
          </div>
          <div class="col-auto">
            <input type="text" id="Email" name="EMAIL" placeholder="E mail" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
    <div class="col">
        <div class="col-auto">
            <label for="inputName" class="col-form-label">Date of Birth</label>
          </div>
          <div class="col-auto">
            <input type="date" id="inputName" name="DOB" placeholder="Coach Name" class="form-control" aria-describedby="NameHelpInline">
          </div>
    </div>
  </div>

  <div class="mb-3 form-check">
    <!-- <input type="checkbox" checked="checked" class="form-check-input" id="accept" name="accept"/> -->

    <a  href="http://localhost/TermsandConditions.php" target="_blank" id="exampleCheck "class="form-check-label">Read Terms and Conditions</a>
  </div>

  <button type="submit" id="btn" class="btn btn-primary">Submit</button>
<!-- </form>

</div> -->



    <!-- Your content goes here -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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