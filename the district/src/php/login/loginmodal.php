<?php
echo
'
<div class="modal fade2" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content loginmodal">
    <form action="./src/php/login/loginform.php" method="POST">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Login</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
        <div class="modal-body container">
            <div class="text-center">
                <p class="align-self-center">Email</p><i class="fa-solid fa-envelope"></i>
                <input name="mail" type="email">
                <p class="mt-3">Password</p><i class="fa-solid fa-lock"></i>
                <input name="password" type="password">
            </div>
        </div>
    <div class="modal-footer">
    <button class="btn btn-outline-danger" type="submit" name="reset">Reset password</button>
    <button class="btn btn-outline-primary" type="submit" name="login">Login</button>
    </div>
</form>
</div>
</div>
</div>'.`
<script>
$('#exampleModal').modal();

function afterModalTransition(e) {
  e.setAttribute("style", "display: none !important;");
}
$('#exampleModal').on('hide.bs.modal', function (e) {
    setTimeout( () => afterModalTransition(this), 200);
})
</script>`
?>