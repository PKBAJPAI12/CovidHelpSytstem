<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cov.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>CovidCare</title>
  </head>
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



<div class="d-flex justify-content-center my-5">
<div class="col-md-3">
<div class="card border border-dark" id="card1">
  <div class="card-body">
    <h5 class="card-title text-center">Active</h5>
    <h5 class="card-title text-center">798656</h5>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card border border-dark" id="card2">
  <div class="card-body">
    <h5 class="card-title text-center ">Discharged</h5>
    <h5 class="card-title text-center">28580647</h5>
  </div>
  </div>
  </div>

  <div class="col-md-3">
  <div class="card border border-dark" id="card3">
  <div class="card-body">
    <h5 class="card-title text-center">Death</h5>
    <h5 class="card-title text-center">383490</h5>
  </div>
</div>
</div>

</div>


<hr>


<div class="statehelp my-5">

<form id="frm1" class="form-inline my-lg-0 justify-content-center">
<h4 id="frmh4">Search Your State for Know Covid Facilities</h4>      
<input id="input" class="form-control mr-sm-2" type="search" placeholder="Search Your State" aria-label="Search" onkeyup="searchstatehelp()">
    </form>

<table class="table table-striped border border-dark my-5" id="table1">
  <thead>
    <tr>
      <th class="table-info" scope="col">S.NO</th>
      <th class="table-info" scope="col">State Name</th>
      <th class="table-info" scope="col">Covid Facilities</th>
      <th class="table-info" scope="col">Helpline Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Andhra Pradesh</td>
      <td><a href="http://dashboard.covid19.ap.gov.in/ims/hospbed_reports/">Detail Info</a></td>
      <td>0866-2410978</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Arunachal Pradesh</td>
      <td><a href="#">Detail Info</a></td>
      <td>0360-2214216/ 
       0360-2214238/ 
       9485236624/
       9436055743</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Assam</td>
      <td><a href="https://covid19.assam.gov.in/">Detail Info</a></td>
            <td>6913347770</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Bihar</td>
      <td><a href="https://covid19.bihar.gov.in/">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Chandigarh</td>
      <td><a href="http://chdcovid19.in/">Detail Info</a></td>
      <td>9779558282</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Chhattisgarh</td>
      <td><a href="https://cg.nic.in/health/covid19/RTPBedAvailable.aspx">Detail Info</a></td>
      <td>0788-2210772/ 
      0788-2210773</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Dadra And Nagar Haveli And Daman And Diu</td>
      <td><a href="https://covidfacility.dddgov.in/">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Delhi</td>
      <td><a href="_delhi.php">Detail Info</a></td>
      <td>011-22307145</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Jammu and Kashmir</td>
      <td><a href="#">Detail Info</a></td>
      <td>01912520982/
       0194-2440283</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Ladakh</td>
      <td><a href="https://covid.ladakh.gov.in/">Detail Info</a></td>
      <td>01982256462</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Goa</td>
      <td><a href="https://www.goa.gov.in/covid-19/">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Gujarat</td>
      <td><a href="_gujrat.php">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Haryana</td>
      <td><a href="_haryana.php">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Himachal Pradesh</td>
      <td><a href="http://www.nrhmhp.gov.in/content/covid-health-facilities">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Jharkhand</td>
      <td><a href="https://www.jharkhand.gov.in/Home/Covid19Dashboard">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Karnataka</td>
      <td><a href="https://bbmpgov.com/chbms/">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Kerala</td>
      <td><a href="https://covid19jagratha.kerala.nic.in/home/addHospitalDashBoard">Detail Info</a></td>
      <td>0471-2552056</td>
    </tr>
    <tr>
    <th scope="row">18</th>
      <td>Madhya Pradesh</td>
      <td><a href="http://sarthak.nhmmp.gov.in/covid/facility-bed-occupancy-dashboard/">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>Maharashtra</td>
      <td><a href="_maharashtra.php">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td>Manipur</td>
      <td><a href="#">Detail Info</a></td>
      <td>1800-3453-818/ 
          3852411668</td>
    </tr>
    <tr>
      <th scope="row">21</th>
      <td>Meghalaya</td>
      <td><a href="https://meghealth.in/MeghCare.html">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td>Mizoram</td>
      <td><a href="">Detail Info</a></td>
      <td>0389-2323336/ 0389-2322336/ 0389-2318336</td>
    </tr>
    <tr>
      <th scope="row">23</th>
      <td>Nagaland</td>
      <td><a href="">Detail Info</a></td>
      <td>7005539653</td>
    </tr>
    <tr>
      <th scope="row">24</th>
      <td>Odisha</td>
      <td><a href="">Detail Info</a></td>
      <td>1075 / 104 / 011-23978046 / 9439994859</td>
    </tr>
    <tr>
      <th scope="row">25</th>
      <td>Puducherry</td>
      <td><a href="https://covid19dashboard.py.gov.in/">Detail Info</a></td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">26</th>
      <td>Punjab</td>
      <td><a href="https://punjab.gov.in/">Detail Info</a></td>
      <td>8872090029</td>
    </tr>
    <tr>
      <th scope="row">27</th>
      <td>Rajasthan</td>
      <td><a href="https://covidinfo.rajasthan.gov.in/COVID19HOSPITALBEDSSTATUSSTATE.aspx">Detail Info</a></td>
      <td>9439994859</td>
    </tr>
    <tr>
      <th scope="row">28</th>
      <td>Sikkim</td>
      <td><a href="https://www.covid19sikkim.org/">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">29</th>
      <td>Tamilnadu</td>
      <td><a href="https://stopcorona.tn.gov.in/">Detail Info</a></td>
      <td>044-29510500</td>
    </tr>
    <tr>
      <th scope="row">30</th>
      <td>Telangana</td>
      <td><a href="http://164.100.112.24/SpringMVC/getHospital_Beds_Status_Citizen.htm">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">31</th>
      <td>Tripura</td>
      <td><a href="">Detail Info</a></td>
      <td>8414-969-592</td>
    </tr>
    <tr>
      <th scope="row">32</th>
      <td>Uttar Pradesh</td>
      <td><a href="http://dgmhup.gov.in/EN/covid19bedtrack">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">33</th>
      <td>Uttarakhand</td>
      <td><a href="https://covid19.uk.gov.in/bedssummary.aspx">Detail Info</a></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">34</th>
      <td>West Bengal</td>
      <td><a href="https://www.wbhealth.gov.in/">Detail Info</a></td>
      <td>1800313444222, 03323412600</td>
    </tr>
      
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


<div class="footer">
<div class="footeri d-flex">

<div class="first">
<img src="COVID-Icon.png" alt="" srcset="">
</div>

<div class="second">
<div class="sfirst">
<h1>CovidCare</h1>
<p>Stay Home & Safe</p>
</div>
</div>

<div class="third">
<div class="social">
<img src="iconfinder_5296499_fb_facebook_facebook logo_icon.svg" alt="" srcset="">
<img src="iconfinder_834708_twitter_icon.svg" alt="" srcset="">
<img src="iconfinder_107178_circle_linkedin_icon.svg" alt="" srcset="">
<img src="iconfinder_6636566_instagram_social media_social network_icon.svg" alt="" srcset="">
</div>
</div>
</div>
<div class="copyright">
    <p><b>CovidHelp System</b> is Developed by Prateek Bajpai @ 2021</p>
</div>
</div>


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