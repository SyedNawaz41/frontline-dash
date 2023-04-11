<?php include 'dheader.php'; ?>
<Style>
    ::-webkit-scrollbar {
 display: none;
}
input,select{
    border:none;
    border-bottom:2px solid rgba(0,0,0,0.4);
}
.button{
    border-radius:20px;
    background-color:#47d0e6 !important;
    border:none;
    padding:5px;

}
label{
    font-size:14px;
    cursor:pointer !important;
}
input[type~="checkbox"]{
    width:10px;
    cursor:pointer !important;
}
.span{
    color: #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    background: #003b68;
    text-align: center;
    border-radius: 50px;
    font-weight: 500;
    margin-right: 15px;
    }
</Style>
<div class="col-lg-9 hmdsc2 ">
<?php include 'modal.php'; ?>
<h1 class="page-title ">Personal Info</h1>
<?php include 'applicationprogress.php'; ?>

    <!-- Head Section end -->
    <!-- Accordian Start -->
<div class=" mt-5 p-5">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <!-- 1 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      <span class="span">1</span>Licenses
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
        <!-- Accordian body start -->
      <div class="accordion-body">
        <!-- div of container Started -->
        <div class=" divContainer d-flex flex-column align-content-center justify-content-center mt-3 gap-5 p-2">
            <!-- inner row -->
            <div class="innerRow d-flex flex-column flex-lg-row gap-3 align-content-center ">
                <!-- Select start -->
            <select name="" id="" class="select">
            <option selected="" disabled >state</option>
            <option>Alabama</option>
            <option> American Samoa</option>
            <option> Alaska</option>
            <option> Arkansas</option>
            <option> Arizona</option>
            <option> Colorado</option>
            <option> California</option>
            <option> Delaware</option>
            <option> Connecticut</option>
            <option> Florida</option>
            <option> District of Columbia</option>
            <option> Guam</option>
            <option> Georgia</option>
            <option> Idaho</option>
            <option> Hawaii</option>
            <option> Indiana</option>
            <option> Illinois</option>
            <option> Kansas</option>
            <option> Iowa</option>
            <option> Louisiana</option>
            <option> Kentucky</option>
            <option> Maryland</option>
            <option> Massachusetts</option>
            <option> Michigan</option>
            <option> Minnesota</option>
            <option> Mississippi</option>
            <option> Missouri</option>
            <option> Montana</option>
            <option> Nebraska</option>
            <option> Nevada</option>
            <option> New Hampshire</option>
            <option> New Jersey</option>
            <option> New Mexico</option>
            <option> New York</option>
            <option> North Carolina</option>
            <option> North Dakota</option>
            <option> Northern Mariana Islands</option>
            <option> Ohio</option>
            <option> Oklahoma</option>
            <option> Oregon</option>
            <option> Other</option>
            <option> Pennsylvania</option>
            <option> Puerto Rico</option>
            <option> Rhode Island</option>
            <option> South Carolina</option>
            <option> South Dakota</option>
            <option> Tennessee</option>
            <option> Texas</option>
            <option> Unknown</option>
            <option> Utah</option>
            <option> Vermont</option>
            <option> Virgin Islands</option>
            <option> Virginia</option>
            <option> Washington</option>
            <option> West Virginia</option>
            <option> Wisconsin</option>
            <option> Wyoming</option>
            <option> Maine</option>
                </select>
                <!-- Select end -->
                <!-- input start -->
                <input type="number" placeholder="Number"  >
                <input type="date" name=""  >
                <!-- input end -->
            </div>
            <!-- end inner row -->
            <!-- Button Started -->
            <div >
                <button class="button">+ Add Section</button>
            </div>
            <!-- Button End -->
            <!-- start of next step -->
            <a class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="text-decoration:underline !important;" id="colOne">
            Next Step
            </a>
            <!-- end of next step -->
        </div>
        <!-- div of container ended -->
        
      </div>
      <!-- Accordian body end -->
    </div>
  </div>
  <!-- 1 end -->
  <!-- 2 start-->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
           <span class="span">2</span> Certification
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
        <!-- Body Start -->
        <div class="accordion-body">
            <!-- div of container Started -->
        <div class=" divContainer d-flex flex-column align-content-center justify-content-center mt-3 gap-5 p-2">
            <!-- inner row -->
            <div class="innerRow d-flex flex-column flex-lg-row gap-5 align-content-center ">
                <select name="" id="">
               <option value="" selected="" disabled> Certification</option>
               <option value=""> AAB</option>
               <option value=""> ABRET</option>
               <option value=""> ACLS</option>
               <option value=""> ALSO</option>
               <option value=""> AMT</option>
               <option value=""> ARDMS</option>
               <option value=""> ARRT</option>
               <option value=""> ASATT</option>
               <option value=""> ASCP</option>
               <option value=""> ATLS</option>
               <option value=""> AWHONN</option>
               <option value=""> AWHONN (Advanced)</option>
               <option value=""> AWHONN (Intermediate)</option>
               <option value=""> BLS</option>
               <option value=""> Board Certified</option>
               <option value=""> BTLS</option>
               <option value=""> CBSPD</option>
               <option value=""> CCI</option>
               <option value=""> CCRN</option>
               <option value=""> CEN</option>
               <option value=""> CHEMO</option>
               <option value=""> CNOR</option>
               <option value=""> CPFT</option>
               <option value=""> CPI</option>
               <option value=""> CPON</option>
               <option value=""> CPR</option>
               <option value=""> Critical Care Nurse</option>
               <option value=""> CRRN</option>
               <option value=""> CRTT</option>
               <option value=""> EKG</option>
               <option value=""> ENPC</option>
               <option value=""> FHM</option>
               <option value=""> IABP</option>
               <option value=""> IAHCSMM</option>
               <option value=""> MAB</option>
               <option value=""> NALS</option>
               <option value=""> NBRC</option>
               <option value=""> NBSTSA</option>
               <option value=""> NCCT</option>
               <option value=""> NCPT</option>
               <option value=""> NHA</option>
               <option value=""> NIH</option>
               <option value=""> NPS</option>
               <option value=""> NRP</option>
               <option value=""> OCN</option>
               <option value=""> PALS</option>
               <option value=""> RCIS</option>
               <option value=""> RDCS</option>
               <option value=""> RPFT</option>
               <option value=""> RPSGT</option>
               <option value=""> RRT</option>
               <option value=""> SGNA</option>
               <option value=""> TNCC</option>
               <option value=""> WCC</option>
                </select>
                <!-- for date start -->
                <div>
                    <label for="date">Date:</label>
                    <input type="date" id="date">
                </div>
                
                <!-- for date end -->
                </div>
                <!-- inner row end-->
                <!-- for button start -->
                <div >
                <button class="button">+ Add Section</button>
                </div>
                <!-- for button end -->
                  <!-- start of next step -->
                  <a class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style="text-decoration:underline !important;">
                    Next Step
                </a>
                <!-- end of next step -->
            </div>
            <!-- container end end -->
        </div>
        <!-- Body End -->
    </div>
  </div>
  <!-- 2 end -->
  <!-- 3 start -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        <span class="span">3</span>Addition Info
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
        <!-- Body Strt -->
        <div class="accordion-body">
            <!-- container start -->
                <div class="d-flex justify-content-center flex-column gap-5 mt-3">
                    <!-- Text area start -->
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                        <label for="floatingTextarea">What are some details you would like us to share with facilities that make you an extra special candidate?</label>
                    </div>
                    <!-- Text area end -->
                    <a class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:underline !important;" id="colTwo">
                    Next Step
                    </a>
                </div>   
            <!-- container end -->
            </div>
            <!-- Body end -->
    </div>
    </div>
    </div>
    <!-- 3end -->
  <!-- 4 start -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <span class="span">4</span>Charting System
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
        <!-- Accordian body Start -->
        <div class="accordion-body">
            <!-- container start -->
            <div class="d-flex p-2 gap-0 gap-lg-4 flex-column flex-lg-row">
                <!-- left side start-->
                <div class='d-flex flex-column w-25 fx' style="font-size:13.5px ">
                    Do you Have experience with any of these EMR/EHR systems?
                    <p style="font-size:11.6667px; color:rgba(0,0,0,0.87);">
                        Select all that apply
                    </p>
                </div>
                <!-- left side end-->
                <!-- Right side Start -->
                <div class="d-flex gap-0 flex-column gap-lg-4 flex-lg-row " style="font-size:14px">
                <!-- inner flex column start -->
                <div class="d-flex flex-column ">
                    <!-- 1 -->
                    <div>
                        <input type="checkbox" name="" id="1">
                        <label for="1">Allscripts</label>
                    </div>
                    <!-- 2 -->
                    <div>
                        <input type="checkbox" name="" id="2">
                        <label for="2">Centricity</label>
                    </div>
                    <!-- 3 -->
                    <div>
                        <input type="checkbox" name="" id="3">
                        <label for="3">Cerner</label>
                    </div>
                    <!-- 4 -->
                    <div>
                        <input type="checkbox" name="" id="4">
                        <label for="4">Epic</label>
                    </div>
                    <!-- 5 -->
                    <div>
                        <input type="checkbox" name="" id="5">
                        <label for="5">GE Healthcare</label>
                    </div>
                    <!-- 6 -->
                    <div>
                        <input type="checkbox" name="" id="6">
                        <label for="6">GE Healthcare</label>
                    </div>
                    <!-- 7 -->
                    <div>
                        <input type="checkbox" name="" id="7">
                        <label for="7">Horizon</label>
                    </div>
                </div>
                <!-- inner flex column end -->
                <!-- For right side inner flex olumn start -->
                <div class="d-flex flex-column ">
                <!-- 8 -->
                <div>
                    <input type="checkbox" name="" id="8">
                    <label for="8">McKesson</label>
                </div>
                <!-- 9 -->
                <div>
                    <input type="checkbox" name="" id="9">
                    <label for="9">Meditech</label>
                </div>
                <!-- 10 -->
                <div>
                    <input type="checkbox" name="" id="10">
                    <label for="10">Siemens</label>
                </div>
                <!-- 11 -->
                <div>
                    <input type="checkbox" name="" id="11">
                    <label for="11">Sunrise</label>
                </div>
                <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea" style="font-size:12px; word-wrap:wrap;">other(please Lists) </label>
                </div>
                </div>
                <!-- For right side inner flex column end -->
            </div>
            <!-- Right side End -->
        </div>
        <!-- container End -->
        <a class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:underline !important;" id="colThree" >
        Next Step
      </a>
    </div>
        <!-- Accordian body End -->
    </div>
