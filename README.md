# Semester-Project-Milestone-4

## DOCUMENTATION

## Milestone 3 and 4 Overview:

# Enhanced Registration Process (Milestone 3):

- User-Initiated Registration: The process initiates when the 'register' POST variable is detected, signaling a user's intent to register.
Secure User Input Handling: User inputs like username, email, full name, and password are collected from the registration form. These inputs are sanitized for security using mysqli_real_escape_string.

- Mandatory Data Validation: The system checks that all essential fields (username, email, full name, password) are completed by the user.
Advanced Duplicate User Management:

- Sophisticated User Check: A SQL query inspects the registered_users database to identify any pre-existing accounts with identical usernames or emails. Parameterized queries are employed for enhanced SQL injection protection.

- Query Execution and User Feedback: The query's results are analyzed for duplicates. If existing accounts are found, users are promptly informed via JavaScript alerts to prevent redundant registrations.

## Streamlined Registration for New Users:

- Robust Password Security: Passwords are securely hashed using password_hash.
Efficient User Data Insertion: New user data is inserted into the registered_users table via a prepared SQL query.
Interactive User Confirmation: Post-registration, users receive a JavaScript alert confirming their successful registration or notifying them of any errors.
Reliable Database Connection Management:

- Stable Database Connectivity: The system uses mysqli_connect to connect to the MySQL database and alerts users of any connectivity issues.
Intuitive User Interface for Authentication:

- User-Friendly Authentication Interface: The system displays login and registration buttons, triggering modal pop-up forms for user interaction.
Expected Outcomes of Milestone 3:

- Clear notifications for incomplete fields, duplicate accounts, successful registration, and database connectivity issues.
An engaging interface with easy-to-use login and registration features.

## Enhanced Login Process (Milestone 4):

- Login Attempt Detection: The system identifies login attempts via the 'login' POST variable.

- Sanitized User Input: Inputs for email/username and password are sanitized to prevent SQL injection.

- Accurate User Verification: A prepared statement checks the registered_users table for the entered email/username.

- Password Verification and Session Management: Upon a successful match, the system compares the entered password with the stored hash, initiating a session for successful logins.

- Efficient Redirection and Feedback: Successful logins redirect to index.php with a welcome message, while incorrect credentials trigger alerts.


## Displaying Username Post-Login:

- Personalized User Greeting: Logged-in users are welcomed with a message displaying their username, enhancing personalization.

## Seamless Logout Process:

- Effective Session Termination: The logout process involves unsetting all session variables and destroying the session, followed by a redirect to index.php.


## Expected Outcomes of Milestone 4:

- Smooth login transitions with personalized greetings upon successful authentication.
- Immediate alerts for incorrect login credentials or unregistered users.
- A seamless logout experience with proper session management.

##  Overall Project Ambitions:

- The core objective of the HungerHub project is to craft a high-quality, user-centric website with efficient registration, login, and content navigation capabilities. The project aspires to offer a smooth and secure user experience from account creation to content access.

## Progress Summary from Milestones 3 to 4:

- Milestone 3: Successful establishment of a robust registration system, inclusive of secure input handling, password encryption, and duplicate account prevention.

- Milestone 4: Integration of comprehensive login and logout procedures, personalized user interactions, and overall enhancement of user experience.
The project adeptly addresses challenges such as database connectivity, security measures, user feedback mechanisms, session control, and interface improvements, contributing to a highly functional and user-friendly website.