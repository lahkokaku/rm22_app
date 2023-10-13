<x-admin>
    <x-navbar />
    <x-sidebar />
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">

        <x-card>
            <x-title>Your Competition List</x-title>
            <x-buttonCreate route="{{route('competitions.create')}}"> Create New Competition</x-buttonCreate>
            @if ($competitions->count())
                <div class="table-responsive py-2">
                    <table class="table table-striped table-bordered" id="dataTables">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($competitions as $competition)
                             <tr>
                                <td>{{$competition->id}}</td>
                                <td>{{$competition->name}}</td>
                                <td>{{$competition->category}}</td>
                                <td>{{$competition->price}}</td>
                                <td class="d-flex justify-content-center"> 
                                    <a href="{{route('participants.index', $competition->id)}}" class="btn btn-success btn-sm rounded me-2 " title="view">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{route('competitions.edit', $competition->id)}}" class="btn btn-outline-dark-blue btn-sm rounded me-2 " title="edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <form method="POST" action="{{route('competitions.destroy',$competition->id)}}">
                                        @csrf
                                        <input type="hidden" name="_method" value = "DELETE">
                                        <a  href=""  >
                                        <button class="btn btn-outline-red rounded btn-sm" title="delete" id ="delete">
                                           <i class="fa fa-x"></i>
                                        </button>
                                        </a>
                                    </form> 
                                </td>
                             </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <hr>
                <p class="text-center"> No Data</p>
            @endif
        </x-card>
    </div>
    </main>
</x-admin>