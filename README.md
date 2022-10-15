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
- Create a first event in agenda
    - Clic on 'Agenda'
    - Create any event(s)

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
    - Add a shortcode:
      `[ics_calendar url="http://nextcloud:nextcloud@nextcloud/remote.php/dav/calendars/nextcloud/personal/?export" compact="true" reload="1" maskinfo="Resevé" monthnav="arrows" showendtimes="true" title="Disponibilités du Pantin" hidealldayindicator="true"]`

## Ref

[ICS calendar parameters guide](https://icscalendar.com/icsdocs/)

## TODO

- setup a calendar readonly user on nextcloud

Work in progress...
