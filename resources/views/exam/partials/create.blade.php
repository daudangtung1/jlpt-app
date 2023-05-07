<form action="{{route('exam.store')}}" method="POST">
    @csrf
    <select name="category_id">
        @forelse($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @empty
        <option value="0">No category</option>
        @endforelse
    </select>
    <input name="exam_id" type="text" placeholder="exam_id">
    <input name="name" type="text" placeholder="name">
    <input name="question" type="text" placeholder="question">
    <input name="answer[]" type="text" placeholder="a">
    <input name="answer[]" type="text" placeholder="b">
    <input name="answer[]" type="text" placeholder="c">
    <input name="answer[]" type="text" placeholder="d">
    <input name="correct_answer" type="text" placeholder="correct_answer">
    <button type="submit">
</form>