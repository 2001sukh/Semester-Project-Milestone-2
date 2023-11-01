<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<body>
<div class="background-container">
        <div class="background-image"></div>
    </div>

    <div class="formtext-container">
        <h2>Feedback Form</h2>
        <form action="submit-feedback.php" method="post">
            <label for="name">First & Last Name</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Your email address</label>
            <input type="email" id="email" name="email" required>

            <label for="location">Are your comments related to a particular location?</label>
            <select id="location" name="location">
                <option value="">Select</option>
                <option value="Location 1">Location 1</option>
                <option value="Location 2">Location 2</option>
                <option value="Location 3">Location 3</option>
            </select>

        </form>
    </div>

</body>

<?php require('partials/footer.php') ?>