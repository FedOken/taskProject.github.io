<!-- Моальное окно, логинимся на странице -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="php/modal_windows/login.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="login">Login</label>
            <input class="form-control" id="login" placeholder="Enter login" name="login">
            <small id="" class="form-text text-muted">Please, enter your login.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password" name="password">
            <small id="" class="form-text text-muted">For "admin" password "123".</small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
