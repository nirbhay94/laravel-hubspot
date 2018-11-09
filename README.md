<h2>This will create contact in hubspot and get all contacts from hubspot</h2>

<h3>Installation</h3>

1. <code>composer require Nirbhay94/laravel-hubspot</code>

2.Get a HubSpot API Key from the Intergrations page of your HubSpot account.

3.<code>php artisan vendor:publish --provider="Nirbhay\Hubspot\HubspotServiceProvider" --tag="config"</code> will create a config/hubspot.php file.

4.Add your HubSpot API key into the your <code>.env</code> file: <code>HAPI_KEY=yourApiKey</code>

5.Add <code>Nirbhay\Hubspot\HubspotServiceProvider::class</code> to your providers in your config/app.php file.

6.Add <code>'HubSpot' => Nirbhay\Hubspot\Facades\Hubspot::class</code> to your aliases in your config/app.php file.

<h3>Usage</h3>

You can use the facade as a dependency:

<h3>Facade</h3>

<pre><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>Echo all contacts </span></span>
<span class="pl-s1"><span class="pl-smi">$response</span> <span class="pl-k">=</span> <span class="pl-c1">HubSpot</span><span class="pl-k">::</span>contacts()<span class="pl-k">;</span>
</pre>

<pre><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>Create a contact </span></span>
<span class="pl-s1"><span class="pl-smi">$response</span> <span class="pl-k">=</span> <span class="pl-c1">HubSpot</span><span class="pl-k">::</span>createContact($request)<span class="pl-k">;</span>
</pre>
