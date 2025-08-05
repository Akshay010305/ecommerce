<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeShop - Premium E-commerce</title>
    <link rel="stylesheet" href="src/style/style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
  .hide-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  .hide-scrollbar::-webkit-scrollbar {
    display: none;
  }
  *{
    border: 1px solid black;
  }
</style>
</head>

<body class="bg-gray-50 font-sans sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">
    <!-- Header -->
    <?php include("pages/includes/navbar.php"); ?>
    <!-- Main Content -->
    <?php include("get_content.php"); ?>
    <!-- Footer -->
    <?php include("pages/includes/footer.php"); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>