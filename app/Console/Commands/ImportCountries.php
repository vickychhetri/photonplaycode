<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;

class ImportCountries extends Command
{
    protected $signature = 'import:countries';
    protected $description = 'Import countries from a JSON file into the database';

    public function handle()
    {
        // Path to the JSON file
        $filePath = storage_path('app/countries.json');

        if (!file_exists($filePath)) {
            $this->error('JSON file not found.');
            return;
        }

        // Read the JSON file
        $jsonData = file_get_contents($filePath);
        $countries = json_decode($jsonData, true);

        if ($countries === null) {
            $this->error('Error decoding JSON data.');
            return;
        }

        // Insert into the database
        foreach ($countries as $country) {
            Country::updateOrCreate(
                ['code' => $country['code']], // Unique identifier
                [
                    'name' => $country['name'],
                    'flag' => $country['flag'],
                    'dial_code' => $country['dial_code'],
                ]
            );
        }

        $this->info('Countries imported successfully!');
    }
}
