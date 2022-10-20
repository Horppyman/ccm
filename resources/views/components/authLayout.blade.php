<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="/dist/tailwind.css" rel="stylesheet" /> -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Responsive Sidebar Using TailwindCSS</title>
  </head>
  <body class="flex h-screen font-mono">

        @auth
        <a href="/dashboard"
            class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
            >
            <i class="bi bi-house-door-fill px-2 bg-gray-900 rounded-md"></i>
        </a>
        @endauth



        @yield("contents")


</body>
</html>
