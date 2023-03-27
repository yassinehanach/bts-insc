<?php

include("../header.php");



?>
        <div class="hero-content-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Candidature BTS 2022/2023</h1>
                            </header><!-- .entry-header -->
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->    
    <section class="pt-5 pb-5 ">
      <div class="container">
        <form id="myForm">
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="codeInput" class="form-label text-primary text-center">Code Massar</label>
            <input type="text" class="form-control rounded-3" id="codeInput" name="codeInput" placeholder="G123456789" required>
          </div>
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="nameInput" class="form-label text-primary text-center">Nom et Prénom:</label>
            <input type="text" class="form-control rounded-3" id="nameInput" name="nameInput" readonly>
          </div>
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="emailInput" class="form-label text-primary text-center">Email:</label>
            <input type="email" class="form-control rounded-3" id="emailInput" name="emailInput" placeholder="name@example.com" readonly>
          </div>
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="typebacInput" class="form-label text-primary text-center">Type de Bac :</label>
            <input type="email" class="form-control rounded-3" id="typebacInput" name="typebacInput" placeholder="Type de bac" readonly>
          </div>
          <div class="form-group col-md-6 text-center centered">
            <label for="moyenInput" class="form-label text-primary text-center">Moyenne general:</label>
            <input type="number" class="form-control rounded-3" id="moyenInput" name="moyenInput" placeholder="10,00" readonly>
          </div>
          <div class="form-group col-md-6 text-center centered">
            <label for="telInput" class="form-label text-primary text-center">Phone number:</label>
            <input type="tel" class="form-control rounded-3" id="telInput" name="telInput" placeholder="06 66 66 66 66" readonly>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 1ere Choix</p>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              PROD(Productique) 
            </label>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 2eme Choix</p>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              PROD(Productique) 
            </label>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 3eme Choix</p>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              PROD(Productique) 
            </label>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 4eme Choix</p>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-center">  
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              PROD(Productique) 
            </label>
          </div>
          <div class="mb-3 col-md-6 text-center centered">
            <label for="telInput" class="form-label text-primary text-center">Téléphone</label>
            <input type="tel" class="form-control rounded-3" id="telInput" name="telInput" placeholder="06 66 66 66 66">
          </div>
          <p class="text-primary text-center mb-3">Copie de Bac <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <p class="text-primary text-center mb-3">Copie de Relevé de notes <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <p class="text-primary text-center mb-3">Copie de CIN <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <p class="text-primary text-center mb-3">Copie Fiche de Candidature <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
          <!-- Submit Button-->
          <button type="submit" class="btn btn-primary centered">Submit</button>
        </form>
      </div>    
    </section>



<?php

include("footer.php");

?>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script src="importData.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
  
</body>
</html>