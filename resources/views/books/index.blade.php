<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>
    <style>
        .custom-margin {
            margin-top: 5%;
        }
    </style>
    <body>
        <div class="container custom-margin">
            <div class="row" style="color: green">
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                @endif
            </div>
            <div class="row">
                <a class="waves-effect waves-light btn" href="{{route('books.create')}}">Add new book</a>
            </div>
            <div class="row">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Date Created</th>
                    </tr>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->book_title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->created_at}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
