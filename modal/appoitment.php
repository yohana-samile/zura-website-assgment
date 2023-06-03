<div class="modal fade" id="makeAppoitment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="makeAppoitment" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-md-3">
            <h5 class="modal-title" id="staticBackdropLabel"><img src="images/Zanzibar_Utility_Regulatory_Authority_Logo.png" alt="logo" style="width: 100%; "></h5>
          </div>
            <h3>Make Your appoitment</h3>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="appoitmentAction.php" method="post">
          <div class="mb-3">
            <input type="text" name="appoitmentSender" class="form-control" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
          <div class="mb-3">
            <label for="appoitmentDate">appoitment Date</label>
            <input type="date" name="appoitmentDate" class="form-control" required>
          </div>
          <div class="mb-3">
              <label for="appoitmentTime">appoitment Time</label>
              <input type="time" name="appoitmentTime" class="form-control" required>
              <input type="date" name="timeSent" value="<?php echo date('Y-m-d'); ?>" hidden class="form-control" required>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="makeAppoitment" class="btn btn-primary">make Appoitment</button>
        </form>
      </div>
    </div>
  </div>
</div>