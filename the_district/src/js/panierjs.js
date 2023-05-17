<script>

let x = <?php echo json_encode(cltpaniercount()); ?>;



do {

let i = <?php echo json_encode($selectpanier); ?>;

var idcmdbdd[i] = <?php echo json_encode($idcmdbdd); ?>;
var idplatcmd[i] = <?php echo json_encode($idplatcmd); ?>;
var libellecmd[i] = <?php echo json_encode($libellecmd); ?>;
var imagecmd[i] = <?php echo json_encode($imagecmd ); ?>;
var prixcmd[i] = <?php echo json_encode($prixcmd); ?>;
var idusercmd[i] = <?php echo json_encode($idusercmd ); ?>;



var row = '<div class="row rows-col-4 panierrow">'
var panierimg = '<div class="col my-auto"><img class="panierimg" src="./src/img/plat/'imagecmd'" alt="'.imagecmd.'" height="32px" width="32px"></div>'
var panierlibelle = '<div class="col my-auto panierlibelle"><p>'libellecmd'</p></div>'
var panierprix = '<div class="col my-auto panierprix"><p>'prixcmd.'</p></div>'
var paniersup = '<div class="col my-auto paniersup">'
var suprow = '<form action="./src/php/shoping/deleterow.php" method="POST">'
var btn = '<button name="user" class="btn" type="submit" value="'idusercmd'"><i class="fa-solid fa-trash"></i></button>'
var inputhdn = '<input hidden name="idcmd" type="text" value="'idcmdbdd'">'
var suprow2 = '</form>'
var paniersup2 = '</div>'
var row2 = '</div>'




}while(let i < x);

    
</script>