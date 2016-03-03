#! /bin/bash

# Get all arguments as array
answers=("$@")

# Check if we dont have any arguments, then set as YES/NO
if [ -z "$1" ]; then
    # echo args are not defined
    answers=(
        'YES'
        'NO'
    )
fi

# Get a random index based on the answers
rand=$[ $RANDOM % ${#answers[@]} ]

# Create the answer string
answer=${answers[ $rand ]}

# If option is set say the answer
# say $answer

# Return the answer to the console
echo $answer
