# WordPressWebsite

# Aramorais Institutional Website

Custom WordPress institutional website developed as part of the Aramorais Intern Onboarding Program (Task B1).

This project includes a fully custom WordPress theme and a custom plugin to manage dynamic content such as services, portfolio projects, team members, and testimonials.

---

## 📌 Project Description

Institutional website for Aramorais with:

- Custom WordPress Theme (aramorais-theme)
- Custom Core Plugin (aramorais-core)
- Docker-based development environment
- Dynamic content using Custom Post Types
- Responsive and modern layout

---

## 🛠 Tech Stack

- WordPress  
- PHP  
- MySQL  
- Docker / Docker Compose  
- HTML5 / CSS3 / JavaScript  

---

## 📁 Project Structure

```text
wp-content/
├── themes/
│ └── aramorais-theme/
└── plugins/
└── aramorais-core/
```


---

## ⚙️ Setup Instructions

### 1. Clone repository

```bash
git clone https://github.com/victorhugo127/WordPressWebsite.git
cd WordPressWebsite
```
### 2. Start containers

```bash
docker-compose up -d
```
### Acesses services
 WordPress: http:localhost:8000
 
---
##  🔧 Configuration Steps

1. Complete WordPress installation via browser.

2. Activate theme:
   - Appearance → Themes → Aramorais Theme

3. Activate plugin:
   - Plugins → Aramorais Core

4. Create sample content:
   - Services  
   - Projects  
   - Team Members  
   - Testimonials  

5. Assign homepage:
   - Settings → Reading → Static Homepage

---

## 🧪 Testing Instructions

Verify pages load correctly:

- Home  
- About  
- Services  
- Portfolio  
- Blog  
- Contact  

Validate:

- Forms submission  
- Custom Post Types creation  
- Responsive layout (mobile / tablet / desktop)

## ⚠️ Known Issues

- Email sending requires SMTP configuration.  
- Google Maps API key not included.  
- No automated test suite implemented yet.

---

## 🚀 Future Improvements

- Add automated tests (PHPUnit)  
- Implement Gutenberg custom blocks  
- Improve accessibility (WCAG)  
- Add caching and performance optimization  
- Multilanguage support (WPML / Polylang)
