# DevVerse Forum

**DevVerse Forum** is a lightweight, dynamic discussion platform built using PHP, MySQL, and modern UI components. It allows developers and tech enthusiasts to register, ask questions under specific categories, join ongoing technical discussions, and search through community-driven threads.

---

## 🚀 Features

- **User Authentication:** Secure registration and login flow utilizing modern password hashing (`password_hash` & `password_verify`).
- **Interactive Forums & Threads:** Categorized discussions where users can post technical questions and reply to existing threads.
- **Full-Text Search:** Query threads directly using database-backed full-text match indexing.
- **Glassmorphism UI Design:** Modern aesthetic featuring CSS animations, custom input field controls (password toggles), and responsive layouts.
- **XSS Protection:** Input sanitization on thread titles and content to protect against script injection attacks.

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript (Vanilla ES6), Bootstrap 4
- **Backend:** PHP 7.x/8.x
- **Database:** MySQL / MariaDB

---

## 📂 Project Structure

```text
├── index.php         # Homepage / Dashboard
├── login.php         # User authentication login interface
├── signup.php        # User registration interface
├── logout.php       # Session termination
├── thread.php        # Threads listed by category & question submission
├── comment.php       # Thread discussion and comment replies
├── seacrh.php        # Search query results page
├── service.php       # Programming services page
├── about.php         # Platform information
├── contact.php       # Interactive contact form
└── doucment/
    ├── connect.php   # Database connection file
    ├── header.php    # Shared navigation header
    └── footer.php    # Shared footer component
```

---

## ⚙️ Installation & Setup

1. **Clone or Download the Repository:**
   Place the project directory into your server root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
   Ensure the directory name matches `/mirror project/` or update path references in the source files accordingly.

2. **Database Configuration:**
   - Import or configure your MySQL database containing tables: `users`, `categary`, `thread`, and `comment`.
   - Ensure a **FULLTEXT** index is created on `thread_tittle` and `thread_description` inside the `thread` table for search functionality:
     ```sql
     ALTER TABLE thread ADD FULLTEXT(thread_tittle, thread_description);
     ```
   - Update database credentials in `doucment/connect.php`.

3. **Run the Project:**
   Start your Apache and MySQL servers, then navigate to:
   `http://localhost/mirror project/index.php`

---

## 🔒 Security Recommendations

- **SQL Injection:** Consider updating legacy inline MySQL queries (`mysqli_query`) to **Prepared Statements** (`mysqli_stmt`) for safer parameter binding.
- **Path Consistency:** Ensure directory names (e.g., `doucment`) and form action URIs match your deployment paths.