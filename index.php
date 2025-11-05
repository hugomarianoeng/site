<?php
// Basic settings for Umbler
date_default_timezone_set('Europe/Dublin');
$BASE_URL = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
?>
<?php include __DIR__ . '/partials/header.php'; ?>

<main id="top">
  <!-- Hero -->
  <section id="hero" class="section hero">
    <div class="container">
      <h1>Hugo de Oliveira Mariano</h1>
      <p class="subtitle">Product Marketing & Marketing Analytics</p>
      <p class="meta">Galway, Ireland • EU Right to Work</p>
      <p class="lead">
        Data-driven Product Marketing professional with 4+ years across B2B paid media, marketing analytics, and GTM execution.
        Founder at Alaska Marketing. Led end-to-end SaaS launch for cafés/baristas (ICP, positioning, pricing inputs, funnel to MQL/SQL, lifecycle).
        Strong with HubSpot, GA4, BI dashboards, and Python automation. Comfortable translating technical features into revenue stories for MSPs and IT buyers.
        Fluent in Portuguese and English.
      </p>
      <div class="cta-row">
        <a class="btn primary" href="mailto:hugo.mariano@hotmail.com">Email Hugo</a>
        <a class="btn outline" href="https://linkedin.com/in/eng-hugo-mariano" target="_blank" rel="noopener">View LinkedIn</a>
        <a class="btn outline" href="#" aria-disabled="true">Download CV</a>
      </div>
    </div>
  </section>

  <!-- Featured Projects -->
  <section id="projects" class="section">
    <div class="container">
      <h2>Featured Projects</h2>
      <div class="grid grid-2">
        <article class="card">
          <h3>SaaS Launch Pack</h3>
          <p>Brand book, messaging, LP, ebooks, nurture, GTM calendar, paid setup, reporting, enablement deck</p>
          <a href="#" class="link">View project →</a>
        </article>
        <article class="card emphasis">
          <h3>Competitive &amp; Market Sizing</h3>
          <p>SWOT, JTBD, TAM/SAM/SOM, pricing scans, 5‑year scenarios</p>
          <a href="#" class="link">View project →</a>
        </article>
        <article class="card">
          <h3>MSP/IT Ops &amp; Compliance</h3>
          <p>Jira automation, compliance manual, change governance</p>
          <a href="#" class="link">View project →</a>
        </article>
        <article class="card">
          <h3>Security Foundations</h3>
          <p>NAS backup playbook, Zero Trust verification checkpoints</p>
          <a href="#" class="link">View project →</a>
        </article>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="section">
    <div class="container">
      <h2>Skills &amp; Expertise</h2>

      <div class="skills-group">
        <h4>Product Marketing</h4>
        <div class="chips">
          <span class="chip">GTM</span><span class="chip">ICP/Personas</span><span class="chip">Messaging</span>
          <span class="chip">Pricing inputs</span><span class="chip">Sales enablement</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Analytics</h4>
        <div class="chips">
          <span class="chip">Funnel analytics</span><span class="chip">A/B testing</span>
          <span class="chip">LTV/CAC</span><span class="chip">Cohort analysis</span><span class="chip">GA4</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Tools</h4>
        <div class="chips">
          <span class="chip">HubSpot</span><span class="chip">Google Ads</span><span class="chip">Meta Ads</span>
          <span class="chip">LinkedIn Ads</span><span class="chip">Power BI</span><span class="chip">Looker</span>
          <span class="chip">Data Studio</span><span class="chip">Excel</span><span class="chip">Jira</span>
          <span class="chip">Python</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Design</h4>
        <div class="chips">
          <span class="chip">Adobe Photoshop</span><span class="chip">Adobe Illustrator</span><span class="chip">Canva</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Social</h4>
        <div class="chips">
          <span class="chip">LinkedIn</span><span class="chip">Instagram</span>
          <span class="chip">Content planning</span><span class="chip">Social media management</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Security/IT Ops</h4>
        <div class="chips">
          <span class="chip">Ticketing/SLAs</span><span class="chip">Compliance docs</span>
          <span class="chip">NAS backups</span><span class="chip">Zero Trust concepts</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Languages</h4>
        <div class="chips">
          <span class="chip">English</span><span class="chip">Portuguese</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Certifications</h4>
        <div class="chips">
          <span class="chip">Marketo Email Marketing (certificate)</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section">
    <div class="container">
      <h2>Experience</h2>

      <article class="experience-card">
        <div class="exp-meta">
          <div>2023–Present</div><div>Remote</div>
        </div>
        <h3>Founder &amp; Product Marketing Lead</h3>
        <a class="company" href="#" aria-disabled="true">Alaska Marketing</a>
        <ul>
          <li>Led full GTM for a café/barista SaaS (brand, messaging, launch across Meta/Google/LinkedIn, email nurture)</li>
          <li>Built ICP/personas and qualification funnel to MQL/SQL; HubSpot scoring and routing</li>
          <li>Competitive scans with AI, SWOT, JTBD, TAM/SAM/SOM; pricing roadmap tied to adoption milestones</li>
          <li>Implemented MSP/IT workflows (Jira SLAs, priority rules, change logs) and GDPR/LGPD-aligned practices</li>
          <li>Sales enablement: talk tracks, objection handling, event assets, demo scripts</li>
        </ul>
      </article>

      <article class="experience-card">
        <div class="exp-meta">
          <div>Sep 2021–Oct 2023</div><div>São Paulo</div>
        </div>
        <h3>Martech - Marketing Data Analyst</h3>
        <a class="company" href="#" aria-disabled="true">Ideatore</a>
        <ul>
          <li>Built accurate strategy performance reports; heavy Excel (pivots, macros)</li>
          <li>Automated PowerPoint reporting with Python; dashboards in Data Studio/Looker/Power BI</li>
          <li>Automated workflows with Power Automate and Zapier</li>
          <li>Security awareness/anti-phishing support; knowledge base; user training</li>
          <li>Supported paid ads: Google Ads, Meta Ads, LinkedIn Ads</li>
        </ul>
      </article>

      <article class="experience-card">
        <div class="exp-meta">
          <div>2019–Sep 2021</div><div>São Paulo</div>
        </div>
        <h3>Electrical Engineer / Freelancer</h3>
        <a class="company" href="#" aria-disabled="true">XMenu &amp; Projects</a>
        <ul>
          <li>Python programming; customer support for spam/DNS filtering, SAT, anti‑phishing</li>
          <li>Documentation and training; proactive issue resolution</li>
          <li>Solar sales/design analytics with Python, Excel, Power BI</li>
          <li>Electrical/BIM projects (2D/3D), KPI analysis, vendor scorecards, cost estimates</li>
        </ul>
      </article>
    </div>
  </section>

  <!-- About + Contact -->
  <section id="about" class="section muted">
    <div class="container">
      <h2>About Me</h2>
      <p>I’m married and a proud cat dad to a deaf rescue. Linux enthusiast (distro‑hopping) and Kingdom Hearts fan on PS5.</p>
    </div>
  </section>

  <section id="contact" class="section">
    <div class="container">
      <h2>Let’s Connect</h2>
      <div class="contact-grid">
        <a class="contact-card" href="mailto:hugo.mariano@hotmail.com">
          <strong>Email</strong>
          <span>hugo.mariano@hotmail.com</span>
        </a>
        <a class="contact-card" href="https://linkedin.com/in/eng-hugo-mariano" target="_blank" rel="noopener">
          <strong>LinkedIn</strong>
          <span>/in/eng-hugo-mariano</span>
        </a>
      </div>

      <p class="contact-meta">Phone: +353 83 411 7211 • EU Right to Work</p>

      <!-- Contact form (optional) -->
      <form class="contact-form" action="contact.php" method="post" novalidate>
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <textarea name="message" rows="5" placeholder="Message" required></textarea>
        <button type="submit" class="btn primary">Send</button>
        <div class="small">By submitting, you agree to be contacted via the provided email.</div>
      </form>
    </div>
  </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>