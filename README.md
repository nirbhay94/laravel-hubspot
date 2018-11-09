This will create contact in hubspot and get all contacts from hubspot

Installation

1.composer require Nirbhay94/laravel-hubspot

2.Get a HubSpot API Key from the Intergrations page of your HubSpot account.

3.php artisan vendor:publish --provider="Nirbhay\Hubspot\HubspotServiceProvider" --tag="config" will create a config/hubspot.php file.

4.Add your HubSpot API key into the your .env file: HAPI_KEY=yourApiKey

5.Add Nirbhay\Hubspot\HubspotServiceProvider::class to your providers in your config/app.php file.

6.Add 'HubSpot' => Nirbhay\Hubspot\Facades\Hubspot::class to your aliases in your config/app.php file.

