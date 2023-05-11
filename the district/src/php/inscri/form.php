<form action="../../../src/php/inscri/checkform.php" Method="POST" enctype="multipart/form-data">
    <div class="fromins">
        <p>Nom</p>
        <input type="text" name="fristname" id="fname">
        <p>Prenom</p>
        <input type="text" name="surname" id="sname">
        <p>Email</p>
        <input type="mail" name="imail" id="imail">
        <p>Password</p>
        <input type="password" name="password" id="password" >
        <p>Image de profils</p>
        <input type="file" name="picture" id="picture">

        <input type="submit" class="btn btn-primary">


    </div>
</form>



<?php
?>