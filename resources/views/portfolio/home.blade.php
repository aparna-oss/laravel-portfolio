<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aparna S | PHP Laravel Full Stack Developer</title>

    <meta name="description"
          content="Aparna S - PHP Laravel Full Stack Developer specializing in Laravel, PHP, MySQL, REST APIs, JavaScript and modern web applications.">

    <meta name="keywords"
          content="Aparna S, PHP Developer, Laravel Developer, Full Stack Developer, Laravel Developer Kerala, PHP Laravel Developer">

    <meta name="author" content="Aparna S">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Portfolio CSS -->
    <link rel="stylesheet"
          href="{{ asset('portfolio/css/style.css') }}">
</head>
<style>
    /* =========================================================
   ROOT VARIABLES
========================================================= */

:root {

    --bg: #070b14;
    --bg-secondary: #0b1120;
    --card: #0f1728;
    --card-light: #131d31;

    --primary: #8b5cf6;
    --primary-light: #a78bfa;

    --text: #f8fafc;
    --text-secondary: #a8b3c7;
    --text-muted: #68758c;

    --border: rgba(255,255,255,0.08);

    --white: #ffffff;

    --success: #22c55e;

    --container: 1180px;

    --transition: all 0.3s ease;

}


/* =========================================================
   RESET
========================================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
    scroll-padding-top: 90px;
}

body {
    font-family: "Inter", sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.7;
    overflow-x: hidden;
}

a {
    text-decoration: none;
    color: inherit;
}

button,
input,
textarea {
    font-family: inherit;
}

button {
    cursor: pointer;
}

ul {
    list-style: none;
}

img {
    max-width: 100%;
    display: block;
}


/* =========================================================
   GLOBAL
========================================================= */

.container {
    width: min(92%, var(--container));
    margin: auto;
}

.section {
    padding: 120px 0;
}

.section-heading {
    display: flex;
    align-items: flex-start;
    gap: 25px;
    margin-bottom: 70px;
}

.section-number {
    color: var(--primary-light);
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 2px;
    padding-top: 10px;
}

.section-label {
    font-size: 12px;
    color: var(--primary-light);
    letter-spacing: 3px;
    font-weight: 700;
    margin-bottom: 8px;
}

.section-heading h2 {
    font-family: "Poppins", sans-serif;
    font-size: clamp(32px, 4vw, 50px);
    line-height: 1.2;
}

.section-heading h2 span {
    color: var(--primary-light);
}


/* =========================================================
   BUTTONS
========================================================= */

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;

    padding: 14px 25px;

    border-radius: 8px;

    font-size: 14px;
    font-weight: 600;

    transition: var(--transition);

    border: 1px solid transparent;
}

.btn-primary {
    background: var(--primary);
    color: var(--white);
}

.btn-primary:hover {
    background: #7c3aed;
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(139,92,246,0.25);
}

.btn-outline {
    border-color: var(--border);
    background: rgba(255,255,255,0.02);
}

.btn-outline:hover {
    border-color: var(--primary);
    background: rgba(139,92,246,0.08);
    transform: translateY(-3px);
}

.text-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--primary-light);
    font-weight: 600;
    font-size: 14px;
}

.text-btn:hover {
    gap: 15px;
}


/* =========================================================
   PRELOADER
========================================================= */

.preloader {
    position: fixed;
    inset: 0;

    background: var(--bg);

    z-index: 9999;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: opacity .5s ease,
                visibility .5s ease;
}

.preloader.hide {
    opacity: 0;
    visibility: hidden;
}

.loader {
    width: 45px;
    height: 45px;

    border: 3px solid rgba(139,92,246,0.2);
    border-top-color: var(--primary);

    border-radius: 50%;

    animation: spin 1s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}


/* =========================================================
   HEADER
========================================================= */

.header {
    position: fixed;
    top: 0;
    left: 0;

    width: 100%;

    z-index: 1000;

    transition: var(--transition);
}

.header.scrolled {
    background: rgba(7,11,20,0.9);
    backdrop-filter: blur(18px);

    border-bottom: 1px solid var(--border);
}

.nav-container {
    height: 80px;

    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo {
    font-family: "Poppins", sans-serif;
    font-size: 22px;
    font-weight: 800;

    white-space: nowrap;
}

.logo span:not(.logo-bracket) {
    color: var(--primary-light);
}

.logo-bracket {
    color: var(--primary-light);
}

.navbar {
    display: flex;
    align-items: center;
    gap: 25px;
}

.nav-link {
    color: var(--text-secondary);
    font-size: 13px;
    font-weight: 500;

    position: relative;

    transition: var(--transition);
}

.nav-link:hover,
.nav-link.active {
    color: var(--white);
}

.nav-link.active::after {
    content: "";

    position: absolute;

    width: 5px;
    height: 5px;

    border-radius: 50%;

    background: var(--primary);

    bottom: -10px;
    left: 50%;

    transform: translateX(-50%);
}

.nav-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.nav-btn {
    padding: 10px 18px;

    border: 1px solid var(--border);
    border-radius: 7px;

    font-size: 13px;
    font-weight: 600;

    transition: var(--transition);
}

.nav-btn:hover {
    background: var(--primary);
    border-color: var(--primary);
}

.menu-toggle {
    display: none;

    width: 42px;
    height: 42px;

    background: transparent;
    border: 1px solid var(--border);

    color: var(--white);

    border-radius: 7px;

    font-size: 18px;
}


/* =========================================================
   HERO
========================================================= */

.hero {
    min-height: 100vh;

    display: flex;
    align-items: center;

    position: relative;

    padding-top: 100px;

    overflow: hidden;
}

.hero-background {
    position: absolute;
    inset: 0;

    pointer-events: none;
}

.hero-grid {
    position: absolute;
    inset: 0;

    background-image:
        linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);

    background-size: 60px 60px;

    mask-image: linear-gradient(to bottom, black, transparent);
}

.glow {
    position: absolute;

    width: 450px;
    height: 450px;

    border-radius: 50%;

    filter: blur(120px);

    opacity: .12;
}

.glow-one {
    background: var(--primary);

    top: 10%;
    left: -150px;
}

.glow-two {
    background: #2563eb;

    right: -150px;
    bottom: 10%;
}

.hero-container {
    position: relative;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 70px;

    align-items: center;
}

.availability {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    border: 1px solid rgba(34,197,94,.2);

    background: rgba(34,197,94,.05);

    color: #86efac;

    padding: 7px 12px;

    border-radius: 50px;

    font-size: 11px;
    font-weight: 600;

    margin-bottom: 25px;
}

.status-dot {
    width: 7px;
    height: 7px;

    border-radius: 50%;

    background: var(--success);

    box-shadow: 0 0 10px var(--success);

    animation: pulse 2s infinite;
}

@keyframes pulse {

    0%,100% {
        opacity: 1;
    }

    50% {
        opacity: .4;
    }

}

.hero-small-title {
    font-size: 12px;
    letter-spacing: 4px;
    color: var(--text-muted);

    margin-bottom: 8px;
}

.hero h1 {
    font-family: "Poppins", sans-serif;

    font-size: clamp(55px, 7vw, 88px);

    line-height: 1;

    letter-spacing: -4px;

    margin-bottom: 15px;
}

.hero h1 span {
    color: var(--primary-light);
}

.hero h2 {
    font-family: "Poppins", sans-serif;

    font-size: clamp(20px, 3vw, 30px);

    line-height: 1.3;

    margin-bottom: 20px;
}

.hero h2 span {
    color: var(--primary-light);
}

.hero-description {
    max-width: 590px;

    color: var(--text-secondary);

    font-size: 15px;

    margin-bottom: 32px;
}

.hero-buttons {
    display: flex;
    gap: 13px;
    flex-wrap: wrap;
}

.hero-socials {
    display: flex;
    gap: 12px;

    margin-top: 35px;
}

.hero-socials a {
    width: 40px;
    height: 40px;

    display: flex;
    justify-content: center;
    align-items: center;

    border: 1px solid var(--border);

    border-radius: 50%;

    color: var(--text-secondary);

    transition: var(--transition);
}

.hero-socials a:hover {
    color: var(--white);

    background: var(--primary);

    border-color: var(--primary);

    transform: translateY(-4px);
}


/* =========================================================
   CODE CARD
========================================================= */

.hero-visual {
    position: relative;

    min-height: 500px;

    display: flex;
    justify-content: center;
    align-items: center;
}

.code-card {
    width: 100%;
    max-width: 510px;

    border: 1px solid var(--border);

    border-radius: 14px;

    background: rgba(15,23,40,.88);

    box-shadow:
        0 30px 80px rgba(0,0,0,.35),
        0 0 80px rgba(139,92,246,.06);

    overflow: hidden;

    transform: rotate(1deg);

    transition: var(--transition);
}

.code-card:hover {
    transform: rotate(0) translateY(-8px);
}

.code-header {
    height: 48px;

    display: flex;
    align-items: center;

    padding: 0 18px;

    border-bottom: 1px solid var(--border);
}

.window-buttons {
    display: flex;
    gap: 6px;
}

