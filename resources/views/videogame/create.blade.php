<x-layout titolo='Carica un videogioco'>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                
                <form action="{{route('videogame.store')}}"  method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="GameName" class="form-label txt-white">Nome Gioco</label>
                        <input type="text" class="form-control" id="GameId" name="title" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="GameCategory" class="form-label txt-white">Categoria Gioco</label>
                        <input type="text" class="form-control" id="GameCategory" name="category" value="{{old('category')}}">
                    </div>
                    <div class="mb-3">
                        <label for="GameDescription" class="form-label txt-white">Descrizione Gioco</label>
                        <input type="text" class="form-control" id="GameDescription" name="description" value="{{old('description')}}">
                    </div>
                    <div class="mb-3">
                        <label for="GameImg" class="form-label txt-white">Carica L'immagine del gioco</label >
                            <input type="file" class="form-control" id="GameImg" name="img" value="{{old('img')}}">
                        </div>
                        <div class="mb-3">
                            <label for="GamePrice" class="form-label txt-white">Prezzo del gioco</label>
                            <input type="number" class="form-control" id="GamePrice" name="price" value="{{old('price')}}">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
        
        
        
    </x-layout>