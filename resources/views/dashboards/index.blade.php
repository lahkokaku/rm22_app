<x-admin>
<x-navbar />
<x-sidebar />


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, Admin</h1>
   
      </div>

      {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
      <div class="row justify-content-center">
        @foreach($competitions as $competition)
        <div class="col-md-6 overflow-hidden">
          <x-card>
              <h4 class=" text-gradient">{{ $competition->name }}'s <span class="fw-light">Total Participant</span></h4>
              <h1 class="display-6 fw-bold">{{ $competition->competitionParticipant->count() }}</h1>
              <div class="d-flex justify-content-end px-3 mb-1">
                  <span style="font-size: 0.6em" class="fw-bold">{{ $competition->competitionParticipant->count() }}/60</span>
              </div>
              <div class="progress ">
                  <div class="progress-bar" role="progressbar" style="width:{{ $competition->competitionParticipant->count()/60*100}}%;"   aria-valuemin="0" aria-valuemax="100"> </div>
              </div>
          </x-card>
        </div>
        @endforeach
      </div>
       
    </main>
  </div>
</div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <script src="https://kit.fontawesome.com/08b3198fd8.js" crossorigin="anonymous"></script>

  </body>
</html>
</x-admin>