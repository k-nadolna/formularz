<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Form doctor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <?php include('header.php') ?>
  <div class="container my-3">
    <h4>Zgłoszenie niepożądanego działania produktu leczniczego</h4>
    <h5>Formularz dla osoby wykonującej zawód medyczny.</h5>
    <h5>Uzupełnij wyszystkie 6 kroków formularza udzielająć nam jak najbardziej precyzyjnych informacji.</h5>

    <div id="proggress" class="row">
   
      <button type="button" class="btn btn_arrow_prev">
        <img src="images/arrow_prev.png" height="512px" width="420px" alt="arrow_prev">
      </button>

      <div class="col-12 col-md-4 btn_space space_show text-center">
          <span class="line filled_line"></span>
          <button type="button" class="btn btn_part active_btn">1</button>
      </div>  
        
      <div class="col-12 col-md-4 btn_space space_show text-center">
        <span class="line"></span>
        <button type="button" class="btn btn_part">2</button>
      </div>  

      <div class="col-12 col-md-4 btn_space space_show text-center">
        <span class="line"></span>
        <button type="button" class="btn btn_part">3</button>
      </div>  

      <div class="col-12 col-md-4 btn_space text-center">
        <span class="line"></span>
        <button type="button" class="btn btn_part">4</button>
      </div>  

      <div class="col-12 col-md-4 btn_space text-center">
        <span class="line"></span>
        <button type="button" class="btn btn_part">5</button>
      </div>  

      <div class="col-12 col-md-4 btn_space text-center">
        <span class="line"></span>
        <button type="button" class="btn btn_part">6</button>
      </div>    

      <button type="button" class="btn btn_arrow_next">
        <img src="images/arrow_next.png" height="512px" width="420px" alt="arrow_next">
      </button>  
    </div>

    <div id="proggress_titles" class="row">
      <p class="col-12 col-md-4 btn_title active_title title_show">Dane osoby zgłaszającej</p>   
      <p class="col-12 col-md-4 btn_title title_show">Pacjent</p>
      <p class="col-12 col-md-4 btn_title title_show">Stosowane leki</p>
      <p class="col-12 col-md-4 btn_title">Działania niepożądane</p>
      <p class="col-12 col-md-4 btn_title">Następstwa</p>
      <p class="col-12 col-md-4 btn_title">Podsumowanie</p>
    </div>

    <div id="questionnaire" class="py-3 d-flex justify-content-center">

<form action="patient_form.php" method="post" class="container d-flex row part_of_form active_part needs-validation px-0" novalidate >
  <div class="bg-light shadow-sm p-3 my-3 ">
    <h4 class="my-3">część 1</h4>

    <div class="row my-2">
      <div class="col-12 col-md-6 col-lg-4 px-3">
        <label class="form-label" for="name">Imię:</label>
        <input type="text" class="data form-control ms-0" name="name" id="name" placeholder="Wpisz ..." required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 px-3">
        <label class="form-label" for="surname">Nazwisko:</label>
        <input type="text" class="data form-control ms-0" name="surname" id="surname" placeholder="Wpisz ..." required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
      </div>
    </div>  
  </div>
    
    <div class="row justify-content-end px-0 mx-0">
      <button type="submit" class="btn btn_next btn-primary col-12 col-lg-2 col-md-3 m-1 me-0 rounded-0">Następny krok</button>
    </div>
</form>


<form action="patient_form.php" method="post" class="container d-none row part_of_form needs-validation" novalidate>

  <div class="bg-light shadow-sm p-3 my-3 ">
      <h4 class="my-3">część 2</h4>

      <div class="row my-2">
        <p class="my-1">U kogo wystąpiło niepożądane działanie?<span class="text-danger font-weight-bold">*</span></p>
        <div class="d-flex row">
          <div class="col-12 col-lg-2 form-check ms-lg-3">
            <input class="data form-check-input" type="radio" name="who" id="mr" required>
            <label class="form-check-label" for="mr">U Pani/Pana</label>
            <div class="valid-feedback">
            Looks good!
            </div>
            <div class="invalid-feedback">
            You must fill this input
            </div>
          </div>
          <div class="col-12 col-lg-3 form-check">
            <input class="form-check-input" type="radio" name="who"
            id="child" required>
            <label class="form-check-label" for="child">U Pani/Pana dziecka</label>
          </div>
          <div class="col-12 col-lg-2 form-check">
            <input class="form-check-input" type="radio" name="who" id="other" required>
            <label class="form-check-label" for="other">U innej osoby</label>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <label class="form-label" for="initials">Inicjały</label>
        <input type="text" class="data form-control ms-0" name="initials" id="initials" placeholder="Wpisz ..." required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
      </div>
  </div>
  <div class="row justify-content-end mx-0 px-0">
    <button type="button" class="btn btn_cancel btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Anuluj</button>
    <button type="button" class="btn btn_prev btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Poprzedni krok</button>
    <button type="submit" class="btn btn_next btn-primary col-12 col-lg-2 col-md-3 m-1 me-0 rounded-0">Następny krok</button>
  </div>
</form>  



