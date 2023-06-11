<x-user title="competition-list">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('competitions.show-competitions')}}">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Here" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-info" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row justify-content-between" style="box-sizing:border-box;">
            @foreach ($competitions as $competition)
            <div class="col-md-4">
                <div class="card  p-0 border-0 shadow-sm position-relative " >
                    <span class="position-absolute top-0 left-0  z-100 text-white m-0 p-0"
                    >
                        <p class="px-2" style="background-color:rgba(0,0,0,0.5);"> {{$competition->category}}</p>
                    </span>

                    <img class=" w-100 border  img-fluid" src="https://aeo.mybnec.org/storage/assets/AEO%202023Colored.webp" >
                    <div class="card-body">
                        <h5 class="card-title">{{$competition->name}}</h5>
                        <p class="card-text">
                            <i class="fa-solid fa-calendar-days"></i>
                            {{date('d M Y', strtotime($competition->start_time))}}
                        </p>
                        <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{$competition->place}}</p>
                        
                        <p class="card-text"><i class="fa-solid fa-money-bill"></i> IDR {{number_format($competition->price)}}</p>
                        <a href="{{route('competition-registrations.create',$competition->id)}}" class="btn btn-primary">Register Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            
    </div>
</x-user>