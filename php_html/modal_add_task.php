<!-- Моальное окно добавления задачи -->
<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new task!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="php/modal_windows/add_task_events.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input class="form-control" id="exampleInputName" placeholder="Enter name" name="name">
            <small id="emailHelp" class="form-text text-muted">Please, enter your name.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
            <small id="emailHelp" class="form-text text-muted">Please, enter your e-mail.</small>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Task</label>
            <textarea class="form-control" id="message-text" placeholder="Your task here" name="task"></textarea>
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
