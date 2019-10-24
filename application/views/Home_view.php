<?php $this->load->view('header');?>
<style>
.parallex-jobs{
background-image: url("https://elevatenewyork.org/wp-content/uploads/2017/12/boy_sitting.png");
/* Set a specific height */
min-height: 500px;
/* Create the parallax scrolling effect */
background-attachment: fixed;
background-position: left;
background-repeat: no-repeat;
background-size: auto;
}.caption span.border {
background-color: #111;
color: #fff;
padding: 18px;
font-size: 25px;
letter-spacing: 10px;
}
</style>
<div class="container-fluid" >
  <div id="img_slider" class="carousel slide w3-card " style="margin-top:100px" data-ride="carousel">
    <ul class="carousel-indicators w3-text-orange">
      <li data-target="#img_slider" data-slide-to="0" class="active"></li>
      <li data-target="#img_slider" data-slide-to="1"></li>
      <li data-target="#img_slider" data-slide-to="2"></li>
      <li data-target="#img_slider" data-slide-to="3"></li>
      <li data-target="#img_slider" data-slide-to="4"></li>
      <li data-target="#img_slider" data-slide-to="5"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item  active">
        
        <div class="row">
          <div class="col-sm-6">
            <div class="w3-container w3-animate-top">
              <h1 class="w3-opacity text-uppercase"><b>YOUR JOBS</b></h1>
              <h1 class="w3-text-orange size-60" style="font-family:'Reenie Beanie', cursive;"><b>Local & International</b></h1>
              <h4>
              <li>Location Your Choice</li>
              <li>Remotely</li>
              <li>Part Time</li>
              <li>Full Time</li>
              </h4>
              
              <hr>
            </div>
          </div>
          <div class="col-sm-6">
            <img src="<?= base_url()?>assets/images/web_images/img3.png" alt="Los Angeles" height="400px">
          </div>
        </div>
        <div class="carousel-caption">
          
          <h2><a href="" class="w3-btn w3-orange">More Detail</a></h2>
        </div>
      </div>
      <div class="carousel-item">
        
        <div class="row">
          <div class="col-sm-6 ">
            <div class="w3-container">
              <h1 class="w3-opacity text-uppercase"><b>college & Carrier</b></h1>
              <h1 class="w3-text-orange size-60" style="font-family:'Reenie Beanie', cursive;"><b>The Next Step</b></h1>
              <h4>
              <li>Monitoring</li>
              <li>Long Term</li>
              </h4>
              
              <hr>
            </div>
          </div>
          <div class="col-sm-6">
            <img src="<?= base_url()?>assets/images/web_images/img2.png" alt="college&carrier" height="400px">
          </div>
        </div>
        <div class="carousel-caption">
          
          <h2><a href="" class="w3-btn w3-orange">More Detail</a></h2>
        </div>
      </div>
      <div class="carousel-item">
        
        <div class="row">
          <div class="col-sm-6">
            <div class="w3-container">
              <h1 class="w3-opacity text-uppercase"><b>International Scholorships</b></h1>
              <h1 class="w3-text-orange size-60" style="font-family:'Reenie Beanie', cursive;"><b>win the HEISMAN</b></h1>
              <h4>
              <li>Fully Funded</li>
              <li>Allonces</li>
              <li>Benefits</li>
              </h4>
              
              <hr>
            </div>
          </div>
          <div class="col-sm-6">
            <img src="<?= base_url()?>assets/images/web_images/img1.png" alt="Los Angeles" height="400px">
          </div>
        </div>
        <div class="carousel-caption">
          
          <h2><a href="" class="w3-btn w3-orange">More Detail</a></h2>
        </div>
      </div>
      <div class="carousel-item">
        
        <div class="row">
          <div class="col-sm-6">
            <div class="w3-container">
              <h1 class="w3-opacity text-uppercase"><b>mentoring</b></h1>
              <h1 class="w3-text-orange size-60" style="font-family:'Reenie Beanie', cursive;"><b>walking along side</b></h1>
              <h4>Monitoring</h4>
              <h4>Tracking</h4>
              <hr>
            </div>
          </div>
          <div class="col-sm-6">
            <img src="<?= base_url()?>assets/images/web_images/hikers.png" alt="Los Angeles" height="400px">
          </div>
        </div>
        <div class="carousel-caption">
          
          <h2><a href="" class="w3-btn w3-orange">More Detail</a></h2>
        </div>
      </div>
      
      
      
      
    </div>
    <a class="carousel-control-prev " href="#img_slider" data-slide="prev">
      <span class="carousel-control-prev-icon w3-orange"></span>
    </a>
    <a class="carousel-control-next" href="#img_slider" data-slide="next">
      <span class="carousel-control-next-icon w3-orange"></span>
    </a>
  </div>
