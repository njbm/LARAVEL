<x-sg-master>
    <a href="{{ route('product.create')}}"><button type="button" class="btn btn-primary">Add Product</button></a>
    <table class="table table-light">
        <thead>
            <tr>
                <td>Sl No</td>
                <td>Title</td>
                <td>Action</td>
            </tr>
        </thead>
        @php
        $sl = 1;
        @endphp
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$product->title}}</td>
                <td>
                    <a href="{{ route('product.show', $product->id)}}"><button>Show</button></a>
                    <a href="{{ route('product.edit', $product->id)}}"><button>Edit</button></a>
                    <form style="display:inline" action="{{ route('product.delete', $product->id)}}" method="post">
                        @csrf
                        @method('delete')

                        <button onclick="return confirm('Are you sure want to delete ?')" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-sg-master>