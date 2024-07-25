# QA-Learn-Web-Application
The "QA Learn" is a Software Quality Assurance (SQA) pre-screening test preparation web application consisting of Machine Learning-based Optical Character Recognition (OCR) technology and Artificial Intelligent based chatbot feature. This system is developed for people who are interested in beginning their career in Software Quality Assurance Engineering. This project represents a transformational initiative aimed at providing an open access web application to be accessible to a wide range of users without imposing any restrictions based on professional or organizational affiliations. By leveraging advanced 
technologies, this project introduces an integration of OCR tool, an AI-powered chatbot, and a live chat system within a user-centric web application. The application's core objective is to provide an interactive and personalized learning experience to candidates aspiring for SQA roles.

## Setting Up a Local Server with PHP and MySQL for "qalearn" Website
Step 1: Install XAMPP
- Download XAMPP (https://www.apachefriends.org/index.html) - a popular package that bundles Apache, PHP, MySQL, and other utilities.
- Run the installer and follow the instructions. Choose a directory for installation (e.g., C:\xampp).
- Start the XAMPP Control Panel after installation. Start the Apache and MySQL services by clicking the "Start" buttons next to them.

Step 2: Create the "qalearn" Project Directory
- Create a directory named "qalearn" in the htdocs folder of your XAMPP installation (e.g., C:\xampp\htdocs\qalearn).
  
Step 3: Download and Configure the Website Files
- Download or copy your "qalearn" website files into the qalearn directory you created.
- Configure the PHP website files as needed. Ensure the main page is named index.php.

Step 4: Configure MySQL Database
- Open a web browser and navigate to http://localhost/phpmyadmin.
- Click "New" to create a new database. Enter "qalearn" as the database name and choose utf8_general_ci as the collation.

Step 5: Connect PHP to MySQL
- In your PHP project files, use PHP's MySQLi functions or PDO to connect to the MySQL database.

Example using MySQLi:
- php
- Copy code
	$db = new mysqli("localhost", "root", "", "qalearn");
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
  }
  
Step 6: Access the Website
- Open your web browser and navigate to http://localhost/qalearn.
- You should see your PHP website running, interacting with the MySQL database.

Step 7: Troubleshooting
- If you encounter any issues, check the XAMPP Control Panel for the status of Apache and MySQL services.
- Check the Apache error logs in the XAMPP folder (e.g., C:\xampp\apache\logs\error.log) for error messages.

Step 8: Cleanup
- When you're done working, stop the Apache and MySQL services from the XAMPP Control Panel.
