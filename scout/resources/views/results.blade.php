<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137447568-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-137447568-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SCOUT Results Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <style>
  		.slidecontainer {
  		  width: 100px; /* Width of the outside container */
  		}

  		.slider {
  		  -webkit-appearance: none;  /* Override default CSS styles */
  		  appearance: none;
  		  width: 100%; /* Full-width */
  		  height: 15px; /* Specified height */
  		  background: #d3d3d3; /* Grey background */
  		  /*outline: 1px solid gray;*/
  		  border-radius: 30px;
  		  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  		  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  		  transition: opacity .2s;
  		}

  		.slider:hover {
  		  opacity: 1; /* Fully shown on mouse-over */
  		}

  		.slider::-webkit-slider-thumb {
  		  -webkit-appearance: none; /* Override default look */
  		  appearance: none;
  		  width: 20px; /* Set a specific slider handle width */
  		  height: 20px; /* Slider handle height */
  		  border-radius: 30px;
  		  background: #4CAF50; /* Green background */
  		  cursor: pointer; /* Cursor on hover */
  		}

  		.slider::-moz-range-thumb {
  		  width: 25px; /* Set a specific slider handle width */
  		  height: 25px; /* Slider handle height */
  		  background: #4CAF50; /* Green background */
  		  cursor: pointer; /* Cursor on hover */
      }

      .float-left
      {
        float: left;
      }

      #results
      {
        padding-top: 2%;
        height: 500px;
      }

      .pic
      {
        width: 100%;
        height: 100%;
        overflow: hidden;
      }

      .checked
      {
        color: #7CBD1E;
      }

      .float-right
      {
        float: right;
      }

      .gray
      {
        background-color: #F3F6F7;
        padding: 20px 20px;
        margin-bottom: 2rem;
        border-radius: 0.2rem;
      }

      .white
      {
        background-color: #FFF;
        padding: 20px 20px;
        margin-bottom: 2rem;
        border-radius: 0.2rem;
      }

      .map-img
      {
        width: 100%;
      }

      #details
      {
        overflow: auto;
      }
  </style>

  </head>
  <body>

  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

       <a href="homepage.html"><img src="img/scoutwhite.png" style="width:8rem;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="results.html">Listings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="management_companies.html">Management</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">
      <div id="search-bar" style="margin-bottom: 2%;">
      <form action="index.php" method="get">
      <input class="form-control" type="text" placeholder="What are you looking for? Ex: Ellendale Place" aria-label="Search" name="search" value="{{$search}}">
      <button type="submit" class="btn btn-primary btn-lg">Find</button>
      </form>
      </div>

      <div>

        <!-- Filters -->
        <div id="filters">
          <h2>Filters</h2>

          <hr>

          <div class="btn-group">
            <button id="amenities" class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Amenities
            </button>
            <div class="dropdown-menu amenities-menu">
              <a class="dropdown-item" href="#">Parking</a>
              <a class="dropdown-item" href="#">Gated Community</a>
              <a class="dropdown-item" href="#">Furnished</a>
              <a class="dropdown-item" href="#">Shared Laundry</a>
              <a class="dropdown-item" href="#">In-Unit Laundry</a>
              <a class="dropdown-item" href="#">Wi-Fi/Cable</a>
              <a class="dropdown-item" href="#">Gym</a>
            </div>
          </div>

          <div class="btn-group">
            <button id="price" class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Price Per Month
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">
                <div class="slidecontainer">
                		<input type="range" min="$1" max="$5000" value="50" class="slider" id="myRange">
              	</div></a>
            </div>
          </div>

          <div class="btn-group">
            <button id="occupancy" class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Occupancy
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">
                <div class="slidecontainer">
                    <input type="range" min="1" max="6" value="50" class="slider" id="myRange">
                </div></a>
            </div>
          </div>

          <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Duration
            </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">
                  <div class="slidecontainer">
                      <input type="range" min="1" max="12" value="50" class="slider" id="myRange">
                  </div></a>
              </div>
            </div>


          <div class="btn-group">
            <button id="space" class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Space Type
            </button>
            <div class="dropdown-menu space-menu">
              <a class="dropdown-item" href="#">Studio</a>
              <a class="dropdown-item" href="#">1 BR</a>
              <a class="dropdown-item" href="#">2 BR</a>
              <a class="dropdown-item" href="#">3 BR</a>
              <a class="dropdown-item" href="#">4 BR</a>
              <a class="dropdown-item" href="#">5 BR</a>
              <a class="dropdown-item" href="#">6 BR</a>
            </div>
          </div>

          <div class="btn-group">
            <button id="management" class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Management
            </button>
            <div class="dropdown-menu management-menu">
              <a class="dropdown-item" href="#">First Choice Housing</a>
              <a class="dropdown-item" href="#">StuHo</a>
              <a class="dropdown-item" href="#">Mosaic Housing</a>
              <a class="dropdown-item" href="#">GF Property Group</a>
            </div>
          </div>

          <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Distance
            </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">
                  <div class="slidecontainer">
                      <input type="range" min="0" max="25" value="50" class="slider" id="myRange">
                  </div></a>
              </div>
            </div>
          </div>
        </div>
          <br>

          <div id="refresh">
            <a href="results.html"><button class="btn btn-primary btn-sm btn-sm-refresh" type="button">Refresh</button></a>

            <p>
            <br>
            <h2>Results for "One Bedroom Apartment"</h2>
            <p>4 of 25</p>
            <hr>
        </div>

        <div id="results" class="row">
          <div id="details" class="col-7">
          <!-- <div class="row jumbotron my-0"> -->
          <div class="row my-0 gray">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="img-the-centurion/centurion1.jpg" class="pic">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
              <a href="single-listing-centurion.html"><h5>The Centurion</h5></a>
              <p class="light-gray-text figure-caption">1248 W Adams Blvd, Los Angeles, CA 90007</p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Price: <span class="figure-caption"> $1,000-2,000</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Duration: <span class="figure-caption"> 6-12 Months</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Space Type: <span class="figure-caption"> 2BR2BA</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Management: <span class="figure-caption"> First Choice Housing</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Contact: <span class="figure-caption"> firstchoice@gmail.com</span></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="float-right">
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star">&#9733;</span>
              </div>
              <br>
              <p class="light-gray-text float-right">0.75 miles from USC</p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <p class="light-gray-text float-right">10/200 Left</p>
            </div>
          </div>

          <div class="row my-0 white">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="img-the-pad/pad1.jpg" class="pic">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
              <a href="single-listing.html"><h5>The Pad</h5></a>
              <p class="light-gray-text figure-caption">805 W 30th Street, Los Angeles, CA 90007</p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Price: <span class="figure-caption"> $2,000-4,000</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Duration: <span class="figure-caption"> 6-24 Months</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Space Type: <span class="figure-caption"> 2BR2BA</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Management: <span class="figure-caption"> First Choice Housing</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Contact: <span class="figure-caption"> firstchoice@gmail.com</span></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="float-right">
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star">&#9733;</span>
              </div>
              <br>
              <p class="light-gray-text float-right">1.75 miles from USC</p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <p class="light-gray-text float-right">1/2 Left</p>
            </div>
          </div>

          <div class="row my-0 gray">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="img-gateway/gateway1.jpeg" class="pic">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
              <a href="single-listing-gateway.html"><h5>University Gateway</h5></a>
              <p class="light-gray-text figure-caption">200 S Figueroa Street, Los Angeles, CA 90007</p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Price: <span class="figure-caption"> $600-1,200</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Duration: <span class="figure-caption"> 9-12 Months</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Space Type: <span class="figure-caption"> 3BR2BA</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Management: <span class="figure-caption"> University Gateway</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Contact: <span class="figure-caption"> info@livewithgw.com</span></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="float-right">
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star">&#9733;</span>
              </div>
              <br>
              <p class="light-gray-text float-right">0.75 miles from USC</p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <p class="light-gray-text float-right">10/200 Left</p>
            </div>
          </div>

          <div class="row my-0 white">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="img-chez-ronne/chezronne1.jpg" class="pic">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
              <a href="single-listing-chez.html"><h5>Chez Ronne</h5></a>
              <p class="light-gray-text figure-caption">235 28th Street, Los Angeles, CA 90007</p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Price: <span class="figure-caption"> $1,000-2,200</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Duration: <span class="figure-caption"> 12-20 Months</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Space Type: <span class="figure-caption"> 2BR1BA</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Management: <span class="figure-caption"> Shrine Housing</span> </p>
              <p class="" style="color: #7CBD1E; line-height: 0.25;">Contact: <span class="figure-caption"> leasing@shrineplace.com</span></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="float-right">
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star checked">&#9733;</span>
                <span class="star">&#9733;</span>
              </div>
              <br>
              <p class="light-gray-text float-right">0.75 miles from USC</p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <p class="light-gray-text float-right">10/200 Left</p>
            </div>
          </div>

          </div> <!-- end details -->


          <div id="map" class="col-5">
            <img class="map-img" src="img-results/map.png" alt="">
          </div>

        </div> <!-- end results -->




    </div>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>

   $(document).ready(function(){
            $(".amenities-menu a").click(function(){
            $("#amenities").text($(this).text());
            });
        });


 $(document).ready(function(){
            $(".space-menu a").click(function(){
            $("#space").text($(this).text());
            });
        });


 $(document).ready(function(){
            $(".management-menu a").click(function(){
            $("#management").text($(this).text());
            });
        });


  </script>

  </body>
</html>
