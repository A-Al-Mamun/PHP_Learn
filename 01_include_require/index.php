<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include & require Practice | PHP Learn</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <!-- Header Section Start -->
    <?php include_once 'header.php' ?>
    <?php /*require_once 'header.php'*/ ?>
    <!-- Header Section End -->

    <!-- Main Section Start -->
    <main>
        <section id="content">
            <h2>Content 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, mollitia! Odit, quasi corrupti doloribus fuga reprehenderit dolorum aliquid in mollitia voluptas ipsum inventore est ducimus, tenetur beatae, fugiat magnam dolor explicabo provident? Laboriosam ratione libero accusamus, labore necessitatibus sunt obcaecati? Autem natus voluptas quas dignissimos minus expedita, iure ipsam consectetur praesentium iusto. Necessitatibus atque delectus quod quisquam, aspernatur natus quis officia voluptas quas sed dolore labore corporis eum doloremque nostrum reprehenderit, laborum facilis ipsam. Blanditiis qui repellat consequatur nesciunt cupiditate laudantium quam ipsum mollitia, a tenetur illum sapiente voluptas molestiae voluptate minus rerum in nemo recusandae alias hic. Expedita, deleniti.</p>
            <h2>Content 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, mollitia! Odit, quasi corrupti doloribus fuga reprehenderit dolorum aliquid in mollitia voluptas ipsum inventore est ducimus, tenetur beatae, fugiat magnam dolor explicabo provident? Laboriosam ratione libero accusamus, labore necessitatibus sunt obcaecati? Autem natus voluptas quas dignissimos minus expedita, iure ipsam consectetur praesentium iusto. Necessitatibus atque delectus quod quisquam, aspernatur natus quis officia voluptas quas sed dolore labore corporis eum doloremque nostrum reprehenderit, laborum facilis ipsam. Blanditiis qui repellat consequatur nesciunt cupiditate laudantium quam ipsum mollitia, a tenetur illum sapiente voluptas molestiae voluptate minus rerum in nemo recusandae alias hic. Expedita, deleniti.</p>
        </section>
        <div id="sidebar">
        <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Portfolio</a>
            <a href="#">Contact</a>
        </div>
    </main>
    <!-- Main Section End -->

    <!-- Footer SEction Start -->
    <?php include 'footer.php' ?>
    <!-- Footer SEction End -->
</body>
</html>