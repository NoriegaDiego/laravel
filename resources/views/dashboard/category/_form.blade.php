 @csrf

        <label>Title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title',$category->title) }}">

        <label>Slug</label>
        <input class="form-control" type="text" name="slug" value="{{ old('slug',$category->slug) }}">

        <button class="btn btn-succes mt-3" type="submit">Send</button>