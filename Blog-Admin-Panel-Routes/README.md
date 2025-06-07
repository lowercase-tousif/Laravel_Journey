
# Laravel Routing Challenge: Blog Admin Panel

This project is a hands-on exercise designed to test and strengthen your understanding of advanced routing concepts in Laravel. You will build the complete routing structure for a simple blog's administration panel, focusing on structure, organization, and complex URL patterns.

## 🎯 Topics Covered

This exercise will specifically test your knowledge of:
- Laravel Project Installation
- Basic Routing
- Route Parameters & Constraints
- Named Routes
- Route Groups (including nested groups)
- Redirection
- Fallback Routes (Global and Group-Specific)

## 🚀 Setup Instructions

1.  **Create Project**: Open your terminal and create a new Laravel project.
    ```bash
    laravel new blog-backend
    ```

2.  **Navigate to Directory**:
    ```bash
    cd blog-backend
    ```

3.  **Start Server**: Start the local development server.
    ```bash
    php artisan serve
    ```
4.  **Open the Routes File**: All your work for this exercise will be done in the `routes/web.php` file.

## ✅ Tasks to Complete

Your goal is to implement the following routing logic in your `routes/web.php` file.

### Task 1: The Admin Foundation
- Create a main route group with a URL prefix of `/admin` and a route name prefix of `admin.`.
- Inside this group, create a `/dashboard` route. Name it `dashboard` (its full name will be `admin.dashboard`).
- Make the `/admin` URL redirect to the `admin.dashboard` route by its name.

### Task 2: Nested Groups for Post Management
- **Inside** the `admin` group, create another nested route group for blog posts. This group should have a URL prefix of `/posts` and a name prefix of `posts.`.
- Inside this `posts` group, create the following routes:
    - A route for `/` (e.g., `/admin/posts`). Name it `index`.
    - A route for `/create` (e.g., `/admin/posts/create`). Name it `create`.

### Task 3: Complex Dynamic Routes
- Inside the `posts` group, create a dynamic route to handle URLs like `/admin/posts/{id}/revisions/{revisionId}`.
- Apply **multiple constraints** to this route:
    - The `{id}` parameter **must be a number**.
    - The `{revisionId}` parameter **must be alphanumeric** (only letters and numbers).
- Name this route `revisions.show`.

### Task 4: Section-Specific Fallback
- Create a fallback route **inside the `/admin` group**. This will handle any invalid URL within the `/admin/...` section (e.g., `/admin/settings`). It should return a specific "Admin resource not found." message.
- Create a global fallback route (outside of any group) to handle all other 404 errors with a generic "Page Not Found" message.

## 🧪 How to Test Your Solution

Visit the following URLs in your browser to check if your implementation is correct:

| URL to Visit | Expected Outcome |
| :--- | :--- |
| `http://127.0.0.1:8000/admin` | Redirects you to `/admin/dashboard`. |
| `http://127.0.0.1:8000/admin/dashboard` | Shows the dashboard welcome message. |
| `http://127.0.0.1:8000/admin/posts` | Shows the "all posts" message. |
| `http://127.0.0.1:8000/admin/posts/123/revisions/a1b2c3d4` | **Success!** Shows the revision message. |
| `http://127.0.0.1:8000/admin/posts/abc/revisions/a1b2c3d4` | **404 Not Found** (because `{id}` is not a number). |
| `http://127.0.0.1:8000/admin/posts/123/revisions/a1-b2` | **404 Not Found** (because `{revisionId}` is not alphanumeric). |
| `http://127.0.0.1:8000/admin/invalid-page` | Shows your specific **"Admin resource not found."** message. |
| `http://127.0.0.1:8000/some-other-invalid-page` | Shows your generic **"Page Not Found"** message. |
