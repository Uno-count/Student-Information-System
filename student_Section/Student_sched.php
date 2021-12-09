<?php
session_start();
if (isset($_SESSION['studno'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/student css/home.css">
        <script src="https://kit.fontawesome.com/b1b0cba1bb.js" crossorigin="anonymous"></script>
        <title>UCC SIS | Student</title>
    </head>

    <body>
        <header>
            <img class="logo" src="../assets/image/ucc logo.png">

            <nav>
                <ul class="nav_links">
                    <li><a href="./Student_index.php">HOME</a></li>
                    <li><a href="./Student_account.php">ACCOUNT</a></li>
                    <li><a class="activeForm" href="./Student_sched.php">SCHEDULE</a></li>
                    <li><a href="./Student_grades.php">GRADES</a></li>
                    <li><a href="./Student_enrollment.php">ENROLLMENT</a></li>
                </ul>
            </nav>
            <div class="selector">
                <div id="selectField">
                    <p id="selectext">2019216</p>
                    <img src="https://img.icons8.com/ios/50/ffffff/expand-arrow--v1.png" id="arrowIcon" />
                </div>
                <ul id="list" class="hide">
                    <li class="options">
                        <img src="https://img.icons8.com/dotty/80/000000/re-enter-pincode.png" />
                        <a href="#">Change Password</a>
                    </li>
                    <li class="options">
                        <img src="https://img.icons8.com/external-prettycons-lineal-prettycons/49/000000/external-exit-essentials-prettycons-lineal-prettycons.png" />
                        <a href="../student-logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </header>
        <section class="Sched-holder">
            <h1>School Year 2021 - 2022 - First Semester</h1>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Subject Course</th>
                            <th>Description</th>
                            <th>Units</th>
                            <th>Professor</th>
                            <th>Day</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Advanced Web Systems
                            </td>
                            <td data-label="Description">
                                CCS116
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Day">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Time">
                                Lorem ipsum dolor sit amet.
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Software Engineering 1
                            </td>
                            <td data-label="Description">
                                CS108
                            </td>
                            <td data-label="Units">
                                3
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Day">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Time">
                                Lorem ipsum dolor sit amet.
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Networking and Communications
                            </td>
                            <td data-label="Description">
                                CS110
                            </td>
                            <td data-label="Units">
                                3
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Day">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Time">
                                Lorem ipsum dolor sit amet.
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Graphics and Visual Computing
                            </td>
                            <td data-label="Description">
                                CSE102
                            </td>
                            <td data-label="Units">
                                3
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Day">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Time">
                                Lorem ipsum dolor sit amet.
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Information Assurance and Security
                            </td>
                            <td data-label="Description">
                                CS113
                            </td>
                            <td data-label="Units">
                                3
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Day">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Time">
                                Lorem ipsum dolor sit amet.
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Ethics
                            </td>
                            <td data-label="Description">
                                GEC008
                            </td>
                            <td data-label="Units">
                                3
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Day">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Time">
                                Lorem ipsum dolor sit amet.
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Science,Technology and Society
                            </td>
                            <td data-label="Description">
                                GEC007
                            </td>
                            <td data-label="Units">
                                3
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Day">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Time">
                                Lorem ipsum dolor sit amet.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
            <path fill="#00cba9" fill-opacity="0.8" d="M0,32L40,48C80,64,160,96,240,101.3C320,107,400,85,480,106.7C560,128,640,192,720,197.3C800,203,880,149,960,149.3C1040,149,1120,203,1200,224C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
        <script src="js/navbar.js"></script>
        <script>
            var selectField = document.getElementById("selectField");
            var selectext = document.getElementById("selectext");
            var options = document.getElementsByClassName("options");
            var list = document.getElementById("list");
            var arrowIcon = document.getElementById("arrowIcon");

            selectField.onclick = function() {
                list.classList.toggle("hide");
                arrowIcon.classList.toggle("rotate");
            }

            for (options of options) {
                options.onclick = function() {
                    list.classList.toggle("hide");
                    arrowIcon.classList.toggle("rotate");
                }
            }
        </script>
    <?php
} else {
    header("location:login.php");
}
    ?>
    </body>

    </html>