<?php include 'dheader.php'; ?>
<style>
    .button{
    border-radius:20px;
    background-color:#47d0e6 !important;
    border:none;
    padding:5px;
    }
      .cur{
        cursor: pointer !important;
    }
    .boxShadow{
        -webkit-box-shadow: 7px 7px 29px #bfbfbf, -7px -7px 29px #ffffff;
        box-shadow: 7px 7px 8px #bfbfbf, -7px -7px 8px #bfbfbf;
        border-radius:20px;
    }
    .width{
        width: 100%;
    }
    .fixed{
    padding: 20px;
    background-color: #efefef;
    position: fixed;
    right:0;
    z-index: 1;
    }
    .w-10{
        max-width:29rem;
    }
    .mt-t{
        margin-top:5rem;
    }
    .hover:hover{
        cursor: pointer !important;
        background-color:#bfbfbf;
    }
    .trans{
        transition:top 2s;
    }
    @media screen and (min-width:768px ) {
        .width{
            width:50%;
        }
    }
    @media screen and (max-width:768px ) {
       .w-10{
        min-width:10rem;
       }
        .fixed{
        background-color: #efefef;
        
        position:sticky !important;
        z-index: 1;
       
        }
        .mt-t{
        margin-top:0rem;
    }
    @media screen and (max-width:468px ) {
        *{
            font-size:10px !important;
        }
    }
    }
</style>
<!-- all main Start -->
<div class="col-lg-9 hmdsc2 ">
<?php include 'modal.php'; ?>
<h1 class="page-title ">Update skills</h1>
<!-- anchor -->
<div class="mt-4 px-4 p-2">
    <a class="cur" href="./checklist.php" style="color:#034A59; font-size:15.96px; line-height:18px; font-weight:500;"><i class="fa-solid fa-chevron-left fa-lg mx-1" style="color: #034A59;"></i>Back to Checklists</a>
