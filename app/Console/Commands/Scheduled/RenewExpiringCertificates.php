<?php

namespace App\Console\Commands\Scheduled;

use App\Console\Commands\BaseCommand;
use Daanra\LaravelLetsEncrypt\Collections\LetsEncryptCertificateCollection;
use Daanra\LaravelLetsEncrypt\Models\LetsEncryptCertificate;

class RenewExpiringCertificates extends BaseCommand
{
    protected $signature = 'scheduled:renew-expiring-certificates';

    protected $description = 'Renew every certificate that is older than 60 days, ensuring that they never expire.';

    public function handle(): int
    {
        echo "HIIIT";
        echo json_encode(LetsEncryptCertificate::query()->get());

        LetsEncryptCertificate::query()
                              ->requiresRenewal()
                              ->chunk(100, function (LetsEncryptCertificateCollection $certificates) {
                                  $certificates->renewNow();
                              });

        return 0;
    }
}
