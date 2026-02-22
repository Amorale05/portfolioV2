# Web Developer Landing Page - Standalone HTML/CSS

This package contains a complete, standalone landing page built with pure HTML, CSS, and JavaScript. Perfect for integration with PHP and databases.

## Files Included

1. **index.html** - Main HTML structure
2. **styles.css** - All styling (fully responsive)
3. **script.js** - JavaScript for form handling and smooth scrolling

## Features

- ✅ Fully responsive design (mobile, tablet, desktop)
- ✅ Clean, semantic HTML5
- ✅ Pure CSS (no frameworks required)
- ✅ Font Awesome icons (CDN)
- ✅ Google Fonts (Inter font family)
- ✅ Smooth scrolling navigation
- ✅ Contact form with JavaScript validation
- ✅ Scroll animations
- ✅ Ready for PHP integration

## Sections Included

1. **Hero** - Profile picture, introduction, CTA buttons, social links
2. **About** - Personal bio with feature cards
3. **Skills** - Technologies organized by Frontend, Backend, and Tools
4. **Projects** - Featured project cards with images
5. **Contact** - Contact information and form
6. **Footer** - Social links and copyright

## How to Use

### Basic Setup:
1. Create a new folder for your website
2. Copy all three files (index.html, styles.css, script.js) into the folder
3. Open index.html in a web browser

### For PHP Integration:

#### Dynamic Skills Section:
Replace the skills HTML in index.html with PHP to pull from database:

```php
<?php
// Fetch skills from database
$skills = $db->query("SELECT * FROM skills ORDER BY category, name");

while($skill = $skills->fetch_assoc()) {
    echo '<div class="tech-item">';
    echo '<div class="tech-icon ' . $skill['bg_class'] . '">';
    echo '<i class="' . $skill['icon_class'] . '"></i>';
    echo '</div>';
    echo '<span>' . $skill['name'] . '</span>';
    echo '</div>';
}
?>
```

#### Dynamic Projects Section:
Replace the projects HTML with PHP:

```php
<?php
$projects = $db->query("SELECT * FROM projects ORDER BY date DESC LIMIT 3");

while($project = $projects->fetch_assoc()) {
    echo '<div class="project-card">';
    echo '<div class="project-image">';
    echo '<img src="' . $project['image_url'] . '" alt="' . $project['title'] . '">';
    echo '</div>';
    echo '<div class="project-content">';
    echo '<h3>' . $project['title'] . '</h3>';
    echo '<p>' . $project['description'] . '</p>';
    // ... rest of project card HTML
    echo '</div>';
    echo '</div>';
}
?>
```

#### Contact Form Processing:
Create a `contact.php` file:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    // Validate
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email']);
        exit;
    }
    
    // Save to database
    $stmt = $db->prepare("INSERT INTO contacts (name, email, message, date) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Message sent!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error sending message']);
    }
}
?>
```

Then update the form in index.html:
```html
<form id="contactForm" action="contact.php" method="POST">
```

## Database Schema Examples

### Skills Table:
```sql
CREATE TABLE skills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    category ENUM('Frontend', 'Backend', 'Tools & Others') NOT NULL,
    icon_class VARCHAR(50),
    bg_class VARCHAR(50),
    display_order INT DEFAULT 0
);
```

### Projects Table:
```sql
CREATE TABLE projects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    image_url VARCHAR(255),
    github_url VARCHAR(255),
    demo_url VARCHAR(255),
    date DATE,
    tags VARCHAR(255)
);
```

### Contacts Table:
```sql
CREATE TABLE contacts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'replied') DEFAULT 'new'
);
```

## Customization

### Change Colors:
Edit the color values in `styles.css`. Main colors used:
- Primary Blue: `#3b82f6`
- Dark Background: `#0f172a`
- Light Background: `#f8fafc`

### Change Profile Picture:
Replace the image URL in the `<img>` tag inside `.profile-image` div

### Change Font:
Replace the Google Fonts link in index.html and update `font-family` in styles.css

### Modify Content:
Simply edit the text content in index.html - all text is easily accessible

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Tips

1. Optimize images before uploading (compress and resize)
2. Consider hosting Font Awesome locally instead of CDN
3. Minify CSS and JS for production
4. Enable GZIP compression on your server
5. Add caching headers in your PHP configuration

## Need Help?

All sections are clearly commented in the HTML file. Each CSS class is organized by section for easy modification.

Good luck with your portfolio! 🚀
