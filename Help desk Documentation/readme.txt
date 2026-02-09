*AI WAS USED TO SUMARIZE (EXCEPT FOR HOW I USED AI )
================================================================================
                            TICKETSTORM
            Tech Support Ticket Management System
================================================================================

PROJECT PURPOSE
--------------------------------------------------------------------------------
TicketStorm is a professional web-based tech support ticketing system designed 
to streamline customer support operations. It allows users to submit support 
tickets, track their progress, and communicate with support staff. 

Administrators can manage all tickets, update statuses, set priorities, and 
respond to user inquiries through a comprehensive admin panel.

Key Features:
- User registration and secure authentication
- Ticket submission with priority levels (Low, Medium, High, Critical)
- Real-time ticket tracking and status updates
- Two-way communication via comments
- Admin dashboard with priority-based statistics
- Automatic ticket sorting by priority


TOOLS USED
--------------------------------------------------------------------------------
Frontend:
- HTML5
- CSS3 (Responsive design)
- Vanilla JavaScript (ES6+)
- Fetch API for async requests

Backend:
- PHP 8.1.33
- MySQLi for database connections
- Session-based authentication
- Password hashing (bcrypt)

Database:
- MariaDB/MySQL
- Database: blandland_blacksitedb_database
- User: blandland_admin

Server:
- Apache Web Server
- .htaccess for security headers
- SSH access (Port 21098)

Version Control:
- Git
- GitHub repository: blandland-ui/ticketstorm


SETUP INSTRUCTIONS
--------------------------------------------------------------------------------

1. DATABASE SETUP
   ---------------
   a) Open phpMyAdmin on your hosting panel
   b) Select database: blandland_blacksitedb_database
   c) Click the "SQL" tab
   d) Open file: database/setup.sql
   e) Copy the contents (SKIP the "USE database..." line)
   f) Paste into SQL tab and click "Go"
   g) Verify tables created: users, tickets, ticket_comments

   Default Admin Account Created:
   - Username: admin
   - Password: admin123


2. DATABASE CONFIGURATION
   -----------------------
   File: config/database.php
   
   Credentials already configured:
   - DB_HOST: localhost
   - DB_USER: blandland_admin
   - DB_PASS: The  hater# (note: two spaces)
   - DB_NAME: blandland_blacksitedb_database


3. SERVER DEPLOYMENT
   ------------------
   Method 1: Git (Recommended)
   
   a) Local Changes:
      git add .
      git commit -m "Your message"
      git push origin master
   
   b) On Server (SSH):
      ssh -i ~/.ssh/site_server_p_key blandland@198.54.125.130 -p 21098
      cd /home/blandland/public_html
      git reset --hard origin/master
   
   Method 2: PowerShell Scripts
   
   - Push changes: ./push.ps1 "commit message"
   - Pull to server: ./pull.ps1


4. FILE STRUCTURE
   ---------------
   /
   ├── index.html              Landing page
   ├── login.html              User login
   ├── register.html           User registration
   ├── dashboard.html          User ticket dashboard
   ├── new-ticket.html         Create new ticket
   ├── admin.html              Admin panel
   ├── api/
   │   ├── auth.php           Authentication API
   │   └── tickets.php        Ticket management API
   ├── config/
   │   └── database.php       Database connection
   ├── database/
   │   └── setup.sql          Database schema
   └── assets/
       └── css/
           └── style.css      Styling


5. ACCESSING THE SYSTEM
   ---------------------
   Website URL: https://blacksitedb.com
   
   User Access:
   1. Visit blacksitedb.com
   2. Click "Register" to create account
   3. Login with credentials
   4. Submit tickets from dashboard
   
   Admin Access:
   1. Login with admin credentials (username: admin, password: admin123)
   2. Red banner at top will show "Access Admin Panel" link
   3. Click to access admin dashboard
   
   OR
   
   To make existing user an admin:
   1. Login to phpMyAdmin
   2. Select database: blandland_blacksitedb_database
   3. Click "users" table
   4. Find your username row
   5. Edit: Change is_admin from 0 to 1
   6. Logout and login again


6. SECURITY NOTES
   ---------------
   - All passwords are hashed using bcrypt
   - SQL injection protected via prepared statements
   - Session-based authentication
   - Security headers configured in .htaccess
   - Database credentials stored in config/database.php
   - Delete test-credentials.php after verification


7. TROUBLESHOOTING
   ----------------
   Database Connection Error:
   - Verify credentials in config/database.php
   - Check database user permissions in cPanel
   - Ensure database tables exist (run setup.sql)
   
   Admin Link Not Showing:
   - Check is_admin = 1 in database
   - Logout and login again to refresh session
   - Check browser console for errors
   
   Tickets Not Displaying:
   - Verify tables exist in database
   - Check browser console for API errors
   - Ensure user is logged in


8. SUPPORT
   --------
   GitHub: https://github.com/blandland-ui/ticketstorm
   Server: 198.54.125.130
   Port: 21098

   
HOW AI WAS USED
--------------------------------------------------------------------------------
At first I was content on letting AI do its thing with the project but it 
kept wanting to create it in the form of a node.js or php application which 
for some reason would run fine on the localhost that chat started in VS but
when I try npm install and then run setup.js, nothing wanted to show. So 
after 2+ days of that I decided to make a static html site instead. Well,
Html/css/js is faster than node.js so I am unsure why it was so adament on
node.js. 
Anyway, I told Claude what I wanted to make in detail and for the most part
I have been able to refine it into working condition using AI prompts (some
hands on where needed). It really seemed like it already knew the assignment
but went about implementing it in the beginning until I had to forcefully 
delete every remnant of it and restart with a tight command to make it html.

I also used AI for research, namely on how to use git from command line 
ultimately leading up to me creating scripts for pushing from VS and a .sh 
for pull on my web-server. Git really is more complicated than it seems but
with AI and a bit of trial and error it is becoming less and less obfuscated.
  

================================================================================
Last Updated: November 20, 2025
Version: 1.0.0
================================================================================
