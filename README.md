This will create contact in hubspot and get all contacts from hubspot

Installation

1.composer require Nirbhay94/laravel-hubspot
Get a HubSpot API Key from the Intergrations page of your HubSpot account.
php artisan vendor:publish --provider="Nirbhay\Hubspot\HubspotServiceProvider" --tag="config" will create a config/hubspot.php file.
Add your HubSpot API key into the your .env file: HAPI_KEY=yourApiKey
Add Nirbhay\Hubspot\HubspotServiceProvider::class to your providers in your config/app.php file.
Add 'HubSpot' => Nirbhay\LaravelHubspot\Facades\HubSpot::class to your aliases in your config/app.php file.

