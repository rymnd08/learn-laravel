<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraJobs</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-laravel text-white h-16  pl-4 flex items-center justify-center ">
        <div class="max-w-7xl w-full ">
          <h1 class="text-2xl uppercase font-bold ">LaraJobs</h1>
        </div>
    </div>
    <div class="max-w-7xl mx-auto mt-5">
      <a href="/" class="py-1 px-3 bg-laraDark text-white rounded"><i class="bi bi-arrow-bar-left"></i> Back</a>
      <div class="mt-3 w-[50%] m-auto">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png" alt="">
      </div>
      <div class="w-full mt-3 flex justify-center flex-col items-center gap-2">
        <!-- title -->
        <div class="text-4xl font-semibold uppercase">
          {{$listing['title']}}
        </div>
      <div class="flex gap-3">
          <!-- tags -->
          <div class="text-lg bg-laravel text-white px-3 rounded-full">
          <i class="bi bi-code-slash"></i> {{$listing['tags']}}
          </div>
          <!-- company -->
          <div class="text-2xl text-light">
            {{$listing['company']}}
          </div>
      </div>
        <!-- location -->
        <div class="text-xl">
        <i class="bi bi-geo-alt-fill text-laravel"></i>  {{$listing['location']}}
        </div>
        <!-- description -->
        <div class="text-md text-center w-[50%]">
          {{$listing['description']}}
        </div>
         <!-- email -->
         <div class="italic ">
         <i class="bi bi-envelope-fill text-laravel"></i> <a href="#"> {{$listing['email']}}</a>
         </div>
        <!-- website url -->
        <div class="underline ">
        <i class="bi bi-browser-chrome text-laravel"></i> <a href="#"> {{$listing['website']}}</a>
         </div>
      </div>
    </div>
    

</body>
</html>