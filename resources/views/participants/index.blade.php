<x-admin>
    <div class="container mt-4">
        <x-card>
            <x-title>{{$competitions->name}}'s Participants</x-title>
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
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($participants as $participant)
                         <tr>
                            <td>{{$participant->id}}</td>
                            <td>{{$participant->name}}</td>
                            <td>{{$participant->email}}</td>
                            <td>{{$participant->phone_number}}</td>
                            <td class="d-flex justify-content-center"> 
                                 

                                <a href="{{route('competition-registrations.edit',[$participant->id,$participant->competitionPayment->id])}}" class="btn btn-primary btn-sm rounded me-2 " title="edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                 
                            </td>
                         </tr>
                        
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <hr><p class="text-center">No data</p>
            @endif
        </x-card>
    </div>

</x-admin>