</div>
    <!-- 4end -->
    <!-- 5 start -->
    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <span class="span">5</span>Background
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <!-- Accordian body Start -->
        <div class="accordion-body">
            <!-- container Start -->
            <div class="d-flex gap-0 gap-lg-4 flex-column">
                <!-- Container inner start -->
                <div class="d-flex gap-0 gap-lg-2" style="font-size:14px; font-weight:500;">
                    <p class="w-50">Have you ever been named as a defendant in a professional liability action?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefaultf" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefaultf" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                        </div>
                </div>
                    
                <div class="d-flex gap-0 gap-lg-2" style="font-size:14px;font-weight:500;">
                    <p class="w-50">Has action ever been taken against your professional license?</p>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefaulta" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Yes
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefaulta" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                     No
                    </label>
                    </div>
                </div>
                <!-- Container inner end -->
        </div>
        <!-- container End -->
    </div>
        <!-- Accordian body End -->
    </div>
  </div>
    <!-- 5 end -->
     <!--Accordian inner end  -->
    </div>
<!-- Accordian End -->
<!-- footer start -->
<div class="dfooter-sec w-100">
    <div class='w-50' style="padding-left:20px">
        <p>&copy; 2023 FLH Staffing</p>
        <a href="#">Terms of Use</a> <a href="#">Privacy Policy</a> <a href="#">Arbitration Agreement </a>
    </div>
</div>
<!-- footer end -->
</div>
<script>
    // let c4a =document.getElementById('collapseTwo')
    // let c4b =document.getElementById('colThree')
    // let c3a =document.getElementById('panelsStayOpen-collapseThree')
    // let c3b =document.getElementById('colTwo')
    // c4b.addEventListener('click',()=>{
    //     if(!c4a.classList.contains('show')){
    //         if(c4a.classList.contains('hide')){
    //             c4a.classList.remove('hide')
    //         }
    //         c4a.classList.add('show')
    //     }else{
    //         c4a.classList.remove('show')
    //         c4a.classList.add('hide')
    //     }
    // })
    // c3b.addEventListener('click',()=>{
    //     if(!c3a.classList.contains('show')){
    //         if(c3a.classList.contains('hide')){
    //             c3a.classList.remove('hide')
    //         }
    //         c3a.classList.add('show')
    //     }else{
    //         c3a.classList.remove('show')
    //         c3a.classList.add('hide')
    //     }
    // })
 
console.log(window.location.pathname);
</script>