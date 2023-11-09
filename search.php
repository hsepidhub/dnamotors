<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results - Motor Parts Store</title>
    <!-- Include any necessary CSS or JavaScript files here -->
</head>
<body>
    <h1>Search Results</h1>

    <?php
    // Handle the search query
    if (isset($_GET['query'])) {
        $query = $_GET['query'];

        // Simulate a database query (replace with your actual database query)
        $results = [
            ['id' => 1, 'name' => 'Brake Pads', 'description' => 'High-quality brake pads for your vehicle.', 'price' => 25.99],
            // Add more search results as needed
        ];

        if (!empty($results)) {
            echo '<ul>';
            foreach ($results as $result) {
                echo '<li>';
                echo '<h3>' . $result['name'] . '</h3>';
                echo '<p>' . $result['description'] . '</p>';
                echo '<p>Price: $' . number_format($result['price'], 2) . '</p>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No results found for "' . htmlspecialchars($query) . '".</p>';
        }
    } else {
        echo '<p>No search query specified.</p>';
    }
    ?>

    <!-- You can add more content or options here -->

    <!-- Footer section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Motor Parts Store</p>
    </footer>
    <script> // search.js

document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.querySelector("#search-form");
    const searchInput = document.querySelector("#search-input");
    const searchResults = document.querySelector("#search-results");

    searchForm.addEventListener("submit", function (e) {
        e.preventDefault();
        performSearch(searchInput.value);
    });

    function performSearch(query) {
        // Send an AJAX request to the server to fetch search results
        // You can use XMLHttpRequest or fetch API for this purpose
        // Replace the placeholder URL with your server's endpoint for searching

        const url = `search_backend.php?query=${encodeURIComponent(query)}`;

        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                displaySearchResults(data);
            })
            .catch((error) => {
                console.error("Error fetching search results:", error);
            });
    }

    function displaySearchResults(results) {
        // Clear previous results
        searchResults.innerHTML = "";

        if (results.length === 0) {
            searchResults.innerHTML = "<p>No results found.</p>";
            return;
        }

        // Create a list of search result items
        const resultList = document.createElement("ul");

        results.forEach((result) => {
            const listItem = document.createElement("li");
            listItem.innerHTML = `
                <h3>${result.name}</h3>
                <p>${result.description}</p>
                <p>Price: $${result.price.toFixed(2)}</p>
            `;
            resultList.appendChild(listItem);
        });

        searchResults.appendChild(resultList);
    }
});
 <script>
</body>
</html>
