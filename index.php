<?php include 'header.php'; ?>

    <main>
        <h2>Welcome to Our Campus</h2>
        <p>This is the homepage content. You can add dynamic data here from a database.</p>
        <?php
            // Example of a dynamic message
            $current_date = date("F j, Y");
            echo "<p>Today's date is: " . $current_date . "</p>";
        ?>
    </main>

<?php include 'footer.php'; ?>
