<?php include'dheader.php'; ?>
<!--  -->
<style>
    .img3{
        width:100%;
        height:100%;
        
    }
    .bold{
        font-weight:600;
    }
    .bg{
        background-color: #f4f4f4;
    }
    .h-cs{
        max-width:30rem !important;
        min-height:18rem ;

    }
    .fs{
        font-size:.875rem;
    }
    .rgb10{
        color:rgba(0,0,0,0.8) !important;
    }
    .rad-10{
        border-radius:20px;
    }
    .i{
        color: dimgrey  !important;;
        background: transparent !important;
        width:0;
        line-height: 0  !important;;
        text-align: center  !important;;
        border: none  !important;;
        border-radius:0px  !important;;
        border-color: none  !important;;
    }
    .img2{
        /* background-color: red; */
        height: 8rem;
        width: 50%;
    }
    .left{
        flex:1.5;
    }
    .select1{
        background-color:transparent ;
        border:none !important;
        outline:none;
        border-bottom:2px solid black !important;
    }
    
</style>
<?php include'modal.php'; ?>
                <div class="col-lg-9 hmdsc2">
                <?php include 'modal.php'; ?>
                    <h1 class="page-title">Interested Jobs</h1>
                    <div class="pt-box2 mjs-box">
                        <h6>These are jobs that you've expressed interest in.</h6>
                            <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Only Show Jobs that have been recommended to me.</label>
                                <!-- <div class="row ujobs-slider"> -->
                                    
                                    <!-- <div class="col"> -->
                                        <!-- ddsd -->
                                        <!-- <a href="#" class="ujobs-in">
                                            <div class="ujobs">
                                                <h6>Cuyahoga Falls, OH</h6>
                                                <h6><i class="fa fa-plus-square"></i> Western Reserved Hospital</h6>
                                                <h6><i class="fa fa-stethoscope"></i> ICU</h6>
                                                <h6><i class="fa fa-clock-o"></i> 3x12 Night 13 weeks</h6>
                                                <h6><i class="fa fa-dollar"></i> $2381.25 to $2545.05 weekly</h6>
                                                <h6><i class="fa fa-users"></i> 1 Opening</h6>
                                            </div>
                                        </a> -->
                                    <!-- </div> -->
                                    <!-- </div> -->

                            <!-- box -->
                            <div class="bg h-cs mt-3 rad-10 pt-2 " >
                            <div class="interested rgb10 px-3 pt-2"  ><i class="fa-solid fa-thumbs-up" style="color: #525252;position:static !important;"></i> Interestted 4/4/23</div>
                            <hr>
                            <div class="px-1">
                                <span class="mx-2" style="color:#c72026;">Closed</span>
                                <span class="mx-2" style="color:#c72026;">Crisis</span>
                            </div>
                            <div class="d-flex gap-1">
                                <div class="img2 px-2">
                                    <img src="../Assets/Images/Mountains.jpg" alt="" class="img3">
                                    <div style="background-color:#d4f4f9; padding:2px; text-align:center;" class="mt-2" >Aya Advantage</div>
                                </div>
                                <div class="left">
                                    <div class="bold fs">Montgomery,Albama</div>
                                    <div class="bold fs">Baptist Medical Center South</div>
                                    <div class="rgb10 fs">Travel</div>
                                    <div class="rgb10 fs">ICU</div>
                                    <div class="rgb10 fs">4X12Night</div>
                                    <div class="rgb10 fs">$3062.57 to $3225.85 weekly</div>
                                </div>
                            </div>
                            </div>
                            <!-- box end -->
                            <div class="d-flex mt-4 bg p-3 gap-4" >
                                <div style="color:rgba(0,0,0,0.8);font-size:12px">Items per page:</div>
                                <select name="" id="" class="select1">
                                    <option value="">5</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                </select>
                                <div>1 - 1 of 1</div>
                                <div><</div>
                                <div>></div>
                            </div>
                        </div>
                    </div> 

                    <div class="dfooter-sec">
                        <p>© 2023 FLH Staffing</p>
                        <a href="#">Terms of Use</a> <a href="#">Privacy Policy</a> <a href="#">Arbitration Agreement </a>
                    </div>
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

<script src="https://kit.fontawesome.com/3fbd57294d.js" crossorigin="anonymous"></script>
</body>


</html>