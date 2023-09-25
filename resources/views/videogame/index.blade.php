<x-layout titolo="Listino videogiochi">
    
    <div class="container mt-5">
        <div class="row ">
            
            @foreach($videogames as $videogame)
            <div class="col-12 col-md-3 ">
                <div class="card wrapper text-center ">
                    <img src="{{Storage::url($videogame->img)}}" class="card-img-top" alt="...">
                    <div class="card-body  d-steam-cards js-steamCards ">
                        <h5 class="card-title">{{$videogame->title}}</h5>
                        
                        @auth
                        <a href="{{route('videogame.show', ['id'=>$videogame->id])}}" class="btn ">Vedi dettaglio</a>
                        <a href="{{route('videogame.edit', compact('videogame'))}}" class="btn ">Modifica Card</a>
                        <form action="{{route('videogame.delete', compact('videogame'))}}" method="POST">
                            
                            @csrf
                            @method('delete')
                            
                            <button class="btn ms-1 ">Cancella videogioco</button>
                            
                        </form>
                        @else
                        <a href="{{route('videogame.show', ['id'=>$videogame->id])}}" class="btn ">Vedi dettaglio</a> 
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>




</x-layout>


