<?php
echo
'
<div class="modal fade2" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content loginmodal">
    <div class="modal-header mx-auto">
      <h5 class="modal-title" id="exampleModalLabel">Login<label class="switch">
      <input type="checkbox" id="changemodal">
      <span class="slider round"></span>
      </label> Inscription</h5>
    </div>
        <div class="modal-body container text-center">

          <form action="./src/php/login/loginform.php" method="POST">
            <div class="text-center login" id="loginchange">
                <p class="align-self-center">Email</p><i class="fa-solid fa-envelope"></i>
                <input name="mail" type="email">
                <p class="mt-3">Password</p><i class="fa-solid fa-lock"></i>
                <input name="password" type="password">
                <p class="passinv"> <br> </p>
                <button class="btn btn-outline-primary" type="submit" name="login">Login</button>
            </div>
            </form>

            <form action="../../../src/php/inscri/checkform.php" Method="POST" enctype="multipart/form-data">
              <div class=" text-center inscription" id="inscription">
                <p>Nom</p>
                <i class="fa-solid fa-user"></i>
                <input type="text" name="fristname" id="fname">
                <br><br>
                <p>Prenom</p>
                <i class="fa-regular fa-user"></i>
                <input type="text" name="surname" id="sname">
                <br><br>
                <p>Email</p>
                <i class="fa-solid fa-envelope"></i>
                <input type="mail" name="imail" id="imail">
                <br><br>
                <p>Password</p>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="password" >
                <br><br>
                <p>Image de profil</p>
                <i class="fa-solid fa-camera"></i>
                <input type="file" name="picture" id="picture">
                <br><br>
                <button type="submit" class="btn btn-outline-primary">inscription</button>
              </div>
  
            </form>
        </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
    </div>
</div>
</div>
</div>'


?>