
@extends('main.master')

@section('content')

    
    <div class = "container">
        <div class = "row p-4">
            <div class ="col-lg-3">
                <div class = "card shadow">
                    <div class = "card-body">
                    <form method = "POST" data-action = "{{route('blog.create')}}" enctype="multipart/form-data" id = "createBlogForm">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                        </div>
                        <div class = "mb-3">
                        <select class="form-select" name= "category" aria-label="Default select example">
                            <option selected>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary text-light main-bg">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <div class ="col-lg-9">
                <div class="alert alert-success d-none" role="alert" id = "toastSuccess" style = "position: fixed; bottom: 20px; right: 2%; width: initial;">
                    Sucessfully Added!
                </div>
                <div class="spinner-grow text-primary d-none" id = "spinnerAdd" role="status" style = "width: 5rem;
                                                                                height: 5rem;
                                                                                margin: auto;
                                                                                position: fixed;
                                                                                top: 0;
                                                                                bottom: 0;
                                                                                left: 0;
                                                                                right: 0;">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <table class="table" id  ="table">
                    <thead>
                        <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->description}}</td>
                                <td>{{$blog->category->name ?? 'Null'}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script type = "module">
        var url = "{{ route('blog.create') }}";
    </script>

    <script src="/js/blog.js" defer></script>

    





@endsection