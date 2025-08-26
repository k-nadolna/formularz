<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include('header.php') ?>

  <div id="content">
    <div class="main_page container">
    <div class="row">
      <h4>Zgłoszenie niepożadanego działania leku</h4>
      <p>Znajdujesz się na stronie, gdzie możesz zgłosić niepożądane działanie produktu leczniczego</p>
    </div>

    <div class="row">
      <h4>Wybierz odpowiedni formularz</h4>

      <div class="row d-flex justify-content-around my-3 mx-0">

        <div class="main_page_card col-11 col-md-4 card rounded-0 p-0">
          <img class="img-fluid card-img-top rounded-0" src="images/grand-parent-learning-use-digital-divice.jpg" height="667px" width="1000px" alt="grand-parent-learning-use-digital-divice">
          <div class="card-body d-flex row align-content-between mx-2">
            <p class="card-title p-0">Formularz dla pacjenta</p>
            <a href="patient_form.php">
            <button type="button" class="btn btn-primary w-100 rounded-0 btn_patient">Zgłoś</button>
            </a>
          </div>
        </div>
  
        <div class="main_page_card col-11 col-md-4 card rounded-0 p-0">
          <img class="img-fluid card-img-top rounded-0" src="images/doctors-looking-laptop-while-sitting.jpg" height="667px" width="1000px" alt="doctors-looking-laptop-while-sitting">
          <div class="card-body d-flex row align-content-between mx-2">
            <p class="card-title p-0">Formularz dla osoby wykonującej zawód medyczny</p>
            <a href="doctor_form.php"> 
            <button type="button" class="btn btn-primary w-100 rounded-0 btn_doctor">Zgłoś</button>
          </a>
          </div>
        </div>

      </div>
      

    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>
</html>
