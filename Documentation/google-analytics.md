# Google Analytics Setup

Getting data from GA services is through [Spatie's 'laravel analytics'](https://github.com/spatie/laravel-analytics)

It requires a bit of setup. The documentation in spatie's repo is a bit out dated. So these are more up to date steps required. The package requires 3 pieces to connect to the googles api.
1. an API Credentials key
2. a service account email
3. a "view id"


## Obtain API Credentials
Go to [Google's API console](https://console.developers.google.com) and select a project or create a new one.

![select project](http://i.imgur.com/OvOp3WZ.png)

Then under libraries search for "Analytics API" and click "enable"

![enable](http://i.imgur.com/Y7f9xHu.png)

"Create Credentials"

![create](http://i.imgur.com/d3YES3a.png)

We'll now create a service account key that the application will use when making api calls.

![key](http://i.imgur.com/WjteY10.png)

Save the json file. Laravel analytics will look for it by default in `app/storage/laravel-google-analytics/service-account-credentials.json`

## Granting permissions to your Analytics property
Now that we have a credential file we need to login to the google analytics dashboard and give permission to make api calls. [Analytics Site](https://analytics.google.com/analytics)

Go to your admin page and under "User management"

![user management](http://i.imgur.com/cafv60h.png)

Add permission in this case the email isn't a real user's email but the service account for the credential we just created. The email can be found in that file

![permission](http://i.imgur.com/iBID3CA.png)

![email](http://i.imgur.com/e4LFjup.png)

## View ID
The last thing you'll have to do is fill in the `view_id` in the config file. You can get the right value on the [Analytics site](https://analytics.google.com/analytics). Go to "View setting" in the Admin-section of the property.

![7](https://spatie.github.io/laravel-analytics/v2/7.jpg)

You'll need the `View ID` displayed there.

![8](https://spatie.github.io/laravel-analytics/v2/8.jpg)

Finally add the `View ID` to your `.env` file as 
`ANALYTICS_VIEW_ID`

For usage documentation refer to the Spatie's [github page](https://github.com/spatie/laravel-analytics)

## Production
For production a new Analytics account will need to be first created specific for the site, then manually the credential file will need to be uploaded to the site. 