<x-layout>
    <div class="m-5">        
        <h1>{{$thread->title}}</h1>
        <p>{{$thread->description}}</p>
        <p class="mt-5">Creato il: {{$thread->created_at}}</p>
    </div>

    @foreach ($thread as $threads)
    <div>
        <p>{{$thread->reply}}</p>
    </div>
    @endforeach

    <div class="d-flex justify-content-center">
        <form method="POST" action="{{route('show', compact('thread'))}}" class="d-flex justify-content-center flex-column p-5 form-reply">
        
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

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="reply" name="reply" style="height: 100px">
                    </textarea>
                    <label for="reply">Risposta:</label>
                </div>
    
              <button type="submit" class="btn btn-primary mt-3">Rispondi</button>
            </form>
    </div>
</x-layout>