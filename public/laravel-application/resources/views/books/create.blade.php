<form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Title</label> <br>
    <input type="text" name="title" id=""><br>
    <label for="">Author</label> <br>
    <input type="text" name="author" id=""><br>
    <label for="">Image</label><br>
    <input type="file" name="image" id=""><br>
    <label for="">File </label> <br>
    <input type="file" name="src" id="">
    <br>
    <label for="">Category</label>
    <select name="category_id" id="">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" value="Save">

</form>
