<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <h1 class="m-8 text-3xl text-gray-900 leading-tight"> Just Laravel Posts </h1>
        <div class="px-2">
          <div class="flex flex flex-wrap -mx-2">
            @foreach($data as $post)
                <div class="w-1/3 px-2">
                  <img class="" src="{{ $post->jetpack_featured_media_url }}" alt="Sunset in the mountains">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{!! $post->title->rendered !!}</div>
                    <p class="text-gray-700 text-base">
                      {!! $post->excerpt->rendered !!}
                    </p>
                  </div>
                  <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="{{ $post->link }}" target="_blank">Click Here</a></span>
                    
                  </div>
                </div>
            @endforeach
          </div>
        </div>
    </body>
</html>
