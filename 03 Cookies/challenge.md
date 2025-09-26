Problem statement
Here is a coding challenge that incorporates all the concepts that we have covered up to this point.

You are going to create a PHP script that shows “Congratulations!” in a language selected by the user. When you come back to the page, it should still know what language the user selected earlier. We will use a cookie for that.

Tasks:

Create a congratulations.php script that shows an HTML <select> element with two options, English and Dutch.
Add a submit button and make sure to put these elements in an HTML form.
Make sure the selected language gets submitted as a query parameter called language.
If the query parameter language exists, we should copy its value to a cookie called language.
If the query parameter doesn’t exist, we should look for a cookie called language.
If the cookie doesn’t exist, we should fall back to the default language, which is English.


Below the form, show “Congratulations!” in the selected language. When Dutch is selected, show “Gefeliciteerd!”.
Verify that your code is flexible enough by adding one or more additional languages.
What should happen if you call the page with ?language=invalid?