 @csrf

        <label>Title</label>
        <input type="text" name="title" value="{{ old('title',$post->title) }}">

        <label>Slug</label>
        <input type="text" name="slug" value="{{ old('slug',$post->slug) }}">

        <label>Content</label>
        <textarea name="content">{{ old('content',$post->content) }}</textarea>

        <label>Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id)
                <option {{  old('categories', $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">
                    {{ $title }}
                </option>
            @endforeach
        </select>
        
        <label>Description</label>
        <textarea name="description">{{ old('description',$post->description) }}</textarea>

        <label>Posted</label>
        <select name="posted">
            <option {{ old('posted',$post->posted) == 'not' ? 'selected' : '' }} value="not">Not</option>
            <option {{ old('posted',$post->posted) == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
        </select>
        @if (isset($task) && $task == 'edit')
            <label for="">Image</label>
            <input type="file" name='image'>
        @endif
        
        <button type="submit">Send</button>