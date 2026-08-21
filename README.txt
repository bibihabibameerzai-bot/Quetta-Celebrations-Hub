QUETTA CELEBRATIONS HUB - FINAL PROJECT
========================================
Requirements covered:
- Home, About, Services/Products, Contact
- Secure session-based admin login with password_hash/password_verify
- CRUD: Services, Products, Gallery, Team Members
- Image upload with extension/size validation
- MySQL/InnoDB relational database (services -> inquiries, products -> orders)
- Buy Now -> order saved in database
- Contact inquiry -> database
- Responsive Bootstrap 5.3
- Vanilla JavaScript; no jQuery
- WhatsApp: 0315 8118810
- Home event carousel changes every 3 seconds
- Other pages use compact text headers

INSTALLATION:
1. Put this folder directly in C:\xampp\htdocs\quetta-celebrations-hub
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin and import database/quetta_celebrations.sql
4. Visit http://localhost/quetta-celebrations-hub/
5. Admin: http://localhost/quetta-celebrations-hub/admin/login.php
6. Demo admin:
   Email: admin@quettacelebrations.com
   Password: Admin@12345

NOTE:
For production, change the demo admin password and database credentials.
The sample image paths are included as data references; replace them with your own uploaded images through the Admin Panel.

FIXED IN THIS BUILD:
- Restored missing Decor and Wedding Hub pages so Home buttons/links open.
- Fixed Home carousel JS target and 3-second rotation.
- Sample database image URLs are now realistic event/product images and display immediately.
- Admin image preview supports both remote URLs and uploaded local images.
- Fixed admin demo password hash.
- Footer uses the same stylish dark-pink theme on every public page.
- Added image URL field in admin content forms.

IMPORTANT FOR THIS FIX:
The product-detail.php file now explicitly loads includes/db.php before using $pdo.
If you previously copied files into C:\xampp\htdocs\quetta-celebrations, replace the old product-detail.php and css/style.css with the files from this ZIP, or replace the whole project folder.

UPDATED FULL SOFTWARE BUILD
===========================
This build expands Quetta Celebrations Hub into a full event planning and marketplace management system.

CUSTOMER MODULES:
- Home, About, Services, Decoration, Wedding Hub, Gift House, Gallery, Contact
- Plan My Event with budget-based suggested package
- Budget Planner with estimated/actual expenses
- Quetta Vendor Finder with area/category filters
- Verified vendor profiles and approved reviews
- Vendor/service booking requests
- Booking tracking by booking number
- Product ordering with stock validation and order number
- WhatsApp ordering/contact
- Customer registration, login, dashboard and logout

ADMIN MODULES:
- Secure admin login with hashed passwords and roles
- Dashboard statistics and recent orders
- Services CRUD
- Products CRUD
- Gallery CRUD
- Team CRUD
- Vendor management
- Booking management and status workflow
- Order management with expanded status workflow
- Inquiry management and status workflow
- Review moderation
- Quetta area management
- Coupons/discounts
- Notification center
- Admin user/role management
- Activity log
- Sales and product reports

DATABASE:
The SQL creates all required related tables and sample data. Import database/quetta_celebrations.sql into phpMyAdmin before opening the website.

ADMIN LOGIN:
Email: admin@quettacelebrations.com
Password: Admin@12345

LOCAL URL:
http://localhost/quetta-celebrations/

ADMIN URL:
http://localhost/quetta-celebrations/admin/login.php
