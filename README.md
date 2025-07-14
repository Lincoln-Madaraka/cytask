# Cytask - Task Management System

A PHP-based task management system that helps administrators assign and manage tasks while enabling employees to track progress and receive notifications.

## 🚀 Live Demo
🔗 [https://cytask-system.onrender.com](https://cytask-system.onrender.com)

## Login Credentials

> Used for demo testing
### 🧑‍💼 Admin
- Username: `admin`  
- Password: `123`

### 👷 Employee
- Username: `john`  
- Password: `123`

## 📁 Repository
🔗 [GitHub - Lincoln-Madaraka/cytask](https://github.com/Lincoln-Madaraka/cytask)

## Features
**User Role Management**: Admin and Employee roles with secure login.
-  **Task Management**: Create, update, delete, and categorize tasks.
-  **Due Dates & Overdue Alerts**: Track task deadlines and highlight overdue ones.
-  **In-App Notifications**: Users get alerts when new tasks are assigned.
-  **Filter & Status Tracking**: Track task progress (Pending, In Progress, Completed).
-  **Email Notification Integration** (via EmailJS) 
`Due to billing/card restrictions, full email notification setup via EmailJS was not finalized. However, all necessary placeholders (template ID, service ID) are implemented and ready for activation.`
  
- **Frontend**: HTML, CSS, Vanilla JS
- **Backend**: PHP (no frameworks)
- **Database**: MariaDB on Railway
- **Version Control**: Git & GitHub
- **Deployment**: Dockerized on Render [Live Site](https://cytask-system.onrender.com)
- **Email Notification (Planned)**: EmailJS (my optiona for this)

## My Directory Structure
`cytask/`
`├── app/`
`│ ├── Model/ # Database model classes (User, Task, Notification)`
`│ └── *.php # Core logic (login, add-task, notifications etc.)`
`├── css/ # Styling`
`├── img/ # My logo & .ico`
`├── inc/ # Header & navigation includes`
`├── *.php # Pages (login.php, profile.php, create_task.php...)`
`├── DB_connection.php # Database connection`
`├── Dockerfile # For containerization`
`├── docker-compose.yml # Service orchestration`
`├── README.md # This file`
`└── task_management_db.sql # My SQL dump file (MariaDB)`
## 🗃️ Database

- **Database Used**: MariaDB(MySQL ON Kali Linux) (hosted on Railway)
- **SQL Dump File**: [`task_management_db.sql`](./task_management_db.sql)

> This file contains all required tables (`users`, `tasks`, `notifications`) and seed data. It can be imported via:
> ```bash```
> ```mysql -u root -p railways < task_management_db.sql```

## Testing Notes
- Task creation triggers both a DB notification and prepares for email dispatch.
- The system gracefully handles invalid or empty due dates using NULL-safe checks.
- Notification history can be viewed under the user dashboard.
- All commits are visible on the [Commit History](https://github.com/Lincoln-Madaraka/cytask/commits/main/).

> © Lincoln Madaraka
