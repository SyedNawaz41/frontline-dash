<?php include 'dheader.php'; ?>
<div class="col-lg-9 hmdsc2">
    <h1 class="page-title">Profile</h1>
    <div class="pt-box2 prof-box">
        <h4><strong>Application Progress: </strong> Getting Started</h4>
        <ul class="pg-sec">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Work History</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Professional Info</a></li>
            <li><a href="#">References</a></li>
            <li><a href="#">Checklists</a></li>
        </ul>
        <i class="fa fa-star"></i>
        <div class="pz-sec">
            <p>Your personal information is needed for many reasons — from facilities contacting you for interviews to fun things like gifts from Aya! Plus, we use your job preferences to find positions with shifts and locations that fit your lifestyle.</p>
            <a href="#">SKIP TO NEXT SECTION</a>
        </div>
    </div>
    <form action="" class="prof-form-sec">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <span>1</span> Personal Information
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="prof-box2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="firstname" class="form-label">First Name*</label>
                                    <input type="text" class="form-control" name="First Name" id="" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="lastname" class="form-label">Last Name*</label>
                                    <input type="text" class="form-control" name="Last Name" id="" required>
                                </div>
                                <h6>Contact Info</h6>
                                <div class="col-lg-6">
                                    <label for="phone" class="form-label">Phone*</label>
                                    <input type="number" class="form-control" name="Phone" id="" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="chat" class="form-label">When can you chat?</label>
                                    <input type="text" class="form-control" name="Chat" id="" required>
                                </div>
                                <div class="col-lg-12">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" class="form-control" name="Email" id="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <span>2</span> Addresses
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <div class="addresses-sec">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6>Permanent Address</h6>
                                    <label for="address" class="form-label">Address*</label>
                                    <input type="text" class="form-control" name="Address" id="" required>
                                </div>
                                <div class="col-lg-12">
                                    <label for="addressline2" class="form-label">Address line 2 (optional)</label>
                                    <input type="text" class="form-control" name="AddressLine2" id="">
                                </div>
                                <div class="col-lg-6">
                                    <label for="city" class="form-label">City*</label>
                                    <input type="text" class="form-control" name="City" id="" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="state" class="form-label">State*</label>
                                    <Select class="form-control" required>
                                        <option value="" selected="">All States</option>
                                        <option value="alabama">Alabama</option>
                                        <option value="alaska">Alaska</option>
                                        <option value="all-states">All States</option>
                                        <option value="any">Any</option>
                                        <option value="any-compact-state">Any Compact State</option>
                                        <option value="arizona">Arizona</option>
                                        <option value="arkansas">Arkansas</option>
                                        <option value="california">California</option>
                                        <option value="colorado">Colorado</option>
                                        <option value="connecticut">Connecticut</option>
                                        <option value="delaware">Delaware</option>
                                        <option value="district-of-columbia">District of Columbia</option>
                                        <option value="florida">Florida</option>
                                        <option value="georgia">Georiga</option>
                                        <option value="hawaii">Hawaii</option>
                                        <option value="idaho">Idaho</option>
                                        <option value="illinios">Illinios</option>
                                        <option value="indiana">Indiana</option>
                                        <option value="iowa">Iowa</option>
                                        <option value="kansas">Kansas</option>
                                        <option value="kentucky">Kentucky</option>
                                        <option value="louisiana">Louisiana</option>
                                        <option value="maine">Maine</option>
                                        <option value="maryland">Maryland</option>
                                        <option value="massachusetts">Massachusetts</option>
                                        <option value="michigan">Michigan</option>
                                        <option value="minnesota">Minnesota</option>
                                        <option value="mississippi">Mississippi</option>
                                        <option value="missouri">Missouri</option>
                                        <option value="montana">Montana</option>
                                        <option value="nebraska">Nebraska</option>
                                        <option value="nevada">Nevada</option>
                                        <option value="new-hampshire">New Hampshire</option>
                                        <option value="new-jersey">New Jersey</option>
                                        <option value="new-mexico">New Mexico</option>
                                        <option value="new-york">New York</option>
                                        <option value="north-carolina">North Carolina</option>
                                        <option value="north-dakota">North Dakota</option>
                                        <option value="ohio">Ohio</option>
                                        <option value="oklahoma">Oklahoma</option>
                                        <option value="oregon">Oregon</option>
                                        <option value="other">Other</option>
                                        <option value="pennsylvania">Pennsylvania</option>
                                        <option value="rhode-island">Rhode Island</option>
                                        <option value="south-carolina">South Carolina</option>
                                        <option value="south-dakota">South Dakota</option>
                                        <option value="tennessee">Tennessee</option>
                                        <option value="texas">Texas</option>
                                        <option value="unknown">Unknown</option>
                                        <option value="utah">Utah</option>
                                        <option value="vermont">Vermont</option>
                                        <option value="virginia">Virginia</option>
                                        <option value="washington">Washington</option>
                                        <option value="west-virginia">West Virginia</option>
                                        <option value="wisconsin">Wisconsin</option>
                                        <option value="wyoming">Wyoming</option>
                                    </Select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="zipcode" class="form-label">Zip Code</label>
                                    <input type="number" name="zip-code" id="" class="form-control" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="country" class="form-label">Coutry</label>
                                    <Select class="form-control">
                                        <option value="" selected="">US</option>
                                        <option value="canada">Canada</option>
                                        <option value="american-samoa">American Samoa</option>
                                        <option value="guam">Guam</option>
                                        <option value="morthern-mariana-islands">Northern Mariana Islands</option>
                                        <option value="virgin-islands">Virgin Islands(U.S.)</option>
                                        <option value="puerto-rico">Puerto Rico</option>
                                    </Select>
                                </div>
                                <div class="col-lg-12">
                                    <h6>Current Address</h6>
                                    <label for="cpqe"><input class="coupon_question" type="checkbox" id="cpqe" name="coupon_question" value="1" onchange="valueChanged()"> Same as permanent Address</label>
                                </div>
                                <div class="answer row">
                                    <div class="col-lg-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="Address" id="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" name="City" id="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="state" class="form-label">State</label>
                                        <Select class="form-control">
                                            <option value="" selected="">All States</option>
                                            <option value="alabama">Alabama</option>
                                            <option value="alaska">Alaska</option>
                                            <option value="all-states">All States</option>
                                            <option value="any">Any</option>
                                            <option value="any-compact-state">Any Compact State</option>
                                            <option value="arizona">Arizona</option>
                                            <option value="arkansas">Arkansas</option>
                                            <option value="california">California</option>
                                            <option value="colorado">Colorado</option>
                                            <option value="connecticut">Connecticut</option>
                                            <option value="delaware">Delaware</option>
                                            <option value="district-of-columbia">District of Columbia</option>
                                            <option value="florida">Florida</option>
                                            <option value="georgia">Georiga</option>
                                            <option value="hawaii">Hawaii</option>
                                            <option value="idaho">Idaho</option>
                                            <option value="illinios">Illinios</option>
                                            <option value="indiana">Indiana</option>
                                            <option value="iowa">Iowa</option>
                                            <option value="kansas">Kansas</option>
                                            <option value="kentucky">Kentucky</option>
                                            <option value="louisiana">Louisiana</option>
                                            <option value="maine">Maine</option>
                                            <option value="maryland">Maryland</option>
                                            <option value="massachusetts">Massachusetts</option>
                                            <option value="michigan">Michigan</option>
                                            <option value="minnesota">Minnesota</option>
                                            <option value="mississippi">Mississippi</option>
                                            <option value="missouri">Missouri</option>
                                            <option value="montana">Montana</option>
                                            <option value="nebraska">Nebraska</option>
                                            <option value="nevada">Nevada</option>
                                            <option value="new-hampshire">New Hampshire</option>
                                            <option value="new-jersey">New Jersey</option>
                                            <option value="new-mexico">New Mexico</option>
                                            <option value="new-york">New York</option>
                                            <option value="north-carolina">North Carolina</option>
                                            <option value="north-dakota">North Dakota</option>
                                            <option value="ohio">Ohio</option>
                                            <option value="oklahoma">Oklahoma</option>
                                            <option value="oregon">Oregon</option>
                                            <option value="other">Other</option>
                                            <option value="pennsylvania">Pennsylvania</option>
                                            <option value="rhode-island">Rhode Island</option>
                                            <option value="south-carolina">South Carolina</option>
                                            <option value="south-dakota">South Dakota</option>
                                            <option value="tennessee">Tennessee</option>
                                            <option value="texas">Texas</option>
                                            <option value="unknown">Unknown</option>
                                            <option value="utah">Utah</option>
                                            <option value="vermont">Vermont</option>
                                            <option value="virginia">Virginia</option>
                                            <option value="washington">Washington</option>
                                            <option value="west-virginia">West Virginia</option>
                                            <option value="wisconsin">Wisconsin</option>
                                            <option value="wyoming">Wyoming</option>
                                        </Select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="zipcode" class="form-label">Zip Code</label>
                                        <input type="number" name="zip-code" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <span>3</span> Professional Details
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="address" class="form-label">Profession*</label>
                                <Select class="form-control" required>
                                    <option value="" selected="">Select an Option</option>
                                    <optgroup label="Nursing">
                                        <option value="Registered-Nurse">Registered Nurse</option>
                                        <option value="CNA-Nurse-Assistant">CNA / Nurse Assistant</option>
                                        <option value="Clinical-Support-Services">Clinical Support Services</option>
                                        <option value="LVN-LPN">LVN / LPN</option>
                                        <option value="Personal-Care-Attendant">Personal Care Attendant</option>
                                        <option value="Nursing-Assistant">Nursing Assistant</option>
                                        <option value="Student-Nurse-Extern">Student Nurse Extern</option>
                                        <option value="Clinical-Licensed-Pool">Clinical Licensed Pool</option>
                                        <option value="Clinical-Non-Licensed-Pool">Clinical Non-Licensed Pool</option>
                                    </optgroup>
                                    <optgroup label="Allied">
                                        <option value="Anesthesia-Assistant">Anesthesia Assistant</option>
                                        <option value="Ancillary-Support-Services">Ancillary Support Services</option>
                                        <option value="Behavioral-Health-Assistant">Behavioral Health Assistant</option>
                                        <option value="Behavioral-Health-Tech">Behavioral Health Tech</option>
                                        <option value="Certified-Anesthesia-Technician">Certified Anesthesia Technician</option>
                                        <option value="Certified-Child-Life-Specialist">Certified Child Life Specialist</option>
                                        <option value="Clinical-Psychologist">Clinical Psychologist</option>
                                        <option value="Acupuncturist">Acupuncturist</option>
                                        <option value="Chiropractor">Chiropractor</option>
                                        <option value="Clinical-Support-Technician">Clinical Support Technician</option>
                                        <option value="Cytotechnologist">Cytotechnologist</option>
                                        <option value="Dentistry">Dentistry</option>
                                        <option value="Dialysis-Tech">Dialysis Tech</option>
                                        <option value="Dietary-Services">Dietary Services</option>
                                        <option value="EMT">EMT</option>
                                        <option value="ER-Tech">ER Tech</option>
                                        <option value="Laboratory">Laboratory</option>
                                        <option value="Medical-Assistant">Medical Assistant</option>
                                        <option value="MHT">MHT</option>
                                        <option value="Mortuary-Services">Mortuary Services</option>
                                        <option value="Ophthalmology">Ophthalmology</option>
                                        <option value="Paramedic">Paramedic</option>
                                        <option value="Patient-Care-Technician">Patient Care Technician</option>
                                        <option value="Perfusionist">Perfusionist</option>
                                        <option value="Pharmacy">Pharmacy</option>
                                        <option value="Physicist">Physicist</option>
                                        <option value="Radiology-Cardiology">Radiology / Cardiology</option>
                                        <option value="Respiratory-Neuro-Diagnostics">Respiratory / Neuro Diagnostics</option>
                                        <option value="Schools/Education">Schools/Education</option>
                                        <option value="Sitter">Sitter</option>
                                        <option value="Social-Services">Social Services</option>
                                        <option value="Sports-Medicine">Sports Medicine</option>
                                        <option value="Surgical-Services">Surgical Services</option>
                                        <option value="Therapy-Rehabilitation">Therapy/Rehabilitation</option>
                                        <option value="Trained-Medication-Assistant">Trained Medication Assistant</option>
                                        <option value="Genetic-Counselor">Genetic Counselor</option>
                                    </optgroup>
                                    <optgroup label="Locum Tenens">
                                        <option value="Physician">Physician</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="Midwife">Midwife</option>
                                        <option value="Certifie- Registered-Nurse-Anesthetist-(CRNA)">Certified Registered Nurse Anesthetist (CRNA)</option>
                                        <option value="Nurse-Practitioner">Nurse Practitioner</option>
                                        <option value="Physician-Assistant">Physician Assistant</option>
                                    </optgroup>
                                    <optgroup label="Interim Leadership">
                                        <option value="Manager-Director">Manager / Director</option>
                                    </optgroup>
                                    <optgroup label="Non Clinical">
                                        <option value="Non-Clinical-Health-and-Information-Management">Non-Clinical - Health and Information Management</option>
                                        <option value="Environmental-Services">Environmental Services</option>
                                        <option value="Facilities">Facilities</option>
                                        <option value="Finance-Accounting">Finance/Accounting</option>
                                        <option value="Food-and-Nutrition-Services">Food and Nutrition Services</option>
                                        <option value="Human-Resources">Human Resources</option>
                                        <option value="Non-Clinical">Non-Clinical</option>
                                        <option value="Non-Clinical-Environmental-Services">Non-Clinical - Environmental Services</option>
                                        <option value="Non-Clinical-Facilities">Non-Clinical - Facilities</option>
                                        <option value="Non-Clinical-Finance-Accounting">Non-Clinical - Finance/Accounting</option>
                                        <option value="Non-Clinical-Food-and-Nutrition-Services">Non-Clinical - Food and Nutrition Services</option>
                                        <option value="Non-Clinical-Human-Resources">Non-Clinical - Human Resources</option>
                                        <option value="Non-Clinical-Information-Technology">Non-Clinical - Information Technology</option>
                                        <option value="Non-Clinical-Legal">Non-Clinical - Legal</option>
                                        <option value="Non-Clinical-Marketing">Non-Clinical - Marketing</option>
                                        <option value="Non-Clinical-Religious-Services">Non-Clinical - Religious Services</option>
                                        <option value="Non-Clinical-Security">Non-Clinical - Security</option>
                                        <option value="Non-Clinical-Transportation-Logistics">Non-Clinical - Transportation/Logistics</option>
                                        <option value="Psychometrician">Psychometrician</option>
                                        <option value="Non-Clinical-Administrative">Non-Clinical - Administrative</option>
                                    </optgroup>
                                </Select>
                            </div>
                            <div class="col-lg-6">
                            <label for="Specialty">Specialty</label>
                                    <select data-placeholder="Specialties" class="chosen-select" placeholder="Specialties" multiple required>
                                        <option value="">Acute Care Float</option>
                                        <option value="">Administrative</option>
                                        <option value="">Ambulatory Care</option>
                                        <option value="">Anesthetist</option>
                                        <option value="">Antepartum</option>
                                        <option value="">Apheresis</option>
                                        <option value="">Bariatrics</option>
                                        <option value="">Behavioral Health</option>
                                        <option value="">BICU</option>
                                        <option value="">BMT</option>
                                        <option value="">Cardiac Rehab</option>
                                        <option value="">Cardiac Stress Testing</option>
                                        <option value="">Cardiac Thoracic ICU</option>
                                        <option value="">Case Manager</option>
                                        <option value="">Cath Lab</option>
                                        <option value="">Cath Lab Holding</option>
                                        <option value="">CCU</option>
                                        <option value="">Chemo</option>
                                        <option value="">Clinical Decisions</option>
                                        <option value="">Clinical Documentation Specialist</option>
                                        <option value="">Clinical Education Specialist</option>
                                        <option value="">Clinical Research Coordinator</option>
                                        <option value="">Clinical Research Nurse (CRN)</option>
                                        <option value="">Correctional</option>
                                        <option value="">COVID ICU</option>
                                        <option value="">COVID Testing</option>
                                        <option value="">Critical Care Float</option>
                                        <option value="">Critical Care Transport</option>
                                        <option value="">CVCC</option>
                                        <option value="">CVICU</option>
                                        <option value="">CVOR</option>
                                        <option value="">CVPICU</option>
                                        <option value="">Dialysis</option>
                                        <option value="">Director</option>
                                        <option value="">Discharge Planner</option>
                                        <option value="">DOU</option>
                                        <option value="">Educator</option>
                                        <option value="">Emergency Transport Traveler</option>
                                        <option value="">Emeritus Nurse</option>
                                        <option value="">Endoscopy</option>
                                        <option value="">EP Lab</option>
                                        <option value="">ER</option>
                                        <option value="">ER Holding</option>
                                        <option value="">Fertility/In Vitro Fertilization (IVF)</option>
                                        <option value="">Geriatrics</option>
                                        <option value="">GI Lab</option>
                                        <option value="">Hematology/Oncology</option>
                                        <option value="">Home Health</option>
                                        <option value="">Hospice</option>
                                        <option value="">House Supervisor</option>
                                        <option value="">Hyperbaric</option>
                                        <option value="">IMC</option>
                                        <option value="">Infection Prevention</option>
                                        <option value="">Infusion</option>
                                        <option value="">Interventional Radiology</option>
                                        <option value="">IV Therapy / Vascular Access Team</option>
                                        <option value="">Labor and Delivery</option>
                                        <option value="">LTAC</option>
                                        <option value="">LTAC ICU</option>
                                        <option value="">LTAC MedSurg</option>
                                        <option value="">LTAC MS/Tele</option>
                                        <option value="">LTAC Telemetry</option>
                                        <option value="">LTC</option>
                                        <option value="">Manager</option>
                                        <option value="">MDS Coordinator</option>
                                        <option value="">Medical Surgical</option>
                                        <option value="">Medical Surgical - Neuro</option>
                                        <option value="">Medical Surgical - Oncology</option>
                                        <option value="">Medical Surgical Float</option>
                                        <option value="">MICU</option>
                                        <option value="">Mother-Baby / Couplet Care / Post Partum</option>
                                        <option value="">MS/Tele</option>
                                        <option value="">MS/Tele Float</option>
                                        <option value="">Nephrology</option>
                                        <option value="">Neuro ICU</option>
                                        <option value="">New Graduate</option>
                                        <option value="">NICU</option>
                                        <option value="">Nurse Navigator</option>
                                        <option value="">Nursery</option>
                                        <option value="">OB/GYN</option>
                                        <option value="">Observation Unit</option>
                                        <option value="">Occupational Health</option>
                                        <option value="">Oncology</option>
                                        <option value="">Oncology - Pediatric</option>
                                        <option value="">Oncology Chemo Certified</option>
                                        <option value="">Oncology Clinic</option>
                                        <option value="">Open Heart</option>
                                        <option value="">Operating Room</option>
                                        <option value="">Ortho</option>
                                        <option value="">Outpatient Clinic</option>
                                        <option value="">Outpatient Clinic Cardiology</option>
                                        <option value="">Outpatient Clinic Hematology/Oncology</option>
                                        <option value="">Outpatient Clinic Infusion</option>
                                        <option value="">Outpatient Clinic Phlebotomy</option>
                                        <option value="">Outpatient Pediatrics</option>
                                        <option value="">Outpatient Surgery</option>
                                        <option value="">PACU</option>
                                        <option value="">Pain Management</option>
                                        <option value="">PCU</option>
                                        <option value="">PCU Float</option>
                                        <option value="">Pediatric Acute Care Float Pool</option>
                                        <option value="">Pediatric Apheresis</option>
                                        <option value="">Pediatric Behavioral Health</option>
                                        <option value="">Pediatric Cardiology</option>
                                        <option value="">Pediatric Cath Lab</option>
                                        <option value="">Pediatric Critical Care Float Pool</option>
                                        <option value="">Pediatric CVOR</option>
                                        <option value="">Pediatric Dialysis</option>
                                        <option value="">Pediatric ER</option>
                                        <option value="">Pediatric Home Health</option>
                                        <option value="">Pediatric LTAC</option>
                                        <option value="">Pediatric Neuro</option>
                                        <option value="">Pediatric OR</option>
                                        <option value="">Pediatric Ortho</option>
                                        <option value="">Pediatric PACU</option>
                                        <option value="">Pediatric PCU</option>
                                        <option value="">Pediatric Pulmonary</option>
                                        <option value="">Pediatric Rehab</option>
                                        <option value="">Pediatric StepDown</option>
                                        <option value="">Pediatric Telemetry</option>
                                        <option value="">Pediatric Transport</option>
                                        <option value="">Pediatrics</option>
                                        <option value="">PICC</option>
                                        <option value="">PICU</option>
                                        <option value="">PreOp</option>
                                        <option value="">Primary Care</option>
                                        <option value="">Public / Community Health</option>
                                        <option value="">Quality Management</option>
                                        <option value="">Radiation Oncology</option>
                                        <option value="">Radiology</option>
                                        <option value="">Radiology Manager</option>
                                        <option value="">Referral Coordinator</option>
                                        <option value="">Rehab</option>
                                        <option value="">RNFA</option>
                                        <option value="">School</option>
                                        <option value="">SICU</option>
                                        <option value="">Step down</option>
                                        <option value="">Stepdown Cardiac</option>
                                        <option value="">Stepdown Neuro</option>
                                        <option value="">Student Nurse</option>
                                        <option value="">Sub-Acute</option>
                                        <option value="">TCU</option>
                                        <option value="">Tele Float</option>
                                        <option value="">Telemetry</option>
                                        <option value="">Telephone Triage/Call Center</option>
                                        <option value="">Theragnostics</option>
                                        <option value="">Transplant</option>
                                        <option value="">Urgent Care</option>
                                        <option value="">Utilization Review</option>
                                        <option value="">Vaccination Support</option>
                                        <option value="wound-care">Wound Care</option>
                                    </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="specialty-term" class="form-label">Specialty Term*</label>
                                <select name="term" class="form-control">
  
  <?php
    for ($i=0; $i<=25; $i++) {
      echo "<option value=\"$i\">$i years</option>";
    }
  ?>
