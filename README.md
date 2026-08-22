**Name: Bibi Habiba
Course: AI Web Development
Submission Date: August 22, 2026**

**Quetta Celebrations Hub**
Quetta Celebrations Hub is an all-in-one event planning platform built for Quetta. It lets people plan events, find local vendors, track bookings, and order gifts from a single place, replacing the usual back-and-forth over WhatsApp with one organized system.

**Overview**
Planning an event in Quetta today usually means juggling dozens of WhatsApp chats with vendors, losing track of who confirmed what, and struggling to keep the budget under control. This platform brings vendor discovery, bookings, budgeting, and gifting together in one place, so organizing an event feels less chaotic and more manageable.

**Key Features**
•Vendor Finder: Search and filter vendors by category, location, and price.
•Booking System: Book services and track their status as Pending, Confirmed, or Completed.
•Vendor Profiles: View vendor details, photos, services offered, and customer reviews.
•Budget Planner: Calculate and manage the total budget for an event in real time.
•Wedding Hub: A dedicated section for wedding vendors and curated packages.
•User Dashboard: Register, log in, and manage all bookings from one account.
•Admin Panel: Manage vendors, users, bookings, and site content.
•Marketplace: Browse the Gallery, Decor, and Gifts pages.

**Tech Stack**
•Frontend: HTML5, CSS3, JavaScript
•Backend: PHP
•Database: MySQL
•Server: Apache
•Local Environment: XAMPP

**Project Structure**
quetta-celebrations-hub/
├── admin/                Admin panel (vendors, users, bookings, content)
├── css/                  Stylesheets
├── images/               Site images and icons
├── includes/             Shared PHP includes (header, footer, config)
├── js/                   Client-side scripts
├── uploads/              Uploaded vendor and user files
├── database/             quetta_celebrations.sql, review_system_update.sql
├── .htaccess
├── index.php             Homepage
├── about.php             About the platform
├── contact.php           Contact page
├── services.php          Services overview
├── login.php             User login
├── logout.php            User logout
├── register.php          User registration
├── account.php           User account page
├── vendor-finder.php     Search and filter vendors
├── vendor-profile.php    Individual vendor profile
├── review-product.php    Submit a review
├── reviews.php           View reviews
├── booking.php           Create a booking
├── track-booking.php     Track booking status
├── plan-event.php        Event planning page
├── budget-planner.php    Budget planner tool
├── wedding-hub.php       Wedding vendors and packages
├── gallery.php           Marketplace: gallery
├── decor.php             Marketplace: decor
├── gifts.php             Marketplace: gifts
├── product-detail.php    Product detail page
└── README.txt

**Getting Started**
Before installing, make sure XAMPP (Apache, MySQL, and PHP) is installed along with a web browser. Then follow the steps below.
1.Copy the project folder into the XAMPP htdocs directory.
2.Start Apache and MySQL from the XAMPP Control Panel.
3.Open phpMyAdmin, create a database named quetta_hub, and import quetta_celebrations.sql from the database folder.
4.Then import review_system_update.sql from the same folder to add the review system tables.
5.Open the database connection file inside the includes folder and update the credentials if needed.
6.Visit http://localhost/22/qch-build/ in your browser to run the app.

**Roadmap**
•Vendor rating and review system
•Online payments for bookings
•SMS and WhatsApp booking notifications
•Mobile-responsive UI improvements

**Submitted By**
Bibi Habiba — AI Web Development