.window-buttons span {
    width: 9px;
    height: 9px;

    border-radius: 50%;

    background: #374151;
}

.code-file {
    margin-left: auto;
    margin-right: auto;

    color: var(--text-muted);

    font-size: 11px;
}

.code-file i {
    color: var(--primary-light);
    margin-right: 7px;
}

.code-body {
    padding: 28px 30px;
    overflow-x: auto;
}

.code-body pre {
    font-family: "Courier New", monospace;

    font-size: 13px;

    line-height: 1.9;

    color: #cbd5e1;
}

.code-purple {
    color: #c084fc;
}

.code-yellow {
    color: #facc15;
}

.code-blue {
    color: #60a5fa;
}

.code-green {
    color: #86efac;
}


/* =========================================================
   FLOATING CARDS
========================================================= */

.floating-card {
    position: absolute;

    display: flex;
    align-items: center;
    gap: 12px;

    padding: 13px 16px;

    background: rgba(15,23,40,.95);

    border: 1px solid var(--border);

    border-radius: 10px;

    box-shadow: 0 15px 40px rgba(0,0,0,.25);

    animation: float 4s ease-in-out infinite;
}

.floating-card i {
    font-size: 22px;
    color: var(--primary-light);
}

.floating-card strong {
    display: block;
    font-size: 12px;
}

.floating-card small {
    display: block;
    color: var(--text-muted);
    font-size: 9px;
}

.card-one {
    top: 65px;
    right: -5px;
}

.card-two {
    bottom: 65px;
    left: -15px;

    animation-delay: 1.5s;
}

@keyframes float {

    0%,100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-12px);
    }

}

.scroll-down {
    position: absolute;

    bottom: 30px;
    left: 50%;

    transform: translateX(-50%);

    display: flex;
    align-items: center;
    gap: 10px;

    color: var(--text-muted);

    font-size: 10px;

    text-transform: uppercase;

    letter-spacing: 2px;
}


/* =========================================================
   ABOUT
========================================================= */

.about {
    background: var(--bg-secondary);
}

.about-grid {
    display: grid;

    grid-template-columns: .8fr 1.2fr;

    gap: 90px;

    align-items: center;
}

.about-image {
    position: relative;

    min-height: 440px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.profile-box {
    width: 310px;
    height: 360px;

    border: 1px solid var(--border);

    border-radius: 15px;

    background:
        radial-gradient(circle at 50% 25%, rgba(139,92,246,.15), transparent 35%),
        var(--card);

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    text-align: center;

    position: relative;
}

.profile-box::before {
    content: "";

    position: absolute;
    inset: 12px;

    border: 1px dashed rgba(139,92,246,.2);

    border-radius: 10px;
}

.profile-icon {
    width: 100px;
    height: 100px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: rgba(139,92,246,.12);

    border: 1px solid rgba(139,92,246,.2);

    font-size: 36px;

    color: var(--primary-light);

    margin-bottom: 25px;

    position: relative;
}

.profile-box h3 {
    font-family: "Poppins", sans-serif;

    font-size: 22px;

    position: relative;
}

.profile-box p {
    color: var(--text-secondary);

    font-size: 12px;

    position: relative;
}

.profile-line {
    width: 40px;
    height: 2px;

    background: var(--primary);

    margin: 20px 0;

    position: relative;
}

.profile-box > span {
    font-size: 11px;

    color: var(--text-muted);

    position: relative;
}

.profile-box > span i {
    color: var(--primary-light);
    margin-right: 5px;
}

.experience-badge {
    position: absolute;

    bottom: 20px;
    right: 10px;

    padding: 15px 20px;

    background: var(--primary);

    border-radius: 10px;

    box-shadow: 0 15px 40px rgba(139,92,246,.25);

    text-align: center;
}

.experience-badge strong {
    display: block;

    font-family: "Poppins";

    font-size: 28px;

    line-height: 1;
}

.experience-badge span {
    font-size: 9px;

    text-transform: uppercase;

    letter-spacing: 1px;
}

.about-lead {
    font-family: "Poppins", sans-serif;

    font-size: 21px;

    color: var(--text);

    margin-bottom: 20px;
}

.about-content > p:not(.about-lead) {
    color: var(--text-secondary);

    font-size: 14px;

    margin-bottom: 17px;
}

.about-details {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 20px;

    border-top: 1px solid var(--border);

    border-bottom: 1px solid var(--border);

    padding: 25px 0;

    margin: 30px 0;
}

.detail-item span {
    display: block;

    color: var(--text-muted);

    font-size: 10px;

    text-transform: uppercase;

    letter-spacing: 1px;

    margin-bottom: 3px;
}

.detail-item strong {
    font-size: 13px;
}


/* =========================================================
   STATS
========================================================= */

.stats-section {
    padding: 55px 0;

    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);

    background: var(--bg-secondary);
}

.stats-grid {
    display: grid;

    grid-template-columns: repeat(4,1fr);
}

.stat-item {
    text-align: center;

    border-right: 1px solid var(--border);
}

.stat-item:last-child {
    border-right: 0;
}

.stat-item strong {
    display: block;

    font-family: "Poppins";

    font-size: 40px;

    color: var(--primary-light);

    line-height: 1;
}

.stat-item span {
    display: block;

    color: var(--text-muted);

    font-size: 11px;

    margin-top: 8px;

    text-transform: uppercase;

    letter-spacing: 1px;
}


/* =========================================================
   SKILLS
========================================================= */

.skills-grid {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 20px;
}

.skill-category {
    background: var(--card);

    border: 1px solid var(--border);

    border-radius: 12px;

    padding: 28px;

    transition: var(--transition);
}

.skill-category:hover {
    border-color: rgba(139,92,246,.3);

    transform: translateY(-5px);
}

.skill-category-header {
    display: flex;
    align-items: center;

    gap: 15px;

    margin-bottom: 28px;
}

.skill-icon {
    width: 45px;
    height: 45px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 8px;

    background: rgba(139,92,246,.1);

    color: var(--primary-light);

    font-size: 20px;
}

.skill-category h3 {
    font-family: "Poppins";

    font-size: 17px;
}

.skill-category-header p {
    font-size: 10px;

    color: var(--text-muted);
}

.skill-item {
    display: flex;
    justify-content: space-between;

    font-size: 12px;

    margin-top: 18px;
}

.skill-item span {
    color: var(--text-secondary);
}

.skill-item i {
    color: var(--primary-light);
    width: 18px;
}

.skill-item strong {
    color: var(--text-muted);
    font-size: 10px;
}

.progress {
    width: 100%;
    height: 4px;

    background: rgba(255,255,255,.05);

    border-radius: 5px;

    margin-top: 8px;

    overflow: hidden;
}

.progress span {
    display: block;

    height: 100%;

    background: var(--primary);

    border-radius: inherit;

    transform-origin: left;

    animation: progressAnimation 1.5s ease;
}

@keyframes progressAnimation {
    from {
        transform: scaleX(0);
    }

    to {
        transform: scaleX(1);
    }
}

.technology-tags {
    display: flex;
    flex-wrap: wrap;

    gap: 9px;
}

.technology-tags span,
.technology-cloud span,
.project-tech span,
.experience-tags span {
    padding: 6px 10px;

    border-radius: 5px;

    background: rgba(139,92,246,.07);

    border: 1px solid rgba(139,92,246,.12);

    color: var(--text-secondary);

    font-size: 10px;
}

.technology-cloud {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;

    gap: 10px;

    margin-top: 35px;
}


/* =========================================================
   EXPERIENCE
========================================================= */

.experience {
    background: var(--bg-secondary);
}

.timeline {
    max-width: 950px;

    margin: auto;

    position: relative;
}

.timeline::before {
    content: "";

    position: absolute;

    left: 130px;

    top: 0;
    bottom: 0;

    width: 1px;

    background: var(--border);
}

.timeline-item {
    position: relative;

    display: grid;

    grid-template-columns: 130px 1fr;

    gap: 50px;

    padding-bottom: 60px;
}

.timeline-item:last-child {
    padding-bottom: 0;
}

.timeline-date {
    text-align: right;

    color: var(--primary-light);

    font-size: 11px;

    font-weight: 600;

    padding-top: 25px;
}

.timeline-dot {
    position: absolute;

    left: 124px;

    top: 25px;

    width: 13px;
    height: 13px;

    border-radius: 50%;

    background: var(--primary);

    border: 3px solid var(--bg-secondary);

    box-shadow: 0 0 0 1px var(--primary);
}

.timeline-card {
    background: var(--card);

    border: 1px solid var(--border);

    border-radius: 12px;

    padding: 28px;

    transition: var(--transition);
}

.timeline-card:hover {
    transform: translateX(5px);

    border-color: rgba(139,92,246,.25);
}

.timeline-header {
    display: flex;
    justify-content: space-between;

    gap: 20px;

    margin-bottom: 15px;
}

.timeline-header h3 {
    font-family: "Poppins";

    font-size: 19px;
}

.timeline-header h4 {
    color: var(--primary-light);

    font-size: 12px;

    font-weight: 500;
}

