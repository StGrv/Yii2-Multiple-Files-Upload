# Yii2-Multiple-Files-Upload
Uploading a miltiple images and saving them to the DB using the MVC architecture.

1. We create the DB scheme using migrations.
2. Then we create the model that interacts with the DB and apply the rules() method with proper validations/extensions and so on..
3. The controller comes after the model where we construct the "actionCreate" method that renders the page containing the form. Not only that but we also apply files upload logic there.
4. At the end we create the "create.php" file that contains the form that must be submitted.
