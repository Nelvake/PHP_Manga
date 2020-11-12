@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron col">
                <form method="POST" action="create">
                    @csrf
                    <fieldset>
                        <legend>Add Manga</legend>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"
                                placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="image_url">Image Url</label>
                            <input type="text" class="form-control" name="image_url" placeholder="Enter image url">
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" name="author"placeholder="Enter author">
                        </div>
                        <div class="form-group">
                            <label for="author">Painter</label>
                            <input type="text" class="form-control" name="painter"placeholder="Enter painter">
                        </div>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input type="text" class="form-control" name="publisher"placeholder="Enter publisher">
                        </div>
                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <input type="text" class="form-control" name="genre"placeholder="Enter genre">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" name="description"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
