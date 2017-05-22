
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">














     <title>HOPITAL</title>

     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
   </head>
   <body>



     <?php
      include 'menu.php';
      ?>















 <div class="layout button">
 <div class="icon" onclick="toggleLyout()">
 <i class="fa fa-bars"></i>
 </div>


 <div class="inner">
 <div style="text-align:right;cursor:pointer" onclick="toggleLyout()">
 <i class="fa fa-times"></i>
 </div>
 <br>

 <input type="text" name="search" value="" onKeyUp='data.search(this.value)' class="form-control" placeholder="Search">

 <div style="margin:0 -10px">


  <ul class="control">
 <li  onClick="showSection('dashInner')"><i class="fa fa-dashboard"></i> Tableau de bord</li>
 <li onClick="showSection('serviceInner')"><i class="fa fa-bar-chart"></i> Service</li>
 <li onClick="showSection('clientsInner')"><i class="fa fa-address-book"></i> Personnel</li>
 <li onClick="showSection('clientsInner')"><i class="fa fa-address-book"></i> Infos</li>

  </ul>
 </div>

 </div>
 </div>






 <div class="section">



 <div class="inner dashInner active">
 <div class="row">
 <div class="col-md-3">
   <div class="panel panel-default">
     <div class="panel-heading">Service</div>
     <div class="panel-body">
       <h2 align="center" class="nombredesservices">20</h2>
       <a href="#" class="btn btn-success btn-block" >Ajouter</a>
       <a href="#" class="btn  btn-info btn-block" >Consulter</a>
     </div>
   </div>
 </div>
 <div class="col-md-3">
   <div class="panel panel-default">
     <div class="panel-heading">Personnel</div>
     <div class="panel-body">
       <h2 align="center" class="nombredespersonnels"></h2>
       <a href="#" class="btn btn-success btn-block" >Ajouter</a>
       <a href="#" class="btn  btn-info btn-block" >Consulter</a>
     </div>
   </div>
 </div>
 <div class="col-md-3">
   <div class="panel panel-default">
     <div class="panel-heading">chambre</div>
     <div class="panel-body">
       <h2 align="center" class="nombredeschambres"></h2>
       <a href="#" class="btn btn-success btn-block" >Ajouter</a>
       <a href="#" class="btn  btn-info btn-block" >Etat</a>
     </div>
   </div>
 </div>
 <div class="col-md-3">
   <div class="panel panel-default">
     <div class="panel-heading">Patients</div>
     <div class="panel-body">
       <h2 align="center" class="nombredespatients"></h2>
<a href="#" class="btn btn-success btn-block" >Ajouter</a>
<a href="#" class="btn  btn-info btn-block" >Consulter</a>

     </div>
   </div>
 </div>
 </div>

<h1></h1>
<div align="center">
  <img src="img/hopital-des-grands-brules-algerie_092129.jpg" alt="" style="height:50vh">

</div>

 </div>







 <div class="inner serviceInner">


   <div class="row">
   <div class="col-md-4">
     <div class="panel panel-nfo">
       <div class="panel-heading">Personnel Administratif</div>
       <div class="panel-body">
         <h2 align="center">20</h2>
<a href="#" class="bn btn-info btn-lg"> <i class="fa fa-plus"></i></a>

  </div>
     </div>
   </div>
   <div class="col-md-4">
     <div class="panel panel-nfo">
       <div class="panel-heading">Infermier</div>
       <div class="panel-body">
         <h2 align="center">38</h2>
         <a href="#" class="bn btn-info btn-lg"> <i class="fa fa-plus"></i></a>
       </div>
     </div>
   </div>
   <div class="col-md-4">
     <div class="panel panel-nfo">
       <div class="panel-heading">Médecin</div>
       <div class="panel-body">
         <h2 align="center">10</h2>
         <a href="#" class="bn btn-info btn-lg"> <i class="fa fa-plus"></i></a>
       </div>
     </div>
   </div>
   </div>



 </div>





 <div class="inner clientsInner">
 clientsInner goes Here
 </div>




 </div>



   </body>
 <script type="text/javascript" src="js/layout.js">

 </script>


<script type="text/javascript">
function fetchJSONFile(path, callback) {
  var httpRequest = new XMLHttpRequest();
  httpRequest.onreadystatechange = function() {
      if (httpRequest.readyState === 4) {
          if (httpRequest.status === 200) {
            spydata = JSON.stringify(httpRequest.responseText);
              var data = JSON.parse(httpRequest.responseText);
              if (callback) callback(data);
          }
      }
  };
  httpRequest.open('GET', path);
  httpRequest.send();
}

fetchJSONFile('data/counter.php',function(donnees){
document.querySelector('.nombredespatients').innerText =donnees.patients;
document.querySelector('.nombredeschambres').innerText =donnees.chambres;
document.querySelector('.nombredespersonnels').innerText =donnees.personnel;
document.querySelector('.nombredesservices').innerText =donnees.service;
});


</script>
 </html>
