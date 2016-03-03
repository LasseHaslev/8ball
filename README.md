# Ask shell script
Shell script for answering complex questions

## Installation
Make sure you have composer installed, and run:
```
composer install
```
This will install the dependencies for this application

#### Help
```
# For information of this application run:
./ask.php
```

### Choose
Choose.sh is the main engine of this application.
```
./ask.php choose
# Will return YES or NO
```

You can add options to choose from
```
./ask.php choose Banana Apple
# Will return 'Banana' or 'Apple'
```

You can even write as many options to choose from as you'd like
```
./ask.php choose Banana Apple Mango Melon
# Will return 'Banana' or 'Apple' or 'Mango' or 'Melon'
```

##### Print out the question for choose
```
./ask.php choose McDonalds BurgerKing --question-input "Where should we eat?"
# Where should we eat?
# BurgerKing
```

### 8ball
Uses the engine of Choose to simulate an 8ball answering ball
```
# Is 8ball the coolest script ever?
./ask.php 8ball
# Will return 'Without a doubt'. ( or another answer... )
```

##### Print out the question for 8ball
```
./ask.php 8ball "Will the world end?"
# Will the world end?
# As i see it, Yes
```
