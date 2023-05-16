<x-admin>

    <div class="container mt-4">
        <x-title> {{$participant->competition->name}}'s Registration Fields</x-title>
        <hr>
        <form action="{{route('competition-registrations.update',[$participant->id, $payment->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-card>
                <x-title>Particpant's Data</x-title>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <x-textForm id="name" name="name" type='text' value="{{$participant->name}}" >Name</x-textForm>

                        <x-textForm id="email" name="email" type='email' value="{{$participant->email}}" >Email</x-textForm>

                        <label for="phone_number" class="col-form-label">Phone Number</label>
                        <div class="input-group mb-3 rounded-pill overflow-hidden border">
                            <div class="input-group-prepend " style="border-radius:0;">
                                <span class="input-group-text border-0">+62</span>
                            </div>
                            <input type="text" class="form-control border-0 " id="phone_number" name="phone_number" value="{{$participant->phone_number}}" >
                        </div>

                    </div>    
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-select rounded-pill" name="gender" id="gender">
                                  
                                <option value="M" {{$participant->gender == "M" ? 'selected' : '' }} >Male</option>
                                <option value="F" {{$participant->gender == "F" ? 'selected' : '' }} >Female</option>
                              </select>
                        </div>

                        <x-textForm id="birth_date" name="birth_date" type='date' value="{{$participant->birth_date}}" >Birth Date</x-textForm>

                        <x-textForm id="additional_notes" name="additional_notes" type='text' value="{{$participant->additional_notes}}" >Additional Notes</x-textForm>
                    </div>    
                </div>    
                
                
            </x-card>
            
            <x-card>
                <x-title>Payment's Data</x-title>
                <small class="text-secondary" style="margin-top:-30px;"> Please transfer IDR <b>{{number_format($participant->competition->price)}}</b> to <b>5271213123</b> by the name of <b>Anonymus</b> </small>    
                <hr>
                <x-textForm id="account_number" name="account_number" type='text' value="{{$payment->account_number}}" >Account Number </x-textForm>

                <x-textForm id="account_name" name="account_name" type='text' value="{{$payment->account_name}}" >Account Name</x-textForm>
                
                 
                <div class="row">
                    <div class="col">
                        <x-buttonPrimary route="{{URL::previous()}}">Back</x-buttonPrimary>
                    </div>
                    <div class="col">
                        <x-buttonSubmit></x-buttonSubmit>
                    </div>
                </div>
            </x-card>
        </form>
    </div>
</x-admin>