</div>
<!-- anchor end-->
<!-- container start -->
<div class="p-3">
    <!-- box shadow start -->
    <div class="boxShadow p-3">
        <!-- container start -->
        <!-- small heading start -->
        <i class="fa-solid fa-star fa-lg " style="color: #036805;"></i> <Strong>Critical Care/Icu</Strong>
        <!-- small heading end -->
        <div class="d-flex flex-column flex-lg-row gap-2 gap-lg-4 ">
            <!-- right side -->
            <div class="width mt-t order-1 p-2">
            <div> Please complete the following checklist based on your experience with each skill.
            </div>
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Work settings</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Burn Intensive Care Unit</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardiovascular Intensive Care Unit (CVICU)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardiac Cath Lab</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Community hospitalt</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">COVID Intensive Care Unit</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">eICU (Electronic Intensive Care Unit)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Electrophysiology (EP) Lab</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Interventional Radiology</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Medical Intensive Care Unit</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">LTAC</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Neuro Intensive Care Unit</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="11" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="11" id="211" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="11" id="311" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="11" id="411" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
                <!-- 11 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">PACU Phase 1</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="12" id="122" style="height:23px;widht:23px;">
                        <label for="122" >1</label>
                        <input type="radio" name="12" id="222" style="height:23px;widht:23px;">
                        <label for="222" >2</label>
                        <input type="radio" name="12" id="322" style="height:23px;widht:23px;">
                        <label for="322" >3</label>
                        <input type="radio" name="12" id="422" style="height:23px;widht:23px;">
                        <label for="422" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <!-- 13 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Teaching Hospital</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="13" id="133" style="height:23px;widht:23px;">
                        <label for="133" >1</label>
                        <input type="radio" name="13" id="233" style="height:23px;widht:23px;">
                        <label for="233" >2</label>
                        <input type="radio" name="13" id="333" style="height:23px;widht:23px;">
                        <label for="333" >3</label>
                        <input type="radio" name="13" id="433" style="height:23px;widht:23px;">
                        <label for="433" >4</label>
                    </div>
                </div>
                <!-- 14 -->
                <!-- 15 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Trauma Intensive Care Unit</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="14" id="144" style="height:23px;widht:23px;">
                        <label for="144" >1</label>
                        <input type="radio" name="14" id="244" style="height:23px;widht:23px;">
                        <label for="244" >2</label>
                        <input type="radio" name="14" id="344" style="height:23px;widht:23px;">
                        <label for="344" >3</label>
                        <input type="radio" name="14" id="444" style="height:23px;widht:23px;">
                        <label for="444" >4</label>
                    </div>
                </div>
                <!-- 15 -->
                <!-- 16 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Trauma Level I Facility</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="15" id="155" style="height:23px;widht:23px;">
                        <label for="155" >1</label>
                        <input type="radio" name="15" id="255" style="height:23px;widht:23px;">
                        <label for="255" >2</label>
                        <input type="radio" name="15" id="355" style="height:23px;widht:23px;">
                        <label for="355" >3</label>
                        <input type="radio" name="15" id="455" style="height:23px;widht:23px;">
                        <label for="455" >4</label>
                    </div>
                </div>
                <!-- 16 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Trauma Level II Facility</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
            </div>
            <!-- work setting end -->
            <!-- Cardiac Monitoring and Emergency response -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Cardiac Monitoring and Emergency response</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardioversion</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="21" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="21" id="111" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="21" id="111" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="21" id="111" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Defibrillation</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="22" id="122" style="height:23px;widht:23px;">
                        <label for="122" >1</label>
                        <input type="radio" name="22" id="222" style="height:23px;widht:23px;">
                        <label for="222" >2</label>
                        <input type="radio" name="22" id="322" style="height:23px;widht:23px;">
                        <label for="322" >3</label>
                        <input type="radio" name="22" id="422" style="height:23px;widht:23px;">
                        <label for="422" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Interpretation of 12 Lead EKG</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="33" id="133" style="height:23px;widht:23px;">
                        <label for="133" >1</label>
                        <input type="radio" name="33" id="233" style="height:23px;widht:23px;">
                        <label for="233" >2</label>
                        <input type="radio" name="33" id="333" style="height:23px;widht:23px;">
                        <label for="333" >3</label>
                        <input type="radio" name="33" id="433" style="height:23px;widht:23px;">
                        <label for="433" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Interpretation of dysrhythmias</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="44" id="144" style="height:23px;widht:23px;">
                        <label for="144" >1</label>
                        <input type="radio" name="44" id="244" style="height:23px;widht:23px;">
                        <label for="244" >2</label>
                        <input type="radio" name="44" id="344" style="height:23px;widht:23px;">
                        <label for="344" >3</label>
                        <input type="radio" name="44" id="444" style="height:23px;widht:23px;">
                        <label for="444" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Management of cardiac arrest</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="55" id="155" style="height:23px;widht:23px;">
                        <label for="155" >1</label>
                        <input type="radio" name="55" id="255" style="height:23px;widht:23px;">
                        <label for="255" >2</label>
                        <input type="radio" name="55" id="355" style="height:23px;widht:23px;">
                        <label for="355" >3</label>
                        <input type="radio" name="55" id="455" style="height:23px;widht:23px;">
                        <label for="455" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Management of dysrhythmias</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="66" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="66" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="66" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="66" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Multi-system organ failure</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="77" id="177" style="height:23px;widht:23px;">
                        <label for="177" >1</label>
                        <input type="radio" name="77" id="277" style="height:23px;widht:23px;">
                        <label for="277" >2</label>
                        <input type="radio" name="77" id="377" style="height:23px;widht:23px;">
                        <label for="377" >3</label>
                        <input type="radio" name="77" id="477" style="height:23px;widht:23px;">
                        <label for="477" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Non-invasive hemodynamic monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="88" id="188" style="height:23px;widht:23px;">
                        <label for="188" >1</label>
                        <input type="radio" name="88" id="288" style="height:23px;widht:23px;">
                        <label for="288" >2</label>
                        <input type="radio" name="88" id="388" style="height:23px;widht:23px;">
                        <label for="388" >3</label>
                        <input type="radio" name="88" id="488" style="height:23px;widht:23px;">
                        <label for="488" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Obtain 12 lead EKG</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="99" id="199" style="height:23px;widht:23px;">
                        <label for="199" >1</label>
                        <input type="radio" name="99" id="299" style="height:23px;widht:23px;">
                        <label for="299" >2</label>
                        <input type="radio" name="99" id="399" style="height:23px;widht:23px;">
                        <label for="399" >3</label>
                        <input type="radio" name="99" id="499" style="height:23px;widht:23px;">
                        <label for="499" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Shock Management</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="00" id="100" style="height:23px;widht:23px;">
                        <label for="100" >1</label>
                        <input type="radio" name="00" id="200" style="height:23px;widht:23px;">
                        <label for="200" >2</label>
                        <input type="radio" name="00" id="300" style="height:23px;widht:23px;">
                        <label for="300" >3</label>
                        <input type="radio" name="00" id="400" style="height:23px;widht:23px;">
                        <label for="400" >4</label>
                    </div>
                </div>
                
            </div>
            <!-- Cardiac Monitoring and Emergency response end -->
            <!-- Behavioral Health -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Behavioral Health</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">51/50 Involuntary hold</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Attempted Suicide</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Drug overdose</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">ICU Delirium</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">PCP ingestion</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">PTSD</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Substance Withdrawal/ ETOH withdrawal</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
            </div>
            <!-- wBehavioral Health end -->
            <!-- burns setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Burns</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Burn Sepsis</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="31" id="1111" style="height:23px;widht:23px;">
                        <label for="1111" >1</label>
                        <input type="radio" name="31" id="2111" style="height:23px;widht:23px;">
                        <label for="2111" >2</label>
                        <input type="radio" name="31" id="3111" style="height:23px;widht:23px;">
                        <label for="3111" >3</label>
                        <input type="radio" name="31" id="4111" style="height:23px;widht:23px;">
                        <label for="4111" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Care and management of burns</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="32" id="1233" style="height:23px;widht:23px;">
                        <label for="1233" >1</label>
                        <input type="radio" name="32" id="2233" style="height:23px;widht:23px;">
                        <label for="2233" >2</label>
                        <input type="radio" name="32" id="3233" style="height:23px;widht:23px;">
                        <label for="3233" >3</label>
                        <input type="radio" name="32" id="4233" style="height:23px;widht:23px;">
                        <label for="4233" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Electrocution</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="33" id="133" style="height:23px;widht:23px;">
                        <label for="1333" >1</label>
                        <input type="radio" name="33" id="233" style="height:23px;widht:23px;">
                        <label for="2333" >2</label>
                        <input type="radio" name="33" id="333" style="height:23px;widht:23px;">
                        <label for="3333" >3</label>
                        <input type="radio" name="33" id="433" style="height:23px;widht:23px;">
                        <label for="4333" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Fluid resuscitation</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="34" id="1444" style="height:23px;widht:23px;">
                        <label for="144" >1</label>
                        <input type="radio" name="34" id="2444" style="height:23px;widht:23px;">
                        <label for="244" >2</label>
                        <input type="radio" name="34" id="3444" style="height:23px;widht:23px;">
                        <label for="344" >3</label>
                        <input type="radio" name="34" id="4444" style="height:23px;widht:23px;">
                        <label for="444" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Lund and Browder Chart</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="35" id="1555" style="height:23px;widht:23px;">
                        <label for="1555" >1</label>
                        <input type="radio" name="35" id="2555" style="height:23px;widht:23px;">
                        <label for="2555" >2</label>
                        <input type="radio" name="35" id="3555" style="height:23px;widht:23px;">
                        <label for="3555" >3</label>
                        <input type="radio" name="35" id="4555" style="height:23px;widht:23px;">
                        <label for="4555" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Smoke inhalation injury</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="36" id="1666" style="height:23px;widht:23px;">
                        <label for="1666" >1</label>
                        <input type="radio" name="36" id="2666" style="height:23px;widht:23px;">
                        <label for="2666" >2</label>
                        <input type="radio" name="36" id="3666" style="height:23px;widht:23px;">
                        <label for="3666" >3</label>
                        <input type="radio" name="36" id="4666" style="height:23px;widht:23px;">
                        <label for="4666" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Thermoregulation: hypothermia/hyperthermia</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="37" id="1777" style="height:23px;widht:23px;">
                        <label for="1777" >1</label>
                        <input type="radio" name="37" id="2777" style="height:23px;widht:23px;">
                        <label for="2777" >2</label>
                        <input type="radio" name="37" id="3777" style="height:23px;widht:23px;">
                        <label for="3777" >3</label>
                        <input type="radio" name="37" id="4777" style="height:23px;widht:23px;">
                        <label for="4777" >4</label>
                    </div>
                </div>
            </div>
            <!-- Burns end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Cardiovascular</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Abdominal Aortic Aneurism (AAA)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Acute Coronary Syndrome</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardiac tamponade</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardiogenic Shock</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardiomyopathy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardioversion</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Carotid Endarterectomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">CHF</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Central Venous Pressure Monitoring (CVP)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Continuous Cardiac Output(CCO) monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">ECMO</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="11" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="11" id="211" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="11" id="311" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="11" id="411" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
                <!-- 11 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">EKOS(EkoSonic Endovascular System)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="12" id="122" style="height:23px;widht:23px;">
                        <label for="122" >1</label>
                        <input type="radio" name="12" id="222" style="height:23px;widht:23px;">
                        <label for="222" >2</label>
                        <input type="radio" name="12" id="322" style="height:23px;widht:23px;">
                        <label for="322" >3</label>
                        <input type="radio" name="12" id="422" style="height:23px;widht:23px;">
                        <label for="422" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <!-- 13 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">EVAR (Endovascular Aneurysm Repair)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="13" id="133" style="height:23px;widht:23px;">
                        <label for="133" >1</label>
                        <input type="radio" name="13" id="233" style="height:23px;widht:23px;">
                        <label for="233" >2</label>
                        <input type="radio" name="13" id="333" style="height:23px;widht:23px;">
                        <label for="333" >3</label>
                        <input type="radio" name="13" id="433" style="height:23px;widht:23px;">
                        <label for="433" >4</label>
                    </div>
                </div>
                <!-- 14 -->
                <!-- 15 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">External/Temporary Pacemaker</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="14" id="144" style="height:23px;widht:23px;">
                        <label for="144" >1</label>
                        <input type="radio" name="14" id="244" style="height:23px;widht:23px;">
                        <label for="244" >2</label>
                        <input type="radio" name="14" id="344" style="height:23px;widht:23px;">
                        <label for="344" >3</label>
                        <input type="radio" name="14" id="444" style="height:23px;widht:23px;">
                        <label for="444" >4</label>
                    </div>
                </div>
                <!-- 15 -->
                <!-- 16 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Femoral popliteal bypass</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="15" id="155" style="height:23px;widht:23px;">
                        <label for="155" >1</label>
                        <input type="radio" name="15" id="255" style="height:23px;widht:23px;">
                        <label for="255" >2</label>
                        <input type="radio" name="15" id="355" style="height:23px;widht:23px;">
                        <label for="355" >3</label>
                        <input type="radio" name="15" id="455" style="height:23px;widht:23px;">
                        <label for="455" >4</label>
                    </div>
                </div>
                <!-- 16 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Heart Transplant</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 18 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Intermittent Thermodilution Cardiac Output</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 19 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Intra-Aortic Balloon Pump</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 19 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pulmonary Artery Line/Swan Ganz monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Permanent Pacemaker</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Post Cardiac Surgery (directly from the OR)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Post Cardiac Surgery (Not directly from the OR)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Post MI</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pre/Post Cardiac Cath/intervention</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Sheath Removal</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style=" border-radius:20px; ">SVO2 Monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style=" border-radius:20px; ">Transcatheter Aortic Valve implantation/Replacement (TAVI/TAVR)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
                <!-- 20 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style=" border-radius:20px; ">Ventricular Assist devices (LVAD/RVAD/Impella)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 20 -->
            </div>
            <!--Cardiovascular end -->
            <!-- Endocrine/Metabolic -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Endocrine/Metabolic</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style=" border-radius:20px; ">Diabetic Ketoacidosis</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Hypoglycemia/Hyperglycemia</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Indwelling insulin pumps</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">IV insulin protocols</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Gastrointestinal</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Colostomy/Ileostomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Colostomy/Ileostomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">GI surgery</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Liver failure</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Esophageal Varices</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Liver transplant</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pancreas transplant</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pancreatitis</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Splenectomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Whipple surgery</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Genitourinary/Renal</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Acute Kidney Injury</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Bladder Irrigation</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Chronic/Acute Renal failure</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">CVVHD/CRRT/Shunts and Fistula Care</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Peritoneal dialysis</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Post Nephrectomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pre/Post Hemodialysis Management</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Prismaflex machine for CRRT</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Renal transplant</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Temporary Urinary Diversion (nephrostomy)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Permanent Urinary Diversion (Urostomy, ileal conduit)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="11" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="11" id="211" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="11" id="311" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="11" id="411" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">IV therapy</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Accessing Ports</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Administering Chemotherapy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Blood Product Administration</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Central line blood draws</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">PICC line management</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Starting IVs</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">TPN/Lipids</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Medications</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Anti-Coagulants</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Anti-Arrhythmics</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Benzodiazepines</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Continuous IV paralytics/Neuromuscular blockade</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Continuous IV sedation</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Emergency Medications</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Epidural analgesia</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Procedural Sedation Administration</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Reversal agents</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Titrate Cardiac drips</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Titrate Vasoactive drips</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="11" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="11" id="211" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="11" id="311" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="11" id="411" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
                <!-- 11 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Thrombolytic Agents</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="12" id="122" style="height:23px;widht:23px;">
                        <label for="122" >1</label>
                        <input type="radio" name="12" id="222" style="height:23px;widht:23px;">
                        <label for="222" >2</label>
                        <input type="radio" name="12" id="322" style="height:23px;widht:23px;">
                        <label for="322" >3</label>
                        <input type="radio" name="12" id="422" style="height:23px;widht:23px;">
                        <label for="422" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <!-- 13 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Bar Code Medication Administration</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="13" id="133" style="height:23px;widht:23px;">
                        <label for="133" >1</label>
                        <input type="radio" name="13" id="233" style="height:23px;widht:23px;">
                        <label for="233" >2</label>
                        <input type="radio" name="13" id="333" style="height:23px;widht:23px;">
                        <label for="333" >3</label>
                        <input type="radio" name="13" id="433" style="height:23px;widht:23px;">
                        <label for="433" >4</label>
                    </div>
                </div>
                <!-- 14 -->
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Automated Medication Dispensing Systems</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Omnicell</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pyxis</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Accudose</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Neurological</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Bolts</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Brain Mapping</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Caring for brain dead organ donors</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cerebral blood flow monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">CVA/Acute Stroke management</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Emergency Neurological Life Support</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Encephalitis</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">External ventricular drains (EVD)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">FloTrac monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Hypothermia protocol/Artic Sun</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">ICP monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="11" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="11" id="211" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="11" id="311" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="11" id="411" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
                <!-- 11 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Licox monitoring- Brain oxygen monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="12" id="122" style="height:23px;widht:23px;">
                        <label for="122" >1</label>
                        <input type="radio" name="12" id="222" style="height:23px;widht:23px;">
                        <label for="222" >2</label>
                        <input type="radio" name="12" id="322" style="height:23px;widht:23px;">
                        <label for="322" >3</label>
                        <input type="radio" name="12" id="422" style="height:23px;widht:23px;">
                        <label for="422" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <!-- 13 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Meningitis</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="13" id="133" style="height:23px;widht:23px;">
                        <label for="133" >1</label>
                        <input type="radio" name="13" id="233" style="height:23px;widht:23px;">
                        <label for="233" >2</label>
                        <input type="radio" name="13" id="333" style="height:23px;widht:23px;">
                        <label for="333" >3</label>
                        <input type="radio" name="13" id="433" style="height:23px;widht:23px;">
                        <label for="433" >4</label>
                    </div>
                </div>
                <!-- 14 -->
                <!-- 15 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Knowledge of Brain Death assessment and testing</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="14" id="144" style="height:23px;widht:23px;">
                        <label for="144" >1</label>
                        <input type="radio" name="14" id="244" style="height:23px;widht:23px;">
                        <label for="244" >2</label>
                        <input type="radio" name="14" id="344" style="height:23px;widht:23px;">
                        <label for="344" >3</label>
                        <input type="radio" name="14" id="444" style="height:23px;widht:23px;">
                        <label for="444" >4</label>
                    </div>
                </div>
                <!-- 15 -->
                <!-- 16 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Peripheral Nerve Stimulator/Train of Four Monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="15" id="155" style="height:23px;widht:23px;">
                        <label for="155" >1</label>
                        <input type="radio" name="15" id="255" style="height:23px;widht:23px;">
                        <label for="255" >2</label>
                        <input type="radio" name="15" id="355" style="height:23px;widht:23px;">
                        <label for="355" >3</label>
                        <input type="radio" name="15" id="455" style="height:23px;widht:23px;">
                        <label for="455" >4</label>
                    </div>
                </div>
                <!-- 16 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Post Craniotomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Post Neurosurgery management</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Seizures</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Spinal cord injury</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Stroke scale assessment</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Subarachnoid hemorrhage</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Traumatic Brain injury</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">VP Shunt</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Oncology</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Bone Marrow Transplant</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Chemotherapy Administration</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Medical Oncology</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Surgical Oncology</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                
            </div>
            <!-- work setting end -->
            <!-- work setting -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Respiratory/Thoracic</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">ARDS</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">
                    Assessment of Breath Sounds</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Assist with Emergency Tracheostomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Assist with management of BiPAP</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Assist with management of CPAP</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Assist with Chest Tube Insertion/Removal</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Care of Ventilated Patient</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Chest trauma</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">End-Tidal CO2 monitoring</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Fresh tracheostomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">High Flow Nasal Cannula (HFNC)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="11" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="11" id="211" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="11" id="311" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="11" id="411" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
                <!-- 11 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Interpretation of ABGs</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="12" id="122" style="height:23px;widht:23px;">
                        <label for="122" >1</label>
                        <input type="radio" name="12" id="222" style="height:23px;widht:23px;">
                        <label for="222" >2</label>
                        <input type="radio" name="12" id="322" style="height:23px;widht:23px;">
                        <label for="322" >3</label>
                        <input type="radio" name="12" id="422" style="height:23px;widht:23px;">
                        <label for="422" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <!-- 13 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Intubation/Extubation</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="13" id="133" style="height:23px;widht:23px;">
                        <label for="133" >1</label>
                        <input type="radio" name="13" id="233" style="height:23px;widht:23px;">
                        <label for="233" >2</label>
                        <input type="radio" name="13" id="333" style="height:23px;widht:23px;">
                        <label for="333" >3</label>
                        <input type="radio" name="13" id="433" style="height:23px;widht:23px;">
                        <label for="433" >4</label>
                    </div>
                </div>
                <!-- 14 -->
                <!-- 15 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Lung transplant</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="14" id="144" style="height:23px;widht:23px;">
                        <label for="144" >1</label>
                        <input type="radio" name="14" id="244" style="height:23px;widht:23px;">
                        <label for="244" >2</label>
                        <input type="radio" name="14" id="344" style="height:23px;widht:23px;">
                        <label for="344" >3</label>
                        <input type="radio" name="14" id="444" style="height:23px;widht:23px;">
                        <label for="444" >4</label>
                    </div>
                </div>
                <!-- 15 -->
                <!-- 16 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Modes of Ventilation (CV, CMV, A/C, SIMV, PS, PC, IRV +/- PEEP)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="15" id="155" style="height:23px;widht:23px;">
                        <label for="155" >1</label>
                        <input type="radio" name="15" id="255" style="height:23px;widht:23px;">
                        <label for="255" >2</label>
                        <input type="radio" name="15" id="355" style="height:23px;widht:23px;">
                        <label for="355" >3</label>
                        <input type="radio" name="15" id="455" style="height:23px;widht:23px;">
                        <label for="455" >4</label>
                    </div>
                </div>
                <!-- 16 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Nitric Oxide</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pneumothorax</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pneumonectomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Post Thoracic Surgerye</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Prone Ventilation/Rotoprone bed</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pulmonary edema</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Respiratory failure</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Respiratory Treatments/ Nebulizers</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Suctioning (ETT, NT)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
                <!-- 17 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Ventilator Managemen</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="16" id="166" style="height:23px;widht:23px;">
                        <label for="166" >1</label>
                        <input type="radio" name="16" id="266" style="height:23px;widht:23px;">
                        <label for="266" >2</label>
                        <input type="radio" name="16" id="366" style="height:23px;widht:23px;">
                        <label for="366" >3</label>
                        <input type="radio" name="16" id="466" style="height:23px;widht:23px;">
                        <label for="466" >4</label>
                    </div>
                </div>
                <!-- 17 -->
              
            </div>
            <!-- work setting end -->
            <!-- Shock States -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Shock States</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Hypovolemic Shock</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cardiogenic Shock</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Neurogenic Shock</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Anaphylactic Shock</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Disseminated intravascular coagulation (DIC)
