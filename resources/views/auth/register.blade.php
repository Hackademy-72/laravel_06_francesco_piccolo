<x-layout>
    <div class="container">
        <div class="row m-5 p-4 shadow">
            <div class="col-12">
              <h1>Effettua la Registrazione:</h1>
                <form method="POST" action="{{route('register')}}" class="d-flex justify-content-center flex-column">

                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  
                  @endif

                  @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                      <label for="name" class="form-label">Nome Utente</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3">
                      <label for="password_confirmation" class="form-label">Conferma Password</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>