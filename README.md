# test-calendrier-wp

## Dev env

Quick docker-compose command to shut down old containers & start docker containers:

```
# docker-compose down -v  ## uncomment if you need to remove volumes
docker-compose down --remove-orphans && docker-compose up -d --build
```

## Step-by-step setup

WORK-IN-PROGRESS

### Setup Nextcloud & agenda

- Go to http://localhost:667
- Login with nextcloud / nextcloud
- Add application 'Calendar'
    - 'N' in top-right corner -> 'application'
    - 'Organisation' (in left menu)
    - Clic on "Download and activate" of 'Calendar'
- Create a new agenda to sync with WordPress plugin
    - Go to 'Agenda'
    - Click on 'New agenda'
    - Set the name (example: "Meeting room #1")
    - Click on 'share' icon next to your new agenda
    - Click on '+' next to "share link"
    - Click on "..." -> "Copy subscription link" (will be used as "ICS_URL" later in this step-by-step)
        - Change "localhost:667" domain with "nextcloud" (docker internal service domain)
        - Should look like `http://nextcloud/remote.php/dav/public-calendars/AbCdEfGhIjKlMnOp?export`
- Create a first event(s) in agenda
    - Clic on 'Agenda'
    - Create any event(s) to sync with WordPress plugin

### Setup Wordpress with booking agenda

- Go to http://localhost:666
- Select language
- Fill in anything you want (just disable search engine)
- Make sure your timezone is correctly set up
    - http://localhost:666/wp-admin/options-general.php
- Install required app
    - 'Extensions' in left menu
    - 'Add'
    - Search for "ics calendar"
    - Install 'ics calendar"
    - Activate the plugin
- Create a page with the calendar
    - "Pages" in menu
    - "Add" on top
    - Set a title
    - Add ICS calendar shortcode (replace ICS_URL with url got from nextcloud agenda):
        - `[ics_calendar debug="false" url="ICS_URL" compact="true" reload="30" maskinfo="Résevé" monthnav="arrows" showendtimes="true" title="Availability of meeting room #1" hidealldayindicator="false" color="#ff0000"]`

## Ref

[ICS calendar parameters guide](https://icscalendar.com/icsdocs/)
