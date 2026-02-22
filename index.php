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
                        <div class="tech-item">
                            <div class="tech-icon bg-yellow">
                                <i class="fab fa-js"></i>
                            </div>
                            <span>JavaScript</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-blue">
                                <i class="fab fa-js"></i>
                            </div>
                            <span>TypeScript</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-cyan">
                                <i class="fab fa-react"></i>
                            </div>
                            <span>React</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-slate">
                                <i class="fas fa-code"></i>
                            </div>
                            <span>Next.js</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-teal">
                                <i class="fas fa-palette"></i>
                            </div>
                            <span>Tailwind CSS</span>
                        </div>
                    </div>
                </div>

                <!-- Backend -->
                <div class="skill-category">
                    <h3 class="category-title">Backend</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon bg-green">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <span>Node.js</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-blue">
                                <i class="fab fa-python"></i>
                            </div>
                            <span>Python</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-blue-dark">
                                <i class="fas fa-database"></i>
                            </div>
                            <span>PostgreSQL</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-green-dark">
                                <i class="fas fa-database"></i>
                            </div>
                            <span>MongoDB</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-pink">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <span>GraphQL</span>
                        </div>
                    </div>
                </div>

                <!-- Tools & Others -->
                <div class="skill-category">
                    <h3 class="category-title">Tools & Others</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon bg-orange">
                                <i class="fab fa-git-alt"></i>
                            </div>
                            <span>Git</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-blue">
                                <i class="fab fa-docker"></i>
                            </div>
                            <span>Docker</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-orange-light">
                                <i class="fab fa-aws"></i>
                            </div>
                            <span>AWS</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-purple">
                                <i class="fab fa-figma"></i>
                            </div>
                            <span>Figma</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon bg-red">
                                <i class="fas fa-vial"></i>
                            </div>
                            <span>Jest</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-description">
                Here are some of my recent projects that showcase my skills and expertise
            </p>
            
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1665470909939-959569b20021?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjB3ZWIlMjBhcHBsaWNhdGlvbiUyMGRhc2hib2FyZHxlbnwxfHx8fDE3NzE3MzUyMjh8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Analytics Dashboard">
                    </div>
                    <div class="project-content">
                        <h3>Analytics Dashboard</h3>
                        <p>A comprehensive analytics platform with real-time data visualization, custom reports, and team collaboration features.</p>
                        <div class="project-tags">
                            <span class="tag">React</span>
                            <span class="tag">TypeScript</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">PostgreSQL</span>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="project-btn btn-dark">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="https://demo.com" target="_blank" rel="noopener noreferrer" class="project-btn btn-blue">
                                <i class="fas fa-external-link-alt"></i> Demo
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1661246627162-feb0269e0c07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2JpbGUlMjBhcHAlMjBpbnRlcmZhY2UlMjBkZXNpZ258ZW58MXx8fHwxNzcxNzIzNDg1fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Mobile Banking App">
                    </div>
                    <div class="project-content">
                        <h3>Mobile Banking App</h3>
                        <p>Intuitive mobile banking interface with secure transactions, budget tracking, and financial insights powered by AI.</p>
                        <div class="project-tags">
                            <span class="tag">React Native</span>
                            <span class="tag">Redux</span>
                            <span class="tag">Express</span>
                            <span class="tag">MongoDB</span>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="project-btn btn-dark">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="https://demo.com" target="_blank" rel="noopener noreferrer" class="project-btn btn-blue">
                                <i class="fas fa-external-link-alt"></i> Demo
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1658297063569-162817482fb6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxlY29tbWVyY2UlMjB3ZWJzaXRlJTIwc2hvcHBpbmd8ZW58MXx8fHwxNzcxNjg2MTY0fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="E-Commerce Platform">
                    </div>
                    <div class="project-content">
                        <h3>E-Commerce Platform</h3>
                        <p>Full-featured online store with product management, shopping cart, secure checkout, and order tracking system.</p>
                        <div class="project-tags">
                            <span class="tag">Next.js</span>
                            <span class="tag">Stripe</span>
                            <span class="tag">Prisma</span>
                            <span class="tag">TailwindCSS</span>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="project-btn btn-dark">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="https://demo.com" target="_blank" rel="noopener noreferrer" class="project-btn btn-blue">
                                <i class="fas fa-external-link-alt"></i> Demo
                            </a>
                        </div>
                    </div>
                </div>
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
                            <a href="tel:+15551234567">+52 (993) 443-3626</a>
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
                    <p>Full-Stack Web Developer</p>
                </div>
                
                <div class="footer-social">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:alex.chen@example.com" aria-label="Email">
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
