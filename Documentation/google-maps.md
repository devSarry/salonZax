# Google Maps Integrations
This app makes use of google maps for maps and address completion. Both these features are provided through a vuejs library [vue google maps](https://github.com/xkjyeah/vue-google-maps).To use google maps we need to setup an api key.

## Obtaining an API key
Login to your [Google API Console](https://console.developers.google.com) and select your project.

Then click on "Google Maps JavaScript API" and enable the API

![Google Maps JavaScript API](http://i.imgur.com/LL9Qvix.png)

Finally under the "Credentials" Tab Create an "API Key"

![API Credentials](http://i.imgur.com/FS0mp7D.png)

Copy the API key

![key](http://i.imgur.com/XDxtHFj.png)

*NOTE* for production make sure you restrict the api to only the site. By default no restrictions will be placed. That means anyone who can visit the page can use the api key for their own purposes.

## Usage
Now that we have the API key to make use of it in this app we need to provide it to [vue google maps](https://github.com/xkjyeah/vue-google-maps). We load up [vue google maps](https://github.com/xkjyeah/vue-google-maps) in our main `app.js` file

```js
Vue.use(VueGoogleMaps, {
    installComponents: true,
    load: {
        key: 'API_KEY',
        libraries: 'places'
    }
});
```

## Production
For production a new key will need to be made and manually the `app.js` file will need to be updated, after which we'll need to run gulp to build a new js bundle with the updated key.