<!DOCTYPE html>

<html lang="en" class="h-full bg-gray-100">

<head>

	<meta charset="UTF-8">

	<title>Document</title>

	<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="h-full">

	<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
<?php require "nav.view.php"; ?>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">About</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p>Now you are on the About page.</p>
    </div>
  </main>
</div>

	
</body>

</html>