.job-type {
    height: fit-content;

    padding: 5px 10px;

    background: rgba(34,197,94,.08);

    border: 1px solid rgba(34,197,94,.15);

    color: #86efac;

    border-radius: 5px;

    font-size: 9px;

    white-space: nowrap;
}

.timeline-card > p {
    color: var(--text-secondary);

    font-size: 13px;

    margin-bottom: 18px;
}

.timeline-card ul {
    margin-bottom: 20px;
}

.timeline-card li {
    position: relative;

    padding-left: 17px;

    color: var(--text-secondary);

    font-size: 12px;

    margin-bottom: 5px;
}

.timeline-card li::before {
    content: "";

    position: absolute;

    left: 0;
    top: 9px;

    width: 5px;
    height: 5px;

    border-radius: 50%;

    background: var(--primary);
}

.experience-tags {
    display: flex;

    flex-wrap: wrap;

    gap: 7px;
}


/* =========================================================
   PROJECTS
========================================================= */

.projects-grid {
    display: grid;

    grid-template-columns: repeat(2,1fr);

    gap: 25px;
}

.project-card {
    background: var(--card);

    border: 1px solid var(--border);

    border-radius: 13px;

    overflow: hidden;

    transition: var(--transition);
}

.project-card:hover {
    transform: translateY(-8px);

    border-color: rgba(139,92,246,.35);

    box-shadow: 0 25px 60px rgba(0,0,0,.25);
}

.project-image {
    height: 260px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 30px;

    overflow: hidden;
}

