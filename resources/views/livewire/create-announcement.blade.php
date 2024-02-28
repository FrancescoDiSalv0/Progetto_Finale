<div>
    <h1 class="text-center"> {{__("ui.creaannuncio")}}</h1>

    @if (session()->has('message'))
    <div class="flex flex-row justify-center my-2 alert alert-success">
      {{ session('message') }}
    </div>
    @endif



    <form wire:submit.prevent="store" multiform="multipart/form-data" >
    @csrf
        <div class="mb-3">
          <label for="title"> {{__("ui.titoloannuncio")}}</label>
          <input type="text" wire:model.live="title" class="form-control @error('title') is-invalid @enderror">
          @error('title')
            {{ $message }}
            @enderror
 
        </div>

        <div class="mb-3">
          <label for="description"> {{__("ui.descrizione")}}</label>
          <textarea type="text" wire:model.live="description" class="form-control @error('description') is-invalid @enderror"></textarea>
          @error('description')
            {{ $message }}
            @enderror
        </div>
        
        <div class="mb-3">
          <label for="price"> {{__("ui.prezzo")}} </label>
          <input type="number" step="0.01" wire:model.live="price" class="form-control @error('price') is-invalid @enderror">
          @error('price')
          {{ $message }}
          @enderror
        </div>

        <div class="mb-3">
          <label for="category"> {{__("ui.categoria")}}</label>
          <select wire:model.defer="category" id="category" class="form-control">
            <option value="">{{__("ui.selezionacategoria")}} </option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{ __("ui.$category->name") }} </option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <input wire:model="temporary_images"  type="file" name="images" multiple class="form-control  @error('temporary_images.*') is-invalid @enderror" placeholder="img" />
          @error('temporary_images.*')
            <p class= "text-danger mt-2"> {{ $message }} </p>
          @enderror
        </div>
        @if (!empty($images))
          <div class="row">
            <div class="col-12">
              <p>Photo preview:</p>
              <div class="row border border-4 border-info rounded shadow py-4">
                @foreach ($images as $key => $image)
                  <div class="col my-3">
                    <div class="img-preview img-fluid mx-auto shadow rounded" style= "background-image: url({{$image->temporaryUrl()}});"></div>
                    <button type="button" wire:click="removeImage({{$key}})" class="btn btn-danger shadow">Cancella</button>
                  </div>
                @endforeach
            </div>
          </div>
        </div>
        @endif
        <button type="submit" class="btn btn_color shadow border-dark my-4"> {{__("ui.crea")}} </button>
      </form>

</div>
