<?php $page = 'security'; include __DIR__ . '/header.php'; ?>

<div class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <p class="line-one"></p>
      <h2 class="section-title">Security</h2>
      <p class="line-one"></p>
      <p class="section-intro">How we protect client and visitor data.</p>
    </div>

    <article class="document">
      <h3>Security Principles</h3>
      <ul>
        <li><strong>Least privilege & access control:</strong> role-based access, MFA on all critical systems.</li>
        <li><strong>Encryption:</strong> TLS in transit; encryption at rest where supported by vendors.</li>
        <li><strong>Secure development:</strong> code reviews, dependency scanning, environment secrets management.</li>
        <li><strong>Backups & continuity:</strong> automated backups and restoration testing for production assets we manage.</li>
        <li><strong>Vulnerability management:</strong> patch cadence, monitored CVEs, and timely remediation.</li>
        <li><strong>Logging & monitoring:</strong> server/app logs for troubleshooting and security events.</li>
        <li><strong>Vendor risk:</strong> third-party processors are reviewed for security posture and DPAs.</li>
      </ul>

      <h3>Incident Response</h3>
      <ol>
        <li>Detect & triage → contain impact</li>
        <li>Investigate → determine scope & data classes</li>
        <li>Remediate → patch, rotate secrets, restore systems</li>
        <li>Notify affected clients & authorities as required</li>
        <li>Post-incident review & improvements</li>
      </ol>

      <h3>Client Responsibilities</h3>
      <p>Provide timely access for fixes, maintain strong credentials, and notify us promptly of suspected issues.</p>

      <h3>Questions</h3>
      <p>Contact our security team: <a href="mailto:info@swiftdesignsstudio.com">info@swiftdesignsstudio.com</a></p>
    </article>
  </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