.project-image-one {
    background: linear-gradient(135deg,#111827,#172554);
}

.project-image-two {
    background: linear-gradient(135deg,#172554,#312e81);
}

.project-image-three {
    background: linear-gradient(135deg,#111827,#164e63);
}

.project-image-four {
    background: linear-gradient(135deg,#052e16,#064e3b);
}

.project-image-five {
    background: linear-gradient(135deg,#1c1917,#292524);
}

.project-image-six {
    background: linear-gradient(135deg,#172554,#1e1b4b);
}


/* Browser mockup */

.project-browser {
    width: 90%;

    border: 1px solid rgba(255,255,255,.1);

    border-radius: 7px;

    background: #0b1120;

    box-shadow: 0 20px 50px rgba(0,0,0,.4);

    transform: perspective(900px) rotateX(5deg);
}

.browser-top {
    height: 25px;

    border-bottom: 1px solid var(--border);

    display: flex;
    align-items: center;

    padding-left: 10px;

    gap: 4px;
}

.browser-top span {
    width: 5px;
    height: 5px;

    border-radius: 50%;

    background: #4b5563;
}

.browser-content {
    display: flex;

    height: 150px;
}

.mock-sidebar {
    width: 23%;

    background: #111827;

    border-right: 1px solid var(--border);
}

.mock-main {
    flex: 1;

    padding: 12px;
}

.mock-title {
    width: 40%;
    height: 8px;

    background: #475569;

    border-radius: 4px;

    margin-bottom: 15px;
}

.mock-cards {
    display: flex;
    gap: 6px;
}

.mock-cards span {
    flex: 1;

    height: 35px;

    background: #1e293b;

    border-radius: 4px;
}

.mock-table {
    height: 55px;

    background: #111827;

    margin-top: 8px;

    border-radius: 4px;
}


/* Website mock */

.website-mock {
    width: 90%;
    height: 180px;

    border: 1px solid rgba(255,255,255,.1);

    background: #0b1120;

    border-radius: 7px;

    box-shadow: 0 20px 50px rgba(0,0,0,.4);

    overflow: hidden;
}

.mock-navbar {
    height: 30px;

    border-bottom: 1px solid var(--border);

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 0 12px;
}

.mock-navbar > span {
    width: 45px;
    height: 5px;

    background: var(--primary);

    border-radius: 5px;
}

.mock-navbar div {
    display: flex;
    gap: 7px;
}

.mock-navbar i {
    width: 20px;
    height: 4px;

    background: #475569;

    display: block;

    border-radius: 3px;
}

.mock-hero {
    height: 90px;

    padding: 20px;

    background:
        radial-gradient(circle at right,rgba(139,92,246,.2),transparent 30%);
}

.mock-hero div {
    width: 50%;
    height: 12px;

    background: #64748b;

    margin-bottom: 10px;

    border-radius: 3px;
}

.mock-hero span {
    display: block;

    width: 30%;
    height: 7px;

    background: var(--primary);

    border-radius: 3px;
}

.mock-products {
    display: flex;
    gap: 8px;

    padding: 10px 15px;
}

.mock-products span {
    height: 40px;

    flex: 1;

    background: #1e293b;

    border-radius: 4px;
}


/* Hospital */

.hospital-mock,
.steel-mock,
.billing-mock,
.courier-mock {
    text-align: center;

    width: 80%;
}

.hospital-mock > i,
.steel-mock > i,
.billing-mock > i,
.courier-mock > i {
    font-size: 55px;

    color: var(--primary-light);

    margin-bottom: 12px;
}

.hospital-mock h4,
.steel-mock h4,
.billing-mock h4 {
    font-family: "Poppins";

    font-size: 14px;
}

.hospital-cards {
    display: flex;

    gap: 8px;

    margin-top: 15px;
}

.hospital-cards span {
    height: 35px;

    flex: 1;

    background: rgba(255,255,255,.07);

    border-radius: 5px;
}


/* Courier */

.courier-mock {
    position: relative;

    height: 140px;

    display: flex;

    align-items: center;

    justify-content: center;
}

.route-line {
    position: absolute;

    width: 70%;

    height: 2px;

    background: rgba(255,255,255,.2);

    transform: rotate(-15deg);
}

.location-dot {
    position: absolute;

    width: 15px;
    height: 15px;

    background: var(--primary);

    border: 3px solid #0b1120;

    border-radius: 50%;

    z-index: 2;
}

.location-dot.first {
    left: 10%;
    top: 48%;
}

.location-dot.second {
    right: 10%;
    top: 25%;
}


/* Steel */

.steel-bars {
    display: flex;

    justify-content: center;

    gap: 8px;

    margin-top: 15px;
}

.steel-bars span {
    width: 35px;
    height: 45px;

    background: #475569;

    border-radius: 4px;
}


/* Billing */

.invoice-lines {
    margin: 15px auto 0;

    width: 65%;
}

.invoice-lines span {
    display: block;

    height: 5px;

    background: #334155;

    margin-bottom: 7px;

    border-radius: 4px;
}

.invoice-lines span:nth-child(2) {
    width: 70%;
}

.invoice-lines span:nth-child(3) {
    width: 85%;
}

.invoice-lines span:nth-child(4) {
    width: 55%;
}


/* Project Content */

.project-content {
    padding: 27px;
}

.project-category {
    color: var(--primary-light);

    text-transform: uppercase;

    letter-spacing: 1.5px;

    font-size: 9px;

    font-weight: 700;
}

.project-content h3 {
    font-family: "Poppins";

    font-size: 21px;

    margin: 7px 0 10px;
}

.project-content > p {
    color: var(--text-secondary);

    font-size: 12px;

    margin-bottom: 18px;
}

.project-tech {
    display: flex;

    flex-wrap: wrap;

    gap: 6px;

    margin-bottom: 23px;
}

.project-links {
    display: flex;

    justify-content: space-between;

    align-items: center;
}

.project-link {
    display: flex;

    align-items: center;

    gap: 8px;

    font-size: 11px;

    color: var(--primary-light);

    font-weight: 600;
}

.project-link:hover {
    gap: 12px;
}

.github-link {
    width: 34px;
    height: 34px;

    display: flex;

    align-items: center;
    justify-content: center;

    border: 1px solid var(--border);

    border-radius: 50%;

    color: var(--text-secondary);

    transition: var(--transition);
}

.github-link:hover {
    background: var(--primary);

    border-color: var(--primary);

    color: white;
}

.projects-more {
    text-align: center;

    margin-top: 45px;
}


/* =========================================================
   EDUCATION
========================================================= */

.education {
    background: var(--bg-secondary);
}

.education-grid {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 20px;
}

.education-card {
    display: flex;

    gap: 20px;

    padding: 28px;

    background: var(--card);

    border: 1px solid var(--border);

    border-radius: 12px;

    transition: var(--transition);
}

.education-card:hover {
    transform: translateY(-5px);

    border-color: rgba(139,92,246,.3);
}

.education-icon {
    min-width: 55px;
    height: 55px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: rgba(139,92,246,.1);

    border-radius: 9px;

    color: var(--primary-light);

    font-size: 22px;
}

.education-year {
    color: var(--primary-light);

    font-size: 10px;

    letter-spacing: 1px;

    font-weight: 600;
}

.education-content h3 {
    font-family: "Poppins";

    font-size: 16px;

    margin: 5px 0;
}

.education-content h4 {
    color: var(--text-secondary);

    font-size: 12px;

    font-weight: 500;

    margin-bottom: 10px;
}

.education-content p {
    color: var(--text-muted);

    font-size: 11px;
}

.certifications {
    margin-top: 40px;

    padding: 30px;

    background: var(--card);

    border: 1px solid var(--border);

    border-radius: 12px;
}

.certifications h3 {
    font-family: "Poppins";

    font-size: 18px;

    margin-bottom: 22px;
}

.certification-list {
    display: grid;

    grid-template-columns: repeat(4,1fr);

    gap: 15px;
}

.certification-item {
    padding: 15px;

    border: 1px solid var(--border);

    border-radius: 8px;

    display: flex;

    align-items: center;

    gap: 10px;

    color: var(--text-secondary);

    font-size: 11px;
}

.certification-item i {
    color: var(--primary-light);
}


/* =========================================================
   SERVICES
========================================================= */

.services-grid {
    display: grid;

    grid-template-columns: repeat(4,1fr);

    gap: 17px;
}

.service-card {
    position: relative;

    padding: 30px 24px;

    border: 1px solid var(--border);

    background: var(--card);

    border-radius: 12px;

    overflow: hidden;

    transition: var(--transition);
}

.service-card:hover {
    transform: translateY(-7px);

    border-color: rgba(139,92,246,.35);
}

.service-number {
    position: absolute;

    top: 20px;
    right: 20px;

    font-family: "Poppins";

    font-size: 12px;

    color: var(--text-muted);
}

.service-icon {
    width: 50px;
    height: 50px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: rgba(139,92,246,.1);

    color: var(--primary-light);

    border-radius: 9px;

    font-size: 22px;

    margin-bottom: 25px;
}

.service-card h3 {
    font-family: "Poppins";

    font-size: 17px;

    margin-bottom: 10px;
}

.service-card p {
    color: var(--text-secondary);

    font-size: 11px;

    margin-bottom: 25px;
}

.service-card a {
    color: var(--primary-light);

    font-size: 10px;

    font-weight: 600;

    display: flex;

    align-items: center;

    gap: 8px;
}


/* =========================================================
   CTA
========================================================= */

.cta-section {
    padding: 70px 0;
}

.cta-box {
    position: relative;

    overflow: hidden;

    border: 1px solid rgba(139,92,246,.2);

    background:
        radial-gradient(circle at 80% 50%,rgba(139,92,246,.15),transparent 35%),
        var(--card);

    border-radius: 16px;

    padding: 70px;

    display: flex;

    justify-content: space-between;

    align-items: center;
}

.cta-content {
    position: relative;
    z-index: 2;
}

.cta-content > span {
    font-size: 10px;

    letter-spacing: 3px;

    color: var(--primary-light);

    font-weight: 700;
}

.cta-content h2 {
    font-family: "Poppins";

    font-size: clamp(30px,4vw,50px);

    line-height: 1.2;

    margin: 12px 0 15px;
}

.cta-content h2 span {
    color: var(--primary-light);
}

.cta-content p {
    color: var(--text-secondary);

    font-size: 13px;

    margin-bottom: 25px;
}

.cta-decoration {
    position: absolute;

    right: 70px;

    display: flex;

    flex-direction: column;

    gap: 15px;

    transform: rotate(-10deg);

    opacity: .15;
}

.cta-decoration i {
    font-size: 65px;
}


/* =========================================================
   CONTACT
========================================================= */

.contact {
    background: var(--bg-secondary);
}

.contact-grid {
    display: grid;

    grid-template-columns: .8fr 1.2fr;

    gap: 80px;
}

.contact-info h3 {
    font-family: "Poppins";

    font-size: 28px;

    margin-bottom: 12px;
}

.contact-info > p {
    color: var(--text-secondary);

    font-size: 13px;

    margin-bottom: 30px;

    max-width: 450px;
}

.contact-details {
    display: flex;

    flex-direction: column;

    gap: 16px;
}

.contact-detail {
    display: flex;

    align-items: center;

    gap: 14px;

    padding: 13px;

    border: 1px solid transparent;

    border-radius: 8px;

    transition: var(--transition);
}

.contact-detail:hover {
    background: var(--card);

    border-color: var(--border);
}

.contact-icon {
    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: rgba(139,92,246,.1);

    color: var(--primary-light);

    border-radius: 8px;
}

.contact-detail span {
    display: block;

    color: var(--text-muted);

    font-size: 9px;

    text-transform: uppercase;

    letter-spacing: 1px;
}

.contact-detail strong {
    font-size: 11px;

    font-weight: 500;
}

.contact-socials {
    display: flex;

    gap: 10px;

    margin-top: 30px;
}

.contact-socials a {
    width: 40px;
    height: 40px;

    display: flex;

    align-items: center;
    justify-content: center;

    border: 1px solid var(--border);

    border-radius: 50%;

    color: var(--text-secondary);

    transition: var(--transition);
}

.contact-socials a:hover {
    background: var(--primary);

    color: white;

    border-color: var(--primary);

    transform: translateY(-3px);
}

.contact-form-wrapper {
    background: var(--card);

    border: 1px solid var(--border);

    border-radius: 13px;

    padding: 30px;
}

.form-row {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 15px;
}

.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;

    font-size: 10px;

    color: var(--text-secondary);

    margin-bottom: 7px;
}

.form-group input,
.form-group textarea {
    width: 100%;

    border: 1px solid var(--border);

    background: rgba(255,255,255,.025);

    color: var(--white);

    border-radius: 7px;

    padding: 12px 13px;

    outline: none;

    font-size: 12px;

    resize: vertical;

    transition: var(--transition);
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: var(--primary);

    background: rgba(139,92,246,.03);

    box-shadow: 0 0 0 3px rgba(139,92,246,.07);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #4b5563;
}

.submit-btn {
    border: none;

    width: 100%;
}

.form-message {
    text-align: center;

    margin-top: 12px;

    font-size: 11px;

    color: #86efac;
}


/* =========================================================
   FOOTER
========================================================= */

.footer {
    background: #050811;

    border-top: 1px solid var(--border);

    padding: 60px 0 25px;
}

.footer-top {
    display: grid;

    grid-template-columns: 1.5fr 1fr 1fr 1fr;

    gap: 40px;

    padding-bottom: 45px;

    border-bottom: 1px solid var(--border);
}

.footer-brand p {
    max-width: 300px;

    color: var(--text-muted);

    font-size: 11px;

    margin-top: 15px;
}

.footer-links {
    display: flex;

    flex-direction: column;

    gap: 8px;
}

.footer-links h4 {
    font-family: "Poppins";

    font-size: 12px;

    margin-bottom: 8px;
}

.footer-links a {
    color: var(--text-muted);

    font-size: 10px;

    transition: var(--transition);
}

.footer-links a:hover {
    color: var(--primary-light);

    transform: translateX(3px);
}

.footer-bottom {
    display: flex;

    justify-content: space-between;

    align-items: center;

    padding-top: 22px;

    color: var(--text-muted);

    font-size: 9px;
}

.footer-bottom i {
    color: #ef4444;
}


/* =========================================================
   BACK TO TOP
========================================================= */

.back-to-top {
    position: fixed;

    right: 25px;
    bottom: 25px;

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: var(--primary);

    color: white;

    border: none;

    border-radius: 8px;

    opacity: 0;

    visibility: hidden;

    transform: translateY(20px);

    transition: var(--transition);

    z-index: 900;
}

.back-to-top.show {
    opacity: 1;

    visibility: visible;

    transform: translateY(0);
}

.back-to-top:hover {
    transform: translateY(-4px);
}


/* =========================================================
   SCROLL REVEAL
========================================================= */

.reveal {
    opacity: 0;

    transform: translateY(30px);

    transition:
        opacity .8s ease,
        transform .8s ease;
}

.reveal.active {
    opacity: 1;

    transform: translateY(0);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1100px) {

    .navbar {
        gap: 17px;
    }

    .nav-link {
        font-size: 11px;
    }

    .hero-container {
        gap: 40px;
    }

    .services-grid {
        grid-template-columns: 1fr 1fr;
    }

}


@media (max-width: 900px) {

    .section {
        padding: 90px 0;
    }

    .navbar {
        position: fixed;

        top: 80px;
        left: 4%;

        width: 92%;

        background: rgba(15,23,40,.98);

        border: 1px solid var(--border);

        border-radius: 10px;

        padding: 20px;

        flex-direction: column;

        align-items: flex-start;

        gap: 18px;

        transform: translateY(-20px);

        opacity: 0;

        visibility: hidden;

        transition: var(--transition);
    }

    .navbar.active {
        transform: translateY(0);

        opacity: 1;

        visibility: visible;
    }

    .nav-link {
        font-size: 13px;
    }

    .nav-link.active::after {
        display: none;
    }

    .menu-toggle {
        display: block;
    }

    .hero-container {
        grid-template-columns: 1fr;

        text-align: center;
    }

    .hero-content {
        display: flex;

        flex-direction: column;

        align-items: center;
    }

    .hero-description {
        max-width: 650px;
    }

    .hero-visual {
        min-height: 430px;
    }

    .about-grid {
        grid-template-columns: 1fr;

        gap: 50px;
    }

    .about-image {
        min-height: 400px;
    }

    .about-content {
        max-width: 700px;
        margin: auto;
    }

    .contact-grid {
        grid-template-columns: 1fr;

        gap: 50px;
    }

    .footer-top {
        grid-template-columns: 1fr 1fr;
    }

}


@media (max-width: 700px) {

    .section {
        padding: 75px 0;
    }

    .section-heading {
        margin-bottom: 45px;

        gap: 12px;
    }

    .section-number {
        font-size: 11px;
    }

    .hero {
        padding-top: 130px;
    }

    .hero h1 {
        font-size: 55px;

        letter-spacing: -3px;
    }

    .hero h2 {
        font-size: 20px;
    }

    .hero-description {
        font-size: 13px;
    }

    .hero-visual {
        min-height: 350px;
    }

    .code-body {
        padding: 20px;
    }

    .code-body pre {
        font-size: 10px;
    }

    .floating-card {
        padding: 9px 12px;
    }

    .floating-card i {
        font-size: 17px;
    }

    .card-one {
        right: -5px;
        top: 30px;
    }

    .card-two {
        left: -5px;
        bottom: 30px;
    }

    .scroll-down {
        display: none;
    }

    .stats-grid {
        grid-template-columns: 1fr 1fr;

        gap: 30px;
    }

    .stat-item {
        border: 0;
    }

    .stat-item strong {
        font-size: 32px;
    }

    .skills-grid {
        grid-template-columns: 1fr;
    }

    .timeline::before {
        left: 7px;
    }

    .timeline-item {
        grid-template-columns: 1fr;

        padding-left: 30px;

        gap: 5px;
    }

    .timeline-date {
        text-align: left;

        padding-top: 0;

        font-size: 10px;
    }

    .timeline-dot {
        left: 1px;

        top: 5px;
    }

    .projects-grid {
        grid-template-columns: 1fr;
    }

    .education-grid {
        grid-template-columns: 1fr;
    }

    .certification-list {
        grid-template-columns: 1fr 1fr;
    }

    .services-grid {
        grid-template-columns: 1fr;
    }

    .cta-box {
        padding: 45px 30px;
    }

    .cta-decoration {
        right: 20px;

        opacity: .08;
    }

    .contact-form-wrapper {
        padding: 20px;
    }

    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .footer-top {
        grid-template-columns: 1fr;

        gap: 30px;
    }

    .footer-bottom {
        flex-direction: column;

        gap: 10px;

        text-align: center;
    }

}


@media (max-width: 480px) {

    .nav-btn {
        display: none;
    }

    .hero h1 {
        font-size: 48px;
    }

    .hero-buttons {
        width: 100%;

        flex-direction: column;
    }

    .hero-buttons .btn {
        width: 100%;
    }

    .hero-visual {
        min-height: 300px;
    }

    .code-card {
        width: 100%;
    }

    .floating-card {
        display: none;
    }

    .profile-box {
        width: 280px;
    }

    .experience-badge {
        right: 0;
    }

    .about-details {
        grid-template-columns: 1fr;
    }

    .certification-list {
        grid-template-columns: 1fr;
    }

    .project-image {
        height: 220px;
    }

    .cta-box {
        padding: 35px 22px;
    }

}
</style>
<body>

<!-- =========================================================
     PRELOADER
========================================================= -->

<div class="preloader" id="preloader">
    <div class="loader"></div>
</div>


<!-- =========================================================
     HEADER / NAVBAR
========================================================= -->

<header class="header" id="header">

    <div class="container nav-container">

        <a href="#home" class="logo">
            <span class="logo-bracket">&lt;</span>
            Aparna<span>.</span>
            <span class="logo-bracket">/&gt;</span>
        </a>

        <nav class="navbar" id="navbar">

            <a href="#home" class="nav-link active">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#skills" class="nav-link">Skills</a>
            <a href="#experience" class="nav-link">Experience</a>
            <a href="#projects" class="nav-link">Projects</a>
            <a href="#education" class="nav-link">Education</a>
            <a href="#services" class="nav-link">Services</a>
            <a href="#contact" class="nav-link">Contact</a>

        </nav>

        <div class="nav-actions">

            <a href="#contact" class="nav-btn">
                Hire Me
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <button class="menu-toggle" id="menu-toggle">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>

    </div>

</header>


<main>


<!-- =========================================================
     HERO SECTION
========================================================= -->

<section class="hero section" id="home">

    <div class="hero-background">
        <div class="hero-grid"></div>
        <div class="glow glow-one"></div>
        <div class="glow glow-two"></div>
    </div>

    <div class="container hero-container">

        <div class="hero-content reveal">

            <div class="availability">
                <span class="status-dot"></span>
                Available for opportunities
            </div>

            <p class="hero-small-title">
                HELLO, I'M
            </p>

            <h1>
                Aparna <span>S.</span>
            </h1>

            <h2>
                PHP <span>Laravel</span> Full Stack Developer
            </h2>

            <p class="hero-description">
                I build scalable, secure and user-friendly web applications
                using PHP, Laravel, MySQL, REST APIs, JavaScript and modern
                frontend technologies.
            </p>

            <div class="hero-buttons">

                <a href="#projects" class="btn btn-primary">
                    View My Work
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="#contact" class="btn btn-outline">
                    Let's Talk
                    <i class="fa-regular fa-message"></i>
                </a>

            </div>

            <div class="hero-socials">

                <a href="#" aria-label="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>

                <a href="#" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="#" aria-label="Email">
                    <i class="fa-solid fa-envelope"></i>
                </a>

                <a href="#" aria-label="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

            </div>

        </div>


        <div class="hero-visual reveal">

            <div class="code-card">

                <div class="code-header">

                    <div class="window-buttons">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="code-file">
                        <i class="fa-brands fa-laravel"></i>
                        developer.php
                    </div>

                </div>

                <div class="code-body">

<pre><span class="code-purple">&lt;?php</span>

<span class="code-purple">class</span> <span class="code-yellow">Developer</span>
{
    <span class="code-purple">public</span> <span class="code-blue">$name</span>
        = <span class="code-green">"Aparna S"</span>;

    <span class="code-purple">public</span> <span class="code-blue">$role</span>
        = <span class="code-green">"Laravel Developer"</span>;

    <span class="code-purple">public function</span> <span class="code-yellow">build</span>()
    {
        <span class="code-purple">return</span> [
            <span class="code-green">"Laravel"</span>,
            <span class="code-green">"PHP"</span>,
            <span class="code-green">"MySQL"</span>,
            <span class="code-green">"REST API"</span>
        ];
    }
}</pre>

                </div>

            </div>

            <div class="floating-card card-one">
                <i class="fa-brands fa-laravel"></i>
                <div>
                    <strong>Laravel</strong>
                    <small>Backend Framework</small>
                </div>
            </div>

            <div class="floating-card card-two">
                <i class="fa-solid fa-database"></i>
                <div>
                    <strong>MySQL</strong>
                    <small>Database</small>
                </div>
            </div>

        </div>

    </div>

    <div class="scroll-down">
        <span>Scroll Down</span>
        <i class="fa-solid fa-arrow-down"></i>
    </div>

</section>


<!-- =========================================================
     ABOUT SECTION
========================================================= -->

<section class="about section" id="about">

    <div class="container">

        <div class="section-heading reveal">

            <span class="section-number">01</span>

            <div>
                <p class="section-label">ABOUT ME</p>
                <h2>Turning ideas into <span>digital solutions.</span></h2>
            </div>

        </div>


        <div class="about-grid">

            <div class="about-image reveal">

                <div class="profile-box">

                    <div class="profile-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <h3>Aparna S.</h3>

                    <p>PHP Laravel Full Stack Developer</p>

                    <div class="profile-line"></div>

                    <span>
                        <i class="fa-solid fa-location-dot"></i>
                        Kerala, India
                    </span>

                </div>

                <div class="experience-badge">
                    <strong>2+</strong>
                    <span>Years Experience</span>
                </div>

            </div>


            <div class="about-content reveal">

                <p class="about-lead">
                    I'm a passionate software developer focused on creating
                    reliable and scalable web applications.
                </p>

                <p>
                    I specialize in PHP and Laravel development, with practical
                    experience building business applications, admin dashboards,
                    REST APIs, billing systems, CRM solutions and database-driven
                    web applications.
                </p>

                <p>
                    I enjoy solving real-world problems through clean code,
                    thoughtful UI design and efficient backend architecture.
                    My goal is to continuously improve my technical skills while
                    contributing to meaningful software projects.
                </p>


                <div class="about-details">

                    <div class="detail-item">
                        <span>Name</span>
                        <strong>Aparna S.</strong>
                    </div>

                    <div class="detail-item">
                        <span>Role</span>
                        <strong>Laravel Developer</strong>
                    </div>

                    <div class="detail-item">
                        <span>Experience</span>
                        <strong>2+ Years</strong>
                    </div>

                    <div class="detail-item">
                        <span>Specialization</span>
                        <strong>PHP / Laravel</strong>
                    </div>

                </div>

                <a href="#contact" class="text-btn">
                    More About Me
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     STATS
========================================================= -->

<section class="stats-section">

    <div class="container stats-grid">

        <div class="stat-item reveal">
            <strong data-count="2">0</strong>
            <span>Years Experience</span>
        </div>

        <div class="stat-item reveal">
            <strong data-count="10">0</strong>
            <span>Projects Completed</span>
        </div>

        <div class="stat-item reveal">
            <strong data-count="8">0</strong>
            <span>Technologies</span>
        </div>

        <div class="stat-item reveal">
            <strong data-count="100">0</strong>
            <span>% Commitment</span>
        </div>

    </div>

</section>


<!-- =========================================================
     SKILLS SECTION
========================================================= -->

<section class="skills section" id="skills">

    <div class="container">

        <div class="section-heading reveal">

            <span class="section-number">02</span>

            <div>
                <p class="section-label">MY SKILLS</p>
                <h2>Technologies I <span>work with.</span></h2>
            </div>

        </div>


        <div class="skills-grid">

            <!-- Backend -->

            <div class="skill-category reveal">

                <div class="skill-category-header">

                    <div class="skill-icon">
                        <i class="fa-solid fa-server"></i>
                    </div>

                    <div>
                        <h3>Backend</h3>
                        <p>Server-side development</p>
                    </div>

                </div>

                <div class="skill-list">

                    <div class="skill-item">
                        <span><i class="fa-brands fa-php"></i> PHP</span>
                        <strong>90%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:90%"></span>
                    </div>


                    <div class="skill-item">
                        <span><i class="fa-brands fa-laravel"></i> Laravel</span>
                        <strong>90%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:90%"></span>
                    </div>


                    <div class="skill-item">
                        <span><i class="fa-solid fa-code"></i> REST API</span>
                        <strong>85%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:85%"></span>
                    </div>

                </div>

            </div>


            <!-- Frontend -->

            <div class="skill-category reveal">

                <div class="skill-category-header">

                    <div class="skill-icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>

                    <div>
                        <h3>Frontend</h3>
                        <p>Modern user interfaces</p>
                    </div>

                </div>

                <div class="skill-list">

                    <div class="skill-item">
                        <span><i class="fa-brands fa-html5"></i> HTML5</span>
                        <strong>95%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:95%"></span>
                    </div>


                    <div class="skill-item">
                        <span><i class="fa-brands fa-css3-alt"></i> CSS3</span>
                        <strong>90%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:90%"></span>
                    </div>


                    <div class="skill-item">
                        <span><i class="fa-brands fa-js"></i> JavaScript</span>
                        <strong>80%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:80%"></span>
                    </div>

                </div>

            </div>


            <!-- Database -->

            <div class="skill-category reveal">

                <div class="skill-category-header">

                    <div class="skill-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>

                    <div>
                        <h3>Database</h3>
                        <p>Data management</p>
                    </div>

                </div>

                <div class="skill-list">

                    <div class="skill-item">
                        <span><i class="fa-solid fa-database"></i> MySQL</span>
                        <strong>90%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:90%"></span>
                    </div>


                    <div class="skill-item">
                        <span><i class="fa-solid fa-table"></i> Database Design</span>
                        <strong>85%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:85%"></span>
                    </div>


                    <div class="skill-item">
                        <span><i class="fa-solid fa-magnifying-glass"></i> Query Optimization</span>
                        <strong>75%</strong>
                    </div>

                    <div class="progress">
                        <span style="width:75%"></span>
                    </div>

                </div>

            </div>


            <!-- Tools -->

            <div class="skill-category reveal">

                <div class="skill-category-header">

                    <div class="skill-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>

                    <div>
                        <h3>Tools</h3>
                        <p>Development workflow</p>
                    </div>

                </div>

                <div class="technology-tags">

                    <span>Git</span>
                    <span>GitHub</span>
                    <span>Composer</span>
                    <span>Postman</span>
                    <span>VS Code</span>
                    <span>Bootstrap</span>
                    <span>jQuery</span>
                    <span>Blade</span>

                </div>

            </div>

        </div>


        <div class="technology-cloud reveal">

            <span>PHP</span>
            <span>Laravel</span>
            <span>MySQL</span>
            <span>JavaScript</span>
            <span>HTML</span>
            <span>CSS</span>
            <span>Bootstrap</span>
            <span>REST API</span>
            <span>Git</span>
            <span>GitHub</span>
            <span>Blade</span>
            <span>jQuery</span>

        </div>

    </div>

</section>


<!-- =========================================================
     EXPERIENCE SECTION
========================================================= -->

<section class="experience section" id="experience">

    <div class="container">

        <div class="section-heading reveal">

            <span class="section-number">03</span>

            <div>
                <p class="section-label">EXPERIENCE</p>
                <h2>My professional <span>journey.</span></h2>
            </div>

        </div>


        <div class="timeline">


            <!-- Experience 1 -->

            <div class="timeline-item reveal">

                <div class="timeline-dot"></div>

                <div class="timeline-date">
                    2025 — Present
                </div>

                <div class="timeline-card">

                    <div class="timeline-header">

                        <div>
                            <h3>Software Developer</h3>
                            <h4>Webrins Technologies Pvt Ltd</h4>
                        </div>

                        <span class="job-type">
                            Full Time
                        </span>

                    </div>

                    <p>
                        Working on PHP and Laravel based web applications,
                        admin dashboards, business management systems and
                        database-driven applications.
                    </p>

                    <ul>
                        <li>Developed Laravel-based web applications.</li>
                        <li>Created REST APIs and backend modules.</li>
                        <li>Designed MySQL databases and queries.</li>
                        <li>Built responsive Blade-based interfaces.</li>
                        <li>Worked on debugging and application maintenance.</li>
                    </ul>

                    <div class="experience-tags">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>REST API</span>
                        <span>JavaScript</span>
                    </div>

                </div>

            </div>


            <!-- Experience 2 -->

            <div class="timeline-item reveal">

                <div class="timeline-dot"></div>

                <div class="timeline-date">
                    Internship
                </div>

                <div class="timeline-card">

                    <div class="timeline-header">

                        <div>
                            <h3>PHP Full Stack Developer Intern</h3>
                            <h4>Inmake Infotech Pvt Ltd</h4>
                        </div>

                        <span class="job-type">
                            Internship
                        </span>

                    </div>

                    <p>
                        Gained practical experience in PHP development,
                        frontend technologies, database management and
                        real-world web application development.
                    </p>

                    <ul>
                        <li>Developed PHP-based web modules.</li>
                        <li>Worked with MySQL databases.</li>
                        <li>Created responsive web interfaces.</li>
                        <li>Learned MVC development practices.</li>
                    </ul>

                    <div class="experience-tags">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     PROJECTS SECTION
========================================================= -->

<section class="projects section" id="projects">

    <div class="container">

        <div class="section-heading reveal">

            <span class="section-number">04</span>

            <div>
                <p class="section-label">MY PROJECTS</p>
                <h2>Selected work & <span>projects.</span></h2>
            </div>

        </div>


        <div class="projects-grid">


            <!-- Project 1 -->

            <article class="project-card reveal">

                <div class="project-image project-image-one">

                    <div class="project-browser">

                        <div class="browser-top">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="browser-content">

                            <div class="mock-sidebar"></div>

                            <div class="mock-main">

                                <div class="mock-title"></div>

                                <div class="mock-cards">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="mock-table"></div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        Web Application
                    </span>

                    <h3>CRM & Admin Dashboard</h3>

                    <p>
                        A complete business management dashboard for managing
                        customers, leads, users, reports and administrative
                        operations.
                    </p>

                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                    </div>

                    <div class="project-links">

                        <a href="#" class="project-link">
                            Live Demo
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                        <a href="#" class="github-link">
                            <i class="fa-brands fa-github"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- Project 2 -->

            <article class="project-card reveal">

                <div class="project-image project-image-two">

                    <div class="website-mock">

                        <div class="mock-navbar">
                            <span></span>
                            <div>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                        </div>

                        <div class="mock-hero">
                            <div></div>
                            <span></span>
                        </div>

                        <div class="mock-products">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        Business Website
                    </span>

                    <h3>Lekshmi Infra Projects</h3>

                    <p>
                        Responsive company website designed to present
                        services, projects, company information and contact
                        details.
                    </p>

                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>Blade</span>
                        <span>JavaScript</span>
                        <span>Bootstrap</span>
                    </div>

                    <div class="project-links">

                        <a href="#" class="project-link">
                            Live Demo
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                        <a href="#" class="github-link">
                            <i class="fa-brands fa-github"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- Project 3 -->

            <article class="project-card reveal">

                <div class="project-image project-image-three">

                    <div class="hospital-mock">

                        <i class="fa-solid fa-hospital"></i>

                        <h4>Hospital Management</h4>

                        <div class="hospital-cards">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        Management System
                    </span>

                    <h3>Sagara Hospital</h3>

                    <p>
                        Hospital management solution with modules for
                        administration, patients, doctors, appointments
                        and related records.
                    </p>

                    <div class="project-tech">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>

                    <div class="project-links">

                        <a href="#" class="project-link">
                            Case Study
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="#" class="github-link">
                            <i class="fa-brands fa-github"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- Project 4 -->

            <article class="project-card reveal">

                <div class="project-image project-image-four">

                    <div class="courier-mock">

                        <i class="fa-solid fa-truck-fast"></i>

                        <div class="route-line"></div>

                        <div class="location-dot first"></div>
                        <div class="location-dot second"></div>

                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        Logistics
                    </span>

                    <h3>Greenex Courier Hub</h3>

                    <p>
                        Courier management application for handling shipments,
                        customers, delivery tracking and administrative
                        operations.
                    </p>

                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>REST API</span>
                    </div>

                    <div class="project-links">

                        <a href="#" class="project-link">
                            Case Study
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="#" class="github-link">
                            <i class="fa-brands fa-github"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- Project 5 -->

            <article class="project-card reveal">

                <div class="project-image project-image-five">

                    <div class="steel-mock">

                        <i class="fa-solid fa-industry"></i>

                        <h4>Blue Hill Steels</h4>

                        <div class="steel-bars">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        Business Application
                    </span>

                    <h3>Blue Hill Steels</h3>

                    <p>
                        Business-focused web solution for managing products,
                        customers, enquiries and company information.
                    </p>

                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>Blade</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                    </div>

                    <div class="project-links">

                        <a href="#" class="project-link">
                            Live Demo
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                        <a href="#" class="github-link">
                            <i class="fa-brands fa-github"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- Project 6 -->

            <article class="project-card reveal">

                <div class="project-image project-image-six">

                    <div class="billing-mock">

                        <i class="fa-solid fa-file-invoice-dollar"></i>

                        <h4>Billing System</h4>

                        <div class="invoice-lines">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        SaaS / Business
                    </span>

                    <h3>Billing Software</h3>

                    <p>
                        Database-driven billing application for products,
                        invoices, customers, payments and business reports.
                    </p>

                    <div class="project-tech">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>

                    <div class="project-links">

                        <a href="#" class="project-link">
                            Case Study
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="#" class="github-link">
                            <i class="fa-brands fa-github"></i>
                        </a>

                    </div>

                </div>

            </article>

        </div>


        <div class="projects-more reveal">

            <a href="#" class="btn btn-outline">
                View All Projects
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     EDUCATION SECTION
========================================================= -->

<section class="education section" id="education">

    <div class="container">

        <div class="section-heading reveal">

            <span class="section-number">05</span>

            <div>
                <p class="section-label">EDUCATION</p>
                <h2>Education & <span>learning.</span></h2>
            </div>

        </div>


        <div class="education-grid">


            <div class="education-card reveal">

                <div class="education-icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>

                <div class="education-content">

                    <span class="education-year">
                        2023 — 2026
                    </span>

                    <h3>Bachelor of Computer Applications</h3>

                    <h4>Rabindranath Tagore University</h4>

                    <p>
                        Computer applications, programming, database
                        management, web development and software development.
                    </p>

                </div>

            </div>


            <div class="education-card reveal">

                <div class="education-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>

                <div class="education-content">

                    <span class="education-year">
                        Professional Training
                    </span>

                    <h3>PHP Full Stack Development</h3>

                    <h4>Technical Training & Internship</h4>

                    <p>
                        Practical learning in PHP, Laravel, MySQL, frontend
                        development, APIs and real-world application
                        development.
                    </p>

                </div>

            </div>

        </div>


        <div class="certifications reveal">

            <h3>Certifications & Additional Learning</h3>

            <div class="certification-list">

                <div class="certification-item">
                    <i class="fa-solid fa-certificate"></i>
                    <span>PHP & Laravel Development</span>
                </div>

                <div class="certification-item">
                    <i class="fa-solid fa-certificate"></i>
                    <span>Web Development</span>
                </div>

                <div class="certification-item">
                    <i class="fa-solid fa-certificate"></i>
                    <span>Database Management</span>
                </div>

                <div class="certification-item">
                    <i class="fa-solid fa-certificate"></i>
                    <span>REST API Development</span>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SERVICES SECTION
========================================================= -->

<section class="services section" id="services">

    <div class="container">

        <div class="section-heading reveal">

            <span class="section-number">06</span>

            <div>
                <p class="section-label">WHAT I DO</p>
                <h2>Services I can <span>provide.</span></h2>
            </div>

        </div>


        <div class="services-grid">


            <div class="service-card reveal">

                <div class="service-number">01</div>

                <div class="service-icon">
                    <i class="fa-brands fa-laravel"></i>
                </div>

                <h3>Laravel Development</h3>

                <p>
                    Scalable Laravel applications with clean architecture,
                    authentication, CRUD modules, APIs and database
                    integration.
                </p>

                <a href="#contact">
                    Discuss a project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-number">02</div>

                <div class="service-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <h3>PHP Development</h3>

                <p>
                    Custom PHP web applications, backend modules, business
                    logic, integrations and database-driven systems.
                </p>

                <a href="#contact">
                    Discuss a project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-number">03</div>

                <div class="service-icon">
                    <i class="fa-solid fa-plug"></i>
                </div>

                <h3>REST API Development</h3>

                <p>
                    Secure and structured REST APIs for web applications,
                    mobile applications and third-party integrations.
                </p>

                <a href="#contact">
                    Discuss a project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-number">04</div>

                <div class="service-icon">
                    <i class="fa-solid fa-gauge-high"></i>
                </div>

                <h3>Admin Dashboards</h3>

                <p>
                    Responsive dashboards for CRM, billing, inventory,
                    hospital, courier and other business management systems.
                </p>

                <a href="#contact">
                    Discuss a project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CTA SECTION
========================================================= -->

<section class="cta-section">

    <div class="container">

        <div class="cta-box reveal">

            <div class="cta-content">

                <span>LET'S BUILD SOMETHING GREAT</span>

                <h2>
                    Have a project in mind?
                    <br>
                    <span>Let's work together.</span>
                </h2>

                <p>
                    I'm always interested in discussing new projects,
                    opportunities and ideas.
                </p>

                <a href="#contact" class="btn btn-primary">
                    Start a Conversation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

            <div class="cta-decoration">
                <i class="fa-solid fa-code"></i>
                <i class="fa-solid fa-terminal"></i>
                <i class="fa-solid fa-database"></i>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT SECTION
========================================================= -->

<section class="contact section" id="contact">

    <div class="container">

        <div class="section-heading reveal">

            <span class="section-number">07</span>

            <div>
                <p class="section-label">CONTACT</p>
                <h2>Let's start a <span>conversation.</span></h2>
            </div>

        </div>


        <div class="contact-grid">


            <!-- Contact Information -->

            <div class="contact-info reveal">

                <h3>Let's connect.</h3>

                <p>
                    Looking for a Laravel developer for your next project?
                    Have a job opportunity or just want to say hello?
                    Feel free to reach out.
                </p>


                <div class="contact-details">

                    <a href="mailto:aparnasaparna2002@gmail.com"
                       class="contact-detail">

                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <span>Email</span>
                            <strong>aparnasaparna2002@gmail.com</strong>
                        </div>

                    </a>


                    <a href="tel:+916235567001"
                       class="contact-detail">

                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>
                            <span>Phone</span>
                            <strong>+91 62355 67001</strong>
                        </div>

                    </a>


                    <div class="contact-detail">

                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <span>Location</span>
                            <strong>Kerala, India</strong>
                        </div>

                    </div>


                    <div class="contact-detail">

                        <div class="contact-icon">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>

                        <div>
                            <span>Availability</span>
                            <strong>Open to Opportunities</strong>
                        </div>

                    </div>

                </div>


                <div class="contact-socials">

                    <a href="#" aria-label="GitHub">
                        <i class="fa-brands fa-github"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#" aria-label="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="mailto:aparnasaparna2002@gmail.com"
                       aria-label="Email">
                        <i class="fa-solid fa-envelope"></i>
                    </a>

                </div>

            </div>


            <!-- Contact Form -->

            <div class="contact-form-wrapper reveal">

                <form class="contact-form" id="contact-form">

                    <div class="form-row">

                        <div class="form-group">

                            <label for="name">
                                Your Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="John Doe"
                                required>

                        </div>


                        <div class="form-group">

                            <label for="email">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="john@example.com"
                                required>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="subject">
                            Subject
                        </label>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="Project discussion">

                    </div>


                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Tell me about your project..."
                            required></textarea>

                    </div>


                    <button type="submit" class="btn btn-primary submit-btn">

                        Send Message

                        <i class="fa-solid fa-paper-plane"></i>

                    </button>


                    <div class="form-message" id="form-message"></div>

                </form>

            </div>

        </div>

    </div>

</section>


</main>


<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="footer">

    <div class="container">

        <div class="footer-top">

            <div class="footer-brand">

                <a href="#home" class="logo">
                    <span class="logo-bracket">&lt;</span>
                    Aparna<span>.</span>
                    <span class="logo-bracket">/&gt;</span>
                </a>

                <p>
                    PHP Laravel Full Stack Developer building modern,
                    scalable and user-friendly web applications.
                </p>

            </div>


            <div class="footer-links">

                <h4>Quick Links</h4>

                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#experience">Experience</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>

            </div>


            <div class="footer-links">

                <h4>Services</h4>

                <a href="#services">Laravel Development</a>
                <a href="#services">PHP Development</a>
                <a href="#services">REST APIs</a>
                <a href="#services">Admin Dashboards</a>

            </div>


            <div class="footer-links">

                <h4>Connect</h4>

                <a href="mailto:aparnasaparna2002@gmail.com">
                    Email Me
                </a>

                <a href="tel:+916235567001">
                    Call Me
                </a>

                <a href="#">
                    LinkedIn
                </a>

                <a href="#">
                    GitHub
                </a>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © <span id="current-year"></span>
                Aparna S. All Rights Reserved.
            </p>

            <p>
                Designed & Developed with
                <i class="fa-solid fa-heart"></i>
            </p>

        </div>

    </div>

</footer>


<!-- =========================================================
     BACK TO TOP
========================================================= -->

<button class="back-to-top" id="back-to-top">
    <i class="fa-solid fa-arrow-up"></i>
</button>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script src="{{ asset('portfolio/js/script.js') }}"></script>
<script>
    /* =========================================================
   PORTFOLIO JAVASCRIPT
========================================================= */

document.addEventListener("DOMContentLoaded", function () {


    /* =====================================================
       PRELOADER
    ===================================================== */

    const preloader = document.getElementById("preloader");

    window.addEventListener("load", function () {

        setTimeout(function () {

            if (preloader) {
                preloader.classList.add("hide");
            }

        }, 500);

    });


    /* =====================================================
       MOBILE NAVIGATION
    ===================================================== */

    const menuToggle = document.getElementById("menu-toggle");
    const navbar = document.getElementById("navbar");

    if (menuToggle && navbar) {

        menuToggle.addEventListener("click", function () {

            navbar.classList.toggle("active");

            const icon = menuToggle.querySelector("i");

            if (navbar.classList.contains("active")) {

                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");

            } else {

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            }

        });


        /* Close mobile menu */

        document.querySelectorAll(".nav-link").forEach(function (link) {

            link.addEventListener("click", function () {

                navbar.classList.remove("active");

                const icon = menuToggle.querySelector("i");

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            });

        });

    }


    /* =====================================================
       HEADER SCROLL EFFECT
    ===================================================== */

    const header = document.getElementById("header");

    function handleHeader() {

        if (window.scrollY > 50) {

            header.classList.add("scrolled");

        } else {

            header.classList.remove("scrolled");

        }

    }

    window.addEventListener("scroll", handleHeader);

    handleHeader();


    /* =====================================================
       ACTIVE NAVIGATION
    ===================================================== */

    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    function updateActiveNav() {

        let currentSection = "";

        sections.forEach(function (section) {

            const sectionTop = section.offsetTop - 130;

            const sectionHeight = section.offsetHeight;

            if (
                window.scrollY >= sectionTop &&
                window.scrollY < sectionTop + sectionHeight
            ) {

                currentSection = section.getAttribute("id");

            }

        });


        navLinks.forEach(function (link) {

            link.classList.remove("active");

            if (
                link.getAttribute("href") === "#" + currentSection
            ) {

                link.classList.add("active");

            }

        });

    }

    window.addEventListener("scroll", updateActiveNav);

    updateActiveNav();


    /* =====================================================
       SCROLL REVEAL
    ===================================================== */

    const revealElements = document.querySelectorAll(".reveal");

    const revealObserver = new IntersectionObserver(

        function (entries, observer) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("active");

                    observer.unobserve(entry.target);

                }

            });

        },

        {
            threshold: 0.12
        }

    );


    revealElements.forEach(function (element) {

        revealObserver.observe(element);

    });


    /* =====================================================
       COUNTER ANIMATION
    ===================================================== */

    const counters = document.querySelectorAll("[data-count]");

    let counterStarted = false;

    function animateCounters() {

        if (counterStarted) {
            return;
        }

        const statsSection = document.querySelector(".stats-section");

        if (!statsSection) {
            return;
        }

        const sectionTop = statsSection.getBoundingClientRect().top;

        if (sectionTop < window.innerHeight - 100) {

            counterStarted = true;

            counters.forEach(function (counter) {

                const target = parseInt(
                    counter.getAttribute("data-count")
                );

                let current = 0;

                const duration = 1500;

                const increment = target / (duration / 20);

                const interval = setInterval(function () {

                    current += increment;

                    if (current >= target) {

                        counter.textContent = target + "+";

                        clearInterval(interval);

                    } else {

                        counter.textContent =
                            Math.floor(current);

                    }

                }, 20);

            });

        }

    }

    window.addEventListener("scroll", animateCounters);

    animateCounters();


    /* =====================================================
       BACK TO TOP
    ===================================================== */

    const backToTop = document.getElementById("back-to-top");

    function handleBackToTop() {

        if (window.scrollY > 500) {

            backToTop.classList.add("show");

        } else {

            backToTop.classList.remove("show");

        }

    }

    window.addEventListener("scroll", handleBackToTop);

    if (backToTop) {

        backToTop.addEventListener("click", function () {

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        });

    }


    /* =====================================================
       CONTACT FORM
    ===================================================== */

    const contactForm = document.getElementById("contact-form");
    const formMessage = document.getElementById("form-message");

    if (contactForm) {

        contactForm.addEventListener("submit", function (event) {

            event.preventDefault();

            const name =
                document.getElementById("name").value.trim();

            const email =
                document.getElementById("email").value.trim();

            const message =
                document.getElementById("message").value.trim();


            if (!name || !email || !message) {

                formMessage.textContent =
                    "Please fill in all required fields.";

                formMessage.style.color = "#f87171";

                return;

            }


            formMessage.textContent =
                "Thank you! Your message has been received.";

            formMessage.style.color = "#86efac";


            contactForm.reset();

        });

    }


    /* =====================================================
       CURRENT YEAR
    ===================================================== */

    const currentYear =
        document.getElementById("current-year");

    if (currentYear) {

        currentYear.textContent =
            new Date().getFullYear();

    }


    /* =====================================================
       SMOOTH SCROLL
    ===================================================== */

    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {

        anchor.addEventListener("click", function (event) {

            const targetId =
                this.getAttribute("href");

            if (
                targetId &&
                targetId !== "#" &&
                document.querySelector(targetId)
            ) {

                event.preventDefault();

                const target =
                    document.querySelector(targetId);

                const headerHeight =
                    header ? header.offsetHeight : 0;

                const targetPosition =
                    target.getBoundingClientRect().top +
                    window.scrollY -
                    headerHeight;

                window.scrollTo({

                    top: targetPosition,

                    behavior: "smooth"

                });

            }

        });

    });


    /* =====================================================
       TYPING EFFECT
    ===================================================== */

    const heroRole = document.querySelector(".hero h2 span");

    if (heroRole) {

        const words = [
            "Laravel",
            "PHP",
            "Full Stack"
        ];

        let wordIndex = 0;

        let charIndex = 0;

        let deleting = false;


        function typeEffect() {

            const currentWord =
                words[wordIndex];


            if (!deleting) {

                heroRole.textContent =
                    currentWord.substring(0, charIndex + 1);

                charIndex++;


                if (charIndex === currentWord.length) {

                    deleting = true;

                    setTimeout(typeEffect, 1300);

                    return;

                }

            } else {

                heroRole.textContent =
                    currentWord.substring(0, charIndex - 1);

                charIndex--;


                if (charIndex === 0) {

                    deleting = false;

                    wordIndex =
                        (wordIndex + 1) % words.length;

                }

            }


            const speed =
                deleting ? 70 : 120;

            setTimeout(typeEffect, speed);

        }


        setTimeout(typeEffect, 1000);

    }


    /* =====================================================
       PROJECT CARD TILT
    ===================================================== */

    const projectCards =
        document.querySelectorAll(".project-card");


    projectCards.forEach(function (card) {

        card.addEventListener("mousemove", function (event) {

            if (window.innerWidth < 900) {
                return;
            }

            const rect =
                card.getBoundingClientRect();

            const x =
                event.clientX - rect.left;

            const y =
                event.clientY - rect.top;

            const centerX =
                rect.width / 2;

            const centerY =
                rect.height / 2;

            const rotateX =
                ((y - centerY) / centerY) * -2;

            const rotateY =
                ((x - centerX) / centerX) * 2;


            card.style.transform =
                `perspective(900px)
                 rotateX(${rotateX}deg)
                 rotateY(${rotateY}deg)
                 translateY(-5px)`;

        });


        card.addEventListener("mouseleave", function () {

            card.style.transform = "";

        });

    });


    /* =====================================================
       CONTACT FORM EMAIL VALIDATION
    ===================================================== */

    const emailInput =
        document.getElementById("email");


    if (emailInput) {

        emailInput.addEventListener("input", function () {

            const emailRegex =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


            if (
                emailInput.value.length > 0 &&
                !emailRegex.test(emailInput.value)
            ) {

                emailInput.style.borderColor =
                    "#ef4444";

            } else {

                emailInput.style.borderColor = "";

            }

        });

    }


});
</script>

</body>
</html>