@extends('layout.app')

@section('content')
<section class="mt-5">
    <div class="container-fluid mt-5">
      <div class="row m-auto mx-5">
        <div class="col-6 m-auto">
          <h1 class="m-auto">About Us</h1>
        </div>
        <div class="col-6">
          <img src="image/bendera.png" width="100%" height="100%" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="wave container-fluid m-auto py-5">
      <div class="row m-auto mx-5 pt-5">
        <div class="col-6 m-auto pt-5 mt-5">
          <h1 class="m-auto mt-5">Our Mission</h1>
          <p>Isinya adalah penjelasan & pemaparan dari visi dan misi</p>
        </div>
        <div class="col-6 m-auto pt-5 mt-5">
          <p class="mt-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
          </p>
        </div>
      </div>

      <div class="row m-auto mx-5 pt-5">
        <div class="col-4 m-auto">
          <p style="font-weight: bold; color: black">Lorem Ipsum Dumet</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
        <div class="col-4 m-auto">
          <p style="font-weight: bold; color: black">Lorem Ipsum Dumet</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
        <div class="col-4 m-auto">
          <p style="font-weight: bold; color: black">Lorem Ipsum Dumet</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid m-auto">
      <div class="row mx-5 mt-5">
        <div class="col-12 m-auto">
          <h1>Why Choose Us</h1>
        </div>
      </div>

      <div class="row mx-5 mt-2">
          <div class="col-6 m-auto mt-3">
              <img src="image/shield.png" alt="" width="60" height="60"/>
              <p style="text-align: center; display: inline; margin-left: 10px;">Secure</p>
              <div class="mx-5 ps-4 mt-2 m-auto">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
          </div>
          <div class="col-6 m-auto mt-3">
              <img src="image/hand.png" alt="" width="60" height="60"/>
              <p style="text-align: center; display: inline; margin-left: 10px;">Valueable</p>
              <div class="mx-5 ps-4 mt-2 m-auto">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
          </div>
          <div class="col-6 m-auto my-5">
              <img src="image/deal.png" alt="" width="60" height="60"/>
              <p style="text-align: center; display: inline; margin-left: 10px;">Trusted</p>
              <div class="mx-5 ps-4 mt-2 m-auto">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
          </div>
          <div class="col-6 m-auto my-5">
              <img src="image/data.png" alt="" width="60" height="60"/>
              <p style="text-align: center; display: inline; margin-left: 10px;">Manageable</p>
              <div class="mx-5 ps-4 mt-2 m-auto">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
          </div>
    </div>
  </section>

  <section>
      <div class="container-fluid">
        <h1 class="mt-5 text-center">Our Team</h1>
        <div class="row mx-5 mt-5">
          <div class="col">
            <img src="image/brown.png" alt="...">
                <h5>Valerie Agatha</h5>
                <p>HR Consultant</p>
          </div>
          <div class="col">
            <img src="image/brownsilver.png" alt="...">
                <h5>Charlie</h5>
                <p>HR Consultant</p>
          </div>
          <div class="col">
            <img src="image/brownoptik.png" alt="...">
                <h5>Edward Hellen</h5>
                <p>HR Consultant</p>
          </div>
          <div class="col  mt-5">
            <img src="image/brown.png" alt="...">
                <h5>Valerie Agatha</h5>
                <p>HR Consultant</p>
          </div>
          <div class="col mt-5">
            <img src="image/brownsilver.png" alt="...">
                <h5>Charlie</h5>
                <p>HR Consultant</p>
          </div>
          <div class="col mt-5">
            <img src="image/brownoptik.png" alt="...">
                <h5>Edward Hellen</h5>
                <p>HR Consultant</p>
          </div>
        </div>
      </div>
  </section>
@endsection