
### Timestamp microservice Completed with PHP
### User Stories:

>1.I can pass a string as a parameter, and it will check to see whether that string contains either a unix timestamp or a natural language date (example: January 1, 2016).

>2.If it does, it returns both the Unix timestamp and the natural language form of that date.

>3.If it does not contain a date or Unix timestamp, it returns null for those properties.

Example Usage:

`cewjr.us/UnixTimestamp/timestamp.php/?December%2015,%202015`

`cewjr.us/UnixTimestamp/timestamp.php/?1450137600`

**NOTE: Be sure to include the "?" before the date. If you do not it will not work.**

Example Output:

`{ "Unix Date": 1450137600, "Natural Date": "December 15, 2015" }`
