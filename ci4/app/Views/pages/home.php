<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">My Profile</title>
    <link rel="icon" href="Images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="about.js"></script>
    <script src="introHeader.js"></script>
    <script src="hobMusic.js"></script>


</head>

<p id="personalWebsite"></p>

<body>

    <!-- Profile Information -->
    <div class="container">
        <div id="intro">
            <div id="intro2">
                <script>
                    const intro = {
                        firstName: "Paul",
                        secondName: "Lawrence",
                        lastName: "Saballo"
                    };

                    intro.firstNameColor = "#7DE2D1";

                    document.getElementById("intro").innerHTML =
                        "Hi, I'm <span style='color:" + intro.firstNameColor + ";'>" + intro.firstName + "</span> <br>" +
                        "<span style='color:white;'>" + intro.secondName + "</span> " +
                        "<span style='color:white;'>" + intro.lastName + "</span> <br>";
                </script>

            </div>
            <a class="button" href="#aboutMe">About Me</a>
            <div>

                <section class="infoLeft" id="aboutMe">
                    <nav>
                        <h2 id="about"> About Me:</h2>

                        <p id="info">
                            <?php
                            $name = "Paul";
                            echo "You can call me <b><span class=\"tiffanyBlue\">$name</span></b>.";
                            echo "I'm <span id=\"age\"></span><b> years old</b> born on <span id=\"birthdate\"></span>.";
                            ?>
                        </p>


                        <script>
                            <?php
                            $x = 20;

                            function myAge()
                            {
                                echo 'var x = ' . $GLOBALS['x'] . ';';
                            }

                            myAge();
                            ?>

                            document.getElementById("age").innerHTML = "<strong>" + x + "</strong>";
                        </script>


                        <script>
                            const d = new Date("August 5, 2003");
                            const birthdateElement = document.getElementById("birthdate");
                            const formattedDate = d.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })
                            birthdateElement.innerHTML = formattedDate;
                            console.log(formattedDate);
                        </script>


                        <p id=info>
                            I graduated junior high at <b>Guadalupe Catholic School</b> and senior high at <b>University
                                of
                                Makati</b> and currently studying at <b>Asia Pacific College with the course of
                                BSIT-MI.</b>
                        </p>

                    </nav>
                </section>

                <!-- Picture -->
                <img class="imgRound" src="<? echo  base_url ('Images/pic.jpg" alt="Profile" height="500');?>">
            </div>
        </div>
        <div class="quote" id="quote">
            <script>
                class AuthorName {
                    constructor(fname, lname) {
                        this.fname = fname;
                        this.lname = lname;
                    }
                }

                const name1 = new AuthorName("Paulo", "Coelho");

                <?php
                $fname = "Paulo";
                $lname = "Coelho";
                function getQuote()
                {
                    return "All battles in life serve to teach us something, even the battles we lose.<br>";
                }
                ?>

                dynamicQuote = "<?php echo getQuote(); ?>";

                document.getElementById("quote").innerHTML =
                    '<span class="quote-text">' + dynamicQuote + '</span>' +
                    '<span class="attribution"> – ' + name1.fname + ' ' + name1.lname + '</span>';
            </script>
        </div>




        <!-- Hobbies -->

        <div class="hobbies">
            <div>
                <h2>What I Like</h2>
            </div>
        </div>

        <div class="hobbiesContainer">

            <div class="box" id="hobbies1">
                <div class="likeBox">
                    <h4 class="likeText">Music</h4>
                    <img src="Images/spotify.PNG">

                    <div>
                        <p id="des1" class="likeDes"></p>

                        <script src="D:/Lalala/college/2nd Sem/WebProg/lab2/week5/hobMusic.js"></script>

                        <script>
                            document.getElementById("des1").innerHTML = text1;
                        </script>

                    </div>
                </div>

                <div class="box" id="hobbies2">
                    <div class="likeBox">
                        <h4 class="likeText">Games</h4>
                        <img src="Images/spotify.PNG">

                        <div>
                            <p id="des2" class="likeDes"></p>

                            <script>
                                let text2 = "I like listening to  music especially songs with rock sound or r&b type of songs.";
                                document.getElementById("des2").innerHTML = text2;
                            </script>


                        </div>
                    </div>
                </div>

                <div class="box" id="hobbies3">
                    <div class="likeBox">
                        <h4 class="likeText">Music</h4>
                        <img src="Images/spotify.PNG">

                        <div>
                            <p id="des3" class="likeDes"></p>

                            <script>
                                let text3 = "I like listening to  music especially songs with rock sound or r&b type of songs.";
                                document.getElementById("des3").innerHTML = text3;
                            </script>


                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Images with hyperlink -->

        <div class="footer">
            <footer>

                <div class="form-container">
                    <?php

                    $emailErr = $commentErr = "";
                    $email = $comment = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["email"])) {
                            $emailErr = "Email is required";
                        } else {
                            $email = test_input($_POST["email"]);
                            // check if e-mail address is well-formed
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                            }
                        }

                        if (empty($_POST["comment"])) {
                            $commentErr = "";
                        } else {
                            $comment = test_input($_POST["comment"]);
                        }
                    }

                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>

                    <!-- PHP -->

                    <h2>Feedback Form</h2>
                    <p><span class="error">* required field</span></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        E-mail: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"
                            style="color: #000000;">
                        <span class="error">*
                            <?php echo $emailErr; ?>
                        </span>
                        <br><br>
                        Comment: <textarea name="comment" rows="5" cols="40"
                            style="color: #000000;"><?php echo htmlspecialchars($comment); ?></textarea>
                        <br><br>
                        <div class="submit">
                            <input type="submit" name="submit" value="Submit"
                                style="border-radius: 30px; padding: 13px 30px; background-color: #7DE2D1; color: #000000;">
                        </div>
                    </form>

                    <?php
                    echo "<h2>Your Input:</h2>";
                    echo "<br>";
                    echo $email;
                    echo "<br>";
                    echo $comment;
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";


                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Feedback";


                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }


                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = $_POST['email'];
                        $comment = $_POST['comment'];

                        $stmt = $conn->prepare("INSERT INTO feedback (Email, Comment) VALUES (?, ?)");
                        $stmt->bind_param("ss", $email, $comment);

                        if ($stmt->execute()) {
                            echo "New record created successfully <br><br><br>";
                        } else {
                            echo "Error: " . $stmt->error;
                        }

                        $stmt->close();
                    }

                    $conn->close();
                    ?>

                </div>

                <div class="hyperlink">
                    <a href="https://github.com/plsaballo08" target="_blank">
                        <img src="<? echo  base_url ('Images/github-logo.png" alt="Github" width="40" height="40');?>">
                    </a>
                </div>

                <div class="hyperlink">
                    <a href="https://www.facebook.com/saballo0805/" target="_blank">
                        <img src="<? echo  base_url ('Images/fb.png" alt="Facebook" width="40" height="40');?>">
                    </a>
                </div>
            </footer>
        </div>

        <button class="back-button" onclick="goBack()">
            <img src="<? echo  base_url ('Images/up-button.png" alt="Back" width="30" height="30');?>">
        </button>

        <script>
            function goBack() {
                // Scroll to the top of the page
                window.scrollTo(0, 0);
            }
        </script>


</body>

</html>