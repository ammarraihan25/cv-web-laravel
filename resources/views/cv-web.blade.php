<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ammar.id</title>

  <!-- Google Fonts: Inter & Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body class="dark-mode">

  <!-- Loading Animation -->
  <div class="loader-wrapper" id="loader">
    <div class="loader-content">
      <div class="loader-logo">Ammar<span>.Id</span></div>
      <div class="loader-line"></div>
    </div>
  </div>

  <!-- Navbar -->
  <header class="navbar" id="navbar">
    <div class="container nav-container">
      <a href="#" class="logo">Ammar<span>.Id</span></a>

      <div class="nav-links">
        <a href="#home" class="nav-link active">Home</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#skills" class="nav-link">Skills</a>
        <a href="#projects" class="nav-link">Projects</a>
        <a href="#work-experience" class="nav-link">Work Experience</a>
        <a href="#activities" class="nav-link">Activities</a>
        <a href="#certificates" class="nav-link">Certificates</a>
        <a href="#contact" class="nav-link">Contact</a>
      </div>

      <div class="nav-actions">
        <!-- Dark/Light mode toggle -->
        <button id="theme-toggle" class="theme-toggle-btn" aria-label="Toggle Theme">
          <i class="fa-solid fa-moon"></i>
        </button>
        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-btn" id="mobile-menu-btn">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
  </header>

  <main>
    <!-- Hero Section -->
    <section id="home" class="hero">
      <div class="container hero-container">
        <div class="hero-content reveal">
          <p class="greeting">Hello, I'm</p>
          <h1 class="hero-title">{{ $name ?? 'Muhamad Ammar Raihan Ardiyanto' }}</h1>
          <h2 class="hero-subtitle">{{ $job_position ?? 'Junior Developer' }}</h2>
          <p class="hero-description">
            Problem solver and system builder. I specialize in building exceptional digital experiences and scalable
            backends.
          </p>
          <div class="hero-cta">
            <a href="#projects" class="btn btn-primary">Lihat Project</a>
            <a href="#about" class="btn btn-outline">About Me</a>
          </div>
          <div class="hero-socials">
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/ammarraihan25" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.instagram.com/marrae_404?igsh=MXdmdGd6cXlsaHBwaw==" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>
        <div class="hero-image reveal right">
          <div class="image-wrapper">
            <!-- Profil Foto: Ganti URL dengan foto Anda -->
            <img src="/profile2.png" alt="{{ $name }}" id="profile-img">
            <div class="image-backdrop"></div>
            <div class="floating-badge badge-1">
              <i class="fa-brands fa-laravel" style="color: #FF2D20;"></i> Laravel
            </div>
            <div class="floating-badge badge-2">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#02569B" xmlns="http://www.w3.org/2000/svg"><path d="M14.314 0L2.3 12L6 15.7L21.686 0H14.314ZM21.686 12L13.5 20.186L9.8 16.486L18 8.286L21.686 12ZM13.5 24H21.686L14.314 16.629L10.629 20.314L14.314 24H13.5Z"/></svg> Flutter
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-title">About Me</h2>
          <p class="section-subtitle">Kenali saya lebih dekat</p>
        </div>
        <div class="about-content">
          <div class="about-text reveal left">
            <p>
              Saya adalah seorang Junior Developer yang bersemangat dengan fokus pada pembuatan sistem web modern.
              Memiliki keahlian dalam mengubah desain yang kompleks menjadi website responsif yang fungsional, dan
              membangun backend yang tangguh untuk mendukungnya.
            </p>
            <p>
              Tujuan karier saya adalah terus berkembang dan menciptakan solusi teknologi yang memberikan dampak nyata.
              Nilai utama saya adalah <strong>kualitas</strong>, <strong>kecepatan</strong>, dan <strong>kerja sama
                tim</strong>.
            </p>

            <div class="about-highlights">
              <div class="highlight-item">
                <i class="fa-solid fa-graduation-cap"></i>
                <div>
                  <h4>Pendidikan</h4>
                  <p>Politeknik Indonusa Surakarta</p>
                </div>
              </div>
            </div>


            <a href="/public/cv-dummy.pdf" class="btn btn-outline download-cv" download>
              <i class="fa-solid fa-download"></i> Download CV
            </a>
          </div>
          <div class="about-stats reveal right">
            <div class="stat-box">
              <h3 class="stat-number">{{ count($projects) }}</h3>
              <p class="stat-text">Project Selesai</p>
            </div>
            <div class="stat-box">
              <h3 class="stat-number">2+</h3>
              <p class="stat-text">Tahun Pengalaman (Belajar)</p>
            </div>
            <div class="stat-box">
              <h3 class="stat-number">10+</h3>
              <p class="stat-text">Bahasa Pemrograman Dikuasai</p>
            </div>
            <div class="stat-box">
              <h3 class="stat-number">100%</h3>
              <p class="stat-text">Komitmen</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills section bg-light">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-title">My Skills</h2>
          <p class="section-subtitle">Teknologi yang saya gunakan</p>
        </div>

        <div class="skills-grid">
          <!-- Web Development -->
          <div class="skill-category reveal">
            <h3 class="category-title"><i class="fa-solid fa-code"></i> Web Development</h3>
            <div class="skill-list">
              <div class="skill-item">
                <div class="skill-info">
                  <span>HTML & CSS</span>
                  <span>85%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 85%;"></div>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-info">
                  <span>JavaScript</span>
                  <span>70%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 70%;"></div>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-info">
                  <span>PHP & Laravel</span>
                  <span>75%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 75%;"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile & Programming -->
          <div class="skill-category reveal" style="transition-delay: 0.1s;">
            <h3 class="category-title"><i class="fa-solid fa-mobile-screen-button"></i> Mobile & Logic</h3>
            <div class="skill-list">
              <div class="skill-item">
                <div class="skill-info">
                  <span>Flutter</span>
                  <span>60%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 60%;"></div>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-info">
                  <span>Python</span>
                  <span>75%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 75%;"></div>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-info">
                  <span>MySQL</span>
                  <span>75%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 75%;"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Hardware & Technician (PRAKERIN) -->
          <div class="skill-category reveal" style="transition-delay: 0.2s;">
            <h3 class="category-title"><i class="fa-solid fa-microchip"></i> Hardware & Technician</h3>
            <div class="skill-list">
              <div class="skill-item">
                <div class="skill-info">
                  <span>Maintenance & Repair</span>
                  <span>85%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 85%;"></div>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-info">
                  <span>Networking (Crimp, LAN)</span>
                  <span>90%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 90%;"></div>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-info">
                  <span>Operating System Install</span>
                  <span>85%</span>
                </div>
                <div class="progress-bar">
                  <div class="progress" style="width: 85%;"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Tools & Support -->
          <div class="skill-category reveal" style="transition-delay: 0.3s; grid-column: 1 / -1;">
            <h3 class="category-title"><i class="fa-solid fa-screwdriver-wrench"></i> Tools & Support</h3>
            <div class="tools-badges">
              <span class="badge"><i class="fa-solid fa-code"></i> VS Code</span>
              <span class="badge"><i class="fa-solid fa-server"></i> Laragon</span>
              <span class="badge"><i class="fa-solid fa-server"></i> XAMPP</span>
              <span class="badge"><i class="fa-brands fa-git-alt"></i> Git</span>
              <span class="badge"><i class="fa-brands fa-github"></i> GitHub</span>
              <span class="badge"><i class="fa-solid fa-book"></i> Jupyter Notebook</span>
              <span class="badge"><i class="fa-brands fa-php"></i> PHP</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects section">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-title">My Projects</h2>
          <p class="section-subtitle">Beberapa hasil karya terbaik saya</p>
        </div>

        <!-- Filter & Search -->
        <div class="projects-controls reveal">
          <div class="project-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="frontend">Frontend</button>
            <button class="filter-btn" data-filter="backend">Backend</button>
            <button class="filter-btn" data-filter="fullstack">Fullstack</button>
          </div>
          <div class="project-search">
            <i class="fa-solid fa-search"></i>
            <input type="text" id="search-input" placeholder="Search projects...">
          </div>
        </div>

        <div class="projects-grid" id="projects-container">
          @foreach($projects as $project)
          <div class="project-card reveal" data-category="{{ $project->category }}">
            <div class="project-img">
              <img src="{{ Str::startsWith($project->image, 'http') ? $project->image : asset($project->image) }}" alt="{{ $project->title }}">
            </div>
            <div class="project-info">
              <div class="project-tags">
                @foreach(explode(',', $project->tags) as $tag)
                <span>{{ trim($tag) }}</span>
                @endforeach
              </div>
              <h3 class="project-title">{{ $project->title }}</h3>
              <p class="project-desc">{{ $project->description }}</p>
              <div class="project-links">
                @if($project->code_link)
                <a href="{{ $project->code_link }}" class="btn btn-sm btn-outline"><i class="fa-brands fa-github"></i> Code</a>
                @endif
                @if($project->demo_link)
                <a href="{{ $project->demo_link }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-primary"><i class="fa-solid fa-arrow-up-right-from-square"></i> Demo</a>
                @endif
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <!-- Simplified GitHub Achievement Card -->
        <div class="github-achievement reveal">
          <div class="achievement-card">
            <div class="card-content">
              <div class="user-info">
                <div class="avatar-wrapper">
                  <img src="https://github.com/ammarraihan25.png" alt="Ammar Raihan" class="user-avatar">
                  <div class="online-indicator"></div>
                </div>
                <div class="user-details">
                  <h3 class="user-name">Ammar Raihan</h3>
                  <p class="user-handle">@ammarraihan25</p>
                </div>
              </div>

              <div class="contribution-display">
                <div class="display-header">
                  <span><i class="fa-solid fa-chart-line"></i> Contribution Heatmap</span>
                  <span class="year-badge">2026</span>
                </div>
                <div class="graph-scroll">
                  <a href="https://github.com/ammarraihan25" target="_blank" rel="noopener noreferrer" class="graph-link">
                    <img src="https://ghchart.rshah.org/00ff88/ammarraihan25" alt="GitHub Contributions" class="gh-graph">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Work Experience Section -->

    <section id="work-experience" class="work-experience section bg-light">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-title">Work Experience</h2>
          <p class="section-subtitle">Pengalaman kerja dan kontribusi profesional saya</p>
        </div>

        <div class="work-exp-grid" id="work-exp-container">
          @foreach($work_experiences as $index => $exp)
          <div class="work-exp-card reveal" style="transition-delay: {{ $index * 0.1 }}s;">
            <div class="work-exp-img">
              @if($exp->image)
                <img src="{{ asset($exp->image) }}" alt="{{ $exp->position }}">
              @else
                <div class="work-exp-placeholder"><i class="fa-solid fa-briefcase"></i></div>
              @endif
              <span class="work-exp-badge work-exp-badge--{{ $exp->type }}">
                @if($exp->type === 'freelance') Freelance
                @elseif($exp->type === 'internship') Internship
                @elseif($exp->type === 'full-time') Full-Time
                @else Self-Employed
                @endif
              </span>
            </div>

            <div class="work-exp-body">
              <div class="work-exp-main-info">
                <h3 class="work-exp-position">{{ $exp->position }}</h3>
                <div class="work-exp-sub-info">
                  <span class="work-exp-company">{{ $exp->company }}</span>
                  <span class="work-exp-period">{{ $exp->period }}</span>
                </div>
              </div>

              <div class="work-exp-details">
                <p class="work-exp-desc">{{ $exp->description }}</p>
              </div>

              <div class="work-exp-tags">
                @foreach(explode(',', $exp->tags) as $tag)
                <span class="work-tag">{{ trim($tag) }}</span>
                @endforeach
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Activities & Organizations Section -->
    <section id="activities" class="activities section">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-title">Activities & Organizations</h2>
          <p class="section-subtitle">Dokumentasi kegiatan dan keterlibatan organisasi saya</p>
        </div>

        <div class="accordion-container reveal">
          <div class="accordion-wrapper" id="accordion-wrapper">
            @foreach($activities as $index => $activity)
            <div class="accordion-item {{ $index === 0 ? 'active' : '' }}"
                 data-title="{{ $activity->title }}"
                 data-org="{{ $activity->organization }}"
                 data-img="{{ $activity->image }}"
                 data-content="{{ addslashes($activity->content) }}"
                 data-date="{{ $activity->date }}">
              <div class="accordion-img">
                <img src="{{ $activity->image }}" alt="{{ $activity->title }}">
              </div>

              {{-- Collapsed: number + short title only (no date) --}}
              <div class="accordion-vertical-title">
                <span class="act-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <h3 class="act-title">{{ Str::limit($activity->title, 18, '') }}</h3>
              </div>

              {{-- Caption always visible when expanded/active --}}
              <div class="accordion-content">
                <span class="act-org">{{ $activity->organization }}</span>
                <h2 class="act-full-title">{{ $activity->title }}</h2>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="certificates section">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-title">My Certificates</h2>
          <p class="section-subtitle">Pengakuan atas kompetensi dan kontribusi saya</p>
        </div>

        <!-- Row 1: Programming Course (Scroll Left) -->
        <div class="cert-category reveal">
          <h3 class="category-title"><i class="fa-solid fa-graduation-cap"></i> Programming Courses</h3>
          <div class="cert-slider slider-left">
            <div class="cert-track">
              {{-- Loop twice for seamless marquee effect --}}
              @foreach([1, 2] as $i)
                @foreach($certificates_programming as $cert)
                <div class="cert-card">
                  <div class="cert-img-wrapper">
                    <img src="{{ Str::startsWith($cert->image, 'http') ? $cert->image : asset($cert->image) }}" alt="{{ $cert->title }}" class="zoom-img">
                    <div class="img-overlay"><i class="fa-solid fa-search-plus"></i></div>
                  </div>
                  <div class="cert-info">
                    <h4>{{ $cert->title }}</h4>
                    <p>{{ $cert->organization }}</p>
                  </div>
                </div>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>

        <!-- Row 2: Academic & Activities (Scroll Right) -->
        <div class="cert-category reveal" style="margin-top: 4rem;">
          <h3 class="category-title"><i class="fa-solid fa-users-gear"></i> Academic & Activities</h3>
          <div class="cert-slider slider-right">
            <div class="cert-track">
              {{-- Loop twice for seamless marquee effect --}}
              @foreach([1, 2] as $i)
                @foreach($certificates_academic as $cert)
                <div class="cert-card">
                  <div class="cert-img-wrapper">
                    <img src="{{ Str::startsWith($cert->image, 'http') ? $cert->image : asset($cert->image) }}" alt="{{ $cert->title }}" class="zoom-img">
                    <div class="img-overlay"><i class="fa-solid fa-search-plus"></i></div>
                  </div>
                  <div class="cert-info">
                    <h4>{{ $cert->title }}</h4>
                    <p>{{ $cert->organization }}</p>
                  </div>
                </div>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="fullscreen-cta">
      <div class="cta-bg-glow"></div>
      <div class="container">
        <div class="cta-content">
          <div class="cta-main">
            <h2 class="cta-word reveal-text" style="transition-delay: 0.1s;">DESIGN.</h2>
            <h2 class="cta-word reveal-text" style="transition-delay: 0.3s;">DEVELOP.</h2>
            <h2 class="cta-word reveal-text" style="transition-delay: 0.5s;">DEPLOY.</h2>
          </div>
          
          <div class="cta-footer">
            <div class="cta-sub reveal" style="transition-delay: 0.7s;">
              <p>CRAFTED WITH PASSION,</p>
              <p>POWERED BY CODE.</p>
            </div>
            
            <div class="cta-action reveal" style="transition-delay: 0.9s;">
              <a href="https://wa.me/6285713086851" class="btn-magnetic">
                <span>Let's Talk</span>
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Column 1: Brand & Bio -->
        <div class="footer-column footer-logo reveal">
          <h2>Ammar<span>.Id</span></h2>
          <p>Junior Developer yang berfokus pada pembuatan sistem web modern dan fungsional. Berkomitmen untuk memberikan solusi teknologi terbaik bagi setiap tantangan.</p>
          <div class="footer-socials">
            <a href="#" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/ammarraihan25" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.instagram.com/marrae_404?igsh=MXdmdGd6cXlsaHBwaw==" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-column footer-links reveal" style="transition-delay: 0.1s;">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#home"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
            <li><a href="#about"><i class="fa-solid fa-chevron-right"></i> About Me</a></li>
            <li><a href="#skills"><i class="fa-solid fa-chevron-right"></i> My Skills</a></li>
            <li><a href="#projects"><i class="fa-solid fa-chevron-right"></i> Projects</a></li>
            <li><a href="#activities"><i class="fa-solid fa-chevron-right"></i> Activities</a></li>
          </ul>
        </div>

        <!-- Column 3: Specialization -->
        <div class="footer-column footer-links reveal" style="transition-delay: 0.2s;">
          <h3>Specialization</h3>
          <ul>
            <li><a href="#skills"><i class="fa-solid fa-chevron-right"></i> Web Development</a></li>
            <li><a href="#skills"><i class="fa-solid fa-chevron-right"></i> Mobile Development</a></li>
            <li><a href="#skills"><i class="fa-solid fa-chevron-right"></i> UI/UX Design</a></li>
            <li><a href="#skills"><i class="fa-solid fa-chevron-right"></i> System Analyst</a></li>
          </ul>
        </div>

        <!-- Column 4: Contact -->
        <div class="footer-column reveal" style="transition-delay: 0.3s;">
          <h3>Contact Me</h3>
          <div class="footer-contact-info">
            <div class="contact-detail">
              <i class="fa-solid fa-envelope"></i>
              <span>ammarraihan2005@gmail.com</span>
            </div>
            <div class="contact-detail">
              <i class="fa-solid fa-phone"></i>
              <span>+62 857 1308 6851</span>
            </div>
            <div class="contact-detail">
              <i class="fa-solid fa-location-dot"></i>
              <span>Surakarta, Jawa Tengah, ID</span>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2026 Ammar.Id. Designed by Ammar Raihan.</p>
        <div class="footer-bottom-links">
        </div>
      </div>
    </div>
  </footer>

  <!-- Image Zoom Modal -->
  <div id="cert-modal" class="cert-modal">
    <span class="close-modal">&times;</span>
    <img class="modal-content" id="full-cert-img">
    <div id="caption"></div>
  </div>

  <!-- Activity Article Modal -->
  <div id="activity-modal" class="activity-modal">
    <div class="activity-modal-card">
      <span class="activity-modal-close">&times;</span>
      <div class="activity-modal-img">
        <img id="modal-activity-img" src="" alt="">
      </div>
      <div class="activity-modal-body">
        <div class="activity-modal-meta">
          <span id="modal-activity-date"></span>
          <span id="modal-activity-org"></span>
        </div>
        <h2 id="modal-activity-title" class="activity-modal-title"></h2>
        <div id="modal-activity-content" class="activity-modal-text"></div>
      </div>
    </div>
  </div>

  <script>
    // ── Fullscreen CTA Reveal ────────────────────────────────────────────
    const ctaWords = document.querySelectorAll('.reveal-text');
    const ctaObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, { threshold: 0.1 });

    ctaWords.forEach(word => ctaObserver.observe(word));

    // ── Navbar & Hero Animations ──────────────────────────────────────────
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    window.addEventListener('scroll', () => {
      // Navbar background change
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }

      // Active link on scroll
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= sectionTop - 150) {
          current = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(current)) {
          link.classList.add('active');
        }
      });
    });

    // ── Typewriter Effect ────────────────────────────────────────────────
    const subtitle = document.querySelector('.hero-subtitle');
    if (subtitle) {
      const text = subtitle.innerText;
      subtitle.innerText = '';
      let i = 0;
      function type() {
        if (i < text.length) {
          subtitle.innerHTML += text.charAt(i);
          i++;
          setTimeout(type, 100);
        }
      }
      setTimeout(type, 1000); // Start after 1s
    }

    // ── Accordion: click to set active, active card shows caption ──────────
    const accordionWrapper = document.getElementById('accordion-wrapper');

    if (accordionWrapper) {
      const items = accordionWrapper.querySelectorAll('.accordion-item');

      items.forEach(item => {
        item.addEventListener('click', function () {
          const isAlreadyActive = this.classList.contains('active');

          // If already active → open the detail modal
          if (isAlreadyActive) {
            openActivityModal(
              this.dataset.title,
              this.dataset.org,
              this.dataset.img,
              this.dataset.content,
              this.dataset.date
            );
            return;
          }

          // Otherwise → set this as active
          items.forEach(i => i.classList.remove('active'));
          this.classList.add('active');
        });
      });
    }

    // ── Activity Detail Modal ──────────────────────────────────────────────
    function openActivityModal(title, org, img, content, date) {
      const modal = document.getElementById('activity-modal');
      document.getElementById('modal-activity-title').innerText = title;
      document.getElementById('modal-activity-org').innerText = org;
      document.getElementById('modal-activity-img').src = img;
      document.getElementById('modal-activity-content').innerHTML = content;
      document.getElementById('modal-activity-date').innerText = date;
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    document.querySelector('.activity-modal-close').onclick = function () {
      document.getElementById('activity-modal').classList.remove('active');
      document.body.style.overflow = 'auto';
    };

    window.addEventListener('click', function (event) {
      const modal = document.getElementById('activity-modal');
      if (event.target === modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
      }
    });
  </script>


</body>

</html>