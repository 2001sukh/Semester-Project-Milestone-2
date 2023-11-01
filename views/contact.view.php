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

            <label for="date">Date of Visit (optional)</label>
            <input type="date" id="date" name="date">

            <label for="check-number">Check Number (optional)</label>
            <input type="text" id="check-number" name="check-number">

            <label for="time">Time of Visit (optional)</label>
            <input type="time" id="time" name="time">

            <label for="experience">What kind of dining experience did you have?</label>
            <select id="experience" name="experience">
                <option value="">Select</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>

            <label for="response">How shall we respond?</label>
            <select id="response" name="response">
                <option value="">Select</option>
                <option value="Email">Email</option>
                <option value="Phone">Phone</option>
            </select>

            <label for="comments">Tell us more!</label>
            <textarea id="comments" name="comments" rows="4"></textarea>

            <label for="attachments">Attachments (optional)</label>
            <input type="file" id="attachments" name="attachments">

            <button class="order-button" type="submit">Submit</button>
        </form>
    </div>

</body>

<?php require('partials/footer.php') ?>