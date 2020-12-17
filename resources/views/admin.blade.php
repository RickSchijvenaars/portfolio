@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="m-auto justify-content-center">

            <h1>Add a project:</h1>

            <form method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="">

                    <div class="">
                        <h3>Index</h3>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" rows="4" name="description" required>{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Choose cover</label>
                            <input type="file" class="form-control-file" name="file" value="{{ old('file') }}" required>
                        </div>
                    </div>

                    <div class="uk-width-1-2@m">
                        <h3>Details</h3>
                        <div class="form-group">
                            <label for="title">Text</label>
                            <textarea class="form-control" rows="15" name="detail_description" required>{{ old('detail_description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Languages</label>
                            <input type="text" class="form-control " name="languages" value="{{ old('languages') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Link</label>
                            <input type="text" class="form-control " name="link" value="{{ old('link') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Images upload</label>
                            <input type="file" class="form-control-file" name="detail_file[]" value="{{ old('file') }}" multiple required>
                        </div>

                        <div class="form-group mt-2 float-right">
                            <button type="submit" name="upload" class="btn btn-primary">Add Project</button>
                        </div>

                    </div>
                </div>

                @include('layouts.errors')

            </form>

            <hr>

            <div class="uk-width-1-2@m">
                <h1>Delete project</h1>

                <form method="POST" action="{{ route('delete')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="projects">Project</label>
                        <select class="form-control" id="projects" name="option" style="width:200px"  required>
                            @foreach($projects as $project )
                                <option>{{$project->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="upload" class="btn btn-primary">Delete Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection