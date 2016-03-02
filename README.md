# 8ball
Shell script for answering complex questions

### choose.sh
Choose.sh is the main engine of this application.
```
./choose.sh
```
This will return eather YES or NO

You can also include parameters to choose from:
```
./choose.sh Banana Apple
```
Will return 'Banana' or 'Apple'

You can even write as many items to choose from as you'd like
```
./choose.sh Banana Apple Mango Melon
```
Will return 'Banana' or 'Apple' or 'Mango' or 'Melon'

### 8ball.sh
Uses the engine of choose.sh to simulate an 8ball answering ball
```
# Is 8ball the coolest script ever?
./8ball.sh
```
Will return 'Without a doubt'
