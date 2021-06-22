<div>
    <h3>Personal Details</h3>
    <form action="backend\update_personal.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" id="first" name="fname" placeholder="John">
            </div>
            <div class="form-group col-md-6">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" name="lname" id="last" placeholder="Doe">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputGender">Gender</label>
                <select id="inputGender" name="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputdob">Date Of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="01/12/1997">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="add1" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" name="add2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPhone">Phone</label>
                <input type="number" class="form-control" name="phone" id="inputPhone">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" name="zip" id="inputZip">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <br><br>
    <h3>Medical Details</h3>
    <form action="backend\update_medical.php" method="POST">  

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputDominantEye">Dominant Eye</label>
                <select id="inputDominantEye" name="dominant_eye" class="form-control">
                    <option value="left">Left</option>
                    <option value="right">Right</option>
                    <option value="none">None</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPeripheryStimulant">Periphery Stimulant</label>
                <select id="inputPeripheryStimulant" name="periphery_stimulant" class="form-control">
                    <option value="on">on</option>
                    <option value="off">off</option>
                    <!-- <option value="other">None</option> -->
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputControlPictures">Control Pictures</label>
                <select id="inputControlPictures" name="control_pictures" class="form-control">
                    <option value="on">on</option>
                    <option value="off">off</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputBackground">Background</label>
                <select id="inputBackground" name="background" class="form-control">
                    <option value="on">on</option>
                    <option value="off">off</option>
                    <!-- <option value="other">None</option> -->
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputObjectDistance">Distance of Objects from the Patient</label>
                <input type="number" class="form-control" name="object_distance" id="inputObjectDistance">
                    
            </div>
            <div class="form-group col-md-6">
                <label for="inputObjectSize">Size of Objects</label>
                <select id="inputObjectSize" name="object_size" class="form-control">
                    <option value="small">small</option>
                    <option value="medium">medium</option>
                    <option value="large">large</option>
                </select>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Update</button>
    </form>



</div>