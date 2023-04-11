<?php include 'dheader.php'; ?>
<style>
     ::-webkit-scrollbar {
    display: none;
    }
    .sm{
        font-size:12px;
    }
    .lg{
        font-size:14px;
    }
    .boxShadow{
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: #fff;
        -webkit-box-shadow: 9px 9px 12px #bfbfbf, -9px -9px 12px #e9e9e9;
        box-shadow: 9px 9px 12px #bfbfbf;
        min-width:75%;
        min-height:5rem;
    }
    .aHov:hover{
        text-decoration:underline !important;
    }
    input[type="text"] {
        box-sizing: border-box;
        width: 100%;
        height: 50px;
        margin: 0 0 1em;
        padding: 1em;
        border: 1px solid #ccc;
        background: #fff;
        resize: none;
        outline: none;
    }

    input[type="text"][required]:focus {
        border-color: #034a59;;
    }
    input[type="text"][required]:focus + label[placeholder]:before {
        color: #034a59;;
    }
    input[type="text"][required]:focus + label[placeholder]:before,
    input[type="text"][required]:valid + label[placeholder]:before {
        transition-duration: .2s;
        transform: translate(0, -1.5em) scale(0.9, 0.9);
    }

    input[type="text"][required]:invalid + label[placeholder][alt]:before {
        content: attr(alt);
    }

    input[type="text"][required] + label[placeholder] {
        display: block;
        pointer-events: none;
        line-height: 1em;
        margin-top: calc(-3em - 2px);
        margin-bottom: calc((3em - 1em) + 2px);
    }

    input[type="text"][required] + label[placeholder]:before {
        content: attr(placeholder);
        display: inline-block;
        margin: 0 calc(1em + 2px);
        padding: 0 2px;
        color: #898989;
        white-space: nowrap;
        transition: 0.3s ease-in-out;
        background-image: linear-gradient(to bottom, #fff, #fff);
        background-size: 100% 5px;
        background-repeat: no-repeat;
        background-position: center;
    }
    .bottomBox{
        box-shadow:-4px -4px 5px  #bfbfbf;
        width:100%;
        min-height:6rem;
        position: sticky;
        bottom:0;
        background-color:#ffffff;
    }
    .button{
        border-radius:20px;
        background-color:#47d0e6 !important;
        border:none;
        padding:5px;
    }   
    .btnClose{
        border:none !important;
        padding:5px;
        background-color: transparent !important;
        cursor: pointer !important;
    }
    .btnClose:hover {
        background-color:#bfbfbf !important;
        cursor: pointer !important;
        border-radius:20px;
    }
</style>
<div class="col-lg-9 hmdsc2 ">
<h1 class="page-title ">OnBoarding</h1>
<?php include 'applicationprogress.php'; ?>
<!-- Head Section end -->
<!-- Main content Start -->
<div class="container d-flex flex-column flex-lg-row gap-5 mt-5 p-5">
    <!-- emergency  start-->
    <div class="emergency d-flex flex-column w-100">
        <!-- heading start -->
        <div class="heading d-flex justify-content-between w-75">
        <h5>Emergency Contact</h5>
        <!-- off canvas navbar -->
        <a  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="text-decoration:underline !important;">Edit</a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Emergency Contact</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Off CanVa Body start-->
        <div class="offcanvas-body">
            <div class="px-3 py-4">
                <!-- 1st -->
                <div class="input-group input-group-lg mb-4">
                <input required='' type='text'>
                <label alt='First Name' placeholder='First Name'></label>
                </div>
                <!-- 2nd -->
                <div class="input-group input-group-lg mb-4">
                <input required='' type='text'>
                <label alt='Last Name' placeholder='Last Name'></label>
                </div>
                <!-- 3rd -->
                <div class="input-group input-group-lg mb-4">
                <input required='' type='text'>
                <label alt='Relation' placeholder='Relation'></label>
                </div>
                <!-- 4th -->
                <div class="input-group input-group-lg mb-4">
                <input required='' type='text'>
                <label alt='Phone' placeholder='Phone'></label>
                </div>
                <!-- end of input -->
            </div>
            <!-- end of padding -->
            <div class="d-flex flex-column gap-3 pt-4">
                <button class="button "> Save</button>
                <button type="button" class="btnClose" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
            </div>
        </div>
        <!-- Off CanVa Body end-->
        </div>
        <!-- off canvas navbar end -->
    </div>
    <!-- heading end -->
        <!-- box with shadow start-->
        <div class="boxShadow d-flex flex-column pt-2 px-3 pb-2 gap-3 ">
            <!-- 1 -->
            <div>Name</div>
            <!-- 2 -->
            <div>Relation</div>
            <!-- 3 -->
            <div>Phone</div>
        </div>
        <!-- box with shadow end-->
    </div>
    <!-- emergency  end-->
    <!-- Onboarding  start-->
    <div class="Onboarding d-flex flex-column w-100">
        <!-- heading start -->
        <div class="heading d-flex justify-content-between w-75">
            <h5>Onboarding Documents</h5>
        </div>
        <!-- heading end -->
        <!-- box with shadow start-->
        <div class="boxShadow  d-flex flex-column pt-2 px-3 pb-2 gap-3 ">    
            <a href="#" class="lg aHov" style=" color:#003B68 !important; ">Orientation & Safety Manual</a>
            <a href="#" class="lg aHov" style="color:#003B68 !important; ">Additional information regarding your benefits</a>
            <a href="#" class="lg aHov" style="color:#003B68 !important; ">WI State Notice 2022</a>
        </div>
            <!-- box with shadow end-->
        </div>
        <!-- Onboarding  end-->
    </div>
    <!-- Main content End -->
        <!-- footer start -->
    <div class="dfooter-sec w-100">
        <div class='w-50' style="padding-left:20px">
            <p>&copy; 2023 FLH Staffing</p>
            <a href="#">Terms of Use</a> <a href="#">Privacy Policy</a> <a href="#">Arbitration Agreement </a>
        </div>
    </div>
    <!-- footer end -->
</div>