<form action="patient_form.php" method="post" class="container d-none row part_of_form needs-validation" novalidate>
  <div class="bg-light shadow-sm p-3 my-3 ">
    <h4>część 3</h4>
    <p>Czy zgłosznie jest korektą lub uzupełnieniem wcześniej wysłanego zgłoszenia?</p>
    <div class="d-flex"> 
      <div class="form-check">
        <input type="radio" class="data form-check-input" name="adjustment"  id="adjustment-yes" value="yes" required>
        <label class="form-check-label me-3" for="adjustment-yes">Tak</label>
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            You must fill this input
        </div>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" name="adjustment"  id="adjustment-no" value="no" required>
        <label class="form-check-label" for="adjustment-no">Nie</label>
      </div>
    </div>
  </div>
  <div class="row justify-content-end mx-0 px-0">
     <button type="button" class="btn btn_cancel btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Anuluj</button>
      <button type="button" class="btn btn_prev btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Poprzedni krok</button>
      <button type="submit" class="btn btn_next btn-primary col-12 col-lg-2 col-md-3 m-1 me-0 rounded-0">Następny krok</button>
  </div>
</form>



<form action="patient_form.php" method="post" class="container d-none row part_of_form needs-validation" novalidate>
  <div class="bg-light shadow-sm p-3 my-3 ">
    <h4 class="my-3" >część 4</h4>

    <div class="row my-2">
      <div class="col-12 col-md-3 col-lg-2 px-3">
        <label class="form-label" for="phone-number">Telefon</label>
        <input type="tel" class="data form-control" name="phone-number" id="phone-number" placeholder="000-000-000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
      </div>
      <div class="col-12 col-md-9 col-lg-10 px-3">
        <label class="form-label" for="email">Email</label>
        <input type="email" class="data form-control" name="email" id="email" placeholder="Wpisz ..." required>
        <div class="valid-feedback">
            Looks good!
            </div>
            <div class="invalid-feedback">
            You must fill this input
            </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-end mx-0 px-0">
      <button type="button" class="btn btn_cancel btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Anuluj</button>
      <button type="button" class="btn btn_prev btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Poprzedni krok</button>
      <button type="submit" class="btn btn_next btn-primary col-12 col-lg-2 col-md-3 m-1 rounded-0 me-0">Następny krok</button>
  </div>
</form>


<form action="patient_form.php" method="post" class="container d-none row part_of_form needs-validation" novalidate>
  <div class="bg-light shadow-sm p-3 my-3 ">
    <h4 class="my-3" >część 5</h4>

    <div class="row my-2">
      <div class="col-12 col-lg-6">
        <label class="form-label" for="voivodeship">Województwo</label> 
        <input class="data form-control" type="text" name="voivodeship" id="voivodeship" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
      </div>
    </div>

    <div class="row my-2">
      <div class="col-12 col-md-9 col-lg-6">
        <label class="form-label" for="town" >Miejscowość</label>
        <input class="data form-control" type="text" id="town" name="town" placeholder="Wybierz ..." required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
      </div>

      <div class="col-12 col-md-3 col-lg-2">
        <label class="form-label" for="postcode" >Kod pocztowy</label>
        <input class="data form-control" type="text" name="postcode" id="postcode" placeholder="00-000" pattern="[0-9]{2}-[0-9]{3}" required>
        <div class="valid-feedback">
        Looks good!
        </div>
        <div class="invalid-feedback">
        You must fill this input
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-end mx-0 px-0">
       <button type="button" class="btn btn_cancel btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Anuluj</button>
      <button type="button" class="btn btn_prev btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Poprzedni krok</button>
      <button type="submit" class="btn btn_next btn-primary col-12 col-lg-2 col-md-3 m-1 me-0 rounded-0">Następny krok</button>
  </div>
</form>


<form action="patient_form.php" method="post" class="container d-none row part_of_form needs-validation" novalidate>
   <div class="bg-light shadow-sm p-3 my-3 ">
      <h4 class="my-3" >część 6</h4>

      <div class="row my-2">
        <div class="col-12 col-lg-6">
           <label class="form-label" for="street">Ulica</label>
           <input class="data form-control" type="text" name="street" id="street" placeholder="Wpisz ..." required>
           <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
           <label class="form-label" for="building-num" >Nr budynku</label>
           <input class="data form-control" type="text" name="building-num" id="building-num" placeholder="Wpisz ..." required>
           <div class="valid-feedback">
           Looks good!
          </div>
          <div class="invalid-feedback">
          You must fill this input
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
           <label class="form-label" for="apartment-num">Nr lokalu</label>
           <input class="data form-control" type="text" name="apartment-num" id="apartment-num" placeholder="Wpisz ..." required>
           <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          You must fill this input
        </div>
        </div>
      </div>  
   </div>
   <div class="row justify-content-end mx-0 px-0">
        <button type="button" class="btn btn_cancel btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Anuluj</button>
        <button type="button" class="btn btn_prev btn-outline-primary col-12 col-lg-2 col-md-3 m-1 rounded-0">Poprzedni krok</button>
        <button type="submit" class="btn btn_submit btn-primary col-12 col-lg-2 col-md-3 m-1 rounded-0 me-0">Wyślij</button>
    
                 </div>
     
</form>


</div>
  </div>


  <?php include('footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="app_f.js"></script>
</body>
</html>
