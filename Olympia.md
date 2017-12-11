# Olympia Ticker

Create a system for managing editorial ticker text and deliver these entries via a JSON API.

[Example Feed-Link](http://liveticker.laola1.at/olympia/json/tickertxt_all.json)

[Laravel Documentation](https://laravel.com/docs/5.4)

##Part1 - Create Tables:
Create the following tables with separate [migrations](https://laravel.com/docs/5.4/migrations).
- **sport**
    - id (numeric, auto generated)
    - name (varchar, max-length: 56)

        The following sports should be [seeded](https://laravel.com/docs/5.4/seeding)
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

##Part2 - Create Console Commands:
- create, list, delete sports via [console commands](https://laravel.com/docs/5.4/artisan)

