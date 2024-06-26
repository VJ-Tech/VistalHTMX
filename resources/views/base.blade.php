<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>

    <!-- Include Tailwind CSS from a local installation -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Bundle (Popper included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybReRbPhESEn0fnxU5VZBbFoHYBfF5hS1gEFp8K4iSiB6aEbx" crossorigin="anonymous"></script>

    <!-- HTMX -->
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@latest"></script>

    <!-- Custom Styles -->

</head>
<body>
    <div class="flex">
        <nav id="main-nav" class="bg-gray-700 text-white w-1/4 min-h-screen flex flex-col gap-5 p-5">
            <div id="brand" class="text-xl mb-5">
                Product List
            </div>
            <a href="" class="p-3 hover:bg-blue-400">Home</a>
            <a href="" class="p-3 hover:bg-blue-400">About</a>
            <a href="/products" class="p-3 hover:bg-blue-400">Products</a>
            <a href="" class="p-3 hover:bg-blue-400">Contact</a>
        </nav>
        <div class="w-3/4">
            <article id="content" class="p-5">
                @yield('content')
            </article>
            <footer class="text-center text-gray-500 py-3">
                Copyright &copy;2024. all rights reversed.
            </footer>
        </div>
    </div>
</body>
</html>
