<?php include 'dheader.php'; ?>
<style>
    .sm{
        font-size:12px;
    }
    .lg{
        font-size:14px;
    }
    .rgb{
        color:rgba(0,0,0,0.5) !important;
        font-weight:bold;
    }
    .bgColor{
        background-color:#eaeaea;
        
    }
    .underLine{
        text-decoration:underline !important; 
    }
    .mainContainer{
        min-height:5rem !important;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        /* border:2px solid black */
        -webkit-box-shadow: 7px 7px 29px #bfbfbf, -7px -7px 29px #ffffff;
        background: #ffffff;
        box-shadow: 7px 7px 29px #bfbfbf, -7px -7px 29px #ffffff;
    }
    .button{
    border-radius:20px;
    background-color:#47d0e6 !important;
    border:none;
    padding:5px;
    }
    

.js{
    border:none;
    background-color:transparent !important;
    outline:none;
}
.w-40{
    width:40%;
    border:none;
    border:none;
    border-bottom:2px solid rgba(0,0,0,0.3) !important;
}
.def3,.def1,.def2{
    border:none ;
    background-color:transparent !important;
    outline:none  !important;
}
</style>
<div class="col-lg-9 hmdsc2 ">
<?php include 'modal.php'; ?>
<h1 class="page-title ">Refrences</h1>
<?php include 'applicationprogress.php'; ?>
<!-- Head Section end -->
<!-- main container start -->
<div class="container p-3 mt-5">
    <!-- heading -->
    <div class="smallHeading" class="text-black-50 lg rgb" >
        Please list names and phone numbers of manager/supervisors who we may contact to reference recent work experience.
    </div>
    <!-- heading end -->
    <!-- ref1 start -->
    <div class="w-100 mb-4" >
        <!-- ref heading start -->
        <div class="upperSection bgColor d-flex justify-content-between align-items-center p-4" style="min-height:30px;">
        Reference #1
        <i class="fa-sharp fa-solid fa-pen fa-lg" style="color: #606a7b; cursor:pointer;" onClick="setedit1()" id="ref1"></i>
        </div>
        <!-- ref heading end -->
        <!-- Main container start -->
        <div class="mainContainer p-4 d-flex gap-3 flex-column" id="forGap1">
        <input type="text" disabled placeholder="Facility Hospital" class="def1 ">
            <input type="text" disabled placeholder="Name" class="def1 ">
            <input type="text" disabled placeholder="Title" class="def1 ">
            <input type="text" disabled placeholder="Email" class="def1 ">
            <input type="text" disabled placeholder="Telephone" class="def1">
            <div class="d-flex gap-3 d-none" id="addBtn1" >
                <button class="button px-3">Save</button>
                <a class="px-3 underLine cur" id="cancel1" onClick="cancel1()">Cancel</a>
            </div>
        </div>
        <!-- Main container end -->
    </div>
        <!-- ref1 end -->
    <!-- ref2 start -->
    <div class="w-100 mb-4" >
        <!-- ref heading start -->
        <div class="upperSection bgColor d-flex justify-content-between align-items-center p-4" style="min-height:30px;">
        Reference #2
        <i class="fa-sharp fa-solid fa-pen fa-lg" style="color: #606a7b; cursor:pointer;"  id="ref2" onClick="setedit2()"></i>
        </div>
        <!-- ref heading end -->
        <!-- Main container start -->
        <div class="mainContainer p-4 d-flex gap-3 flex-column" id="forGap2">
        <input type="text" disabled placeholder="Facility Hospital" class="def2 ">
            <input type="text" disabled placeholder="Name" class="def2 ">
            <input type="text" disabled placeholder="Title" class="def2 ">
            <input type="text" disabled placeholder="Email" class="def2 ">
            <input type="text" disabled placeholder="Telephone" class="def2 ">
            <div class="d-flex gap-3 d-none" id="addBtn2" >
                <button class="button px-3">Save</button>
                <a class="px-3 underLine cur" id="cancel2" onClick="cancel2()">Cancel</a>
            </div>
        </div>
        <!-- Main container end -->
    </div>
        <!-- ref2 end -->
    <!-- ref2 start -->
    <div class="w-100 mb-4" >
        <!-- ref heading start -->
        <div class="upperSection bgColor d-flex justify-content-between align-items-center p-4" style="min-height:30px;">
        Reference #3
        <i class="fa-sharp fa-solid fa-pen fa-lg" style="color: #606a7b; cursor:pointer;" onClick="setedit3()" id="ref3"></i>
        </div>
        <!-- ref heading end -->
        <!-- Main container start -->
        <div class="mainContainer p-4 d-flex gap-3 flex-column" id="forGap3">
            <input type="text" disabled placeholder="Facility Hospital" class="def3 ">
            <input type="text" disabled placeholder="Name" class="def3 ">
            <input type="text" disabled placeholder="Title" class="def3 ">
            <input type="text" disabled placeholder="Email" class="def3 ">
            <input type="text" disabled placeholder="Telephone" class="def3 ">
            <div class="d-flex gap-3 d-none" id="addBtn3" >
                <button class="button px-3">Save</button>
                <a class="px-3 underLine cur" id="cancel3" onClick="cancel3()">Cancel</a>
            </div>
        </div>
        <!-- Main container end -->
    </div>
        <!-- ref2 end -->
        <!-- down button start -->
        <div class="d-flex gap-5">
            <button class="button">
                Save and Continue
            </button>
            <!-- start of next step -->
            <a href="#" style="text-decoration:underline !important;">Cancel</a>
            <!-- end of next step -->
        </div>
        <!-- down button end -->
