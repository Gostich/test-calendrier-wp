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
- Install required app
    - 'Extensions' in left menu
    - 'Add'
    - Search for "oplugins"
    - Install 'Booking calendar' by oplugins
    - Install 'Booking manager' by oplugins
    - Active both of them
- Booking calendar settings -> 'Sync' tab
    - 'Import ics' tab
    - Fill in import field with "http://nextcloud:nextcloud@nextcloud/remote.php/dav/calendars/nextcloud/personal/?export"

work in progress...
