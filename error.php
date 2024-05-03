<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    .parallax-container {
    position: relative;
    width: 100%;
    height: 50vh;
    overflow: hidden;
}

.parallax-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:url("images/flag.jpg");
    background-size: cover;
    background-position: center;
    transition: transform 0.2s ease; /* Smooth transition effect */
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1; /* Ensure content is on top */
    /* Additional styling for your content */
}

</style>
<body>
    
<div class="parallax-container">
    <div class="parallax-image"></div>
    <div class="content">
        <!-- Your content here -->
        <h1 class="text-center text-light mt-4" style="font-size:60px">😥404</h1>
      Sorry !! Authentication Failed
<p class="text-light text-center fw-bold">Your Combination of UserName and Password is In-correct. Better, You contact the developer of website.</p>
<p class="text-center"><a href='admin.php' class='btn btn-primary mx-auto text-center text-decoration-none'>Try Again</a></p>
  
    </div>
</div>

<script>
    document.querySelector('.parallax-container').addEventListener('mousemove', function(e) {
    let mouseX = e.clientX / window.innerWidth;
    let mouseY = e.clientY / window.innerHeight;
    let image = document.querySelector('.parallax-image');
    image.style.transform = 'translate(-' + mouseX * 50 + 'px, -' + mouseY * 50 + 'px)';
});

</script>
    
</body>
</html>