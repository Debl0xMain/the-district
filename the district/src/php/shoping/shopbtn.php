
<!-- panier -->

<div class="position-fixed btnlogin btnshop">
<button type="button" class="btn btn btn-outline-warning btnicon" id="logincharge" data-bs-toggle="modal" data-bs-target="#basket-shopping">
<i class="fa-sharp fa-solid fa-basket-shopping"></i>
<p class="btnlogintext" id="btnlogintext">Panier</p>
</button>
</div>

<!-- Modal -->

<div class="modal fade2" id="basket-shopping" tabindex="-1" aria-labelledby="basket-shoppingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content shopmodal">
      <div class="modal-header mx-auto">
        <h5 class="modal-title" id="basket-shoppingLabel"><i class="fa-sharp fa-solid fa-basket-shopping"></i>Panier</h5>
      </div>
      <div class="modal-body">
        
                                            <!-- contenu du panier -->
                                            <?php include('./src/php/shoping/affpanier.php');
                                            ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-primary">Paye</button>
      </div>
    </div>
  </div>
</div>