</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Septic Shock</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 17 -->
            </div>
            <!-- work setting end -->
            <!-- Professional Topics and Skills -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Professional Topics and Skills</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Caring for organ donors following cardiac death (DCD)</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1" id="1" style="height:23px;widht:23px;">
                        <label for="1" >1</label>
                        <input type="radio" name="1" id="2" style="height:23px;widht:23px;">
                        <label for="2" >2</label>
                        <input type="radio" name="1" id="3" style="height:23px;widht:23px;">
                        <label for="3" >3</label>
                        <input type="radio" name="1" id="4" style="height:23px;widht:23px;">
                        <label for="4" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">End of life care</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2" id="12" style="height:23px;widht:23px;">
                        <label for="12" >1</label>
                        <input type="radio" name="2" id="22" style="height:23px;widht:23px;">
                        <label for="22" >2</label>
                        <input type="radio" name="2" id="32" style="height:23px;widht:23px;">
                        <label for="32" >3</label>
                        <input type="radio" name="2" id="42" style="height:23px;widht:23px;">
                        <label for="42" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Fall Risk assessment</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3" id="13" style="height:23px;widht:23px;">
                        <label for="13" >1</label>
                        <input type="radio" name="3" id="23" style="height:23px;widht:23px;">
                        <label for="23" >2</label>
                        <input type="radio" name="3" id="33" style="height:23px;widht:23px;">
                        <label for="33" >3</label>
                        <input type="radio" name="3" id="43" style="height:23px;widht:23px;">
                        <label for="43" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Infection Prevention</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4" id="14" style="height:23px;widht:23px;">
                        <label for="14" >1</label>
                        <input type="radio" name="4" id="24" style="height:23px;widht:23px;">
                        <label for="24" >2</label>
                        <input type="radio" name="4" id="34" style="height:23px;widht:23px;">
                        <label for="34" >3</label>
                        <input type="radio" name="4" id="44" style="height:23px;widht:23px;">
                        <label for="44" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Interpretation and communication of lab values</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5" id="15" style="height:23px;widht:23px;">
                        <label for="15" >1</label>
                        <input type="radio" name="5" id="25" style="height:23px;widht:23px;">
                        <label for="25" >2</label>
                        <input type="radio" name="5" id="35" style="height:23px;widht:23px;">
                        <label for="35" >3</label>
                        <input type="radio" name="5" id="45" style="height:23px;widht:23px;">
                        <label for="45" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Isolation Precautions/ Use of PPE</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6" id="16" style="height:23px;widht:23px;">
                        <label for="16" >1</label>
                        <input type="radio" name="6" id="26" style="height:23px;widht:23px;">
                        <label for="26" >2</label>
                        <input type="radio" name="6" id="36" style="height:23px;widht:23px;">
                        <label for="36" >3</label>
                        <input type="radio" name="6" id="46" style="height:23px;widht:23px;">
                        <label for="46" >4</label>
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Malignant Hyperthermia Protocols</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="7" id="17" style="height:23px;widht:23px;">
                        <label for="17" >1</label>
                        <input type="radio" name="7" id="27" style="height:23px;widht:23px;">
                        <label for="27" >2</label>
                        <input type="radio" name="7" id="37" style="height:23px;widht:23px;">
                        <label for="37" >3</label>
                        <input type="radio" name="7" id="47" style="height:23px;widht:23px;">
                        <label for="47" >4</label>
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">National Patient Safety Goals/Core Measures</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="8" id="18" style="height:23px;widht:23px;">
                        <label for="18" >1</label>
                        <input type="radio" name="8" id="28" style="height:23px;widht:23px;">
                        <label for="28" >2</label>
                        <input type="radio" name="8" id="38" style="height:23px;widht:23px;">
                        <label for="38" >3</label>
                        <input type="radio" name="8" id="48" style="height:23px;widht:23px;">
                        <label for="48" >4</label>
                    </div>
                </div>
                <!-- 9-->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pain Assessment Management</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="9" id="19" style="height:23px;widht:23px;">
                        <label for="19" >1</label>
                        <input type="radio" name="9" id="29" style="height:23px;widht:23px;">
                        <label for="29" >2</label>
                        <input type="radio" name="9" id="39" style="height:23px;widht:23px;">
                        <label for="39" >3</label>
                        <input type="radio" name="9" id="49" style="height:23px;widht:23px;">
                        <label for="49" >4</label>
                    </div>
                </div>
                <!-- 10 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Phlebotomy</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="0" id="10" style="height:23px;widht:23px;">
                        <label for="10" >1</label>
                        <input type="radio" name="0" id="20" style="height:23px;widht:23px;">
                        <label for="20" >2</label>
                        <input type="radio" name="0" id="30" style="height:23px;widht:23px;">
                        <label for="30" >3</label>
                        <input type="radio" name="0" id="40" style="height:23px;widht:23px;">
                        <label for="40" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Pressure Ulcer Assessment/Prevention</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="11" id="111" style="height:23px;widht:23px;">
                        <label for="111" >1</label>
                        <input type="radio" name="11" id="211" style="height:23px;widht:23px;">
                        <label for="211" >2</label>
                        <input type="radio" name="11" id="311" style="height:23px;widht:23px;">
                        <label for="311" >3</label>
                        <input type="radio" name="11" id="411" style="height:23px;widht:23px;">
                        <label for="411" >4</label>
                    </div>
                </div>
                <!-- 11 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Restraint Use</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="12" id="122" style="height:23px;widht:23px;">
                        <label for="122" >1</label>
                        <input type="radio" name="12" id="222" style="height:23px;widht:23px;">
                        <label for="222" >2</label>
                        <input type="radio" name="12" id="322" style="height:23px;widht:23px;">
                        <label for="322" >3</label>
                        <input type="radio" name="12" id="422" style="height:23px;widht:23px;">
                        <label for="422" >4</label>
                    </div>
                </div>
                <!-- 12 -->
                <!-- 13 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">SBAR</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="13" id="133" style="height:23px;widht:23px;">
                        <label for="133" >1</label>
                        <input type="radio" name="13" id="233" style="height:23px;widht:23px;">
                        <label for="233" >2</label>
                        <input type="radio" name="13" id="333" style="height:23px;widht:23px;">
                        <label for="333" >3</label>
                        <input type="radio" name="13" id="433" style="height:23px;widht:23px;">
                        <label for="433" >4</label>
                    </div>
                </div>
                <!-- 14 -->
                <!-- 15 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Surgical Wounds with drains/Wound Vac</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="14" id="144" style="height:23px;widht:23px;">
                        <label for="144" >1</label>
                        <input type="radio" name="14" id="244" style="height:23px;widht:23px;">
                        <label for="244" >2</label>
                        <input type="radio" name="14" id="344" style="height:23px;widht:23px;">
                        <label for="344" >3</label>
                        <input type="radio" name="14" id="444" style="height:23px;widht:23px;">
                        <label for="444" >4</label>
                    </div>
                </div>
                <!-- 15 -->
                <!-- 16 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Vaccine Administration</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="15" id="155" style="height:23px;widht:23px;">
                        <label for="155" >1</label>
                        <input type="radio" name="15" id="255" style="height:23px;widht:23px;">
                        <label for="255" >2</label>
                        <input type="radio" name="15" id="355" style="height:23px;widht:23px;">
                        <label for="355" >3</label>
                        <input type="radio" name="15" id="455" style="height:23px;widht:23px;">
                        <label for="455" >4</label>
                    </div>
                </div>
                <!-- 16 -->
                
            </div>
            <!-- Professional Topics and Skills -->
            <!-- COMPUTERIZED CHARTING -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">COMPUTERIZED CHARTING</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Cerner</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="1aa" id="1a" style="height:23px;widht:23px;">
                        <label for="1aa" >1</label>
                        <input type="radio" name="1aa" id="2a" style="height:23px;widht:23px;">
                        <label for="2aa" >2</label>
                        <input type="radio" name="1aa" id="3a" style="height:23px;widht:23px;">
                        <label for="3aa" >3</label>
                        <input type="radio" name="1aa" id="4a" style="height:23px;widht:23px;">
                        <label for="4aa" >4</label>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">EPIC</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="2aa" id="12aa" style="height:23px;widht:23px;">
                        <label for="12aa" >1</label>
                        <input type="radio" name="2aa" id="22aa" style="height:23px;widht:23px;">
                        <label for="22aa" >2</label>
                        <input type="radio" name="2aa" id="32aa" style="height:23px;widht:23px;">
                        <label for="32aa" >3</label>
                        <input type="radio" name="2aa" id="42aa" style="height:23px;widht:23px;">
                        <label for="42aa" >4</label>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">McKesson</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="3aa" id="13aa" style="height:23px;widht:23px;">
                        <label for="13aa" >1</label>
                        <input type="radio" name="3aa" id="23aa" style="height:23px;widht:23px;">
                        <label for="23aa" >2</label>
                        <input type="radio" name="3aa" id="33aa" style="height:23px;widht:23px;">
                        <label for="33aa" >3</label>
                        <input type="radio" name="3aa" id="43aa" style="height:23px;widht:23px;">
                        <label for="43aa" >4</label>
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Meditech</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="4aa" id="14aa" style="height:23px;widht:23px;">
                        <label for="14aa" >1</label>
                        <input type="radio" name="4aa" id="24aa" style="height:23px;widht:23px;">
                        <label for="24aa" >2</label>
                        <input type="radio" name="4aa" id="34aa" style="height:23px;widht:23px;">
                        <label for="34aa" >3</label>
                        <input type="radio" name="4aa" id="44aa" style="height:23px;widht:23px;">
                        <label for="44aa" >4</label>
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Allscripts</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="5aa" id="15aa" style="height:23px;widht:23px;">
                        <label for="15aa" >1</label>
                        <input type="radio" name="5aa" id="25aa" style="height:23px;widht:23px;">
                        <label for="25aa" >2</label>
                        <input type="radio" name="5aa" id="35aa" style="height:23px;widht:23px;">
                        <label for="35aa" >3</label>
                        <input type="radio" name="5aa" id="45aa" style="height:23px;widht:23px;">
                        <label for="45aa" >4</label>
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Other:</div>
                    <div class="input d-flex gap-2">
                        <input type="radio" name="6aa" id="16aa" style="height:23px;widht:23px;">
                        <label for="16aa" >1</label>
                        <input type="radio" name="6aa" id="26aa" style="height:23px;widht:23px;">
                        <label for="26aa" >2</label>
                        <input type="radio" name="6aa" id="36aa" style="height:23px;widht:23px;">
                        <label for="36aa" >3</label>
                        <input type="radio" name="6aa" id="46aa" style="height:23px;widht:23px;">
                        <label for="46aa" >4</label>
                    </div>
                </div>
                <div class="d-flex justify-content-between hover p-2" >
                   <input type="text" style="border:none;border-bottom:2px solid black; background-color:transparent;" placeholder="please Specify">
                </div>
            </div>
            <!-- wCOMPUTERIZED CHARTING end -->
            <!-- Age Specific Competency -->
            <div class="mt-5">
                <Strong style="font-size:1.5em; font-weight:bold;margin-bottom:12px;">Age Specific Competency</Strong>
                <!-- 1 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Neonate</div>
                    <div class="input d-flex gap-2">
                        <input type="checkbox" name="1" id="1" style="height:23px;widht:23px;" class="cur">
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Infant</div>
                    <div class="input d-flex gap-2">
                    <input type="checkbox" name="1" id="1" style="height:23px;widht:23px;" class="cur">
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Child</div>
                    <div class="input d-flex gap-2">
                    <input type="checkbox" name="1" id="1" style="height:23px;widht:23px;" class="cur">
                    </div>
                </div>
                <!-- 4 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Adolescent</div>
                    <div class="input d-flex gap-2">
                    <input type="checkbox" name="1" id="1" style="height:23px;widht:23px;" class="cur">
                    </div>
                </div>
                <!-- 5 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Young Adult</div>
                    <div class="input d-flex gap-2">
                    <input type="checkbox" name="1" id="1" style="height:23px;widht:23px;" class="cur">
                    </div>
                </div>
                <!-- 6 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Middle Adult</div>
                    <div class="input d-flex gap-2">
                    <input type="checkbox" name="1" id="1" style="height:23px;widht:23px;" class="cur">
                    </div>
                </div>
                <!-- 7 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="d-flex align-items-center px-1 p-2" style="height:30px; border-radius:20px; ">Older Adult</div>
                    <div class="input d-flex gap-2">
                    <input type="checkbox" name="1" id="1" style="height:23px;widht:23px;" class="cur">
                    </div>
                </div>
                <!-- 8 -->
                <div class="d-flex justify-content-between hover p-2" >
                    <div class="input d-flex gap-2">
                    <input type="text" style="border:none;border-bottom:2px solid black; background-color:transparent;" placeholder="Electronic Signature">
                    <input type="date" style="border:none;border-bottom:2px solid black; background-color:transparent;">
                    </div>
                </div>
                <!-- 9-->
                <p class="d-flex align-items-center px-1 p-2 mt-5 mb-5" style="height:30px; border-radius:20px; ">By clicking “Agree and Submit” below you certify and acknowledge the information provided on this checklist is accurate to the best of your knowledge and an accurate representation of your abilities.</p>
                <div class="d-flex gap-4 mt-5">
                    <button class="button">Save and continue</button>
                    <a href="#" style="text-decoration:underline !important;">Cancel</a>
                </div>
            </div>
            <!-- work setting end -->
            </div>
            <!-- left side -->
            <div class="w-10 mt-5 fixed d-flex flex-column gap-1 order-0 trans " style="background-color:#efefef;" id="fix">
            <Legend style="font-size:13px; font-weight:bold;">Legend</Legend>
            <div> <span class="px-1 fs">1</span> I've never done this</div>
            <div> <span class="px-1 fs">2</span> I can perform this with guidance from someone</div>
            <div> <span class="px-1 fs">3</span> I am competent with this and can perform it solo</div>
            <div> <span class="px-1 fs">4</span> I am highly proficient with this and could teach it to others</div>
            </div>
            <!-- left end -->
            </div>
    <!-- container end -->
    </div>
    <!-- box shadow end -->
</div>
<!-- container end -->
<!-- footer start -->
<div class="dfooter-sec w-100">
    <div class='w-50' style="padding-left:20px">
        <p>&copy; 2023 FLH Staffing</p>
        <a href="#">Terms of Use</a> <a href="#">Privacy Policy</a> <a href="#">Arbitration Agreement </a>
    </div>
</div>
<!-- footer end -->
</div>
    <!-- all main ended -->
<script src="https://kit.fontawesome.com/3fbd57294d.js" crossorigin="anonymous"></script>
<script>
   window.addEventListener('scroll',()=> 
   {
    if(window.scrollY>120){
        document.getElementById('fix').classList.add('top-0')
        // document.getElementById('fix').classList.add('trans')
        document.getElementById('fix').classList.remove('mt-5')
    }else{
        document.getElementById('fix').classList.remove('top-0')
        document.getElementById('fix').classList.add('mt-5')
    }
    })
    
</script>