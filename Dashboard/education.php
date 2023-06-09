<?php include 'dheader.php'; ?>
<div class="col-lg-9 hmdsc2">
    <h1 class="page-title">Education</h1>
 <?php include 'applicationprogress.php'; ?>
        
        <div class="container mt-5">
            <p>Please list any degrees you have completed or will complete.</p>
        <div class="pt-box3 hmdsc16">
        <form><br>
        <div class="form-group">
      <input type="text" class="form-control" placeholder="Diploma*">
      <small class="form-text text-muted">e.g. Diploma, Associate, BSN, MSN...</small>
    </div><br>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="School*" id="hundred-characters" maxlength="100" oninput="countChars('hundred-characters', 'hundred-counter', 100)">
      <small class="form-text text-muted"><span id="hundred-counter">0</span>/100 characters</small>
    </div><br>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Location*" id="fifty-characters" maxlength="50" oninput="countChars('fifty-characters', 'fifty-counter', 50)">
      <small class="form-text text-muted"><span id="fifty-counter">0</span>/50 characters</small>
    </div><br>
    <div class="form-group">
      <label for="date-picker">Started</label>
      <input type="date" class="form-control" id="date-picker">
    </div><br>
    <div class="form-group">
      <label for="date-picker">Graduated</label>
      <input type="date" class="form-control" id="date-picker">
    </div><br>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" >
      <label class="form-check-label" for="agree-checkbox">Currently Attending</label>
    </div><br>
    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Education</button>
  </form>
  </div><br>
  <div class="row">
    <div class="col-sm">
  <button type="submit" class="btn btn-primary">Save & Continue</button>
  </div>
  <div class="col-sm">
  <a href="">Cancel</a>
  </div>

  </div><br>
</div>


        <div class="dfooter-sec">
                        <p>© 2023 FLH Staffing</p>
                        <a href="#">Terms of Use</a> <a href="#">Privacy Policy</a> <a href="#">Arbitration Agreement </a>
                    </div>       
</div>

<script>
  function countChars(inputId, counterId, limit) {
    const input = document.getElementById(inputId);
    const counter = document.getElementById(counterId);
    const count = input.value.length;
    counter.textContent = count;
    if (count > limit) {
      counter.style.color = 'red';
    } else {
      counter.style.color = 'inherit';
    }
  }
</script>
