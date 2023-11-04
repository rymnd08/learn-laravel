<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragigs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            // clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
    <div class="bg-rose-500 text-white h-16 flex items-center pl-4 ">
        <h1 class="text-2xl uppercase font-bold">Laragigs</h1>
    </div>
    <div class="w-[80%] m-auto mt-5">
        <!-- VIEW OUTPUT -->
        @yield('content')
    </div>
</body>
</html>