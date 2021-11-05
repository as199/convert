<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Convertisseur | By ZAHRA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style type="text/css">
      body{
       height: 100vh;
      }
      
      .d-hide{
        display:none !important;
      }
      .footer {
        background-color: #c6e0eb;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        bottom: 0;
        color: #2d3b48;
        text-align: center;
        padding: 20px 30px;
        position: absolute;
        right: 0;
        left: 0;
      }
      .badge{
        height: 50px;
        padding-top: 15px;
        font-size: initial;
      }
    </style>
</head>
<body>
<header>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">ZAHRA-CONVERTISSEUR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>
<div class="container-fluid  mt-3">
  <div class="row d-flex justify-content-center">
    <div class="card col-8">
    <div class="card-body row">
      <div class="col-12 col-md-4 col-sm-4 mt-2">
        <input type="text" name="val" id="N" class="form-control" required placeholder="Veuillez saisir le montant à convertir">
        <span class="text-danger" id="error"></span>
      </div>
      <div class="col-12 col-md-4 col-sm-4 mt-2">
        <select name="type" id="t" required class="form-control">
          <option value="">Veuillez choisir votre choix</option>
          <option value="octets" >octets</option>
          <option value="Ko">Ko</option>
          <option value="Mo">Mo</option>
          <option value="Go">Go</option>
          <option value="To">To</option>
          <option value="Po">Po</option>
        </select>
        <span class="text-danger" id="error2"></span>
      </div>
      <div class="col-12 col-md-4 col-sm-4 mt-2">
          <input type="button" class="btn btn-primary" name="b" value="Convertir" onClick="calcul()">
      </div>
    </div>
  </div>
  </div>
  <br>

  <div class="container" id="result">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-3 col-sm-3 mt-2">
          <span class="badge rounded-pill bg-light text-black col-12" id="bits">bits</span>
        </div>
        <div class="col-12 col-md-3 col-sm-3 mt-2">
        <span class="badge rounded-pill bg-light text-black col-12"  id="octets">octets</span>
        </div>
        <div class="col-12 col-md-3 col-sm-3 mt-2">
          <span class="badge rounded-pill bg-light text-black col-12"  id="ko">Ko</>
        </div>
    </div>
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-12 col-md-4 col-sm-4 mt-2">
          <span class="badge rounded-pill bg-light text-black col-12"  id="go">Go</span>
        </div>
        <div class="col-12 col-md-4 col-sm-4 mt-2">
          <span  class="badge rounded-pill bg-light text-black col-12"  id="to">To</span>
        </div>
        <div class="col-12 col-md-4 col-sm-4 mt-2">
          <span  class="badge rounded-pill bg-light text-black col-12"  id="po">Po</span>
        </div>
    </div>
    <div class="row mt-3 d-flex justify-content-center">
      <div class="col-12 col-md-3 col-sm-3 mt-2">
          <span class="badge rounded-pill bg-light text-black col-12"  id="mo">Mo</span>
        </div>
    </div>
  </div>
</div>

  
  <script LANGUAGE="JavaScript">
    let result = document.getElementById("result");
    document.addEventListener("DOMContentLoaded", function() {
        result.classList.add('d-hide');
    });
    function calcul(){
      let n=document.getElementById("N").value;
      let t=document.getElementById("t").value;
      let nb=parseInt(n);
      let error = document.getElementById('error');
      let error2 = document.getElementById('error2');
        if(isNaN(nb) | nb === "")
        {
          error.innerHTML="entrez un nombre !!!!";
          result.classList.add('d-hide')
        }else if(t===""){
          error2.innerHTML="veuillez choisir un convertisseur!";
          result.classList.add('d-hide')
        }else{
          error.innerHTML='';
          error2.innerHTML='';
          result.classList.remove('d-hide')
          if(t=='Ko'){
            nb=nb*1024;
          }else{
          if(t=='Mo'){
          nb=nb*1024*1024;
        }else {
            if(t=='Go'){
              nb=nb*1024*1024*1024;
            }else {
              if(t=='To'){ 
                nb=nb*1024*1024*1024*1024;
              }
            else {if(t=='Po'){
              nb=nb*1024*1024*1024*1024*1024;
            }
            }}}}
              document.getElementById("bits").innerText =nb*8+" bits";
              document.getElementById("octets").innerText =nb+" octets";
              document.getElementById("ko").innerText =nb/1024+" Ko";
              document.getElementById("mo").innerText =nb/(1024*1024)+" Mo";
              document.getElementById("go").innerText =nb/(1024*1024*1024)+" Go";
              document.getElementById("to").innerText =nb/(1024*1024*1024*1024)+" To";
              document.getElementById("po").innerText =nb/(1024*1024*1024*1024*1024)+" Po";
              if( result.classList.contains('d-hide')){
            result.classList.remove('d-hide')
            result.classList.add('d-flex')
          }
        }
      }
  </script>
</body>
</html>