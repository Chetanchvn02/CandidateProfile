<?php 
/* Template Name: user register */
?>
<?php get_header(); ?>

<form class="profile" method="post" action="#">
    <div class="container">
        <h4 class="text-center mb-3 mt-3">User Profile</h4>
        <h5>Personal Details</h5>
        <div class="form-row">
            <div class="form-group col-md-6 required">
                <input type="text" name="firstname" class="form-control rounded-pill form-control-lg" required placeholder="First name">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="lastname" class="form-control rounded-pill form-control-lg" required placeholder="Last name">
            </div>
        </div>

        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
            <label class="form-check-label" for="gender">
            Male
            </label>
        </div>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
            <label class="form-check-label" for="gender">
            Female
            </label>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email"></label>
                <input type="email" name="email" class="form-control rounded-pill form-control-lg" required id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group col-md-6">
                <label for="phonenumber"></label>
                <input type="text" name="phone" class="form-control rounded-pill form-control-lg" required id="phonenumber" aria-describedby="emailHelp" placeholder="Enter phone number">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="state"></label>
                <select id="state" name="state" class="form-control rounded-pill form-control-lg" required>
                    <option selected>Choose State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="city"></label>
                <input type="text" name="city" class="form-control rounded-pill form-control-lg" required id="city" placeholder="Enter city">
            </div>
        </div>
        <!-- <div class="form-group file-upload-wrapper">
            <label for="profilepic"></label>
            <input type="file" class="form-control-file" id="profilepic">
        </div> -->
        <h5 class="mt-3">Education Details</h5>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="graduation"></label>
                <select id="graduation" name="graduation" class="form-control rounded-pill form-control-lg" required>
                    <option selected>Choose Stream</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="BCS">BCS</option>
                    <option value="BCA">BCA</option>
                    <option value="B.Com">B.Com</option>
                    <option value="BA">BA</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="grade"></label>
                <input type="text" name="grade" class="form-control rounded-pill form-control-lg" required id="grade" placeholder="Enter graduation grade/percentage">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="year"></label>
                <select id="year" name="year" class="form-control rounded-pill form-control-lg" required>
                    <option selected>Choose Year</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="specialization"></label>
                <input type="text" name="specialization" class="form-control rounded-pill form-control-lg" required id="specialization" placeholder="Enter specialization">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="college"></label>
                <input type="text" name="college" class="form-control rounded-pill form-control-lg" required id="college" placeholder="Enter college/university">
            </div>
        </div>
        <h5 class="mt-3">Skills</h5>
        <div class="form-row">
            <div class="form-group col-md-4">
                <input type="text" name="primary_skill" class="form-control rounded-pill form-control-lg" required placeholder="Primary">
            </div>
            <div class="form-group col-md-4">
                <input type="text" name="secondary_skill" class="form-control rounded-pill form-control-lg" required placeholder="Secondary">
            </div>
            <div class="form-group col-md-4">
                <input type="text" name="certification" class="form-control rounded-pill form-control-lg" required placeholder="Certification">
            </div>
        </div>
        <h5 class="mt-3">Pitch</h5>
        <div class="form-group col">
        <label for="pitch">Why should we consider you?</label>
            <textarea name="pitch" name="pitch"id="pitch" class="form-control rounded-pill form-control-lg" required></textarea>
        </div>
        <div class="form-group float-right">
            <button type="submit" name="submitBtn" class="btn btn-custom btn-block text-uppercase btn-lg rounded-pill">Submit</button>
        </div> 
    </div>
</form>


<?php get_footer(); ?>
