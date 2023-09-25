<x-layout_2 titolo="dettaglio">

<div id="card">
    <img src="{{Storage::url($videogame->img)}}" class="card-img-top crop-container " alt="...">
</div>
   
  


        <div class="container Hpage">
            <div class="row justify-content-between ">

                <div class="col-12 col-md-3 " >
                    <a href="{{route('videogame.index')}}" class="btn btn-info">Torna Indietro</a>
                </div>




                <div class="col-12 col-md-4 ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h4 class="card-title fs-3">{{$videogame->title}}</h4>
                            <p class="card-text fs-5 mt-3">{{$videogame->category}}</p>
                            <p class="lead fs-5">{{$videogame->description}}</p>
                            <p class="lead fs-4" >{{$videogame->price}}$</p>
                        </div>
                      </div>
                </div>




            </div>
        </div>
    
</x-layout_2>
