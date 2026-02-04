<?php
// --- contact.php ---

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

// Start session BEFORE any output
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set active nav item for header
$page = 'contact';

// Include header ONCE (no other header includes below)
include __DIR__ . '/header.php';

// Handle form POST
$errors = [];
$old = ['name' => '', 'email' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old['name']    = trim($_POST['name'] ?? '');
    $old['email']   = trim($_POST['email'] ?? '');
    $old['message'] = trim($_POST['message'] ?? '');

    if ($old['name'] === '') {
        $errors['name'] = 'Please enter your name.';
    }

    if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid email.';
    }

    if ($old['message'] === '') {
        $errors['message'] = 'Please write a message.';
    }

    if (!$errors) {
        // Save to CSV locally so it works without SMTP
        $dir = __DIR__ . '/data';
        if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

        $csv = $dir . '/contacts.csv';
        $row = [
            date('c'),
            $old['name'],
            $old['email'],
            preg_replace("/[\r\n]+/", " ", $old['message']),
            $_SERVER['REMOTE_ADDR'] ?? ''
        ];

        $quoted = array_map(
            fn($v) => '"' . str_replace('"', '""', $v) . '"',
            $row
        );

        file_put_contents($csv, implode(',', $quoted) . PHP_EOL, FILE_APPEND);

                // --- SEND EMAIL ---
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@swiftdesignsstudio.com';
            $mail->Password   = 'kedt pvhk plig whls';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('info@swiftdesignsstudio.com', 'Swift Designs Studio');
            $mail->addAddress('info@swiftdesignsstudio.com');
            $mail->addReplyTo($old['email'], $old['name']);

            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = "
                <strong>Name:</strong> {$old['name']}<br>
                <strong>Email:</strong> {$old['email']}<br><br>
                <strong>Message:</strong><br>
                " . nl2br(htmlspecialchars($old['message'])) . "
            ";

            $mail->send();
        } catch (Exception $e) {
            error_log('Mail error: ' . $mail->ErrorInfo);
        }

        // Flash message + redirect to avoid resubmission
        $_SESSION['flash'] = 'Thanks, your message was sent!';
        header('Location: /contact.php');
        exit;
    }
}
?>

<main class="contact-page">
  <section class="contact-section">
    <div class="container">
      <div class="section-title">
        <h2>Contact Us</h2>
        <p>
          Have questions or want to work together?<br>
          Reach out via the form below or through any of the following methods:
        </p>
      </div>

      <div class="contact-grid">
        <div class="contact-card">
          <div class="icon-wrap"><i class="fa-solid fa-envelope"></i></div>
          <h4>Email</h4>
          <p>
            <a href="mailto:info@swiftdesigns.studio">
              info@swiftdesigns<span style="display:none;">-</span>studio.com
            </a>
          </p>
        </div>

        <div class="contact-card">
          <div class="icon-wrap"><i class="fa-solid fa-phone"></i></div>
          <h4>Phone</h4>
          <p><a href="tel:3344564667">334-456-4667</a></p>
        </div>

        <div class="contact-card">
          <div class="icon-wrap"><i class="fa-solid fa-location-dot"></i></div>
          <h4>Location</h4>
          <p>San Diego, California</p>
        </div>

        <div class="contact-card">
          <div class="icon-wrap"><i class="fa-solid fa-share-nodes"></i></div>
          <h4>Social Media</h4>
          <div class="social-icons">
            <a href="https://linkedin.com/in/coreyshamburger"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://github.com/SwiftDesignsStudio"><i class="fa-brands fa-github"></i></a>
          </div>
        </div>
      </div>

      <?php if (!empty($_SESSION['flash'])): ?>
        <div class="alert alert-success" role="alert">
          <?= htmlspecialchars($_SESSION['flash']); unset($_SESSION['flash']); ?>
        </div>
      <?php endif; ?>

      <?php if ($errors): ?>
        <div class="alert alert-danger" role="alert">
          Please fix the errors below and try again.
        </div>
      <?php endif; ?>

      <form id="contact-form" action="/contact.php" method="POST" novalidate>
        <div class="form-grid">
          <div class="form-field">
            <input
              type="text"
              name="name"
              placeholder="Enter your full name *"
              value="<?= htmlspecialchars($old['name']); ?>"
              required
            >
            <?php if (!empty($errors['name'])): ?>
              <small class="form-error"><?= htmlspecialchars($errors['name']); ?></small>
            <?php endif; ?>
          </div>

          <div class="form-field">
            <input
              type="email"
              name="email"
              placeholder="Enter your email *"
              value="<?= htmlspecialchars($old['email']); ?>"
              required
            >
            <?php if (!empty($errors['email'])): ?>
              <small class="form-error"><?= htmlspecialchars($errors['email']); ?></small>
            <?php endif; ?>
          </div>

          <div class="form-field full-span">
            <textarea
              name="message"
              placeholder="Your Message *"
              required
            ><?= htmlspecialchars($old['message']); ?></textarea>
            <?php if (!empty($errors['message'])): ?>
              <small class="form-error"><?= htmlspecialchars($errors['message']); ?></small>
            <?php endif; ?>
          </div>
        </div>

        <button type="submit" class="btn-contact">Send Message</button>
      </form>
    </div>
  </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
