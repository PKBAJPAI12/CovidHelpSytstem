<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <link rel="stylesheet" href="cov.css">
  <body>
<?php
include '_header1.php';
?>

<div class="d-flex justify-content-center mx-3 my-5">
<div class="left">
<img src="covid-5064387_640.jpg" alt="" srcset="">
</div>
<div class="right">
<h1>Let's Stay Home & Fight Against Covid-19</h1>

</div>
</div>
<hr>
<div class="header my-5">
    <h3 class="text-center">Welcome to Gujarat Covid Facilities</h3>
</div>
<div class="statehelp my-5">

<form id="frm1" class="form-inline my-lg-0 justify-content-center">
<h4 id="frmh4">Search Your District Covid Facilities</h4>      
<input id="input" class="form-control mr-sm-2" type="search" placeholder="Search Your District Wise Hospitals" aria-label="Search" onkeyup="searchstatehelp()">
    </form>
    <table class="table table-striped border border-dark my-5" id="table1">
  <thead>
    <tr>
      <th class="table-info" scope="col">S.NO</th>
      <th class="table-info" scope="col">State Name</th>
      <th class="table-info" scope="col">Covid Facilities</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>Gujarat</td>
      <td><a href="https://gujcovid19.gujarat.gov.in/">Detail Info</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ahmedabad</td>
      <td><a href="https://ahna.org.in/covid19.html">Detail Info</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Vadodara City</td>
      <td><a href="https://vmc.gov.in/Covid19VadodaraApp/Default.aspx">Detail Info</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Surat</td>
      <td><a href="http://office.suratsmartcity.com/SuratCOVID19/">Detail Info</a></td>
    </tr>
    <tr>

    </tbody>
</table>

    

</div>

<script>

const searchstatehelp = () => {
    let filter = document.getElementById('input').value.toUpperCase();

    let myTable=document.getElementById('table1');
   // let myTbody=myTable.document.getElementByTagName('tbody');
    let tr=table1.getElementsByTagName('tr');
    for(var i=0; i<tr.length; i++){
        let td=tr[i].getElementsByTagName('td')[0];

        if(td){
            let textvalue=td.textContent || td.innerHTML;
            if(textvalue.toUpperCase().indexOf(filter)>-1){
                tr[i].style.display="";
            }
            else{
                tr[i].style.display="none";
            }
        }
    }
}

</script>


<?php
include '_footer.php';
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>