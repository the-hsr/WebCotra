<?php
    include "fetch.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="./photos/logo1.png" type="image/icon type">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>CoT</title>

    <style>
        .transparent{
            box-shadow: 0 0 black;
        }
    </style>
</head>
<body>
<script>
  AOS.init();
</script>


    <div id="scroll-bar"></div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="material-icons">arrow_upward</i></button>

    <div id="particles-js"></div>
    
    <!-- Main -->
    <div class="cot">

    <!-- NavBar -->
    <nav class="N/A transparent">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="./photos/logo1.png" alt="CoTra" class="logo" title="Cotra"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="./user/dashboard.php"  ><i class="material-icons">account_box</i></a></li>
                <!-- <li><a href="#" >Login</a></li>
                <li><a href="#" >Feedback</a></li> -->
            </ul>
        </div>
    </nav>

    <!-- Title Page -->

    <div class="row title">
        <span class="col s12 center">
            <p class="title-main" data-aos="fade-up">CoTra</p>
            <p class="title-sub" data-aos="fade-up">An opensource tool to view the details of Covid worldwide.</p>
        </span>
    </div>
    <a href="#cov">
    <div class="arrow bounce">
        <i class="medium material-icons">arrow_downward</i>
    </div>
    </a>

    <!-- Covid Information -->

    <div id="cov" class="row cov">
        <p class="center section-title" data-aos="fade-up-right">What is Covid-19?</p>
        <div class="col s10 offset-s1" data-aos="fade-up-left">
            <p class="center card cov-p">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

            Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

            The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

            The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
            
        </p>
        </div>
    </div>

    <!-- Prevention -->

    <div class="row prevent">
        <p class="center section-title" data-aos="zoom-in-up">How to prevent Covid-19?</p>
        <div class="col s10 offset-s1 card cov-p" data-aos="zoom-in">
            <p class="center">
            To prevent infection and to slow transmission of COVID-19, do the following:
        </p>
                <ul>
                    <li>--> Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>
                    <li>--> Maintain at least 1 metre distance between you and people coughing or sneezing.</li>
                    <li>--> If you have a fever, cough and difficulty breathing, seek medical attention.</li>
                    <li>--> Avoid touching your face.</li>
                    <li>--> Cover your mouth and nose when coughing or sneezing.</li>
                    <li>--> Stay home if you feel unwell.</li>
                    <li>--> Refrain from smoking and other activities that weaken the lungs.</li>
                    <li>--> Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li>
                </ul>
        </div>
    </div>
    
    <!-- Symptoms -->

    <div class="row symptom">
        <p class="center section-title" data-aos="zoom-in-up">What are the symptoms?</p>
        <div class="col s10 offset-s1 card cov-p" data-aos="zoom-in">
            <p class="center">
            COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.
            </p>
            <div class="col s5">
                Most common symptoms:
                <ul>
                    <li>--> fever.</li>
                    <li>--> dry cough.</li>
                    <li>--> tiredness.</li>
                </ul>
                Less common symptoms:
                <ul>
                    <li>--> aches and pains.</li>
                    <li>--> sore throat.</li>
                    <li>--> diarrhoea.</li>
                    <li>--> conjunctivitis.</li>
                    <li>--> headache.</li>
                    <li>--> loss of taste or smell.</li>
                    <li>--> a rash on skin, or discolouration of fingers or toes.</li>
                </ul>
            </div>
            <div class="col s5">
            Serious symptoms:
            <ul>
                <li>--> difficulty breathing or shortness of breath.</li>
                <li>--> chest pain or pressure.</li>
                <li>--> loss of speech or movement.</li>
            </ul>
            Seek immediate medical attention if you have serious symptoms.  Always call before visiting your doctor or health facility. 

            People with mild symptoms who are otherwise healthy should manage their symptoms at home. 

            On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days. 
            </div>
        </div>
    </div>

<!-- Factual -->

    <div class="row slide">
        <p class="center section-title" data-aos="zoom-in-up">Factual</p>
        <div class="slideshow-container" data-aos="zoom-in">

            <div class="mySlides fade">
            <img src="carousel-facts/img-t.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="carousel-facts/im7.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="carousel-facts/img3.png" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="carousel-facts/img4.png" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="carousel-facts/img5.png" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="carousel-facts/img6.png" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="carousel-facts/im1.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div> 
        
    </div>

    <!-- Video  -->

    <div class="row display">
        <p class="center section-title" data-aos="zoom-in-up">Virus Transmission Leading to Covid-19</p>
        <div class="col s8 offset-s3">
        <iframe width="700" height="345" src="https://www.youtube.com/embed/PSnSo9kYlH4?autoplay=1&mute=1">
