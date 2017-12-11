# Olympia Ticker

Create a system for managing editorial ticker text and deliver these entries via a JSON API.

[Example Feed-Link](http://liveticker.laola1.at/olympia/json/tickertxt_all.json)

[Laravel Documentation](https://laravel.com/docs/5.4)

##Part1 - Create Tables:
Create the following tables with separate migrations.
- **sport**
    - id (numeric, auto generated)
    - name (varchar, max-length: 56)

        The following sports should be seeded (db:seed)
        - conference (include all sports)
        - basketball
        - volleyball
        - cycling
- **ticker_text**
    - id (numeric, auto generated)
    - time (datetime)
    - is_highlight (tinyint/boolean)
    - sport_id (FK-sport)
    - title (varchar, max-length: 256)
    - text (varchar, max-length: 5000)

##Part2 - Create Backend:
 - create-, list-, edit-, delete ticker text entries
 - use csrf protection
 - validate user input (php)
 - use "/cms" prefix for your routes
 - (optional) create unit tests
 - (optional) use [view composers](https://laravel.com/docs/5.4/views#view-composers)

##Part3 - Create JSON Feeds:
 - create a json feed for all sports (example feed link at the top - ignore **messageType**)
 - use "/api" prefix for your routes (example: /api/{sportId})
 - create a special route for "conference text (all sports) **/api/conference**"
 - if no ticker text entry is available, the property messages corresponds to an empty array
 - (optional) create integration-, functional tests

##Part4 - Create Console Commands:
- create, list, edit, delete sports via console commands
