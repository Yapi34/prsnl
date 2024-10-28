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
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Buat Artikel  </h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <form action="{{ route('posts.store') }}" method="POST">
          <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-5">
              @csrf
              <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
                  <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    </div>
                  </div>
                </div>
              </div>
              <input type="text" name="title" class="block w-med rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-100 sm:text-sm sm:leading-6" required>
              <div class="col-span-med">
                <label for="content"  class="block text-sm font-medium leading-6 text-gray-900">Isi</label>
                <div class="mt-2">
                  <textarea name="content" class="block w-med rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-100 sm:text-sm sm:leading-6" required></textarea>
                </div>
              </div>
              <button type="submit" class="text-gray-900 hover:bg-gray-300 hover:text-white' rounded-md px-3 py-2 text-sm font-medium">Kirim</button>
              <a href="{{ route('posts.index') }}" class="text-gray-900 hover:bg-gray-300 hover:text-white' rounded-md px-3 py-2 text-sm font-medium">Kembali</a>  
            </div>
          </div>  
        </form>
      </div>
    </main>
  </div>
  

</body>
</html>