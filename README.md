# Cytask - Task Management System

A PHP-based task management system that helps administrators assign and manage tasks while enabling employees to track progress a notificationsfunction.

## 🚀 Live Demo
🔗 [https://cytask-system.onrender.com](https://cytask-system.onrender.com)

## Login Credentials

> Used for demo testing
### 🧑‍💼 Admin
- Username: `admin`  
- Password: `123`

### 👷 Employee
- Username: `kim`  
- Password: `123`

## 📁 Repository
🔗 [GitHub - Lincoln-Madaraka/cytask](https://github.com/Lincoln-Madaraka/cytask)

## Features
**User Role Management**: Admin and Employee roles with secure login.
-  **Task Management**: Create, update, delete, and categorize tasks.
-  **Due Dates & Overdue Alerts**: Track task deadlines and highlight overdue ones.
-  **In-App Notifications**: Users get alerts when new tasks are assigned.
-  **Filter & Status Tracking**: Track task progress (Pending, In Progress, Completed).
  
- **Frontend**: HTML, CSS, Vanilla JS
- **Backend**: PHP (no frameworks)
- **Database**: MariaDB on Railway
- **Version Control**: Git & GitHub
- **Deployment**: Dockerized on Render [Live Site](https://cytask-system.onrender.com)
- **Email Notification (Planned)**: EmailJS (my optiona for this)

## My Directory Structure
```bash
cytask/
├── add-user.php
├── app/ #Database model classes (User, Task, Notification) and Core logic (login, add-task, notifications etc.)
├── css/
├── cytask_schema.sql
├── DB_connection.php
├── docker-compose.yml
├── Dockerfile
├── delete-task.php
├── delete-user.php
├── edit-task.php
├── edit-task-employee.php
├── edit-user.php
├── edit_profile.php
├── img/ #Logo & .ico
├── inc/ #Header & navigation includes
├── index.php
├── login.php
├── logout.php
├── my_task.php
├── notifications.php
├── profile.php
├── README.md
├── tasks.php
└── user.php
```

## Testing Notes
- Task creation triggers both a DB notification and prepares for email dispatch.
- The system gracefully handles invalid or empty due dates using NULL-safe checks.
- Notification history can be viewed under the user dashboard.
- All commits are visible on the [Commit History](https://github.com/Lincoln-Madaraka/cytask/commits/main/).

> © Lincoln Madaraka
