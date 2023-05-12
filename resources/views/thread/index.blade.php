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
                <div>
                    <h5>{{ $thread->title }}</h5>
                    <p>{{ $thread->description }}</p>
                </div>
                @endforeach
            </div>
            @else
            <div class="col-12">
                <h3>Devi accedere per vedere le discussioni</h3>
            </div>
            @endauth
        </div>
    </div>

</x-layout>