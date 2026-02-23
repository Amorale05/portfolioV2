<?php
    include_once('config/db.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Morales - Full-Stack Web Developer</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Hero -->
    <section id="hero" class="hero">
        <div class="hero-content">
            <div class="profile-container">
                <div class="profile-image">
                    <img src="./img/Adrian_Foto_Pro_Crop.jpeg" alt="Adrian Morales Profile Picture">
                </div>
                <span class="badge">Welcome to my portfolio</span>
            </div>
            
            <h1 class="hero-title">
                Hi, I'm <span class="highlight">Adrian Morales</span>
            </h1>
            
            <p class="hero-subtitle">Full-Stack Developer</p>
            
            <p class="hero-description">
                Computer Science Engineer Student with hands-on experience in both frontend and backend solutions. I specialize in building responsive, user-friendly web applications that solve real-world problems. 
            </p>
            
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">
                    View My Work
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#contact" class="btn btn-secondary">Contact me</a>
            </div>
            
            <div class="social-links">
                <a href="https://github.com/Amorale05" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/amorales05" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="mailto:amorale006@gmail.com" aria-label="Email">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <p class="section-description">
                I'm a passionate developer with 5+ years of experience building scalable 
                applications and bringing creative visions to life.
            </p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon bg-blue">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Clean Code</h3>
                    <p>I write maintainable, scalable code following best practices and modern design patterns.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon bg-purple">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>UI/UX Focus</h3>
                    <p>Creating beautiful interfaces with great user experience is at the heart of what I do.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon bg-green">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Performance</h3>
                    <p>Building fast, optimized applications that deliver seamless user experiences.</p>
                </div>
            </div>
            
            <div class="about-text">
                <p>
                    When I'm not coding, you'll find me exploring new technologies, enjoying some of my other hobbies like playing videogames and listening to music, or sharing my knowledge through tutoring younger students. I'm currently practicing to improve my skills as a software developer and looking forward to meet more people involved in this area of investigation.
                </p>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <?php
    $skills = [
        'frontend' => [],
        'backend'  => [],
        'other'    => []
    ];

    $result = $conn->query("SELECT nombre, imagen, categoria FROM skill ORDER BY nombre");

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $skills[$row['categoria']][] = $row;
    }
    ?>

    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Technologies I Work With</h2>
            <p class="section-description">
                Here are some of the programming languages and tools I use to bring most of my projects to life. I'm always eager to learn new technologies and expand my skill set!
            </p>

            <div class="skills-grid">

                <!-- Frontend -->
                <div class="skill-category">
                    <h3 class="category-title">Frontend</h3>
                    <div class="tech-grid">
                        <?php foreach ($skills['frontend'] as $s): ?>
                            <div class="tech-item">
                                <div class="tech-icon bg-blue">
                                    <img src="<?= htmlspecialchars($s['imagen']) ?>"
                                        alt="<?= htmlspecialchars($s['nombre']) ?>"
                                        style="width:100%;height:100%;object-fit:cover;border-radius:4px;">
                                </div>
                                <span><?= htmlspecialchars($s['nombre']) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Backend -->
                <div class="skill-category">
                    <h3 class="category-title">Backend</h3>
                    <div class="tech-grid">
                        <?php foreach ($skills['backend'] as $s): ?>
                            <div class="tech-item">
                                <div class="tech-icon bg-green">
                                    <img src="<?= htmlspecialchars($s['imagen']) ?>"
                                        alt="<?= htmlspecialchars($s['nombre']) ?>"
                                        style="width:100%;height:100%;object-fit:cover;border-radius:4px;">
                                </div>
                                <span><?= htmlspecialchars($s['nombre']) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Tools & Others -->
                <div class="skill-category">
                    <h3 class="category-title">Tools & Others</h3>
                    <div class="tech-grid">
                        <?php foreach ($skills['other'] as $s): ?>
                            <div class="tech-item">
                                <div class="tech-icon bg-orange">
                                    <img src="<?= htmlspecialchars($s['imagen']) ?>"
                                        alt="<?= htmlspecialchars($s['nombre']) ?>"
                                        style="width:100%;height:100%;object-fit:cover;border-radius:4px;">
                                </div>
                                <span><?= htmlspecialchars($s['nombre']) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Projects -->
    <?php
    $projects = $conn->query(
        "SELECT titulo, descripcion, imagen, technologies, github, demo
        FROM project
        ORDER BY id DESC"
    );
    ?>

    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-description">
                Here are some of my recent projects that showcase my skills and expertise
            </p>

            <div class="projects-grid">

                <?php while($p = $projects->fetch(PDO::FETCH_ASSOC)): ?>

                <div class="project-card">

                    <div class="project-image">
                        <img src="<?= htmlspecialchars($p['imagen']) ?>"
                            alt="<?= htmlspecialchars($p['titulo']) ?>">
                    </div>

                    <div class="project-content">
                        <h3><?= htmlspecialchars($p['titulo']) ?></h3>

                        <p><?= htmlspecialchars($p['descripcion']) ?></p>

                        <div class="project-tags">
                            <?php
                            $tags = array_map('trim', explode(',', $p['technologies']));
                            foreach ($tags as $tag):
                                if ($tag === "") continue;
                            ?>
                                <span class="tag"><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>

                        <div class="project-links">

                            <?php if (!empty($p['github'])): ?>
                                <a href="<?= htmlspecialchars($p['github']) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="project-btn btn-dark">
                                    <i class="fab fa-github"></i> Code
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($p['demo'])): ?>
                                <a href="<?= htmlspecialchars($p['demo']) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="project-btn btn-blue">
                                    <i class="fas fa-external-link-alt"></i> Demo
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Contact me!</h2>
            <p class="section-description">
                Have a project in mind or want to collaborate? I'd love to hear from you!
            </p>
            
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    
                    <div class="info-item">
                        <div class="info-icon bg-blue">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <a href="mailto:amorale006@gmail.com">amorale006@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon bg-green">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <a href="tel:+529934433626">+52 (993) 443-3626</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon bg-purple">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Location</h4>
                            <p>Puebla, Puebla<br>Mexico</p>
                        </div>
                    </div>
                    
                    <div class="availability-card">
                        <h4>Available for Freelance</h4>
                        <p>I'm currently available for freelance projects and full-time opportunities. Let's build something amazing together!</p>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <h3>Send Me a Message</h3>
                    
                    <form id="contactForm" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tell me about your project..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-full">
                            Send Message
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>Adrian Morales</h3>
                    <p>Full-Stack Developer</p>
                </div>
                
                <div class="footer-social">
                    <a href="https://github.com/Amorale05" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/amorales05" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://www.instagram.com/maestrooogwey/" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="mailto:amorale006@gmail.com" aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 Adrian Morales. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
