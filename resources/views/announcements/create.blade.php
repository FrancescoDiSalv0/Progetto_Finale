<x-layout>
 <div class="container create_custom margine_cust">
  <div class="row">
    <div class="col-12">
      <livewire:create-announcement/>
    </div>
  </div>
 </div>

</x-layout>


   {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Inserisci Annuncio</h1>
                <form method="POST" action="{{route("announcement.submit")}}">
                @csrf
                    <div class="mb-3">
                      <label class="form-label">Titolo</label>
                      <input type="text" class="form-control" name="title" >
                    <div class="mb-3">
                      <label  class="form-label">Descrizione</label>
                      <input type="text" class="form-control" name="description" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Prezzo</label>
                      <input type="text" class="form-control" name="price" >
                    </div>

                    <select class="form-select mb-3">
                        <option selected>Categorie</option>
                        <option value="1">Elettronica</option>
                        <option value="2">Abbigliamento e accessori</option>
                        <option value="3">Casa e giardino</option>
                        <option value="3">Sport e tempo libero</option>
                        <option value="3">Salute e bellezza</option>
                        <option value="3">Libri, film e musica</option>
                        <option value="3">Prodotti per bambini e neonati</option>
                        <option value="3">Cibo e bevande</option>
                        <option value="3">Articoli per animali domestici</option>
                        <option value="3">Articoli per ufficio e scuola</option>
                      </select>
                    <button type="submit" class="btn btn-primary">Invia</button>
                  </form>
            </div>
        </div>
    </div> --}}