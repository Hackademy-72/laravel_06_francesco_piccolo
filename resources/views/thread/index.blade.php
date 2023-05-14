<x-layout>

    <div class="container p-5">
        <div class="row">
            @auth
            <div class="col-6">
                <h3>Discussioni recenti:</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{route('create')}}"><button type="button" class="btn btn-primary">CREA NUOVA DISCUSSIONE</button></a>
            </div>
            <div class="p-5">
                @foreach($threads as $thread)
                <a href="{{route('show', compact('thread'))}}" class="text-dark text-decoration-none">
                    <div class="border border-primary p-4 mb-4 thread-item">
                        <h5>{{ $thread->title }}</h5>
                        <p>{{ $thread->description }}</p>
                    </div>
                </a>
                @endforeach
            </div>
            
            @else
            <div class="col-12">
                <h3>Devi accedere per vedere le discussioni</h3>
                <div class="mt-5">
                    <a href="{{route('login')}}"><button class="mb-4 btn btn-primary">Accedi</button></a>
                    <p>Non hai un account? Registrati qui:</p>
                    <a href="{{route('register')}}"><button class="btn btn-primary">Registrati</button></a>
                </div>
            </div>
            @endauth
        </div>
    </div>

</x-layout>