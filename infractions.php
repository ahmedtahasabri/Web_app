<?php
session_start();
require 'connection_payment.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infractions</title>
    <link rel="stylesheet" href="infractions.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="page-background">
        <nav>
            <img src="Images/logo2.png" class="logo">
            <ul>
                <li><a href="accueil.html">Home</a></li>
                <li><a href="#">Personal information</a></li>
                <li><a href="#">Infractions</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
    </div>
    <div class="Test">
        <div class="safety-container">
            <img src="Images/rule4.png" class="safety">
        </div>
        <div class="text-container">
            <h1>Your Family Awaits, Drive Safely</h1>
        </div>
    </div>

    <div class="infractions-section">
        <div class="infractions-container">
            <h2>Infractions</h2>
            <p>List of traffic infractions and penalties:</p>
            <table class="infractions-table">
                <thead>
                    <tr>
                        <th>Infraction</th>
                        <th>Fine</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM individual_payment";
                    $result = mysqli_query($con, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>Traffic Violation " . htmlspecialchars($row['violation id']) . "</td>";
                            echo "<td>$30</td>"; // Assuming a fixed fine for simplicity
                            echo "<td>" . htmlspecialchars($row['time&date']) . "</td>";
                            echo "<td>" . ($row['status'] == 0 ? 'Unpaid' : 'Paid') . "</td>";
                            echo "<td>";
                            if ($row['status'] == 0) {
                                echo "<button onclick=\"location.href='payment_page.php?id=" . $row['violation id'] . "'\">Pay Now</button>";
                            } else {
                                echo "<button disabled>Paid</button>";
                            }
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No infractions found</td></tr>";
                    }

                    mysqli_close($con);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <div class="col-1">
            <div class="menu-title">
                <h3>MENU</h3>
            </div>
            <a href="accueil.html">Home</a>
            <a href="#">Personal information</a>
            <a href="#">Infractions</a>
            <a href="#">About us</a>
            <a href="#">Support</a>
        </div>
        <div class="col-2">
            <h3>Newsletter</h3>
            <form>
                <input type="email" placeholder="Your email address">
            </form>
            <form>
                <button>Subscribe now</button>
            </form>
        </div>
        <div class="col-3">
            <h3>CONTACT SUPPORT & SOCIAL MEDIA</h3>
            <p>contact@narsa.gov.ma</p>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fas fa-times"></i>
                <i class="fas fa-hippo"></i>
            </div>
        </div>
    </div>
</body>
</html>
