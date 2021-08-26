<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        ul {
            list-style: none;
        }
        ul li.post {
            background: #eaeaea;
            padding: 15px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        ul li.post ul.comments li {
            margin: 10px;
            font-weight: normal;
        }
 
    </style>

</head>
<body>

    @include('navibar');

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    @foreach ($posts as $post)

                    <li class="post">
                        {{$post->description}}
                        
                        @if ($post->has_comments > 0)
                        <ul class="comments">
                            @foreach ($post->comments as $comment)
                                <li>{{$comment->comment}}</li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                        
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>    
</body>
</html>