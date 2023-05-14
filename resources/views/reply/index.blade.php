<x-layout>
    <div class="p-5">
        @foreach($replies as $reply)
        <a href="#" class="text-dark text-decoration-none">
            <div class="border border-primary p-4 mb-4 thread-item">
                <h5>{{ $reply->title }}</h5>
                <p>{{ $reply->description }}</p>
            </div>
        </a>
        @endforeach
    </div>
</x-layout>