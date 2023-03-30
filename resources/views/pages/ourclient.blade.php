@extends('layout.app')


@section('content')
<section class="mt-5">
    <div class="container-fluid">
      <div class="row mx-5">
        <div class="col-6 m-auto ps-5">
          <h1>Our Client</h1>
          <p style="color: black">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
            type specimen
          </p>
        </div>
        <div class="col-6 m-auto">
          <img src="image/people star.png" alt="" width="100%" />
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5">
    <div class="bg-color container-fluid">
      <div class="row mx-5">
        <div class="col p-5">
          <img src="image/logoipsum.png" alt="" width="100%" />
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5">
    <div class="container-fluid">
      <div class="row mx-5">
        <div class="col m-auto mt-5">
          <h1>What they said</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br />industry. Lorem Ipsum has been</p>
        </div>
      </div>
      <div class="row mx-5">
        <div class="col mt-5">
          <div id="carouselExampleCaptions" class="carousel carousel-dark slide">
            <div class="carousel-inner">
              <img src="image/slide.png" class="content" alt="..." width="100%" />
              <div class="carousel-item active">
                <div class="col-6 ps-4 d-flex">
                  <img src="image/people.png" alt="" style="margin-top: 20px; margin-left: 15px" />
                  <h3 style="margin-top: 30px; margin-left: 30px; color: white">
                    Scarlet Witch <br /><span><p style="font-size: 20px; font-weight: normal">Human Resource Departement</p></span>
                  </h3>
                </div>
                <div class="col-6 mt-2">
                  <p class="ms-4 ps-3" style="color: white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been
                  </p>
                </div>
              </div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5">
    <div class="container-fluid">
      <div class="row mx-5">
        <img src="image/oke.png" alt="" width="100%" />
      </div>
    </div>
  </section>
  
@endsection