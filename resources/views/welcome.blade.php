<x-layout>
    @if (session('ThreadCreated'))
        <div class="alert alert-success text-center">
            {{ session('ThreadCreated') }}
        </div>
    @endif
    <h1 class="p-4">ForumdelBro</h1>
</x-layout>