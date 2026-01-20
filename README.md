🎵 lostandfound: Music Zine Theme
A lightweight, performance-focused WordPress theme built for independent music journalism, record reviews, and scene reporting.

🛠 Project Philosophy
lostandfound is designed to be fast, accessible, and easy to maintain. It moves away from "legacy bloat" by utilizing modern PHP 8.x features, a clean class-based widget system, and modular templates.

Zero Bloat: No heavy libraries or jQuery dependencies for core navigation.

Performance First: Optimized image loading (eager for featured images).

Modular Architecture: Logic is separated into /inc and /classes for better organization.

📂 Directory Structure
Plaintext

lostandfound/
├── classes/           # Custom PHP classes (Widgets, Helpers)
├── inc/               # Hooks, filters, and theme setup
├── template-parts/    # Reusable HTML snippets (content, sidebars)
├── assets/            # CSS, JS, and Images
├── functions.php      # Main theme entry point
└── style.css          # Theme metadata and global styles
🚀 Key Features
Custom Widget System
Includes a modernized Recent Posts Widget specifically tailored for the zine layout.

Class: Lost_And_Found_Recent_Posts

Location: classes/class-lost-and-found-recent-posts.php

Features: Thumbnail support, accessibility fixes, and automated date formatting.

Template Hierarchy
The theme uses a refined template part system to keep code clean:

archive.php: Dynamic grid for record reviews and categories.

single.php: Uses template-parts/content-single.php for high-readability interviews.

Sidebars: All sidebar logic is organized within template-parts/sidebars/.

🔧 Installation & Setup
Upload: Place the lostandfound folder into your /wp-content/themes/ directory.

Activate: Go to Appearance > Themes and activate lostandfound.

Widgets: Navigate to Appearance > Widgets to set up the custom Recent Posts widget in your sidebar.

Excluding Categories
To hide specific categories from the main feed (e.g., hiding "Internal" posts), use the custom filter provided in inc/widgets.php.

💻 Technical Notes
Minimum Requirements: PHP 7.4+ (PHP 8.2+ recommended).

CSS Approach: Uses standard WordPress classes (entry-header, entry-content) to ensure 100% compatibility with existing plugins.

JS: Vanilla JavaScript only.

📝 License
This theme is released under the GPLv2 or later license.