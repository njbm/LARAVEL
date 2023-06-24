<x-sg-master>
    <form action="{{ route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title">Title</label>
        <x-sg-text name="title" value="{{$product->title}}" />
        <x-sg-btn-submit />
    </form>
</x-sg-master>