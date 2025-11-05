<?php
date_default_timezone_set('Europe/Dublin');
$BASE_URL = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
?>
<?php include __DIR__ . '/partials/header.php'; ?>

<main id="top">
  <!-- Personal Message -->
  <section id="hero" class="section hero">
    <div class="container">
      <h1>Hi Ronan 👋</h1>
      <p class="subtitle">Thank you for opening this link</p>
      <p class="lead">
        I wanted to reach out in a more personal way. My biggest dream is to work with you and your team. 
        I've applied many times, but I've never been called for an interview, and honestly, I don't even know 
        how to prepare myself better or what I might be missing.
      </p>
      <p class="lead">
        If you have any advice for me—whether it's about my CV, my approach, or what skills I should focus on—I 
        would genuinely love to hear from you. Below is everything I've done so far, and I hope it shows my 
        dedication and passion for this field.
      </p>
      <div class="cta-row">
        <a class="btn primary" href="mailto:hugo.mariano@hotmail.com">Email Me</a>
        <a class="btn outline" href="https://linkedin.com/in/eng-hugo-mariano" target="_blank" rel="noopener">LinkedIn</a>
      </div>
    </div>
  </section>

  <!-- About Me -->
  <section id="about" class="section">
    <div class="container">
      <h2>About Me</h2>
      <p class="lead">
        I'm Hugo de Oliveira Mariano, a data-driven Product Marketing professional with 4+ years of experience 
        across B2B paid media, marketing analytics, and GTM execution. I'm based in Galway, Ireland, with full 
        EU right to work.
      </p>
      <p class="lead">
        I founded Alaska Marketing and led an end-to-end SaaS launch for cafés and baristas, covering ICP development, 
        positioning, pricing inputs, funnel optimization to MQL/SQL, and lifecycle management. I'm strong with 
        HubSpot, GA4, BI dashboards, and Python automation, and I'm comfortable translating technical features 
        into revenue stories for MSPs and IT buyers.
      </p>
    </div>
  </section>

  <!-- Featured Projects -->
  <section id="projects" class="section muted">
    <div class="container">
      <h2>What I've Built</h2>
      <div class="grid grid-2">
        <article class="card">
          <h3>SaaS Launch Pack</h3>
          <p>Complete go-to-market package including brand book, messaging framework, landing pages, ebooks, 
          nurture campaigns, GTM calendar, paid media setup, reporting dashboards, and sales enablement deck.</p>
        </article>
        <article class="card emphasis">
          <h3>Competitive & Market Sizing</h3>
          <p>Comprehensive market analysis with SWOT, Jobs-to-be-Done framework, TAM/SAM/SOM calculations, 
          competitive pricing scans, and 5-year growth scenarios.</p>
        </article>
        <article class="card">
          <h3>MSP/IT Ops & Compliance</h3>
          <p>Operational excellence through Jira automation, compliance documentation, and change governance frameworks.</p>
        </article>
        <article class="card">
          <h3>Security Foundations</h3>
          <p>Enterprise security implementations including NAS backup playbooks and Zero Trust verification checkpoints.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="section">
    <div class="container">
      <h2>My Skills & Expertise</h2>

      <div class="skills-group">
        <h4>Product Marketing</h4>
        <div class="chips">
          <span class="chip">GTM Strategy</span>
          <span class="chip">ICP/Personas</span>
          <span class="chip">Messaging</span>
          <span class="chip">Positioning</span>
          <span class="chip">Pricing</span>
          <span class="chip">Sales Enablement</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Analytics & Data</h4>
        <div class="chips">
          <span class="chip">Funnel Analytics</span>
          <span class="chip">A/B Testing</span>
          <span class="chip">LTV/CAC</span>
          <span class="chip">Cohort Analysis</span>
          <span class="chip">GA4</span>
          <span class="chip">Python</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Marketing Tools</h4>
        <div class="chips">
          <span class="chip">HubSpot</span>
          <span class="chip">Google Ads</span>
          <span class="chip">Meta Ads</span>
          <span class="chip">LinkedIn Ads</span>
          <span class="chip">Power BI</span>
          <span class="chip">Looker</span>
          <span class="chip">Data Studio</span>
        </div>
      </div>

      <div class="skills-group">
        <h4>Design & Content</h4>
        <div class="chips">
          <span class="chip">Adobe Photoshop</span>
          <span class="chip">Adobe Illustrator</span>
          <span class="chip">Canva</span>
          <span class="chip">Content Strategy</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section muted">
    <div class="container">
      <h2>Professional Experience</h2>

      <article class="experience-card">
        <div class="exp-meta">
          <div>Jan 2023 – Present</div>
          <div>Galway, Ireland</div>
        </div>
        <h3 class="company">Alaska Marketing — Founder & Product Marketing Lead</h3>
        <ul>
          <li>Led end-to-end SaaS launch for café/barista vertical: ICP, positioning, pricing, funnel (MQL/SQL), lifecycle</li>
          <li>Built GTM calendar, nurture campaigns, ebooks, landing pages, and sales enablement materials</li>
          <li>Managed paid media (Google, Meta, LinkedIn) with full funnel analytics and BI dashboards</li>
          <li>Automated reporting and data pipelines using Python and HubSpot integrations</li>
        </ul>
      </article>

      <article class="experience-card">
        <div class="exp-meta">
          <div>Mar 2021 – Dec 2022</div>
          <div>Remote</div>
        </div>
        <h3 class="company">Previous Marketing Roles</h3>
        <ul>
          <li>B2B paid media management across multiple channels with focus on ROI optimization</li>
          <li>Marketing analytics and reporting for SaaS companies</li>
          <li>Customer lifecycle management and retention strategies</li>
          <li>Cross-functional collaboration with sales, product, and engineering teams</li>
        </ul>
      </article>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="contact" class="section">
    <div class="container" style="text-align: center;">
      <h2>I'd Love to Hear From You</h2>
      <p class="lead" style="margin: 0 auto 32px;">
        Whether it's feedback on my work, advice on how to improve, or just a conversation about 
        marketing and growth—I'm all ears. Thank you for taking the time to look at my work.
      </p>
      <div class="cta-row" style="justify-content: center;">
        <a class="btn primary" href="mailto:hugo.mariano@hotmail.com">Send Me an Email</a>
        <a class="btn outline" href="https://linkedin.com/in/eng-hugo-mariano" target="_blank" rel="noopener">Connect on LinkedIn</a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
