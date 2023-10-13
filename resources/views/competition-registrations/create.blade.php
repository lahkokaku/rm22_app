<x-user title="Competition Registration">
    <x-navbar />
    <div class="container mt-4">
        <x-title> {{$competition->name}}'s Registration Fields</x-title>
        <hr>
        <form action="{{route('competition-registrations.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="competition_id" value="{{$competition->id}}" hidden>
            <x-card>
                <x-title>Particpant's Data</x-title>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <x-textForm id="name" name="name" type='text' value="{{old('name')}}" >Name</x-textForm>

                        <x-textForm id="email" name="email" type='email' value="{{old('email')}}" >Email</x-textForm>

                        <label for="phone_number" class="col-form-label">Phone Number</label>
                        <div class="input-group mb-3 rounded-pill overflow-hidden border">
                            <div class="input-group-prepend " style="border-radius:0;">
                                <span class="input-group-text border-0">+62</span>
                            </div>
                            <input type="text" class="form-control border-0 " id="phone_number" name="phone_number" >
                        </div>

                    </div>    
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-select rounded-pill" name="gender" id="gender">
                                <option selected disabled class="d-none">Select Gender ... </option>
                                <option value="M" >Male</option>
                                <option value="F" >Female</option>
                              </select>
                        </div>

                        <x-textForm id="birth_date" name="birth_date" type='date' value="{{old('birth_date')}}" >Birth Date</x-textForm>

                        <x-textForm id="additional_notes" name="additional_notes" type='text' value="{{old('additional_notes')}}" >Additional Notes</x-textForm>
                    </div>    
                </div>    
                
                
            </x-card>
            
            <x-card>
                <x-title>Payment's Data</x-title>
                <small class="text-secondary" style="margin-top:-30px;"> Please transfer IDR <b>{{number_format($competition->price)}}</b> to <b>5271213123</b> by the name of <b>Anonymus</b> </small>    
                <hr>
                <x-textForm id="account_number" name="account_number" type='text' value="{{old('account_number')}}" >Account Number </x-textForm>

                <x-textForm id="account_name" name="account_name" type='text' value="{{old('account_name')}}" >Account Name</x-textForm>
                
                <div class="form-group mb-4">
                    <label for="transfer_proof_bank" class="col-form-label">Transfer Proof<span class="text-danger">*</span></label>
                    <input type="file" class="form-control"  name="transfer_proof_bank" id="transfer_proof_bank" accept="image/png,image/jpeg,image/jpg">    
                    <small class="text-danger"  style="font-size: 0.7em">Type : PNG, JPEG, JPG | Max : 2MB</small><br>
                </div>  
                <x-buttonSubmit></x-buttonSubmit>
            </x-card>
        </form>
    </div>
    <x-footer />
</x-user>