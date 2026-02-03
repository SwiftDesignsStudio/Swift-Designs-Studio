<?php
  $page = 'blog';
// header/footer live in the project root:
  include dirname(__DIR__) . '/../header.php'; 
?>

<?php
$BLOG_POSTS = [
  [
    'slug' => 'web-design-agency',
    'title' => 'Why Partner With A Web Design Agency For Custom Projects',
    'excerpt' => 'How a senior team accelerates delivery, protects quality, and reduces long-term costs.',
    'date' => '2025-11-10',
    'author' => 'Swift Designs Studio',
    'thumb' => 'images/web-design-agency-hero.jpg',
    'hero'  => 'images/web-design-agency-hero.jpg',
    'body'  => 'posts/web-design-agency.html',
    'tags'  => ['Web Design','Strategy']
  ],
  [
    'slug' => 'choosing-a-web-design-agency',
    'title' => 'Choosing A Web Design Agency: What To Look For & Why It Matters',
    'excerpt' => 'A practical checklist for vetting vendors—process, proofs, pricing, and people.',
    'date' => '2025-11-11',
    'author' => 'Swift Designs Studio',
    'thumb' => 'images/choosing-agency-hero.jpg',
    'hero'  => 'images/choosing-agency-hero.jpg',
    'body'  => 'posts/choosing-web-design-agency.html',
    'tags'  => ['Buying Guide','Process']
  ],
  [
    'slug' => 'webflow-vs-wix',
    'title' => 'Webflow vs Wix: Which Wins On SEO, Pricing & Scalability?',
    'excerpt' => 'We compare real-world use cases, performance, and ownership trade-offs.',
    'date' => '2025-11-12',
    'author' => 'Swift Designs Studio',
    'thumb' => 'images/webflow-vs-wix-hero.jpg',
    'hero'  => 'images/webflow-vs-wix-hero.jpg',
    'body'  => 'posts/webflow-vs-wix.html',
    'tags'  => ['Webflow','Platform']
  ],
  [
    'slug' => 'marketing-automation-playbook',
    'title' => 'Building The Future Of Marketing Automation (Playbook)',
    'excerpt' => 'Stack choices, flow diagrams, and launch checklists for SMEs.',
    'date' => '2025-11-13',
    'author' => 'Swift Designs Studio',
    'thumb' => 'images/marketing-automation-hero.jpg',
    'hero'  => 'images/marketing-automation-hero.jpg',
    'body'  => 'posts/marketing-automation-playbook.html',
    'tags'  => ['Automation','CRM']
  ],
  [
    'slug' => 'framer-vs-webflow',
    'title' => 'Framer vs Webflow: Speed, Interactions & Dev Handoff',
    'excerpt' => 'Where each shines and where to pick one over the other.',
    'date' => '2025-11-14',
    'author' => 'Swift Designs Studio',
    'thumb' => 'images/framer-vs-webflow-hero.jpg',
    'hero'  => 'images/framer-vs-webflow-hero.jpg',
    'body'  => 'posts/framer-vs-webflow.html',
    'tags'  => ['Framer','Webflow','Comparison']
  ],
  [
    'slug' => 'custom-saas-web-development',
    'title' => 'Custom SaaS Web Development: Flexible Foundations For Growth',
    'excerpt' => 'Design systems, component libraries, and scale-ready patterns.',
    'date' => '2025-11-15',
    'author' => 'Swift Designs Studio',
    'thumb' => 'images/custom-saas-hero.jpg',
    'hero'  => 'images/custom-saas-hero.jpg',
    'body'  => 'posts/custom-saas-web-dev.html',
    'tags'  => ['SaaS','Architecture']
  ]
];

function find_post($slug) {
  global $BLOG_POSTS;
  foreach ($BLOG_POSTS as $p) { if ($p['slug'] === $slug) return $p; }
  return null;
}
