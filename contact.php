<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>

<div class = "container mt-4">
<form class="row g-3 needs-validation padding" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="validationCustomEmail" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">
      Looks good!
    </div>
  </div>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px;"></textarea>
    <label for="floatingTextarea2">Comments</label>
  </div>
  <div class="col-12 d-flex justify-content-end">
    <button class="btn btn-success" type="submit">Submit form</button>
  </div>
</form>
</div>
<?php include_once('components/footer.php'); ?>