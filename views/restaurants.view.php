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
        </form>
    </div>

</body>

<?php require('partials/footer.php') ?>