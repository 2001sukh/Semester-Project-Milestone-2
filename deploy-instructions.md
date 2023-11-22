## Deploy Instructions for My Semester Project Milestone - HungerHub

## Preparing My Local Code for Deployment

# Step 1: Setting Up My Local Environment

- I created a dgl123 project within the htdocs folder of my Apache document root.
- Then, I moved my semester project into this dgl123 folder.
- I reconnected GitHub Desktop to my project after relocating it.

# Step 2: Branch Management in GitHub

- I created a new branch on GitHub named Milestone3 specifically for deploying my code.
- I identified the git commit corresponding to my Milestone 3 work.
- From this commit, I created a new branch called deploym3, following GitHub's Branching Guide.
- I switched to the deploym3 branch using GitHub Desktop and opened the code in Visual Studio Code.

# Step 3: Adapting My Code

- I adjusted my project to fit the new dgl123 folder structure.
- If I used Laracasts router code, I modified httpd.conf, routes, and navigation partials, using examples from Slack.
- I made sure everything worked with the new folder structure by thoroughly testing it.

## Moving My Data to cPanel

# Step 4: Exporting My Local Database

- Using phpMyAdmin, I exported my local database.
- I made a note of my database name, as I will need it for the cPanel setup.

# Step 5: Database Setup on cPanel

- I uploaded my SQL file to my cPanel account.
- I created a new database on cPanel, naming it HungerHubm3, adding "m3" to my original database name.
- Then, I imported the SQL file into this new database.

## Setting Up Folder Structure in cPanel

# Step 6: Creating Directories in cPanel

- In the cPanel, I created a dgl123 folder in my public directory.
- Inside it, I added a subfolder for my project, using its original name.

## Uploading My Code to cPanel

# Step 7: Code Upload

- I extracted a zipped copy of my code from the deploym3 branch.
- Instead of cloning the repository, I just uploaded this code copy.
- I updated the database configuration in my PHP source to match the new database name with the "m3" suffix.

# Step 8: Final Testing on cPanel

- I thoroughly tested my website on the cPanel environment to ensure everything was functioning correctly.
- Finally, I took a screenshot of my site operating as proof of successful deployment.


# I'll continue to update these instructions with any additional details or challenges I encounter. This will help me keep track of my progress and serve as a reference for future deployments.