# Graph Report - skti-theme-test  (2026-08-18)

## Corpus Check
- 18 files · ~67,845 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 191 nodes · 366 edges · 43 communities (24 shown, 19 thin omitted)
- Extraction: 74% EXTRACTED · 25% INFERRED · 1% AMBIGUOUS · INFERRED: 90 edges (avg confidence: 0.57)
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `ff03c11a`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- l
- v
- swiper-bundle.min.js
- scripts.js
- forms.js
- secondary-header.js
- functions.php
- Cisco Carousel Image
- animation.js
- ISO 27001 2022 Certificate
- Anti-Bribery Management Certification Seal (ISO 37001)
- ISO 37001 2016 Certificate
- ISO 37301 2021 Certificate
- Site Logo (SKTI)
- resizeBanner.js
- Contact Address Section Background
- Error Page Illustration (Erro)
- Backup Banner
- Backup Service Icon
- LGPD Compliance Service Icon
- Monitoring Service Icon
- Veeam Partner Banner
- Certifi Seal
- Record Circle UI Icon
- Blockbit Partner Banner
- Cisco Partner Banner
- Fortinet Partner Banner
- Microsoft Partner Banner
- VMware Partner Banner
- Structured Cabling Service Icon
- Helpdesk Service Icon
- IT Infrastructure Service Icon
- curriculo-form.js

## God Nodes (most connected - your core abstractions)
1. `v()` - 28 edges
2. `l()` - 27 edges
3. `o()` - 22 edges
4. `d()` - 22 edges
5. `r()` - 19 edges
6. `C()` - 17 edges
7. `i()` - 16 edges
8. `emit()` - 16 edges
9. `t()` - 15 edges
10. `p()` - 15 edges

## Surprising Connections (you probably didn't know these)
- `Untitled Design Logo or Badge (300x127)` --semantically_similar_to--> `Site Logo (SKTI)`  [AMBIGUOUS] [semantically similar]
  assets/Design-sem-nome-3-300x127.png → assets/logo.png
- `Site Logo (SKTI)` --semantically_similar_to--> `Address Section Logo (SKTI)`  [INFERRED] [semantically similar]
  assets/logo.png → assets/logo-address.png
- `Contact Address Section Background` --semantically_similar_to--> `Partners Section Background`  [INFERRED] [semantically similar]
  assets/background-address.png → assets/background-partner.png
- `404 Error Page Illustration` --semantically_similar_to--> `Error Page Illustration (Erro)`  [INFERRED] [semantically similar]
  assets/error.png → assets/Erro.png
- `Backup Banner` --conceptually_related_to--> `Veeam Partner Banner`  [AMBIGUOUS]
  assets/banners/banner-backup.png → assets/banners/banner-veeam.jpeg

## Import Cycles
- None detected.

## Hyperedges (group relationships)
- **Brand Identity Assets** — assets_logo, assets_logo_address, assets_record_circle_fill [INFERRED 0.75]
- **Certifications and Compliance Seals Showcase** — assets_certificates_ant_cert, assets_certificates_certifi_selo, assets_certificates_informatio_cert, assets_certificates_privacy_cert, assets_certificates_risk_manager [INFERRED 0.75]
- **Error Page Visual Assets** — assets_error, assets_erro, 404 [INFERRED 0.75]
- **Technology Partners Carousel** — assets_carouselimg_carrossel_blockbit, assets_carouselimg_carrossel_cisco, assets_carouselimg_carrossel_fortinet, assets_carouselimg_carrossel_microsoft, assets_carouselimg_carrossel_veeam, assets_carouselimg_carrossel_vmware [INFERRED 0.75]
- **Technology Partner Banners** — wordpress_skti_theme_assets_banners_banner_blockbit, wordpress_skti_theme_assets_banners_banner_cisco, wordpress_skti_theme_assets_banners_banner_fortinet, wordpress_skti_theme_assets_banners_banner_microsoft, wordpress_skti_theme_assets_banners_banner_veeam, wordpress_skti_theme_assets_banners_banner_vmware, wordpress_skti_theme_assets_banners_banner_backup [INFERRED 0.85]
- **Company ISO Certifications** — assets_certificates_certifica__o_iso_27001_2022, assets_certificates_certifica__o_iso_27701_2019, assets_certificates_certifica__o_iso_37001_2016, assets_certificates_certifica__o_iso_37301_2021, assets_certificates_certifi [INFERRED 0.85]
- **Company Service Offerings** — wordpress_skti_theme_assets_servicesimg_service_backup, wordpress_skti_theme_assets_servicesimg_service_cable, wordpress_skti_theme_assets_servicesimg_service_helpdesk, wordpress_skti_theme_assets_servicesimg_service_infra, wordpress_skti_theme_assets_servicesimg_service_lgpd, wordpress_skti_theme_assets_servicesimg_service_monitoring, wordpress_skti_theme_assets_servicesimg_service_network, wordpress_skti_theme_assets_servicesimg_service_security, wordpress_skti_theme_assets_servicesimg_service_voip [INFERRED 0.85]

## Communities (43 total, 19 thin omitted)

