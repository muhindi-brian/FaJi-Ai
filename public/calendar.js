// calendar.js

// Client ID and API key from the Developer Console
var CLIENT_ID = 'YOUR_CLIENT_ID';
var API_KEY = 'YOUR_API_KEY';

// Array of API discovery doc URLs for APIs used by the quickstart
var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];

// Authorization scopes required by the API; multiple scopes can be
// included, separated by spaces.
var SCOPES = "https://www.googleapis.com/auth/calendar";

// Initialize the Google API client
gapi.load('client:auth2', {
    callback: function() {
        gapi.client.init({
            apiKey: API_KEY,
            clientId: CLIENT_ID,
            discoveryDocs: DISCOVERY_DOCS,
            scope: SCOPES
        }).then(function() {
            // Listen for sign-in state changes
            gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

            // Handle initial sign-in state
            updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
        });
    },
    onerror: function() {
        // Handle loading error
    },
    timeout: 5000, // 5 seconds
    ontimeout: function() {
        // Handle timeout
    }
});

// Update the UI sign-in state
function updateSigninStatus(isSignedIn) {
    if (isSignedIn) {
        // User is signed in
        document.getElementById('login-button').style.display = 'none';
        listUpcomingEvents();
    } else {
        // User is not signed in
        document.getElementById('login-button').style.display = 'block';
        document.getElementById('calendar-events').innerHTML = '';
    }
}