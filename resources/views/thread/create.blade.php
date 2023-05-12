<x-layout>
        <div class="container">
            <div class="row m-5 p-4 shadow">
                <div class="col-12">
                  <h1>Crea Discussione:</h1>
                    <form method="POST" action="{{route('store')}}" class="d-flex justify-content-center flex-column">
    
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
                          <label for="title" class="form-label">Titolo</label>
                          <input type="text" class="form-control" id="title" name="title">
                        </div>
    
                        <div class="mb-3">
                          <label for="description" class="form-label">Descrizione</label>
                          <input type="text" class="form-control" id="description" name="description">
                        </div>
    
                        <button type="submit" class="btn btn-primary">Crea</button>
                      </form>
                </div>
            </div>
        </div>
</x-layout>