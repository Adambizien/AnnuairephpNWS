<br>
<br>
<br>

<main class="flex-shrink-0">
  <div class="container rounded bg-light">
      <div class="h4 pb-2 mb-4  border-bottom border-secondary text-center">
        Ajouter
      </div>
      <div class="row g-5 ">
          <div class="col-md-12 col-lg-12">
              <form action="#" method="post">
                  <div class="row ">
                      <div class="col-sm-4">
                          <label for="surname" class="form-label">Nom<span class=" <?php echo (isset($_POST['submit'])? empty($_POST['surname']) ?  "text-danger" :  "":  ""); ?>">*</span> :</label>
                          <input type="text" class="form-control <?php echo isset($_POST['submit']) && empty($_POST['surname']) ? 'is-invalid' : ''; ?>" id="surname" name="surname" placeholder="Nom..." >
                      </div>
                      <div class="col-sm-4">
                          <label for="name"  class="form-label">Prénom<span class=" <?php echo (isset($_POST['submit'])? empty($_POST['name']) ?  "text-danger" :  "":  ""); ?>">*</span> :</label>
                          <input type="text" id="name" class="form-control   <?php echo isset($_POST['submit']) && empty($_POST['surname']) ? 'is-invalid' : ''; ?>" name="name" placeholder="Prénom..." >
                          <br/>
                      </div>
                      <div class="col-4">
                          <label for="birthDay" class="form-label">Date de naissance<span class=" <?php echo (isset($_POST['submit'])? empty($_POST['birthDay']) ?  "text-danger" :  "":  ""); ?>">*</span> :</label>
                          <input type="date" id="birthDay" class="form-control <?php echo isset($_POST['submit']) && empty($_POST['surname']) ? 'is-invalid' : ''; ?> " name="birthDay" >
                          <br/>
                      </div>
                      
                      <div class="col-6">
                          <label for="email" class="form-label">Email<span class=" <?php echo (isset($_POST['submit'])? empty($_POST['email']) ?  "text-danger" :  "":  ""); ?>">*</span> :</label>
                          <input type="email" id="email" class="form-control <?php echo isset($_POST['submit']) && empty($_POST['surname']) ? 'is-invalid' : ''; ?>" name="email" placeholder="test@example.com" >
                          <br/>
                      </div>

                      <div class="col-6">
                        <label for="phone">Numéro de Téléphone<span class=" <?php echo (isset($_POST['submit'])? empty($_POST['phone']) ?  "text-danger" :  "":  ""); ?>">*</span> :</label>
                        <div class="input-group mt-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="phone">+33</span>
                          </div>
                          <input type="text" class="form-control <?php echo isset($_POST['submit']) && empty($_POST['surname']) ? 'is-invalid' : ''; ?>" id="phone" name="phone" placeholder="00 00 00 00 00" >
                        </div>
                        <br/>
                      </div>
                      <div class="col-8">
                          <label for="address" class="form-label">Adresse :</label>
                          <input type="text" id="address" class="form-control" name="address" placeholder="Adresse...">
                          <br/>
                      </div>
                      <div class="col-2">
                          <label for="postalcode" class="form-label">Code postal :</label>
                          <input type="text" id="postalcode" class="form-control" name="postalcode"  placeholder="Code postal...">
                          <br/>
                      </div>
                      <div class="col-2">
                          <label for="city" class="form-label">Ville :</label>
                          <input type="text" id="city" class="form-control" name="city" placeholder="Ville...">
                          <br/>
                      </div>
                      <div class="col-12">
                          <label for="description" class="form-label">Description :</label>
                          <textarea id="description" class="form-control" name="description">
                          </textarea>
                          <br/>
                      </div>  
                  </div>
                  <input type="submit" class="w-100 btn btn-primary btn-lg mr-3 mb-3" name="submit" value="Envoyer">
              </form>
          </div>
      </div>
  </div>
</main>
<?php
fromInc("form");
