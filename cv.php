<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Online & Portfolio - Rafly Radithya Amd</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
        }
      
        .profile-img img {
            width: 500px;
            height: 500px;
            border-radius: 50%;
            margin: 0 auto 20px;
            border: 5px solid #667eea;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            color: white;
            transition: transform 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header .subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 20px;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .contact-info div {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(102, 126, 234, 0.1);
            padding: 10px 15px;
            border-radius: 25px;
            transition: transform 0.3s ease;
        }

        .contact-info div:hover {
            transform: translateY(-2px);
            background: rgba(102, 126, 234, 0.2);
        }

        /* Navigation */
        .nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .nav button {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .nav button:hover, .nav button.active {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        /* Sections */
        .section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section h2 {
            font-size: 2rem;
            margin-bottom: 25px;
            color: #667eea;
            text-align: center;
            position: relative;
        }

        .section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        /* About Section */
        .about-content {
            text-align: center;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .skill-category h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .skill-item {
            margin-bottom: 15px;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .skill-bar {
            height: 10px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 5px;
            transition: width 1s ease;
        }

        /* Experience Section */
        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, #667eea, #764ba2);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 15px;
            margin-left: 20px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -35px;
            top: 25px;
            width: 12px;
            height: 12px;
            background: #667eea;
            border-radius: 50%;
            border: 3px solid white;
        }

        .timeline-date {
            color: #667eea;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .timeline-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 5px 0;
        }

        .timeline-company {
            color: #666;
            font-style: italic;
            margin-bottom: 10px;
        }

        /* Portfolio Section */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .portfolio-item {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
        }

        .portfolio-img {
            height: 200px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }

        .portfolio-content {
            padding: 20px;
        }

        .portfolio-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .portfolio-desc {
            color: #666;
            margin-bottom: 15px;
        }

        .portfolio-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tech-tag {
            background: rgba(102, 126, 234, 0.1);
            color: #667eea;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* Education Section */
        .education-grid {
            display: grid;
            gap: 20px;
        }

        .education-item {
            background: rgba(102, 126, 234, 0.05);
            padding: 25px;
            border-radius: 15px;
            border-left: 5px solid #667eea;
        }

        .education-degree {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .education-school {
            color: #667eea;
            font-weight: bold;
            margin: 5px 0;
        }

        .education-year {
            color: #666;
            font-size: 0.9rem;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .contact-item {
            text-align: center;
            padding: 30px;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(102, 126, 234, 0.1);
        }

        .contact-item i {
            font-size: 2rem;
            color: #667eea;
            margin-bottom: 15px;
        }

        .contact-item h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .contact-item a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .header {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .contact-info {
                gap: 15px;
            }

            .contact-info div {
                padding: 8px 12px;
                font-size: 0.9rem;
            }

            .section {
                padding: 25px 20px;
            }

            .nav {
                gap: 10px;
            }

            .nav button {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }

        /* Floating Animation */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Print Styles */
        @media print {
            body {
                background: white;
            }
            .nav {
                display: none;
            }
            .section {
                display: block !important;
                background: white;
                box-shadow: none;
                page-break-inside: avoid;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header floating">
            <div class="profile-img">
                 <img src="R.jpg" alt="Foto Profil Rafly Radithya">
</div>
            <h1>Rafly Radithya Al-Faathir Rahman</h1>
            <div class="subtitle">Lulusan Baru</div>
            <div class="contact-info">
                <div>
                    <i class="fas fa-envelope"></i>
                    raflyra027@gmail.com.com
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    +62 896-3003-7103
                </div>
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    Majalaya, Kab.Bandung, Indonesia
                </div>
                <div>
                    <i class="fab fa-linkedin"></i>
                    linkedin.com/in/rafly radithya
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="nav">
            <button class="nav-btn active" data-section="about">
                <i class="fas fa-user"></i> Tentang
            </button>
            <button class="nav-btn" data-section="skills">
                <i class="fas fa-code"></i> Keahlian
            </button>
            <button class="nav-btn" data-section="experience">
                <i class="fas fa-briefcase"></i> Pengalaman
            </button>
            <button class="nav-btn" data-section="education">
                <i class="fas fa-graduation-cap"></i> Pendidikan
            </button>
            <button class="nav-btn" data-section="portfolio">
                <i class="fas fa-folder"></i> Portfolio
            </button>
            <button class="nav-btn" data-section="contact">
                <i class="fas fa-envelope"></i> Kontak
            </button>
        </div>

        <!-- About Section -->
        <div class="section active" id="about">
            <h2><i class="fas fa-user"></i> Tentang Saya</h2>
            <div class="about-content">
                <p>Halo! Saya adalah lulusan baru komputerisasi akutansi di universitas ma'soem memiliki motivasi tinggi, disiplin, dan mampu bekerja sama bersama tim maupun secara mandiri, memiliki pemahaman dalam bidang akutansi, keuangan dan berpengalaman dalam menciptakan solusi digital yang inovatif dan kreatif. Dengan passion dalam teknologi dan design, saya senang dengan hal-hal baru selalu berusaha untuk menciptakan pengalaman yang baik untuk karir saya </p>
                <br>
                <p>Saya memiliki pengalaman lebih dari 3 tahun dalam pengembangan web menggunakan berbagai teknologi modern seperti HTML5, CSS3, JavaScript, PHP.</p>
                <br>
                <p>Saya selalu antusias untuk mempelajari akuntansi dan teknologi untuk mengambil tantangan yang dapat mengembangkan kemampuan saya lebih jauh lagi.</p>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="section" id="skills">
            <h2><i class="fas fa-code"></i> Keahlian</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Frontend Development</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>CSS</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 80%"></div>
                        </div>
                    </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 75%"></div>
                        </div>
                    </div>
                </div>

                <div class="skill-category">
                    <h3>Backend Development</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>PHP</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>MySQL</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 65%"></div>
                        </div>
                    </div>
                </div>

                <div class="skill-category">
                    <h3>Design & Tools</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Figma</span>
                            <span>70%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Experience Section -->
       <div class="section" id="experience">
            <h2><i class="fas fa-briefcase"></i> Pengalaman Kerja</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2022 - Sekarang</div>
                    <div class="timeline-title">Lulusan Baru</div>
                    <div class="timeline-company">Universitas Ma'soem</div>
                    <p>Mempunyai Pengalaman PAL(Apotek Al'Masoem Majalaya), PPL(SMP Plus Nur Muhammad Pacet), PKL(Rcln Majalaya)</p>
                </div>
                </div>
            </div>
        </div>

        <div class="section" id="education">
            <h2><i class="fas fa-graduation-cap"></i> Pendidikan</h2>
            <div class="education-grid">
                <div class="education-item">
                    <div class="education-degree">D3 Komputerisasi Akutansi</div>
                    <div class="education-school">Universitas Ma'soem</div>
                    <div class="education-year">2022 - 2025</div>
                    <p>IPK: 3.30/4.00. Fokus pada akutansi dan pengembangan perangkat lunak dan sistem informasi. Aktif dalam organisasi mahasiswa.</p>
                </div>
                
                <div class="education-item">
                    <div class="education-degree">IPS</div>
                    <div class="education-school">SMA Negeri 2 Majalaya</div>
                    <div class="education-year">2019 - 2022</div>
                    <p>Aktif dalam extrakulikuler Futsal</p>
                </div>
            </div>

           <h3 style="color: #667eea; margin-top: 30px; margin-bottom: 20px;">Sertifikasi & Pelatihan</h3>
            <div class="education-grid">
                <div class="education-item">
                    <div class="education-degree">Google IT Support Profesional Certificate</div>
                    <div class="education-school">Coursera</div>
                    <div class="education-year">2022</div>
                </div>
                
                <div class="education-item">
                    <div class="education-degree">Work In Tech Soft Skill Training</div>
                    <div class="education-school">QED Research Consulting x Yayasan Plan International Indonesia</div>
                    <div class="education-year">2022</div>
                </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div class="section" id="portfolio">
            <h2><i class="fas fa-folder"></i> Portfolio</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="portfolio-content">
                        <div class="portfolio-title">Tugas Akhir</div>
                        <div class="portfolio-desc">Sistem Informasi Penjualan Baju Berbasis Website Platform e-commerce lengkap dengan sistem pembayaran, manajemen produk, dashboard user dan dashboard admin yang comprehensive.</div>
                        <div class="portfolio-tech">
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Javascript</span>
                            <span class="tech-tag">CSS</span>
                        </div>
                    </div>
                </div>
                    <div class="portfolio-content">
                        <div class="portfolio-title">Pemasaran</div>
                        <div class="portfolio-desc">Menjual Liquid diOnline Shop </div>
                        <div class="portfolio-tech">
                            <span class="tech-tag">Shopee Seller</span>
                            <span class="tech-tag">Tiktok Seller</span>
                            <span class="tech-tag">Lazada Seller</span>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="section" id="contact">
            <h2><i class="fas fa-envelope"></i> Kontak</h2>
            <div class="contact-grid">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:raflyra027@gmail.com">raflyra027@gmail.com</a></p>
                    <p>Siap untuk menerima panggilan</p>
                </div>

                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <h3>Telepon</h3>
                    <p><a href="tel:+6289630037103">+62 896-3003-7103</a></p>
                    <p>Tersedia untuk panggilan biasa</p>
                </div>

                <div class="contact-item">
                    <i class="fab fa-linkedin"></i>
                    <h3>LinkedIn</h3>
                    <p><a href="https://linkedin.com/in/rafly radithya" target="_blank">linkedin.com/in/rafly radithya </a></p>
                    <p>Connect untuk networking profesional</p>
                </div>

                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Lokasi</h3>
                    <p>Majalaya, Kab.Bandung, Jawa Barat</p>
                    <p>Indonesia</p>
                </div>

                <div class="contact-item">
                    <i class="fab fa-whatsapp"></i>
                    <h3>WhatsApp</h3>
                    <p><a href="https://wa.me/6289630037103" target="_blank">+62 896-3003-7103</a></p>
                    <p>Chat untuk respons cepat</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px; padding: 30px; background: rgba(102, 126, 234, 0.05); border-radius: 15px;">
                <h3 style="color: #667eea; margin-bottom: 15px;">Mari Berkolaborasi!</h3>
                <p style="font-size: 1.1rem; margin-bottom: 20px;">Saya selalu terbuka untuk peluang kerja sama. Jangan ragu untuk menghubungi saya!</p>
                <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                    <a href="mailto:raflyra027@gmail.com" style="background: #667eea; color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: bold; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                        <i class="fas fa-envelope"></i> Kirim Email
                    </a>
                    <a href="https://wa.me/6289630037103" target="_blank" style="background: #25D366; color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: bold; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div style="text-align: center; padding: 30px; color: rgba(255, 255, 255, 0.8);">
        <p>&copy; 2025 Rafly Radithya A.R. Dibuat dengan ❤️ menggunakan HTML, CSS & JavaScript</p>
        <p style="margin-top: 10px; font-size: 0.9rem;">Terakhir diupdate: September 2025</p>
    </div>

    <script>
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navButtons = document.querySelectorAll('.nav-btn');
            const sections = document.querySelectorAll('.section');

            navButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetSection = this.dataset.section;

                    // Remove active class from all buttons and sections
                    navButtons.forEach(btn => btn.classList.remove('active'));
                    sections.forEach(section => section.classList.remove('active'));

                    // Add active class to clicked button and target section
                    this.classList.add('active');
                    document.getElementById(targetSection).classList.add('active');

                    // Smooth scroll to top
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });

            // Animate skill bars when skills section is shown
            const skillsButton = document.querySelector('[data-section="skills"]');
            skillsButton.addEventListener('click', function() {
                setTimeout(() => {
                    const skillBars = document.querySelectorAll('.skill-progress');
                    skillBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0%';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });
                }, 100);
            });

            // Add smooth animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all portfolio items and timeline items
            document.querySelectorAll('.portfolio-item, .timeline-item, .education-item').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });

            // Add typing effect to the header subtitle
            const subtitle = document.querySelector('.subtitle');
            const originalText = subtitle.textContent;
            subtitle.textContent = '';
            
            let i = 0;
            const typeWriter = () => {
                if (i < originalText.length) {
                    subtitle.textContent += originalText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                }
            };
            
            setTimeout(typeWriter, 1000);

            // Add particle effect to header
            createParticles();
        });

        // Particle effect function
        function createParticles() {
            const header = document.querySelector('.header');
            const particleCount = 20;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: absolute;
                    width: 4px;
                    height: 4px;
                    background: rgba(102, 126, 234, 0.3);
                    border-radius: 50%;
                    pointer-events: none;
                    animation: float ${3 + Math.random() * 4}s linear infinite;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    animation-delay: ${Math.random() * 2}s;
                `;
                header.appendChild(particle);
            }

            // Add CSS for particle animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes float {
                    0%, 100% { 
                        transform: translateY(0px) rotate(0deg);
                        opacity: 0;
                    }
                    50% { 
                        transform: translateY(-20px) rotate(180deg);
                        opacity: 1;
                    }
                }
            `;
            document.head.appendChild(style);
        }

        // Add scroll progress indicator
        window.addEventListener('scroll', () => {
            const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            
            if (!document.querySelector('.scroll-progress')) {
                const progressBar = document.createElement('div');
                progressBar.className = 'scroll-progress';
                progressBar.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 0%;
                    height: 3px;
                    background: linear-gradient(90deg, #667eea, #764ba2);
                    z-index: 9999;
                    transition: width 0.1s ease;
                `;
                document.body.appendChild(progressBar);
            }
            
            document.querySelector('.scroll-progress').style.width = scrolled + '%';
        });

        // Add theme toggle functionality
        function addThemeToggle() {
            const toggleButton = document.createElement('button');
            toggleButton.innerHTML = '<i class="fas fa-moon"></i>';
            toggleButton.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: rgba(255, 255, 255, 0.9);
                border: none;
                padding: 12px;
                border-radius: 50%;
                cursor: pointer;
                z-index: 1000;
                transition: all 0.3s ease;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            `;
            
            toggleButton.addEventListener('click', function() {
                document.body.classList.toggle('dark-theme');
                const isDark = document.body.classList.contains('dark-theme');
                this.innerHTML = isDark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
            });
            
            document.body.appendChild(toggleButton);
        }

        // Add dark theme styles
        const darkThemeCSS = `
            .dark-theme {
                background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%) !important;
            }
            .dark-theme .header,
            .dark-theme .section {
                background: rgba(45, 55, 72, 0.95) !important;
                color: #e2e8f0 !important;
            }
            .dark-theme .section h2 {
                color: #81c784 !important;
            }
            .dark-theme .timeline-item,
            .dark-theme .education-item,
            .dark-theme .contact-item {
                background: rgba(74, 85, 104, 0.3) !important;
            }
            .dark-theme .portfolio-item {
                background: rgba(74, 85, 104, 0.8) !important;
            }
        `;

        const darkStyle = document.createElement('style');
        darkStyle.textContent = darkThemeCSS;
        document.head.appendChild(darkStyle);

        // Initialize theme toggle
        setTimeout(addThemeToggle, 1000);

        // Add print functionality
        function addPrintButton() {
            const printButton = document.createElement('button');
            printButton.innerHTML = '<i class="fas fa-print"></i> Download CV';
            printButton.style.cssText = `
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: #667eea;
                color: white;
                border: none;
                padding: 15px 20px;
                border-radius: 25px;
                cursor: pointer;
                font-weight: bold;
                z-index: 1000;
                transition: all 0.3s ease;
                box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
            `;
            
            printButton.addEventListener('click', function() {
                window.print();
            });
            
            printButton.addEventListener('mouseover', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 8px 25px rgba(102, 126, 234, 0.4)';
            });
            
            printButton.addEventListener('mouseout', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(102, 126, 234, 0.3)';
            });
            
            document.body.appendChild(printButton);
        }

        // Initialize print button
        setTimeout(addPrintButton, 1500);
    </script>
</body>
</html>