the-cleaners
============


A user can choose one of 3 bundles.

Once the user selects a bundle, he fills out the information that is asked for. Upon submit, this information is then sent to the table 'customer' in the database with the following structure:

Name, Email, Phone, Street, City, State, Zip, Date, Time, Card, CardNumber, CardCode, CardName, Bundle

At the same time, a second table 'date' is updated with the following structure:

Date, Booked

It is already populated with 31 Date entries with Booked set to 0. Booked is changed from 0 to 1 on the given date that a user chooses. This allows the PHP and JavaScript in schedule.php to look at the table of 0's and 1's to determine whether or not to change a calendar day div to reflect that day has been booked or not.

Future considerations would be error checking for form input, and making sure that a user can't book a date that is already booked. Allowing for a more robust structure that can handle all months of the year would also make more sense, but this was just a proof of concept.

submit.php and schedule.php have the PHP/data base and JavaScript work.

Live code:

http://vunlab.com/clean/
