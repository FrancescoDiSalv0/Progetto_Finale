<div>
    <h1 class="text-center"> {{__("ui.creaannuncio")}}</h1>

    @if (session()->has('message'))
    <div class="flex flex-row justify-center my-2 alert alert-success">
      {{ session('message') }}
    </div>
    @endif



    <form required wire:submit.prevent="store">
    @csrf
        <div class="mb-3">
          <label for="title"> {{__("ui.titoloannuncio")}}</label>
          <input type="text" required wire:model.live="title" class="form-control @error('title') is-invalid @enderror">
          @error('title')
            {{ $message }}
            @enderror
 
        </div>

        <div class="mb-3">
          <label for="description"> {{__("ui.descrizione")}}</label>
          <textarea type="text" required wire:model.live="description" class="form-control @error('description') is-invalid @enderror"></textarea>
          @error('description')
            {{ $message }}
            @enderror
        </div>
        
        <div class="mb-3">
          <label for="price"> {{__("ui.prezzo")}} </label>
          <input  type="number" required wire:model.live="price" class="form-control @error('price') is-invalid @enderror">
          @error('price')
          {{ $message }}
          @enderror
        </div>

        <div class="mb-3">
          <label for="category"> {{__("ui.categoria")}}</label>
          <select required wire:model.defer="category" id="category" class="form-control">
            <option value="">{{__("ui.selezionacategoria")}} </option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{ __("ui.$category->name") }} </option>
            @endforeach
          </select>
        </div>
       
        <button type="submit" class="btn btn-primary"> {{__("ui.crea")}} </button>
      </form>

</div>
