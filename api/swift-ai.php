<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$apiKey = $_ENV['OPENAI_API_KEY'] ?? null;

// api/swift-ai.php

header('Content-Type: application/json');

// Basic CORS for local dev (adjust for production)
header('Access-Control-Allow-Origin: http://localhost');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, OPTIONS');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  http_response_code(204);
  exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$userMessage = trim($input['message'] ?? '');

if ($userMessage === '') {
  echo json_encode(['error' => 'No message provided']);
  exit;
}

// ⚠️ NEVER hard-code your API key in JS.
// Put it in an environment variable or config outside web root.
$apiKey = getenv('OPENAI_API_KEY'); // or include 'config.php'

if (!$apiKey) {
  echo json_encode(['error' => 'API key not configured']);
  exit;
}

$payload = [
  'model' => 'gpt-4o-mini',
  'messages' => [
    [
      'role' => 'system',
      'content' =>
        "You are Swift AI Assistant, a helpful, concise assistant for Swift Designs Studio, a web design and development agency. 
         You help visitors understand services, websites, Webflow, branding, and digital strategy. 
         Keep responses friendly, professional, and clear. If asked about pricing, speak generally and suggest contacting Swift Designs via the contact page."
    ],
    [
      'role' => 'user',
      'content' => $userMessage
    ]
  ],
  'temperature' => 0.5,
  'max_tokens' => 400,
];

$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST           => true,
  CURLOPT_HTTPHEADER     => [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey,
  ],
  CURLOPT_POSTFIELDS     => json_encode($payload),
]);

$response = curl_exec($ch);

if ($response === false) {
  echo json_encode(['error' => 'Error calling OpenAI API']);
  curl_close($ch);
  exit;
}

curl_close($ch);

$data = json_decode($response, true);

$reply = $data['choices'][0]['message']['content'] ?? null;

if (!$reply) {
  echo json_encode(['error' => 'No reply from model']);
  exit;
}

echo json_encode([
  'reply' => $reply,
]);
