# Semester-Project-Milestone-2
DOCUMENTATION

Following is the documentation for the code which i did in Walkthrough 8: Laracast Videso 25-28 basically the changes that i did to the following files.

File 1: index.php

This file is the main entry point for the web application. It includes and configures the necessary components and routes the HTTP requests to various controllers.

File 2: Validator.php

This class, Validator, contains static methods for validating input data. It has two validation methods: string to check if a string falls within a given length range and email to validate email addresses.

File 3: config.php

This file contains configuration settings used in the application, such as database connection details.

File 4: note-create.php

This controller handles the creation of a new note. It validates the input data, and if no errors are found, it inserts the note into the database. After processing the request, it loads the 'note-create.view.php' view.

File 5: note.view.php

This controller retrieves and displays a specific note from the database, based on the 'id' provided in the URL. It checks if the user has permission to view the note and then loads the 'note.view.php' view.

File 6: notes.view.php

This controller lists all notes associated with a user. It retrieves the notes from the database and loads the 'notes.view.php' view to display them.

File 7: routes.php

This file contains route definitions that map URL paths to controller files. It is used by the application's routing mechanism to determine which controller to execute based on the requested URL.