<form action="{{route('category.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Create</button>
</form>