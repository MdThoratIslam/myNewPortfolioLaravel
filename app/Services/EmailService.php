<?php
namespace App\Services;

use Webklex\PHPIMAP\ClientManager;

class EmailService {
    private $client;

    public function __construct() {
        try {
            $cm = new ClientManager();
            $this->client = $cm->make([
                'host'          => env('IMAP_HOST', 'mail.gmail.com'),
                'port'          => env('IMAP_PORT', 993),
                'encryption'    => env('IMAP_ENCRYPTION', 'ssl'),
                'validate_cert' => env('IMAP_VALIDATE_CERT', true),
                'username'      => env('IMAP_USERNAME', 'mdthoratislam1995.oni@gmail.com'),
                'password'      => env('IMAP_PASSWORD', 'pinefummkbmuyjyd'),
                'app_name'      => 'Laravel-IMAp',
            ]);
            if ($this->client->connect()) {
                dd('connected');
                Log::info('IMAP connection successful');
            } else {
                dd('not connected');
                Log::error('IMAP connection failed');
                throw new Exception('IMAP connection failed');
            }
        } catch (Exception $e) {
            Log::error('IMAP connection failed: ' . $e->getMessage());
            throw new Exception('IMAP connection failed: ' . $e->getMessage());
        }
    }

    public function getInboxMessages() {
        try {
            $folder = $this->client->getFolder('INBOX');
            return $folder->messages()->all()->get();
        } catch (Exception $e) {
            Log::error('Fetching inbox messages failed: ' . $e->getMessage());
            return [];
        }
    }
}
