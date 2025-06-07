

# 🧪 Laravel Routing Exercises – Beginner to Intermediate

This guide helps you practice essential **Laravel routing** concepts, from setting up a basic project to handling dynamic routes and custom 404 pages.

---

## 🚀 Exercise 1: Project Setup & Basic Pages

**Objective:** Learn how to initialize a Laravel project and define fundamental routes.

### ✅ Step 1: Create a New Laravel Project

```bash
laravel new my-portfolio

```

### ✅ Step 2: Serve the Application

```bash
cd my-portfolio
composer run dev

```

### ✅ Step 3: Create Basic Routes

In `routes/web.php`, define:

-   `/` → `"Welcome to my homepage!"`
    
-   `/about` → `"About Me: I am a Laravel developer."`
    
-   `/contact` → `"Contact me here."`
    



## 🧭 Exercise 2: Route Naming & Redirection

**Objective:** Make routes easier to manage and gracefully handle outdated URLs.

### ✅ Step 1: Name Your Routes

Name each route:

-   `/` → `home`
    
-   `/about` → `about`
    
-   `/contact` → `contact`
    

### ✅ Step 2: Create a Redirect

Route: `/old-contact-page`  
→ Permanently redirects to `/contact` using route name.



## 🗂️ Exercise 3: Grouping Project Routes

**Objective:** Organize related routes using **route groups** and **prefixes**.

Inside a `/projects` group:

-   `/projects` → `"Here are my awesome projects."`
    
-   `/projects/featured` → `"This is my most featured project."`
    


## 🔣 Exercise 4: Dynamic Routes & Parameter Constraints

**Objective:** Work with **dynamic parameters** and **constraints**.

-   `/projects/{id}` → `"Showing project with ID: [id]"`  
    **Constraint:** Only numbers (e.g., `/projects/abc` returns 404)
    
-   `/projects/category/{name}` → `"Projects in category: [name]"`  
    **Constraint:** Only `web`, `mobile`, or `game` allowed.
    



## 🚫 Exercise 5: Custom Fallback Route (404 Handling)

**Objective:** Catch undefined URLs with a friendly message.

Create a fallback route at the **bottom of `web.php`**:

-   Return message: `"Whoops! The page you are looking for doesn't exist."`
    
-   Status: **404**
    


## 📌 Available Routes

Routes & Description

`/`

🏠 Homepage — `"Welcome to my homepage!"`

`/about`

👤 About — `"About Me: I am a Laravel developer."`

`/contact`

📬 Contact — `"Contact me here."`

`/old-contact-page`

🔁 Redirect — Permanently redirects to `/contact`

`/projects`

💼 Projects Index — `"Here are my awesome projects."`

`/projects/featured`

🌟 Featured Project — `"This is my most featured project."`

`/projects/{id}`

🔢 Project Detail — Dynamic numeric ID**Constraint:** Only numbers

`/projects/category/{name}`

🗂️ Project Category — Dynamic category name**Constraint:** `web`, `mobile`, or `game` only

