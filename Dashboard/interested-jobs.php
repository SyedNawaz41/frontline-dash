<?php include'dheader.php'; ?>
                <div class="col-lg-9 hmdsc2">
                    <h1 class="page-title">Interested Jobs</h1>
                    <div class="pt-box2 mjs-box">
                        <h6>These are jobs that you've expressed interest in.</h6>
                            <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">Only Show Jobs that have been recommended to me.</label>

                
                                <div class="row ujobs-slider">
                                    <div class="col">
                                        <a href="#" class="ujobs-in">
                                            <div class="ujobs">
                                                <h6>Cuyahoga Falls, OH</h6>
                                                <h6><i class="fa fa-plus-square"></i> Western Reserved Hospital</h6>
                                                <h6><i class="fa fa-stethoscope"></i> ICU</h6>
                                                <h6><i class="fa fa-clock-o"></i> 3x12 Night 13 weeks</h6>
                                                <h6><i class="fa fa-dollar"></i> $2381.25 to $2545.05 weekly</h6>
                                                <h6><i class="fa fa-users"></i> 1 Opening</h6>
                                            </div>
                                        </a>
                                    </div>
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
</body>

</html>