<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>

<!-- header section -->

<header class="header">

    <section class="flex">

        <div id="menu-btn" class="fas fa-bars-staggered"></div>

        <a href="home.html">
            <img src="JoB.svg" alt="">
        </a>
        <nav class="navbar">
            <a href="home.html">home</a>
            <a href="about.html">about</a>  
            <a href="jobs.html">all jobs</a>
            <a href="contact.html">contact us</a>
            <a href="login.html">account</a>
        </nav>

    </section>


</header>

<!-- header section -->

<!-- home section -->

<div class="home-container">

    <section class="home">

        <form action="" method="post">
            <h3>find your next job</h3>
            <p>job title <span>*</span></p>
            <input type="text" name="title" placeholder="keyword, category or company" required maxlength="20" class="input">
            <p>job location </p>
            <input type="text" name="location" placeholder="city, state, or country" required maxlength="5o" class="input">
            <input type="submit" value="search job" name="search" class="btn">
        </form>

    </section>

</div>

<!-- home section -->

<!-- category section -->

<section class="category">

    <h1 class="heading">job categories</h1>

<div class="box-container">

    <a href="#" class="box">
        <i class="fas fa-code"></i>
        <div>
            <h3>developer</h3>
            <span>2200 jobs</span>
        </div>
    </a>

    <a href="#" class="box">
        <i class="fas fa-pen"></i>
        <div>
            <h3>designer</h3>
            <span>500 jobs</span>
        </div>
    </a>

    <a href="#" class="box">
        <i class="fas fa-chalkboard-user"></i>
        <div>
            <h3>teacher</h3>
            <span>1500 jobs</span>
        </div>
    </a>

    <a href="#" class="box">
        <i class="fas fa-bullhorn"></i>
        <div>
            <h3>marketing</h3>
            <span>1200 jobs</span>
        </div>
    </a>

    <a href="#" class="box">
        <i class="fas fa-headset"></i>
        <div>
            <h3>services</h3>
            <span>3100 jobs</span>
        </div>
    </a>

    <a href="#" class="box">
        <i class="fas fa-wrench"></i>
        <div>
            <h3>engineer</h3>
            <span>400 jobs</span>
        </div>
    </a>

    <a href="#" class="box">
        <i class="fas fa-hand-holding-dollar"></i>
        <div>
            <h3>finance</h3>
            <span>1000 jobs</span>
        </div>
    </a>

    <a href="#" class="box">
        <i class="fas fa-person-digging"></i>
        <div>
            <h3>labour</h3>
            <span>4000 jobs</span>
        </div>
    </a>
</div>

</section>


<!-- category section -->


<!-- jobs section -->

<!-- Display the job post data -->
<section class="jobs-container">
    <h1 class="heading">Latest Jobs</h1>
    <!-- Display each job post -->
    <div class="box-container">
        <?php
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "job_portal";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to fetch job posts
        $sql = "SELECT * FROM job_posts";
        $result = $conn->query($sql);

        // Check if there are any job posts
        if ($result->num_rows > 0) {
            // Loop through each row in the result set
            while($row = $result->fetch_assoc()) {
                // Display job post details
                echo "<div class='box'>";
                echo "<div class='company'>";
                echo "<img src='placeholder.png' alt=''>";
                echo "<div>";
                echo "<h3>" . $row['company_name'] . "</h3>";
                echo "<span>" . $row['post_date'] . "</span>";
                echo "</div>";
                echo "</div>";
                echo "<h3 class='job-title'>" . $row['job_title'] . "</h3>";
                echo "<p class='location'><i class='fas fa-map-marker-alt'></i><span>" . $row['location'] . "</span></p>";
                echo "<div class='tags'>";
                echo "<p><i class='fas fa-peso-sign'></i><span>" . $row['salary'] . "</span></p>";
                echo "<p><i class='fas fa-briefcase'></i><span>" . $row['job_type'] . "</span></p>";
                echo "<p><i class='fas fa-clock'></i><span>" . $row['experience'] . "</span></p>";
                echo "</div>";
                echo "<div class='flex-btn'>";
                echo "<a href='view_job.php?id=" . $row['id'] . "' class='btn'>View Details</a>"; // Assuming you have a view job page
                echo "<button type='submit' class='far fa-heart' name='save'></button>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No job posts available";
        }

        // Close connection
        $conn->close();
        ?>
    </div>
    <!-- View all jobs button -->
    <div style="text-align: center; margin-top: 2rem;">
        <a href="jobs.html" class="btn">View All</a>
    </div>
</section>


<!-- jobs section -->

<!-- footer section -->

<footer class="footer">

    <section class="grid">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.html"><i class="fas fa-angle-right"></i>about</a>
            <a href="jobs.html"><i class="fas fa-angle-right"></i>all jobs</a>
            <a href="contact.html"><i class="fas fa-angle-right"></i>contact us</a>
            <a href="#"><i class="fas fa-angle-right"></i>filter search</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>account</a>
            <a href="login.html"><i class="fas fa-angle-right"></i>login</a>
            <a href="register.html"><i class="fas fa-angle-right"></i>register</a>
            <a href="#"><i class="fas fa-angle-right"></i>post job</a>
            <a href="#"><i class="fas fa-angle-right"></i>dashboard</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>

        </div>

    </section>

    <div class="credit">&copy; copyright @ 2024 by <span>PAULO</span> | all rights reserved</div>

</footer>







<!-- footer section -->


<script src="script.js"></script>

</body>
</html>