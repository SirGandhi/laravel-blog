<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <title>My Blog</title>
    </head>
    <body>
        @foreach ($posts as $single_post)
            <article>
                {!! $single_post !!}
            </article>
        @endforeach
    </body>
</html>