</select>
                            </div>
                            <div class="col-lg-6">
                                <label for="zipcode" class="form-label">Zip Code</label>
                                <input type="number" name="zip-code" id="" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="country" class="form-label">Coutry</label>
                                <Select class="form-control">
                                    <option value="" selected="">US</option>
                                    <option value="canada">Canada</option>
                                    <option value="american-samoa">American Samoa</option>
                                    <option value="guam">Guam</option>
                                    <option value="morthern-mariana-islands">Northern Mariana Islands</option>
                                    <option value="virgin-islands">Virgin Islands(U.S.)</option>
                                    <option value="puerto-rico">Puerto Rico</option>
                                </Select>
                            </div>
                            <div class="col-lg-12">
                                <h6>Current Address</h6>
                                <label for="cpqe"><input class="coupon_question" type="checkbox" id="cpqe" name="coupon_question" value="1" onchange="valueChanged()"> Same as permanent Address</label>
                            </div>
                            <div class="answer row">
                                <div class="col-lg-12">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="Address" id="">
                                </div>
                                <div class="col-lg-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" name="City" id="">
                                </div>
                                <div class="col-lg-6">
                                    <label for="state" class="form-label">State</label>
                                    <Select class="form-control">
                                        <option value="" selected="">All States</option>
                                        <option value="alabama">Alabama</option>
                                        <option value="alaska">Alaska</option>
                                        <option value="all-states">All States</option>
                                        <option value="any">Any</option>
                                        <option value="any-compact-state">Any Compact State</option>
                                        <option value="arizona">Arizona</option>
                                        <option value="arkansas">Arkansas</option>
                                        <option value="california">California</option>
                                        <option value="colorado">Colorado</option>
                                        <option value="connecticut">Connecticut</option>
                                        <option value="delaware">Delaware</option>
                                        <option value="district-of-columbia">District of Columbia</option>
                                        <option value="florida">Florida</option>
                                        <option value="georgia">Georiga</option>
                                        <option value="hawaii">Hawaii</option>
                                        <option value="idaho">Idaho</option>
                                        <option value="illinios">Illinios</option>
                                        <option value="indiana">Indiana</option>
                                        <option value="iowa">Iowa</option>
                                        <option value="kansas">Kansas</option>
                                        <option value="kentucky">Kentucky</option>
                                        <option value="louisiana">Louisiana</option>
                                        <option value="maine">Maine</option>
                                        <option value="maryland">Maryland</option>
                                        <option value="massachusetts">Massachusetts</option>
                                        <option value="michigan">Michigan</option>
                                        <option value="minnesota">Minnesota</option>
                                        <option value="mississippi">Mississippi</option>
                                        <option value="missouri">Missouri</option>
                                        <option value="montana">Montana</option>
                                        <option value="nebraska">Nebraska</option>
                                        <option value="nevada">Nevada</option>
                                        <option value="new-hampshire">New Hampshire</option>
                                        <option value="new-jersey">New Jersey</option>
                                        <option value="new-mexico">New Mexico</option>
                                        <option value="new-york">New York</option>
                                        <option value="north-carolina">North Carolina</option>
                                        <option value="north-dakota">North Dakota</option>
                                        <option value="ohio">Ohio</option>
                                        <option value="oklahoma">Oklahoma</option>
                                        <option value="oregon">Oregon</option>
                                        <option value="other">Other</option>
                                        <option value="pennsylvania">Pennsylvania</option>
                                        <option value="rhode-island">Rhode Island</option>
                                        <option value="south-carolina">South Carolina</option>
                                        <option value="south-dakota">South Dakota</option>
                                        <option value="tennessee">Tennessee</option>
                                        <option value="texas">Texas</option>
                                        <option value="unknown">Unknown</option>
                                        <option value="utah">Utah</option>
                                        <option value="vermont">Vermont</option>
                                        <option value="virginia">Virginia</option>
                                        <option value="washington">Washington</option>
                                        <option value="west-virginia">West Virginia</option>
                                        <option value="wisconsin">Wisconsin</option>
                                        <option value="wyoming">Wyoming</option>
                                    </Select>
                                </div>
                                <div class="col-lg-12">
                                    <label for="zipcode" class="form-label">Zip Code</label>
                                    <input type="number" name="zip-code" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    <span>4</span> Job Preferences
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                    <span>5</span> Submitted Info
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
</div>
</form>
<div class="dfooter-sec">
    <p>© 2023 FLH Staffing</p>
    <a href="#">Terms of Use</a> <a href="#">Privacy Policy</a> <a href="#">Arbitration Agreement </a>
</div>
</div>
</div>
</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<script>
    $(".chosen-select").chosen()
</script>

<script>
    $(document).ready(function() {
        $(".o-icon").click(function() {
            $(".hmdsc1").addClass("opeen-icon");
        });
    });
    $(document).ready(function() {
        $(".c-icon").click(function() {
            $(".hmdsc1").removeClass("opeen-icon");
        });
    });
    $(document).ready(function() {
        $(".o-icon").click(function() {
            $(".o-icon").addClass("di-none");
        });
    });
    $(document).ready(function() {
        $(".c-icon").click(function() {
            $(".o-icon").removeClass("di-none");
        });
    });
</script>


<script type="text/javascript">
    function valueChanged() {
        if ($('.coupon_question').is(":checked"))
            $(".answer").hide();
        else
            $(".answer").show();
    }
</script>
</body>

</html>