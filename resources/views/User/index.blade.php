@extends('Template.templatehome')
@section('content')
@parent
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h3>
                Hallo !<br>
              </h3>
              <h2 style="font-weight: bold;">
                I'm Deni Saputra<br>
              </h2>
              <p>
              I'm IT Enthusiast and I'm Devops Engineer and freelance web and application developer, if you are interested in talking more, contact me by clicking the button below
              </p>
              <a href="" class="" data-toggle="modal" data-target="#exampleModal" >
                Contact Me
              </a>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-box">
                        <img src="images/foto2.jpeg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/foto2.jpeg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/foto2.jpeg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
    </div>

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          My Experience
        </h2>
        <img src="images/plug.png" alt="">
      </div>

      <div class="service_container">
        <div class="box">
          <div class="img-box">
            <img src="images/software.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Web Development
            </h5>
            <p>
            Build websites for those who have high flexibility in using applications anytime and anywhere
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/IoT.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Internet Of Things
            </h5>
            <p>
            Build IoT for those who want to manage data sensor-based 
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/windows.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Windows Application
            </h5>
            <p>
            Build windows application those who want to manage data in a structured manner without having to be connected to the internet
            </p>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="images/monitoring.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Server Monitoring
            </h5>
            <p>
            Provisioning monitoring service, will monitor your server 24x7 and will provide reports regarding the usage of the server
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/appss.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Application Support
            </h5>
            <p>
            Troubleshooting the software applications a company uses and ensuring that everything goes as desired
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Me
              </h2>
              <img src="images/plug.png" alt="">
            </div>
            <p>
            I am a graduate of computer engineering from Telkom University, 
            currently I work full time as a devops engineer at CBNCloud, 
            I have a high interest in current technological developments.
            </p>
            <a href="/about">
              My Skill
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/foto.jpeg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/foto3.jpeg" alt="" />
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- end about section -->
<!-- modal -->

<div class="modal fade" style="top: 20%;"id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="wa" class="col-form-label">Whatsapp :</label><br>
            <label for="numb" class="col-form-label">082124914002</label>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label><br>
            <label for="message-text" class="col-form-label">contact@dnsptra.my.id</label>
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection