# Laravel Blade Templating Challenge: Dynamic Product Page

This project is a hands-on exercise designed to master advanced Blade templating directives in Laravel. The primary goal is to build a single, dynamic product display page that changes its content and layout based on the data passed from the route, without using a master layout (`@extends`).

This project focuses heavily on the "include-only" architecture and conditional rendering, which are crucial for creating complex, component-based views.


## 🎯 Key Concepts Practiced

This exercise covers the following core Laravel features:

-   **Routing:**
    -   Defining routes with multiple parameters (`/products/{type}/{slug}`).
    -   Applying complex route constraints (`where` with regex).
-   **Views & Blade:**
    -   Passing complex data arrays from routes to views.
    -   Basic partial includes with **`@include`**.
    -   Conditional includes with **`@includeWhen`** (e.g., for a sale banner).
    -   Optional file includes with **`@includeIf`** (for non-essential content).
    -   Using raw PHP within Blade for calculations via the **`@php`** directive.
    -   Building a complete page structure by composing partials.


## 🚀 How to Set Up

1.  **Create Project**: Open your terminal and create a new Laravel project.
    ```bash
    laravel new blade-shop
    ```

2.  **Navigate to Directory**:
    ```bash
    cd blade-shop
    ```

3.  **Copy Files**: Place the `web.php` route logic and all the `.blade.php` files in their correct locations (`routes/` and `resources/views/`).

4.  **Start Server**: Start the local development server to see the project in action.
    ```bash
    php artisan serve
    ```


## ⚙️ How It Works

The entire system is powered by a single "smart" route and a highly dynamic view.

1.  **The Route (`routes/web.php`):**
    -   A single route `GET /products/{type}/{slug}` captures all product requests.
    -   It's constrained to only accept 'book' or 'gadget' as a `type`.
    -   Based on the `type`, it creates a mock data array (simulating a database query) containing all the product's details, including boolean flags like `on_sale`.
    -   It then passes this data array to the `product-details` view.

2.  **The View (`resources/views/product-details.blade.php`):**
    -   This file acts as the main assembler for the page.
    -   It includes a common header and footer.
    -   It uses the data passed from the route to conditionally include other partials. For example, `partials/sale_banner.blade.php` is only shown if the `on_sale` flag is `true`.
    -   It dynamically includes different detail sections (`book_details` or `gadget_details`) based on the product's `type`.


## 🧪 How to Test

To see the dynamic content in action, visit the following URLs:

-   **Test a Book on Sale:**
    `http://127.0.0.1:8000/products/book/the-pragmatic-programmer`
    -   *Expected Outcome:* You should see the book's details (Author, Pages) AND the "ON SALE!" banner.

-   **Test a Gadget (Not on Sale):**
    `http://127.0.0.1:8000/products/gadget/ergonomic-mouse`
    -   *Expected Outcome:* You should see the gadget's details (Warranty, Color) but **NO** sale banner.

-   **Test the `@includeIf` directive:**
    1.  Make sure the file `resources/views/partials/special-note.blade.php` **does not exist**. Load any product page. The page should load without any errors.
    2.  Now, **create** that file and add some text to it. Refresh the product page. The text should now appear without any other code changes.