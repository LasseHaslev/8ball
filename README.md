# Ask shell script
Shell script for answering complex questions

## Installation
Make sure you have composer installed, and run:
```
composer install
```
This will install the dependencies for this application

#### Help
For information of this application run:
```
./ask.php
```

### Choose
Choose.sh is the main engine of this application.
```
./ask.php choose
# Will return YES or NO
```
./ask.php choose Banana Apple
# Will return 'Banana' or 'Apple'
```

You can even write as many options to choose from as you'd like
```
./ask.php choose Banana Apple Mango Melon
# Will return 'Banana' or 'Apple' or 'Mango' or 'Melon'
```

### 8ball
Uses the engine of Choose to simulate an 8ball answering ball
```
# Is 8ball the coolest script ever?
./ask.php 8ball
# Will return 'Without a doubt'. ( or another answer... )
```
