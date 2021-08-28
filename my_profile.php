<script>
// validation example for Login form
$("#btnLogin").click(function(event) {
    var form = $("#loginForm");    
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.addClass('was-validated');
});

function change_password(){
            jQuery.ajax({
            type:'post',
            url:'change_password.php',
            data:'new_password='+ $('#inputPasswordNew').val() + '&new_confirm_password' + $('#inputPasswordNewVerify').val() ,
            success:function(result){
                alert(result);
		}
	});
}

</script>

<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formChangePassword"></span>
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Change Password</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off">
                <div class="form-group">
                    <label for="inputPasswordNew">New Password</label>
                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                    <span class="form-text small text-muted">
                        The password must be 7 characters long, and must <em>not</em> contain spaces.
                    </span>
                </div>
                <div class="form-group">
                    <label for="inputPasswordNewVerify">Verify Password</label>
                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                    <span class="form-text small text-muted">
                        To confirm, type the new password again.
                    </span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg float-right" onclick="change_password()">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
