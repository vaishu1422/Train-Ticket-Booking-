<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Train Ticket Booking</title>
</head>
<style>
    /* Your CSS styles here */
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'poppins',sans-serif;
    }
    
    .hero{
        width:100%;
        height:100vh;
        background-image:linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
        position:relative;
        padding:0 5%;
        display:flex;
        align-items:center;
        justify-content:center;
        
    }
    nav{
        width:100%;
        position:absolute;
        top:0;
        left:0;
        padding:20px 8%;
        display:flex;
        align-items:center;
        justify-content: start;
        background-color: #131212;
    }
    nav ul li{
        list-style:none;
        display:inline-block;
        margin-left:100px;
       
        
    }
    nav ul li a{
        text-decoration:none;
        color:#fff;
        font-size: 17px;
    }
    .content{
        text-align:center;
        
    }
    .content h1{
        font-size:100px;
        color:#fff;
        font-family: 600;
    }
    .content a{
        text-decoration: none;
        display:inline-block;
        color:#fff;
        font-size:24px;
        border:2px solid #fff;
        padding:14px 70px;
        border-radius:50px;
        margin-top:20px;
    }
    .background-clip{
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
    } 
    .contact{
    overflow: hidden;
    margin-bottom: 100px;
    background-color: #a1c2f5;
}
.contact-info h2{
    font-size: 35px;
    font-weight: 800;
    letter-spacing: -1.5px;
}
form input,form textarea{
    display: block;
    width: 100%;
    outline: none;
    margin-bottom: 30px;
    padding: 15px;
    transition: all 0.3s ease;
}
form input:focus,form textarea:focus{
    
    border-color:  black;
  
}
form button{
    width: 100%;
    border: none;
    background-color: black;
    color: white;
    outline: none;
    font-size: 23px;
    letter-spacing: -0.5px;
    padding: 10px 0;
    border-radius: 8px;
    transition: all 0.3s ease;
}
form button:hover{
    background-color: red;
}
.contcat-map h2{
    font-size: 35px;
    font-weight: 800;
    letter-spacing: -1.5px;
}
.contcat-map p{
    font-size: 18px;
    font-weight: 500;
    color: gray;
}
.contcat-map h5{
    font-size: 18px;
    font-weight: 500;
    color: gray;}
.contcat-map p i{
    color: red;
}
iframe{
    width: 431px;
    height: 351px;
}
/* Additional CSS for dropdown menu */
.profile-dropdown {
        position: relative;
    }

    .profile-dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        z-index: 1;
        right: 0;
    }

    .profile-dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .profile-dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .profile-dropdown:hover .profile-dropdown-content {
        display: block;
    }
    .logo {
    width: 70px; /* Adjust width as needed */
    height: 70px; /* Maintain aspect ratio */
    margin-right: 20px; /* Add some spacing between the logo and navigation links */
}

  


    @media (min-width: 994px) {
        /* For mobile phones: */
        .addtion-r::after{
            content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 1px;
        height: 93%;
        background-color: #131212;
            
        }
      }

    
        
</style>
<body>
<div class="hero">
    <video controls autoplay loop muted plays-inline height="830" width="1500" class="background-clip">
        <source src="pexels_videos_2642258 (2160p).mp4" type="video/mp4">
    </video>

    <nav>
    <img src="logo.jpeg" class="logo">
        <!--img src= "" class="logo"-->
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="weath.html">Weather</a></li>
            <li><a href="tourism.html">Tourism</a></li>
            <li><a href="contactus.html">Contact us</a></li>
            <li><a href="map.html">Map</a></li>
            <li><a href="login_form.php" >Login</a></li>
            

            
        </ul>
    </nav>
    <div class="content">
        <h1>Make your<br> reservation </h1>
        
    </div>
</div>

