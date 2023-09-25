<x-layout titolo="Accedi">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 ">

                <form action="{{route('register')}}" method="POST">
                    @csrf  
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="PasswordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="PasswordConfirmation" name="password_confirmation">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>