</iframe>
        </div>
    </div>

    <!-- Overall -->
            
    <div class="row overall">
        <p class="center section-title" data-aos="zoom-in-up">Worldwide Data</p>
        
        <div class="col s4" data-aos="fade-right">
            <div class="center total w-data card">
                <p>Total Confirmed Cases</p>
                <small><?php echo $total;?></small>

            </div>
        </div>
        <div class="col s4" data-aos="zoom-in-up">
            <div class="center recovered w-data card">
                <p>Total Recovered Cases</p>
                <small><?php echo $recovered;?></small>           
            </div>
        </div>
        <div class="col s4"data-aos="fade-left">
            <div class="center deceased w-data card">
                <p>Total Deceased Cases</p>
                <small><?php echo $death;?></small>           
            </div>
        </div>
    </div>

    <!-- Categories -->

    <div class="row categories">

        <p class="center section-title" data-aos="zoom-in-up">Analytical Data</p>

        <div class="col s3" data-aos="flip-left">
            <a href="#no_covid" class="modal-trigger">
                <div class="center c-data w-data card #c2185b pink darken-2">
                    Countries with no covid cases
                </div>
            </a>
        </div>

        <div class="col s5" data-aos="flip-up">
            <a href="#top10" class="modal-trigger">
                <div class="center c-data w-data card #7b1fa2 purple darken-2">
                    Top 10 Covid-19 Pandemic affected countries
                </div>
            </a>
        </div>

        <div class="col s4" data-aos="flip-right">
            <a href="#toprec" class="modal-trigger">
                <div class="center c-data w-data card #1976d2 blue darken-2">
                    Top Recovered Countries
                </div>
            </a>
        </div>

        <div class="col s4" data-aos="flip-left">
            <a href="#topdeath" class="modal-trigger">
                <div class="center c-data w-data card #00796b teal darken-2">
                    Countries with highest deaths due to Covid-19
                </div>
            </a>
        </div>

        <div class="col s4" data-aos="flip-up">
            <a href="#indtop10" class="modal-trigger">
                <div class="center c-data w-data card #d32f2f red darken-2">
                    INDIA : Top Covid-19 affected states
                </div>
            </a>
        </div>

        <div class="col s4" data-aos="flip-right">
            <a href="#graph" class="modal-trigger">
                <div class="center c-data w-data card #616161 grey darken-2">
                    GRAPHS DERIVED FROM STATISTICAL DATA (IN)
                </div>
            </a>
        </div>
    
    
    </div>



<!-- No covid -->
  <div id="no_covid" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>Coronavirus has been labelled a pandemic but a handful of countries have not yet reported any cases. According to data compiled by Johns Hopkins University, more than 29 million people have been infected, and the global death toll is at least 924,000. More than 19.6 million patients have recovered.</h5>
      <p>Here are a few countries that have not reported any cases of the coronavirus so far:</p>
      <ul>
        <?php foreach($no_covid as $value): ?>
          <li class="green card">--> <?php echo $value; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div>
  </div>

  <!-- Top10 covid -->

  <div id="top10" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>USA has most confirmed cases in world. Here is a list of the most affected countries</h5>
      <p>Data as on 26th Oct' 2020</p>
      <table class="responsive-table">
        <thead>
          <tr>
              <th>Country</th>
              <th>Total Cases</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach($top10 as $key=>$value): ?>
          <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div>
  </div>

  <!-- Top recovery -->

  <div id="toprec" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>India has the highest recovery rate with 90%</h5>
      <table class="responsive-table">
        <thead>
          <tr>
              <th>Country</th>
              <th>Recovered Cases</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach($toprec as $key=>$value): ?>
          <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div>
  </div>

  <!-- Top deaths -->
  <div id="topdeath" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>USA has suffered most number of deaths due to covid-19 </h5>
      <table class="responsive-table highlight">
        <thead>
          <tr>
              <th>Country</th>
              <th>Recovered Cases</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach($topdeath as $key=>$value): ?>
          <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div>
  </div>

  <!-- Ind top 10 -->

  <div id="indtop10" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>Maharashtra is on top with 21% to the overall cases. </h5>
      <table class="responsive-table highlight">
        <thead>
          <tr>
              <th>State</th>
              <th>Total cases</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach($indtop10 as $key=>$value): ?>
          <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div>
  </div>

  <!-- Graphs -->

  <div id="graph" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>Graph based on statistical data </h5>
      <img src="./photos/total.png" alt="" title="Total Cases in India" height="400px">
      <img src="./photos/active.png" alt="" title="Active Cases in India" height="400px">
      <img src="./photos/death.png" alt="" title="Death Cases in India" height="400px">


    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div>
  </div>




  
    
        
    </div>

        <script>
            $(function() {
  
  $(document).on('scroll resize', function() {
    
    var $d = $(document),
        $w = $(window);
    
    $('div#scroll-bar').width(
      ($d.scrollTop() / ($d.height() - $w.height()) * $d.height())/52 + '%'
    );
    
  });
 
});
        </script>

    <!-- Modal -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.modal').modal();
    });
  </script>
    
      
    
    <!-- Carousel Script -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>

        <script>
        mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
        </script>
    
    <script type="text/javascript" src="particles.js"></script>
    
    <script type="text/javascript" src="app.js"></script>
    
</body>
</html>

// https://www.who.int/health-topics/coronavirus#tab=tab_1
// https://www.who.int/health-topics/coronavirus#tab=tab_2
// https://www.who.int/health-topics/coronavirus#tab=tab_3
// https://www.aljazeera.com/news/2020/09/14/which-countries-have-not-reported-any-coronavirus-cases/
// https://www.worldometers.info/coronavirus/#countries
//https://www.worldometers.info/coronavirus/
//https://tradingeconomics.com/country-list/coronavirus-recovered
//https://covidindia.org/