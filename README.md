# 📚 DIU Library Management System

A complete **Library Management System** built using **PHP, MySQL, and Tailwind CSS**.
This project provides an admin dashboard to manage books, users, and transactions efficiently.

---

## 🚀 Features

* 🔐 **Authentication System**

  * Admin login & logout
  * Session-based access control

* 📊 **Dashboard**

  * Total Books
  * Assigned Books
  * Returned Books
  * Total Users

* 📚 **Books Management (CRUD)**

  * Add Book
  * View Books
  * Edit Book
  * Delete Book

* 👤 **User Management (CRUD)**

  * Add User
  * View Users
  * Edit User
  * Delete User

* 🔄 **Book Transactions**

  * Assign Book to User
  * Return Book
  * Track issue & return status

* 🎨 **Modern UI**

  * Built with Tailwind CSS
  * Responsive design (Mobile + Desktop)
  * Sidebar navigation + dashboard layout

---

## 🛠️ Tech Stack

* **Frontend:** HTML, Tailwind CSS
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP (Apache + MySQL)

---

## 📁 Project Structure

```
lms/
│
├── db.php
├── login.php
├── logout.php
├── dashboard.php
│
├── books.php
├── add_book.php
├── edit_book.php
├── delete_book.php
│
├── users.php
├── add_user.php
├── edit_user.php
├── delete_user.php
│
├── assign_book.php
├── return_book.php
│
└── assets/
    └── images/
```

---

## 🗄️ Database Setup

1. Open **phpMyAdmin**
2. Create a database named:

```
lms
```

3. Run the following SQL:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) DEFAULT NULL,
    address TEXT DEFAULT NULL,
    student_id VARCHAR(50) DEFAULT NULL,
    email VARCHAR(100) DEFAULT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    department VARCHAR(100) DEFAULT NULL,
    password VARCHAR(100) DEFAULT NULL,
    role VARCHAR(20) DEFAULT 'student'
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) DEFAULT NULL,
    author VARCHAR(100) DEFAULT NULL,
    category VARCHAR(50) DEFAULT NULL,
    isbn VARCHAR(50) DEFAULT NULL,
    status VARCHAR(20) DEFAULT 'Available',
    quantity INT NOT NULL DEFAULT 1,
    added_date DATE DEFAULT NULL
);

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    user_id INT,
    issue_date DATE DEFAULT CURRENT_DATE,
    return_date DATE DEFAULT NULL,
    status VARCHAR(20) DEFAULT 'issued',

    FOREIGN KEY (book_id) REFERENCES books(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

---

## ⚙️ Installation & Setup

1. Install **XAMPP**
2. Move project folder to:

```
C:\xampp\htdocs\
```

3. Start:

   * Apache ✅
   * MySQL ✅

4. Open browser:

```
http://localhost/lms/login.php
```

---

## 🔑 Demo Credentials

```
Email: admin@gmail.com
Password: 1234
```

---

## 🔐 Security Note

* Passwords are stored as plain text (for academic/demo purposes)
* For production:

  * Use `password_hash()`
  * Use prepared statements

---

## 🎯 Learning Outcomes

This project demonstrates:

* PHP CRUD operations
* MySQL database design (3NF)
* Session-based authentication
* Dynamic data rendering
* Full-stack project structure

---

## 📌 Future Improvements

* 🔍 Search & filter system
* 📊 Dashboard charts
* 🔐 Secure authentication (hashed password)
* 📱 Mobile optimization
* 📥 Export reports

---

## 👨‍💻 Author

**Shishir**
BSc in CSE | DIU
Aspiring Full Stack Developer 🚀

---

## ⭐ Support

If you like this project, consider giving it a ⭐ on GitHub!