### Community 0 - "l"
Cohesion: 0.33
Nodes (28): addEventListener(), B(), C(), p(), u(), d(), e(), f() (+20 more)

### Community 1 - "v"
Cohesion: 0.12
Nodes (9): emit(), g(), J(), K(), onAny(), q(), setTimeout(), v() (+1 more)

### Community 2 - "swiper-bundle.min.js"
Cohesion: 0.10
Nodes (8): a(), blur(), cancelAnimationFrame(), clearTimeout(), ie(), on(), once(), set()

### Community 3 - "scripts.js"
Cohesion: 0.15
Nodes (11): currentYear, date, getDistanceFromTheTop(), linskBack, menuLinks, nav, screen, scrollToSection() (+3 more)

### Community 4 - "forms.js"
Cohesion: 0.25
Nodes (6): button, email, firstName, form, lastName, message

### Community 5 - "secondary-header.js"
Cohesion: 0.25
Nodes (5): currentYear, date, nav, toggleClose, toggleOpen

### Community 7 - "Cisco Carousel Image"
Cohesion: 0.33
Nodes (6): Blockbit Carousel Image, Cisco Carousel Image, Fortinet Carousel Image, Microsoft Carousel Image, Veeam Carousel Image, VMware Carousel Image

### Community 8 - "animation.js"
Cohesion: 0.33
Nodes (5): elementsHidden, elementsLeft, elementsSlider, elementsUp, myObserver

### Community 9 - "ISO 27001 2022 Certificate"
Cohesion: 0.40
Nodes (5): Certifi Seal/Logo, ISO 27001 2022 Certificate, ISO 27701 2019 Certificate, ISO/IEC 27001:2022 — Information Security Management Standard, ISO/IEC 27701:2019 — Privacy Information Management Standard

### Community 10 - "Anti-Bribery Management Certification Seal (ISO 37001)"
Cohesion: 1.00
Nodes (4): Anti-Bribery Management Certification Seal (ISO 37001), Information Security Management Certification Seal (ISO 27001), Privacy Information Management Certification Seal (ISO 27701), Risk Management Certification Seal (ISO 37301)

### Community 11 - "ISO 37001 2016 Certificate"
Cohesion: 0.67
Nodes (3): ISO 37001 2016 Certificate, ISO 37001:2016 — Anti-Bribery Management Standard, TNV Certification Private Limited

### Community 12 - "ISO 37301 2021 Certificate"
Cohesion: 0.67
Nodes (3): ISO 37301 2021 Certificate, ISO 37301:2021 — Compliance Management Standard, STRAICK CENTRO (certification body or certified party, unreadable)

### Community 13 - "Site Logo (SKTI)"
Cohesion: 0.67
Nodes (3): Untitled Design Logo or Badge (300x127), Site Logo (SKTI), Address Section Logo (SKTI)

### Community 42 - "curriculo-form.js"
Cohesion: 0.28
Nodes (8): button, checkInputs(), clearError(), fileInput, fileName, form, markError(), phoneMask

## Ambiguous Edges - Review These
- `ISO 37301 2021 Certificate` → `STRAICK CENTRO (certification body or certified party, unreadable)`  [AMBIGUOUS]
  assets/certificates/Certificação ISO 37301 2021.pdf · relation: references
- `Untitled Design Logo or Badge (300x127)` → `Site Logo (SKTI)`  [AMBIGUOUS]
  assets/Design-sem-nome-3-300x127.png · relation: semantically_similar_to
- `Backup Banner` → `Veeam Partner Banner`  [AMBIGUOUS]
  assets/banners/banner-backup.png · relation: conceptually_related_to
- `Certifi Seal/Logo` → `ISO 27001 2022 Certificate`  [AMBIGUOUS]
  assets/certificates/certifi.pdf · relation: conceptually_related_to

## Knowledge Gaps
- **64 isolated node(s):** `elementsUp`, `elementsLeft`, `elementsSlider`, `elementsHidden`, `myObserver` (+59 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **19 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **What is the exact relationship between `ISO 37301 2021 Certificate` and `STRAICK CENTRO (certification body or certified party, unreadable)`?**
  _Edge tagged AMBIGUOUS (relation: references) - confidence is low._
- **What is the exact relationship between `Untitled Design Logo or Badge (300x127)` and `Site Logo (SKTI)`?**
  _Edge tagged AMBIGUOUS (relation: semantically_similar_to) - confidence is low._
- **What is the exact relationship between `Backup Banner` and `Veeam Partner Banner`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **What is the exact relationship between `Certifi Seal/Logo` and `ISO 27001 2022 Certificate`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **Why does `v()` connect `v` to `l`, `swiper-bundle.min.js`?**
  _High betweenness centrality (0.045) - this node is a cross-community bridge._
- **Why does `emit()` connect `v` to `l`, `swiper-bundle.min.js`?**
  _High betweenness centrality (0.011) - this node is a cross-community bridge._
- **Why does `l()` connect `l` to `v`, `swiper-bundle.min.js`?**
  _High betweenness centrality (0.010) - this node is a cross-community bridge._