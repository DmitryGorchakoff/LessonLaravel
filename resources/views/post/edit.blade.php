@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.update',$post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">Title</label>
                <textarea type="text" name="content" class="form-control" id="content"  placeholder="Content">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{$post->image}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-select" id="category" name="category_id" >
                    @foreach($categories as $category)
                        <option
                            {{$category->id==$post->$category->id ? 'selected': ''}}

                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" name="tags[]" id="tags">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag) @endforeach
                            {{$tag->id==$postTag->id ? 'selected': ''}}
                            value="{{$tag->id}}">{{$tag->title}}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
