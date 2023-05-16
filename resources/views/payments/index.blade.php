<x-admin>
    <div class="container mt-4">
        <x-card>
            <x-title>Unconfirmed Payment </x-title>
            @if ($unConfirmed->count())
            <div class="table-responsive py-2">
                <table class="table table-striped table-bordered" id="dataTables">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Account Name</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($unConfirmed as $payment)
                         <tr>
                            <td>{{$payment->id}}</td>
                            <td>{{$payment->account_name}}</td>
                            <td>{{$payment->account_number}}</td>
                            <td class="d-flex justify-content-center"> 
                                 

                                <a href="{{route('competition-registrations.edit',[$payment->competition_participant_id,$payment->id])}}" class="btn btn-primary btn-sm rounded me-2 " title="edit">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="{{route('payments.confirm',$payment->id)}}" class="btn btn-success btn-sm rounded me-2 " title="confirm">
                                    <i class="fa fa-check"></i>
                                </a>
                                 
                            </td>
                         </tr>
                        
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <hr><p class="text-center"> No Data</p>
            @endif
        </x-card>

        <x-card>
            <x-title>Confirmed Payment </x-title>
            @if ($confirmed->count())
            <div class="table-responsive py-2">
                <table class="table table-striped table-bordered" id="dataTables">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Account Name</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($confirmed as $payment)
                         <tr>
                            <td>{{$payment->id}}</td>
                            <td>{{$payment->account_name}}</td>
                            <td>{{$payment->account_number}}</td>
                            <td class="d-flex justify-content-center"> 
                                 

                                <a href="{{route('competition-registrations.edit',[$payment->competition_participant_id,$payment->id])}}" class="btn btn-primary btn-sm rounded me-2 " title="edit">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="{{route('payments.unconfirm',$payment->id)}}" class="btn btn-danger btn-sm rounded me-2 " title="confirm">
                                    <i class="fa-regular fa-xmark"></i>
                                </a>
                                 
                            </td>
                         </tr>
                        
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <hr><p class="text-center"> No Data</p>
            @endif
        </x-card>
    </div>
</x-admin>