<!-- Rest of your HTML content -->
<br>
    <br>
    <br>
    <br>
    <div class="container marketing"  >

        
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
    
        <div class="row featurette" style=" background-color: rgb(216, 182, 230);
        ">
          <div class="col-md-7">
            <h2 class="featurette-heading">How will Vande Bharat sleeper train be better than the Rajdhani Express?<span class="text-muted"></span></h2>
            <p class="lead">Vande Bharat trains at higher speeds: Railway Minister Ashwini Vaishnaw informed the
              Lok Sabha on Wednesday that safety fencing will be installed at vulnerable locations for
              Vande Bharat trains to operate at speeds between 110 kmph and 130 kmph. Additionally,
              safety fencing will be implemented along the entire track for speeds exceeding 130
              kmph.
              Vande Bharat is a semi-high speed train service capable of hitting speeds of up to 160
              kmph.</p>
                <p><a class="btn btn-secondary" href="https://timesofindia.indiatimes.com/business/india-business/vande-bharat-express-what-indian-railways-plans-to-do-to-run-new-trains-at-higher-speeds/articleshow/106172563.cms" role="button">View details »</a></p>
              </div>
          <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350" height="350" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
              <title>Image Placeholder</title>
              <rect width="100%" height="100%" fill="#eee"></rect>
              <image href="images.jpg"width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
            
            
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette" style=" background-color: rgb(242, 196, 236);
        ">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Passenger bookings on railways still 18% below pre-Covid levels<span class="text-muted"> </span></h2>
            <p class="lead">It has been more than two years since the last wave of Covid-19, but passenger
              bookings on Indian railways have not yet reached pre-pandemic levels. The first six
              months of the ongoing financial year, March to September, saw 3,430 million passenger
              bookings, lower by 744 million or about 18% than the 4,174 million bookings for the
              corresponding period in 2019-20, the financial year that preceded the pandemic.
              The decline is across both major categories of passenger traffic - suburban and nonsuburban.</p>
            <p><a class="btn btn-secondary" href="https://timesofindia.indiatimes.com/india/passenger-bookings-on-railways-still-18-below-pre-covid-levels/articleshow/106525064.cms" role="button">View details »</a></p>
          </div>
          <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350" height="350" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
              <title>Image Placeholder</title>
              <rect width="100%" height="100%" fill="#eee"></rect>
              <image href="106525087.webp"width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette" style=" background-color: rgb(219, 206, 225);
        ">
          <div class="col-md-7">
            <h2 class="featurette-heading">What is Amrit Bharat Express? Exclusive sneak peek into Indian Railways’ new train with sleeper, unreserved general coaches for aam aadmi<span class="text-muted"></span></h2>
            <p class="lead">Amrit Bharat Express is Indian Railways new 'luxury' offering to make train travel more
              comfortable and faster for the aam aadmi. Set to be flagged off by PM Narendra Modi on
              December 30, the new Amrit Bharat Express is a push-pull train with 130 kmph speed
              potential that is expected to particularly benefit migrant labour force.
              Amrit Bharat Express, earlier being called Vande Sadharan, has Vande Bharat style
              aerodynamically designed locomotives in terms of looks.</p>
                <p><a class="btn btn-secondary" href="https://timesofindia.indiatimes.com/business/india-business/amrit-bharat-express-pm-modi-flag-off-malda-bengaluru-ayodhya-darbhanga-new-train-images/articleshow/106267309.cm" role="button">View details »</a></p>
          </div>
          <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350" height="350" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
              <title>Image Placeholder</title>
              <rect width="100%" height="100%" fill="#eee"></rect>
              <image href="106267491.webp"width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
            
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div>
    <br>
    <br>
    
        
    

    
    <section><h2>Frequently asked Questions</h2>
      
    <div class="alert alert-primary" role="alert">
        <details><summary>How this website can help you?</summary><p>By using wesbite one can book , cancel, upadate their tickets for train . They can also watch their booking history.</p></details>
      </div>
      <div class="alert alert-secondary" role="alert">
        <details><summary>What makes this website Different from other ticket booking website?</summary><p>By using wesbite one can book , cancel, upadate their tickets for train . They can also watch their booking history.</p></details>
      </div>
    
      <div class="alert alert-success" role="alert">
        <details><summary>How to login in this website?</summary><p>By using wesbite one can book , cancel, upadate their tickets for train . They can also watch their booking history.</p></details>
      </div>
    
      <div class="alert alert-danger" role="alert">
        <details><summary>For whom this website is for?</summary><p>By using wesbite one can book , cancel, upadate their tickets for train . They can also watch their booking history.</p></details>
      </div>
  
    
    
    </section>
   
      <br>
      <br>
      <div class="contact" id="contact">

        <div class="container">
          <div class="row">
      
               <div class="ml-auto col-lg-5 col-md-6 col-12 contact-info">
                   <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>
      
                   <form action="https://api.web3forms.com/submit" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                    <input type="hidden" name="access_key" value="01d54a6a-ecb3-4328-bf5c-77b55ddc3a37">
  
                    <input type="text" class="" name="cf-name" placeholder="Name">
      
                       <input type="email" class="" name="cf-email" placeholder="Email">
      
                       <textarea class="" rows="5" name="cf-message" placeholder="Message"></textarea>
      
                       <button type="submit" class="" id="submit-button" name="submit">Send Message</button>
                   </form>
               </div>
      
               <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12 contcat-map">
                   <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>
      
                   <p data-aos="fade-up" data-aos-delay="800"> contact-number: 9341535194 , 878961085 , 7217537033 </p>
                   <h5 data-aos="fade-up" data-aos-delay="800">Email: vaishnavi14227@gmail.com , k07jaya@gmail.com , vineetadwivedi208@gmail.com</h5>
                   <br>
                   <div class="social">
                  
                    <a href=""><i class="fab fa-facebook-f" data-aos="fade-up" data-aos-delay="800"></i></a>
                    <a href=""> <i class="fab fa-instagram" data-aos="fade-up" data-aos-delay="800"></i></a>
                    <i class="fab fa-twitter" data-aos="fade-up" data-aos-delay="800"> </i>
                   
                   </div>
      
               </div>
               
          </div>
      </div>
      </div>
      
    
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJ
</body>
</html>
