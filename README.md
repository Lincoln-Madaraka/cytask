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

## Testing Notes
- Task creation triggers both a DB notification and prepares for email dispatch.
- The system gracefully handles invalid or empty due dates using NULL-safe checks.
- Notification history can be viewed under the user dashboard.
- All commits are visible on the [Commit History](https://github.com/Lincoln-Madaraka/cytask/commits/main/).

> © Lincoln Madaraka
