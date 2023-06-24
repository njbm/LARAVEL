<x-sg-master>
    <form action="{{ route('product.store')}}" method="POST">
        @csrf
        <label for="title">Title</label>
        <x-sg-text name="title" />
        <x-sg-btn-submit />
    </form>
</x-sg-master>