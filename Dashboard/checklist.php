<?php include 'dheader.php'; ?>
<style>
    ::-webkit-scrollbar{
        display:none;
    }
.rgba{
    color:rgba(0,0,0,0.5);
}
.mainContainer{
        /* min-height:500rem !important; */
        border-radius: 10px;
        /* border:2px solid black */
        -webkit-box-shadow: 7px 7px 29px #bfbfbf, -7px -7px 29px #ffffff;
        background: #ffffff;
        box-shadow: 7px 7px 29px #bfbfbf, -7px -7px 29px #ffffff;
    }
.catWise{
    -webkit-border-radius: 53px;
    border-radius: 10px;
    background: #fff;
    -webkit-box-shadow: 9px 9px 15px #bfbfbf, -9px -9px 15px #ffffff;
    box-shadow: 9px 9px 15px #bfbfbf, -9px -9px 15px #ffffff;
}
.h-3{
    min-height:60px;
}
.button{
    border-radius:20px;
    background-color:#47d0e6 !important;
    border:none;
    padding:4px 1rem;
    transition:transform 0.8s;
    text-align:center;
}
.cur{
    cursor: pointer;
}
.ml-auto{
    margin-left:auto !important;
    width:10%;
    height:20% !important;
}
.button:hover{
    transform:scale(0.9,0.9) !important;
}
</style>
<div class="col-lg-9 hmdsc2 ">
<?php include 'modal.php'; ?>
<h1 class="page-title ">Check List</h1>
<?php include 'applicationprogress.php'; ?>
<!-- Head Section end -->
<!-- Main content Start -->
<div class="container w-100 p-4">
    <!-- Main Container inner start -->
    <div class="mainContainer px-4">
        <!-- heading start -->
        <div class="heading p-3">
            <Strong>Help us understand your skills so we can find jobs that are a good fit for you.</Strong>
        </div>
        <!-- heading end -->
        <!-- Switch Box start-->
        <div class="mt-1 p-1">
            <div class="form-check form-switch d-lg-flex gap-5 ">
                <label class="form-check-label order-0 cur" for="flexSwitchCheckDefault"><strong>Only Show My checklist</strong></label>
                <input class="form-check-input order-1 cur" type="checkbox" role="switch" id="flexSwitchCheckDefault" onClick="showValue()" id="switch" checked>
            </div>
            <div class="rgba p-2 px-4">Recommended checklists are marked with a green star<i class="fa-sharp fa-solid fa-star mx-1" style="color: #0c8336;"></i></div>
        </div>
        <!-- switch box end -->
        <!-- With false userCheckBox Show true-->
        <div class="" id="userCheck1">
        <!-- Box 1 start-->
        <div class="catWise d-flex h-3 p-4 mb-3">
            <i class="fa-solid fa-star" style="color: #094805;"></i>
            <!-- starting of clinci -->
            <div >
                <div class="down d-flex flex-column" >
                    <p>Anesthesia Technician</p>
                    <p class="d-flex justify-content-center" style="background-color: #ffedac;font-size:12px; width:50%; margin-top:-8px;"> Not Started</p>
                </div>
            </div>
            <!-- end of clinci -->
        <a class="button ml-auto cur " href="./checklistdetail.php" style="color:black;">Start</a>
    </div>
    <div class="p-1"></div>
            <!-- Box 1 end -->
        </div>
        <!-- With false userCheckBox Show end-->
        <!-- All Box Container start-->
        <div class="d-none" id="userCheck">
        <!-- Box 1 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Critical Care/ICU</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 1 end -->
        <!-- Box 2 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Behavioral Health Nursing</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 2 end -->
        <!-- Box 3 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Behavioral Health Tech</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 3 end -->
        <!-- Box 4 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Cardiac Cath/EP Lab/Interventional Radiology Tech</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 4 end -->
        <!-- Box 5 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Cardiac Echo Tech</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 5 end -->
        <!-- Box 6 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Cardiac Monitor/Telemetry Tech</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 6 end -->
        <!-- Box 7 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Cardiac Stress Testing</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 7 end -->
        <!-- Box 8 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Case Manager</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 8 end -->
        <!-- Box 9 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-3">
        <p>Cath Lab</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 9 end -->
        <!-- Box 10 start-->
        <div class="catWise d-flex flex-column flex-lg-row align-items-center justify-content-between h-3 p-4 mb-4">
        <p>Cath Lab Tech</p>
        <button class="button">Start</button>
        </div>
        <!-- Box 4 end -->
        </div>
            <!-- All Box Container end-->
    </div>
        <!-- Main Container inner end -->
</div>
<!-- Main content end -->
  <!-- footer start -->
  <div class="dfooter-sec w-100">
    <div class='w-50' style="padding-left:20px">
        <p>&copy; 2023 FLH Staffing</p>
        <a href="#">Terms of Use</a> <a href="#">Privacy Policy</a> <a href="#">Arbitration Agreement </a>
    </div>
</div>
<!-- footer end -->
</div>
<script src="https://kit.fontawesome.com/3fbd57294d.js" crossorigin="anonymous"></script>
<script>
    let userCheck =document.getElementById('userCheck');
    let userCheck1 =document.getElementById('userCheck1');
    let switchBox = true;
    function showValue(){
        switchBox = !switchBox
        if(switchBox){
            userCheck.classList.add('d-none')
            userCheck1.classList.remove('d-none')
        }else{
            userCheck.classList.remove('d-none')
            userCheck1.classList.add('d-none')
        }
    }
</script>