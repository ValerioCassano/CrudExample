<x-layout titolo="Modifica Videogame">


    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form method="POST" enctype="multipart/form-data" action="{{route('videogame.update', compact('videogame'))}}">

                    @csrf
                    @method('put')

                    <div class="mb-3">
                      <label for="videogameName" class="form-label txt-white">Nome Videogioco</label>
                      <input type="text" class="form-control" id="videogameName" name="title" value="{{$videogame->title}}">
                    </div>
                    <div class="mb-3">
                      <label for="videogameCategory " class="form-label txt-white">Categoria</label>
                      <input type="text" class="form-control" id="videogameCategory" name="category" value="{{$videogame->category}}">
                    </div>
                    <div class="mb-3">
                        <label for="videogameDescription " class="form-label txt-white">Descrizione</label>
                        <textarea name="description" id="videogameDescription" cols="30" rows="10" class="form-control">{{$videogame->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="videogameImg" class="form-label txt-white">Carica un'immagine</label>
                        <input type="file" class="form-control" id="videogameImg" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="videogamePrice" class="form-label txt-white">Prezzo</label>
                        <input type="number" class="form-control" id="videogamePrice" name="price" value="{{$videogame->price}}">
                    </div>

                    <div class="mb-3 ">
                        <img src="{{Storage::url($videogame->img)}}" class="little-img" alt="">

                    </div>
                    <button type="submit" class="btn btn-primary ">Conferma</button>
                  </form>

            </div>
        </div>
    </section>

</x-layout>