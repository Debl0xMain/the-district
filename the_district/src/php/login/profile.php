<?php
$imgp = $_SESSION["imgprofil"];

if (file_exists('src/img/imgprofils/'.$imgp.'.jpeg')== true) {
    $imgp = $_SESSION["imgprofil"];
    $profil = $imgp.".jpeg";
    $profillink = "./src/img/imgprofils/$profil";
    $profilaff = '<img src="./src/img/imgprofils/'.$profil.'" alt="Profil" height="35px" class="rounded-circle">';
}
else {
    $profilaff  = '<i class="fa-solid fa-user"></i>';
}

echo
'
<div class="position-fixed btnlogin">
<button type="button" class="btn btn-outline-light btnprofil" data-bs-toggle="modal" data-bs-target="#profile">
'.$profilaff.'
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
