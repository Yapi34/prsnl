<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Menu Artikel</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <article>
        @foreach ($posts as $post)
              <h2 class="mb-1 text-3xl tracking-tigh font-bold text-gray-900">{{ $post->title }}</h2>
              <div class="text-base text-gray-500">
                {{ $post->created_at->diffForHumans() }}
              </div>
              <p class="my-4 font-light py-8 max-w-screen-sm border-b border-gray-300">{{ $post->content }}</p>
        @endforeach
        </article>
        <a href="{{ route('posts.create') }}" class="text-gray-900 hover:bg-gray-300 hover:text-white' rounded-md px-3 py-2 text-sm font-medium">Buat artikel baru</a>
      </div>
    </main>
  </div>
  

</body>
</html>