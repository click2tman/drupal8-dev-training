<?php

/**
 * Contains exercises to create a service.
 * Estimated time: 15 minutes.
 */

// ==== Step 1 ====
// Define a webservice that fetches html data.
// - Determine how Drupal fetches html data.
// - Use the wizzlern_webservice.services.yml file provided in this exercise.
// - Define a endpoint service in the wizzlern_webservice.services.yml file
//   that loads and processes html data using Drupal core's http client. Use
//   the EndpointApi class for this service.
// - Note that this service requires the core http client.

// ==== Step 2 ====
// Create a test page that will show the fetched data.
// - Create a controller class and router. Choose your own URL and title.
// - The controller uses the webservice to fetch html data
// - Display some results from a webservice.

// ==== Step 3 ====
// Get the DOM of the html data.
// - Use the files in the src/ClientApi folder provided in this exercise.
// - Add a constructor to load the service(s) this class requires.
// - Implement EndpointApi::loadDom(). Note that the interface provides the
//   essential details for the method.
