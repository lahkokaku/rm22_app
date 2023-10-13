<x-admin>
    <x-navbar/>
    <x-sidebar/>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        @foreach($competitions as $competition)
        <x-card>
            <x-title>{{$competition != NULL ? $competition->name : 'All'}}'s Participants</x-title>
            <hr>
            @if ($participants->count())
            <div class="table-responsive py-2">
                <table class="table table-striped table-bordered" id="dataTables">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number </th>
                        <th scope="col">Competition</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($participants as $participant)
                    @if($participant->competition_id == $competition->id)
                         <tr>
                            <td>{{$participant->id}}</td>
                            <td>{{$participant->name}}</td>
                            <td>{{$participant->email}}</td>
                            <td>+62-{{$participant->phone_number}}</td>
                            <td>{{$participant->competition->name}}</td>
                            <td class="d-flex justify-content-center"> 
                                 

                                <a href="{{route('competition-registrations.edit',[$participant->id, $participant->id])}}" class="btn btn-outline-dark-blue btn-sm rounded me-2 " title="edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                 
                            </td>
                         </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <hr><p class="text-center">No data</p>
            @endif
        </x-card>
        @endforeach
    </div>
    </main>
</x-admin>