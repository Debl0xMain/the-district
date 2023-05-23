<?php

echo
'
<div class="position-fixed btnlogin">
<button type="button" class="btn btn-outline-light btnprofil" data-bs-toggle="modal" data-bs-target="#profile">
<i class="fa-sharp fa-solid fa-user-tie"></i>
<p class="btnlogintext"> ';
echo $_SESSION['user'];
echo ' </p>
<form action="/src/php/session/session.php" method="post">
<button type="submit" class="profildeco btn btn-outline-danger"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #ff0000;"></i></button>
</form>
</button>
</div>

'
 //
 // </i><img class="avatar" src="" alt="avatar" title="avatar">
?>
