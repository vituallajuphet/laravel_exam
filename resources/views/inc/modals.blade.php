<!-- Modal -->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="#" id="register_form" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Full name</label>
                <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input  required type="email" name="email" class="form-control email_field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input required type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input required type="password" name="con_pass" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
            </div>
            
            <div>
              <input type="checkbox" class="temrs"> Accept Terms and condition
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="" id="form_login" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input  required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input required type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>