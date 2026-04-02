# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [1.0.0] — 2026-04-05

### Added
- Final handover documentation package including credentials, plugin list, and post-launch notes
- `docs/setup-guide.md` updated with final environment notes and LocalWP instructions

### Changed
- README updated with screenshots placeholder and finalized project description
- Elementor global colors and typography locked to prevent accidental changes post-handover

### Fixed
- Minor spacing inconsistency on the Services page CTA section at 768px breakpoint
- WPForms confirmation message was not displaying on mobile — resolved by fixing z-index conflict with Elementor popup layer

### Removed
- Removed all debug console logs and test form submissions from WPForms entries
- Cleaned up unused Elementor template drafts from the library

---

## [0.9.0] — 2026-04-01

### Fixed
- Homepage hero section was collapsing on screens below 480px — corrected padding and min-height settings in Elementor
- WPForms email notification was not firing on new submissions — traced to incorrect `From` email address conflicting with hosting SMTP settings; resolved by updating the sender field to match the verified domain
- Broken external link in the Recognitions section (ISC² profile URL had changed) — updated to the correct permalink
- About page bio paragraph was overflowing its container on Safari 16 due to a `word-break` inconsistency — added `overflow-wrap: break-word` to the child theme stylesheet
- Navigation menu not closing after link tap on mobile — fixed JavaScript event binding in the Hello Elementor child theme

### Changed
- Improved form field labels in WPForms contact form for clarity (e.g., "Your Message" → "Describe your security challenge or inquiry")
- Updated footer copyright year to 2026

---

## [0.8.0] — 2026-03-28

### Added
- Free Tools & Resources page fully built and published:
  - Grid layout with icon cards for each resource
  - External links to NIST Cybersecurity Framework, OWASP Top 10, and Kenya ICT Authority guidelines
  - "Request a custom resource" CTA linking to the contact form
- Contact page revamped with new WPForms form:
  - Service selection dropdown (Risk Assessment, Penetration Testing, Training, Advisory, Other)
  - Conditional fields based on service selection
  - SMTP email notification configured and tested
  - Success confirmation message styled to match site design
- Custom CSS added to child theme for form field focus states and error message styling

### Changed
- Footer links updated to include the Free Tools and Contact pages
- Elementor site settings updated — form accent color aligned with brand palette

---

## [0.7.0] — 2026-03-25

### Added
- Blog section activated and three initial posts published and formatted:
  - *"Understanding the NIST Cybersecurity Framework for SMEs in Kenya"*
  - *"Top 5 Mistakes Companies Make Before a Penetration Test"*
  - *"Why Cybersecurity Awareness Training Fails (And How to Fix It)"*
- Blog archive page built with card-style post grid in Elementor
- Single post template created with author bio block, estimated read time, and share buttons
- Categories created: `Cybersecurity Advisory`, `Penetration Testing`, `Risk & Compliance`

### Changed
- Blog post typography adjusted — body font size increased from 15px to 16px for readability
- Post featured images resized and compressed using Smush to improve load time

---

## [0.6.0] — 2026-03-22

### Added
- Recognitions & Awards section added to the About page:
  - Certified Information Systems Security Professional (CISSP) — ISC²
  - CEH (Certified Ethical Hacker) — EC-Council
  - Feature in CIO East Africa — "Top 10 Cybersecurity Voices in Kenya 2024"
  - Speaker recognition at AfricaHackon 2023 (link to conference archive)
  - Advisory board member credit — Kenya Cybersecurity Forum
- All recognitions include external links that open in a new tab with `rel="noopener noreferrer"`
- Custom Elementor icon list widget styled with brand accent color for recognition items

### Changed
- About page layout restructured to accommodate recognitions section without breaking existing bio and photo layout

---

## [0.5.0] — 2026-03-18

### Added
- Homepage fully redesigned in Elementor Pro:
  - Hero section with headline, sub-headline, background overlay, and dual CTA buttons
  - "What I Do" services strip with icon cards (Risk Assessment, Pen Testing, Training, Advisory)
  - Social proof / trust bar with logos of past client industries (anonymized)
  - Featured blog posts preview section (pulls latest 3 posts dynamically)
  - Closing CTA section with contact form shortcode
- About page redesigned:
  - Professional headshot integrated with text columns
  - Timeline-style career history section built with Elementor timeline widget
  - Skills and certifications listed with progress bar indicators

### Changed
- Site-wide typography updated: Headings now use `DM Sans`, body text uses `Inter` (loaded via Google Fonts in Elementor settings)
- Global color palette defined in Elementor: Primary (#0A2540), Accent (#00C2CB), Neutral (#F5F7FA)

---

## [0.1.0] — 2026-03-10

### Added
- Repository initialized with base project structure
- `README.md` with initial project overview and setup notes
- `.gitignore` configured for WordPress development
- `docs/project-brief.md` — project scope, timeline, and revision policy
- `assets/` folder structure created with subdirectories for screenshots, designs, and exports
- Hello Elementor child theme scaffolded with `style.css` and `functions.php`
- Elementor Pro and WPForms installed and license keys activated on local dev environment
- WordPress XML baseline export committed to `assets/exports/`

---

[1.0.0]: https://github.com/Josemuturi/Word-Press/compare/v0.9.0...v1.0.0
[0.9.0]: https://github.com/Josemuturi/Word-Press/compare/v0.8.0...v0.9.0
[0.8.0]: https://github.com/Josemuturi/Word-Press/compare/v0.7.0...v0.8.0
[0.7.0]: https://github.com/Josemuturi/Word-Press/compare/v0.6.0...v0.7.0
[0.6.0]: https://github.com/Josemuturi/Word-Press/compare/v0.5.0...v0.6.0
[0.5.0]: https://github.com/Josemuturi/Word-Press/compare/v0.1.0...v0.5.0
[0.1.0]: https://github.com/Josemuturi/Word-Press/releases/tag/v0.1.0
