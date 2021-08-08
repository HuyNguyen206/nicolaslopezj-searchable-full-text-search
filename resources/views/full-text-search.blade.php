<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="flex-center position-ref">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Full text search
            </div>
            <form class="form" method="post" action="{{route('search-full-text')}}">
                @csrf
                <div class="form-group">
                    <input value="{{old('keyword')}}" name="keyword" class="form-control" type="text" placeholder="Enter the keyword">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Gender
                        </td>
                        <td>
                            Address
                        </td>
                        <td>
                            City
                        </td>
                        <td>
                            Postal code
                        </td>
                        <td>
                            Country
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                        <tr>
                            <td>
                                {{$value->customer_name}}
                            </td>
                            <td>
                                {{$value->gender ? 'Male' : 'Female'}}
                            </td>
                            <td>
                                {{$value->address}}
                            </td>
                            <td>
                                {{$value->city}}
                            </td>
                            <td>
                                {{$value->postal_code}}
                            </td>
                            <td>
                                {{$value->country}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
            <div>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
