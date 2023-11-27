<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student CV</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Optional: Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      overflow-x: hidden; /* To hide horizontal scrollbar */
      background-color: #F0F0F0; /* Background color */
      color: #333; /* Text color */
    }

    header {
      position: relative;
      height: 100vh;
      color: #fff;
    }

    #video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.25); /* Adjust the transparency as needed */
    }

    .content {
      position: relative;
      z-index: 1;
      padding: 40px; /* Increased padding */
      text-align: center;
    }

    h1 {
      font-size: 3em;
      margin-bottom: 20px; /* Increased margin */
      color: #007BFF; /* Header text color */
    }

    .job-title {
      font-size: 1.8em; /* Increased font size */
      margin-bottom: 30px; /* Increased margin */
      color: #28A745; /* Job title text color */
    }

    .education,
    .skills {
      margin-bottom: 40px; /* Increased margin */
    }

    .social-icons a {
      color: #007BFF; /* Social icons color */
      margin: 0 15px; /* Increased margin */
    }
  </style>
</head>
<body>

  <header>
    <!-- Video Background -->
    <video id="video-background" autoplay muted loop>
      <source src="test.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Content -->
    <div class="content">
      <h1>Sushant Jadhao</h1>
      <p class="job-title">Computer Science Student</p>
      <p>Passionate about coding and exploring new technologies.</p>

      <!-- Education Section -->
      <div class="education">
        <h2>Education</h2>
        <p><strong>University Name</strong><br> B.Sc. in Computer Science<br> Graduation Year: 2023</p>
      </div>

      <!-- Skills Section -->
      <div class="skills">
        <h2>Skills</h2>
        <p>Programming Languages: Java, Python<br>Web Development: HTML, CSS, JavaScript, Bootstrap</p>
      </div>

      <!-- Social Icons -->
      <div class="social-icons">
        <a href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="#" target="_blank"><i class="fab fa-github fa-2x"></i></a>
      </div>
    </div>
  </header>

  <!-- Bootstrap and jQuery Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
