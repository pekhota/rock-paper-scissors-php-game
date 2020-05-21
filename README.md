# rock-paper-scissors-php-game

### About 
https://en.wikipedia.org/wiki/Rock_paper_scissors

### Requirements:
1. Docker
2. docker-compose
3. bash support & `make`(optional)
4. php7.4 (in case if you don't have docker) 

### How to run
1. If you have bash support & make & docker
```bash
make build 
make up
```
2. If not 
```bash
php composer.phar install --no-dev
php index.php
```

2. you can see the result in your console

### Tested on:
1. Docker version 19.03.8
2. docker-compose version 1.25.5
3. macOs Catalina 10.15.4

### More 

Look into the Makefile to learn more about the commands and their structure.  

### Output example:

`docker-compose up`
Starting test_app_1 ... done \
Attaching to test_app_1 \
app_1  | Game 1: draw \
app_1  | Game 2: Player1 won \
app_1  | Game 3: Player1 won \
app_1  | Game 4: Player2 won \
app_1  | Game 5: Player1 won \
app_1  | Game 6: Player1 won \
app_1  | Game 7: draw \
app_1  | Game 8: Player1 won \
app_1  | Game 9: Player2 won \
app_1  | Game 10: Player1 won \
app_1  | Game 11: draw \
app_1  | Game 12: Player1 won \
app_1  | Game 13: Player1 won \
app_1  | Game 14: draw \
app_1  | Game 15: Player1 won \
app_1  | Game 16: Player2 won \
app_1  | Game 17: Player1 won \
app_1  | Game 18: Player1 won \
app_1  | Game 19: Player2 won \
app_1  | Game 20: Player2 won \
app_1  | Game 21: Player2 won \
app_1  | Game 22: Player1 won \
app_1  | Game 23: Player1 won \
app_1  | Game 24: draw \
app_1  | Game 25: Player2 won \
app_1  | Game 26: Player2 won \
app_1  | Game 27: Player1 won \
app_1  | Game 28: Player1 won \
app_1  | Game 29: draw \
app_1  | Game 30: Player1 won \
app_1  | Game 31: Player2 won \
app_1  | Game 32: Player2 won \
app_1  | Game 33: Player1 won \
app_1  | Game 34: Player1 won \
app_1  | Game 35: Player2 won \
app_1  | Game 36: Player2 won \
app_1  | Game 37: Player2 won \
app_1  | Game 38: Player1 won \
app_1  | Game 39: Player1 won \
app_1  | Game 40: Player2 won \
app_1  | Game 41: draw \
app_1  | Game 42: Player1 won \
app_1  | Game 43: Player1 won \
app_1  | Game 44: draw \
app_1  | Game 45: Player1 won \
app_1  | Game 46: draw \
app_1  | Game 47: Player1 won \
app_1  | Game 48: Player1 won \
app_1  | Game 49: Player2 won \
app_1  | Game 50: Player2 won \
app_1  | Game 51: Player1 won \
app_1  | Game 52: draw \
app_1  | Game 53: draw \
app_1  | Game 54: Player1 won \
app_1  | Game 55: Player2 won \
app_1  | Game 56: Player2 won \
app_1  | Game 57: Player2 won \
app_1  | Game 58: draw \
app_1  | Game 59: Player1 won \
app_1  | Game 60: Player1 won \
app_1  | Game 61: Player1 won \
app_1  | Game 62: draw \
app_1  | Game 63: Player1 won \
app_1  | Game 64: draw \
app_1  | Game 65: draw \
app_1  | Game 66: Player2 won \
app_1  | Game 67: Player1 won \
app_1  | Game 68: Player2 won \
app_1  | Game 69: draw \
app_1  | Game 70: Player2 won \
app_1  | Game 71: Player1 won \
app_1  | Game 72: draw \
app_1  | Game 73: Player2 won \
app_1  | Game 74: Player2 won \
app_1  | Game 75: draw \
app_1  | Game 76: Player2 won \
app_1  | Game 77: draw \
app_1  | Game 78: draw \
app_1  | Game 79: draw \
app_1  | Game 80: draw \
app_1  | Game 81: Player1 won \
app_1  | Game 82: draw \
app_1  | Game 83: Player2 won \
app_1  | Game 84: Player2 won \
app_1  | Game 85: draw \
app_1  | Game 86: draw \
app_1  | Game 87: Player1 won \
app_1  | Game 88: Player2 won \
app_1  | Game 89: draw \
app_1  | Game 90: Player1 won \
app_1  | Game 91: draw \
app_1  | Game 92: Player2 won \
app_1  | Game 93: Player2 won \
app_1  | Game 94: Player1 won \
app_1  | Game 95: Player2 won \
app_1  | Game 96: draw \
app_1  | Game 97: Player2 won \
app_1  | Game 98: draw \
app_1  | Game 99: draw \
app_1  | Game 100: Player2 won \
test_app_1 exited with code 0