</div>
<hr class="w3-orange">
<div class="container-fluid">
  <div class="w3-row">
    <h1  class="" align="center">Jobs & Scholarship</h1>
    <div class="w3-content w3-margin-top" style="max-width:100%;">
      <!-- The Grid -->
      <div class="w3-row-padding">
        
        <!-- Left Column -->
        <div class="w3-quarter">
          
          <div class="w3-white w3-text-grey w3-card-4">
            
            <div class="w3-container">
              
              
              <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Scholarships Filter</b></p>
              
              <p><label><i class="fa fa-calendar-check-o"></i> Check Programs</label></p>
              <select class="w3-select" name="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label><i class="fa fa-calendar-o"></i> Check In</label>
              <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
              <p><label><i class="fa fa-child"></i> Kids</label></p>
              <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
              <p><button class="w3-button w3-block w3-green w3-left-align" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button></p>
              <hr>
              
              
              <br>
            </div>
          </div><br>
          <!-- End Left Column -->
        </div>
        <!-- Right Column -->
        <div class="w3-threequarter ">
          
          <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>ScholarShips</h2>
            <div class="w3-container">
              <br>
              <br>
              
              <!-- FirstGrid -->
              <div class="w3-row-padding ">
                <div class="w3-row w3-card w3-margin-bottom">
                  <div class="w3-col s3 l3">
                    <img src="https://i.pinimg.com/originals/38/2a/e0/382ae06943d8413d3df92db1505c7c51.jpg" height="200px" width="250px" alt="">
                  </div>
                  <div class="w3-col s9 l9 ">
                    <div class="w3-row">
                      <h1>University of California</h1>
                      <div class="w3-col s6">
                        
                        <h1 class="fa fa-university">Harvard University </h1> <br>
                        <h1 class="fa fa-globe">International Student </h1> <br>
                        <h1 class="fa fa-map-marker">UK </h1>
                      </div>
                      <div class="w3-col s6">
                        <h1 class="fa fa-university">Fully Funded </h1> <br>
                        <h1 class="fa fa-globe">PHD </h1> <br>
                        <button class="w3-btn w3-orange fa fa-search"> More Info</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w3-row w3-card ">
                  <div class="w3-col s3 l3">
                    <img src="https://ak0.picdn.net/shutterstock/videos/1010219540/thumb/1.jpg" height="200px" width="250px" alt="">
                  </div>
                  <div class="w3-col s9 l9 ">
                    <h1>University of California</h1>
                    <span class="fa fa-university"></span>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            
          </div>
          
          <!-- End Right Column -->
        </div>
        
        <!-- End Grid -->
      </div>
      
      <!-- End Page Container -->
    </div>
  </div>
</div>
<div class="w3-container " >
  
  <div class="w3-row">
    
    <div class="w3-col s4 l4 parallex-jobs ">
      
    </div>
    <div class="w3-col s8 l8 caption  w3-margin-top" style="font-family:'Reenie Beanie', cursive;">
      <h1 class="w3-text-orange w3-wide size-60" style="font-family:'Reenie Beanie', cursive;"><b>NO WORRY ABOUT JOB</b></h1>
      <ul class="size-60">
        <li>World Wide Jobs</li>
        <li>Full Time Jobs</li>
        <li>Part Time Jobs</li>
        <li>Virtual Locatin Jobs</li>
      </ul>
    </div>
  </div>
</div>
<hr class="w3-orange">
<div class="container-fluid">
  <div class="w3-row">
    <h1  class="" align="center">Jobs & Scholarship</h1>
    <div class="w3-content w3-margin-top" style="max-width:100%;">
      <!-- The Grid -->
      <div class="w3-row-padding">
        
        <!-- Left Column -->
        <div class="w3-quarter">
          
          <div class="w3-white w3-text-grey w3-card-4">
            
            <div class="w3-container">
              
              
              <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Jobs Filter</b></p>
              
              <p><label><i class="fa fa-calendar-check-o"></i> Check Programs</label></p>
              <select class="w3-select" name="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label><i class="fa fa-calendar-o"></i> Check In</label>
              <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
              <p><label><i class="fa fa-child"></i> Kids</label></p>
              <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
              <p><button class="w3-button w3-block w3-green w3-left-align" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button></p>
              <hr>
              
              
              <br>
            </div>
          </div><br>
          <!-- End Left Column -->
        </div>
        <!-- Right Column -->
        <div class="w3-threequarter ">
          
          <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Jobs</h2>
            <div class="w3-container">
              <br>
              <br>
              
              <!-- FirstGrid -->
              <div class="w3-row-padding w3-grayscale">
                <div class="w3-col l3 m6 w3-margin-bottom">
                  
                  <h3>John Doe</h3>
                  <p class="w3-opacity">CEO & Founder</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                  <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom">
                  
                  <h3>Jane Doe</h3>
                  <p class="w3-opacity">Architect</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                  <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom">
                  
                  <h3>Mike Ross</h3>
                  <p class="w3-opacity">Architect</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                  <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom">
                  
                  <h3>Dan Star</h3>
                  <p class="w3-opacity">Architect</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                  <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
                </div>
              </div>
              <hr>
            </div>
            
          </div>
          
          <!-- End Right Column -->
        </div>
        
        <!-- End Grid -->
      </div>
      
      <!-- End Page Container -->
    </div>
  </div>
</div>
<?php $this->load->view('footer');?>