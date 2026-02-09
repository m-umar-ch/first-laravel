<x-layout>

    @if(!in_array($id, $ids))
    <h1 style="color: red;">Page Not Found</h1>
    @endif

    @if(in_array($id, $ids))
    <h1>This is ninja {{ $id }}</h1>
    @endif

</x-layout>
