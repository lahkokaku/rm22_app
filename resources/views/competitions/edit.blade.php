<x-admin>
    <div class="container mt-3">
        <x-card>
            <x-title> Create New Competition </x-title>
            <form 
            action="{{route('competitions.update',$competition->id)}}" 
            method="POST"
            enctype="multipart/form-data" 
            >   @csrf
                @method('PUT')
                <x-textForm name="name" id="name" type="text" value="{{$competition->name}}">Competition Name</x-textForm>

                <x-textForm name="category" id="category" type="text" value="{{$competition->category}}">Competition Category</x-textForm>

                <x-textForm name="price" id="price" type="number" value="{{$competition->price}}" >Competition Price</x-textForm>

                <x-textForm name="start_time" id="start_time" type="date" value="{{$competition->start_time}}" >Start Time</x-textForm>

                <x-textForm name="end_time" id="end_time" type="date" value="{{$competition->end_time}}" >End Time</x-textForm>

                <x-textForm name="location" id="location" type="text" value="{{$competition->place}}" >Select Location</x-textForm>
 

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

 