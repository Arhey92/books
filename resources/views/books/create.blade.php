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
            margin-top: 15%;
            margin-left: 30%;
        }
    </style>
    <body>
        <div class="container custom-margin">
            <div class="row" style="color: red">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <form action="{{route('books.store')}}" method="POST" class="col s6">
                    @csrf

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="book_title" name="book_title" type="text" class="validate">
                            <label for="book_title">Book title</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="author" name="author" type="text" class="validate">
                            <label for="author">Author</label>
                        </div>
                    </div>
                    <input type="submit" class="waves-effect waves-light btn" value="Save">
                </form>
            </div>
        </div>
    </body>
</html>
