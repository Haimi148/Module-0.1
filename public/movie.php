<?php
// Connect to the database
$db = new mysqli("localhost", "username", "password", "database_name");

// Check for errors
if ($db->connect_errno) {
  echo "Failed to connect to database: " . $db->connect_error;
  exit();
}

// Fetch the movies from the database
// $query = "SELECT * FROM movies ORDER BY release_date DESC";
// $result = $db->query($query);

// // Display the movies in a grid of cards
// if ($result->num_rows > 0) {
//   while ($row = $result->fetch_assoc()) {
//     echo '<div class="movie-card">';
//     echo '<img src="' . $row["poster"] . '" alt="' . $row["title"] . '">';
//     echo '<h3>' . $row["title"] . '</h3>';
//     echo '<p>' . $row["genre"] . '</p>';
//     echo '<p>' . $row["release_date"] . '</p>';
//     echo '</div>';
//   }
// } else {
//   echo "No movies found.";
// }

// Close the database connection
// $db->close();
// ?>