</div>
    <!-- main container End -->
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
    function setedit3(){
        let allClasses3 = document.getElementsByClassName("def3")
        let forGap3 = document.getElementById("forGap3")
        let addBtn3 = document.getElementById("addBtn3")
        let ref3 = document.getElementById("ref3")
        let cancel3 = document.getElementById("cancel3")
        for (let i = 0; i < allClasses3.length; i++) {
            allClasses3[i].removeAttribute('disabled')
            allClasses3[i].classList.add('w-40')
            // allClasses[i].classList.add('underLine')
            allClasses3[i].value = ""
            forGap3.classList.add('gap-5')
        }
        ref3.classList.add('d-none')
        addBtn3.classList.remove('d-none')
        
    }
    const cancel3 = () =>{
        let allClasses3 = document.getElementsByClassName("def3")
        let forGap3 = document.getElementById("forGap3")
        let addBtn3 = document.getElementById("addBtn3")
        let ref3 = document.getElementById("ref3")
        let cancel3 = document.getElementById("cancel3")
        for (let i = 0; i < allClasses3.length; i++) {
            allClasses3[i].setAttribute('disabled',true)
            allClasses3[i].classList.remove('w-40')
            allClasses3[i].value = ""
            forGap3.classList.remove('gap-5')
        }
        ref3.classList.remove('d-none')
        addBtn3.classList.add('d-none')
    }
    function setedit2(){
        let allClasses2 = document.getElementsByClassName("def2")
        let forGap2 = document.getElementById("forGap2")
        let addBtn2 = document.getElementById("addBtn2")
        let ref2 = document.getElementById("ref2")
        let cancel2 = document.getElementById("cancel2")
        for (let i = 0; i < allClasses2.length; i++) {
            allClasses2[i].removeAttribute('disabled')
            allClasses2[i].classList.add('w-40')
            // allClasses[i].classList.add('underLine')
            allClasses2[i].value = ""
            forGap2.classList.add('gap-5')
        }
        ref2.classList.add('d-none')
        addBtn2.classList.remove('d-none')
        
    }
    const cancel2 = () =>{
        let allClasses2 = document.getElementsByClassName("def2")
        let forGap2 = document.getElementById("forGap2")
        let addBtn2 = document.getElementById("addBtn2")
        let ref2 = document.getElementById("ref2")
        let cancel2 = document.getElementById("cancel2")
        for (let i = 0; i < allClasses2.length; i++) {
            allClasses2[i].setAttribute('disabled',true)
            allClasses2[i].classList.remove('w-40')
            allClasses2[i].value = ""
            forGap2.classList.remove('gap-5')
        }
        ref2.classList.remove('d-none')
        addBtn2.classList.add('d-none')
    }
    function setedit1(){
        let allClasses1 = document.getElementsByClassName("def1")
        let forGap1 = document.getElementById("forGap1")
        let addBtn1 = document.getElementById("addBtn1")
        let ref1 = document.getElementById("ref1")
        let cancel1 = document.getElementById("cancel1")
        for (let i = 0; i < allClasses1.length; i++) {
            allClasses1[i].removeAttribute('disabled')
            allClasses1[i].classList.add('w-40')
            // allClasses[i].classList.add('underLine')
            allClasses1[i].value = ""
            forGap1.classList.add('gap-5')
        }
        ref1.classList.add('d-none')
        addBtn1.classList.remove('d-none')
        
    }
    const cancel1 = () =>{
        let allClasses1 = document.getElementsByClassName("def1")
        let forGap2 = document.getElementById("forGap1")
        let addBtn1 = document.getElementById("addBtn1")
        let ref1 = document.getElementById("ref1")
        let cancel1 = document.getElementById("cancel1")
        for (let i = 0; i < allClasses1.length; i++) {
            allClasses1[i].setAttribute('disabled',true)
            allClasses1[i].classList.remove('w-40')
            allClasses1[i].value = ""
            forGap1.classList.remove('gap-5')
        }
        ref1.classList.remove('d-none')
        addBtn1.classList.add('d-none')
    }
   
</script>