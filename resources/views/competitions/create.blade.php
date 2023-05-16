<x-admin>
    <div class="container mt-3">
        <x-card>
            <x-title> Create New Competition </x-title>
            <form 
            action="{{route('competitions.store')}}" 
            method="POST"
            enctype="multipart/form-data" 
            >   @csrf
                <div class="row">
                    <div class="col-md-6">
                        <x-textForm name="name" id="name" type="text" value="{{old('name')}}">Competition Name</x-textForm>

                        <x-textForm name="category" id="category" type="text" value="{{old('category')}}" >Competition Category</x-textForm>

                        <x-textForm name="price" id="price" type="number" value="{{old('price')}}">Competition Price</x-textForm>
                    </div>

                    <div class="col-md-6">
                        <x-textForm name="start_time" id="start_time" type="date" value="{{old('start_time')}}" >Start Time</x-textForm>
                        <x-textForm name="end_time" id="end_time" type="date" value="{{old('end_time')}}" >End Time</x-textForm>
                    <x-textForm name="location" id="location" type="text" value="{{old('location')}}" >Select Location</x-textForm>
                    </div>
                </div>


      

                <div class="row">
                    <div class="col">
                        <x-buttonPrimary route="{{URL::previous()}}">Back</x-buttonPrimary>
                    </div>
                    <div class="col">
                        <x-buttonSubmit>Submit</x-buttonSubmit>
                    </div>
                </div>
              </form>
        </x-card>
    </div>
</x-admin>

 