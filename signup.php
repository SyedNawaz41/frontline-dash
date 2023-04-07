<?php
@include 'header.php';
?>


<!-- Banner Section Start -->
<section class="pbanner-sec  login1-sec signup1-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <div class="lmain-box">

                <div class="row h-sec4m">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false"><i class="fa fa-user-o"></i> Candidate</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true"><i class="fa fa-building"></i> Employer</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="">
                    <h3>REGISTER TODAY TO MAKE YOUR CAREER DREAMS A REALITY</h3>
                    <p>Fill the form below to get instant access:</p>
                    <form>
                        <input type="text" placeholder="First Name*" required>
                        <input type="text" placeholder="Last Name*" required>
                        <input type="text" placeholder="Username*" required>
                        <input type="email" placeholder="Email*" required>
                        <input type="tel" placeholder="Phone Number">
                        <select name="" id="">
                            <option value="" selected>Select Selectors</option>
                            <option value="">Allied Health</option>
                            <option value="">Certified Registered Nurse Anesthetist</option>
                            <option value="">Clinical Support Services</option>
                            <option value="">CNA / Nurse Assistant</option>
                            <option value="">CNA / Nurse AssistantCNA / Nurse Assistant</option>
                            <option value="">Dentist</option>
                            <option value="">Extern / Nursing Student</option>
                            <option value="">Locum Tenens</option>
                            <option value="">LPN / Licensed Practical Nurse</option>
                            <option value="">Nurse Practitioner</option>
                            <option value="">Nursing</option>
                            <option value="">Pharmacist</option>
                            <option value="">Pharmacy Technician</option>
                            <option value="">Physician</option>
                            <option value="">Physician Assistant</option>
                            <option value="">Registered Nurse</option>
                        </select> <br> <br>
                        <input type="file" id="myFile" name="filename">
                        <select name="" id="">
                            <option value="" selected>Country of Residence</option>
                            <option value="">US</option>
                            <option value="">Canada</option>
                        </select>
                        <input type="text" placeholder="Zip Code/Postal Code*" required>
                        <select name="" id="">
                            <option value="" selected>Profession</option>
                            <option value="">Nursing</option>
                            <option value="">Allied Health</option>
                            <option value="">Locum Tenens</option>
                            <option value="">Non Clinical</option>
                        </select>
                        <input type="number" placeholder="Years of Experience">
                        <select name="" id="">
                            <option value="" selected>How soon would you like to start?</option>
                            <option value="">I'm ready to go!</option>
                            <option value="">Within the next 2 months.</option>
                            <option value="">Within the next 6 months.</option>
                            <option value="">I'm just browsing.</option>
                        </select>
                        <input type="text" placeholder="Were you recommended by anyone? (Optional)">
                        <input type="password" placeholder="Password*" required>
                        <input type="password" placeholder="Confirm Password*" required>
                        <button type="submit" value="Submit" class="btn">Sign up</button>
                    </form>
                </div>
                        </div>
                        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="">
                    <h3>REGISTER TODAY TO MAKE YOUR CAREER DREAMS A REALITY</h3>
                    <p>Fill the form below to get instant access:</p>
                    <form action="">
        <input type="text" placeholder="First Name*" required>
        <input type="text" placeholder="Last Name*" required>
        <input type="text" placeholder="Username*" required>
        <input type="email" placeholder="Email*" required>
        <input type="tel" placeholder="Phone Number" >
        <input type="text" placeholder="Organization Name">
        <input type="password" placeholder="Password*" required>
        <input type="password" placeholder="Confirm Password*" required>
        <button type="submit" value="Submit" class="btn">Sign up</button>
    </form>
                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- Banner Section End -->





<?php
@include 'footer.php';
?>