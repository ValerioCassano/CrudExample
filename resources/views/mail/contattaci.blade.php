<x-layout titolo="Contattaci">
    <div class="container box1  mt-5">
            <div class="row justify-content-center py-3">
                <div class="col-12 col-md-8">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('mail.submit')}}">
                        {{-- Scattato una protezione --}}
                        {{-- Cross-site Request Forgery --}}
                        {{-- csrf token --}}
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label text-db fw-bolder txt-white">Nome</label>
                            <input type="text" id="user" name="user" class="form-control" id="username">
                            {{-- <input type="hidden" name="user" value=""> --}}
                            {{-- user => value --}}
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label text-db fw-bolder txt-white">Email</label>
                            <input type="email" name="email" class="form-control" id="useremail">
                        </div>
                        <div class="mb-3">
                            <label for="usermessage" class="form-label text-db fw-bolder txt-white">Messaggio</label>
                            <textarea name="body" cols="30" rows="7" class="form-control" id="usermessage"></textarea>
                        </div>
                        <button type="submit" class="btn  txt-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
</x-layout>