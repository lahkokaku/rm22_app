<x-layout>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <x-navbar></x-navbar>
    
    <div class="p-5" id="landing">
      <div class="container-fluid container p-5 shdaow-lg">
        <h1 class="display-5 fw-bold text-white">Indonesian Youth Olympics </h1>
        <p class="col-md-10 fs-4 text-white mb-4 text-justify">IYO (Indonesian Youth Olympics) is specifically designed to make it easier for participants which are primarily aimed at college students/high school students to find the type of competition they want according to their interests and can register easily.
        </p>
        <button class="btn btn-outline-light-blue" type="button">Find a Competition</button>
      </div>
    </div>

    <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 90vh;">
        <h1 class="display-5 fw-bold my-5 mx-auto col-12 text-center heading-primary">Why Indonesian Youth Olympics ?</h1>
        <div class="row">
      <div class="col-md-4">
        <div class="h-100 p-5 text-white bg-dark-blue rounded-3 text-justify">
          <h2>Faster</h2>
          <p>IYO is build using the latest technology in web development to ensure a smooth experience for you!</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="h-100 p-5 bg-light border-dark-blue text-dark-blue rounded-3 text-justify">
          <h2>Easier</h2>
          <p>IYO made registration process much more easier without having to do tedious paper work. Goodbye papers!</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="h-100 p-5 text-white bg-dark-blue rounded-3 text-justify">
          <h2>Safer</h2>
          <p>IYO build with the best implementation of safety measure, so we can assure that participant's data is safe.</p>
        </div>
      </div>
      </div>
    </div>

    <x-footer></x-footer>
</x-layout>