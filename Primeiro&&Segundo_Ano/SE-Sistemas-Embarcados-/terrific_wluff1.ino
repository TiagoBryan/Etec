// C++ code
//
const int ledCount = 10; 
int leds[ledCount] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};

void setup() {
 
  for (int i = 0; i < ledCount; i++) {
    pinMode(leds[i], OUTPUT);
  }
}

void loop() {
 
  for (int i = 0; i < ledCount; i++) {
    digitalWrite(leds[i], HIGH);
  }
  delay(500);
  for (int i = 0; i < ledCount; i++) {
    digitalWrite(leds[i], LOW);
  }
  delay(500);

 
  for (int i = 0; i < ledCount; i++) {
    digitalWrite(leds[i], HIGH);
    delay(100);
    digitalWrite(leds[i], LOW);
  }
  delay(500);


  for (int i = 0; i < ledCount; i += 2) {
    digitalWrite(leds[i], HIGH);
    digitalWrite(leds[i + 1], HIGH);
  }
  delay(500);
  for (int i = 0; i < ledCount; i += 2) {
    digitalWrite(leds[i], LOW);
    digitalWrite(leds[i + 1], LOW);
  }
  delay(500);

 
  for (int i = 0; i < ledCount; i++) {
    digitalWrite(leds[i], HIGH);
    delay(100);
    digitalWrite(leds[i], LOW);
  }
  delay(500);

  
  for (int i = 0; i < ledCount; i += 2) {
    digitalWrite(leds[i], HIGH);
    digitalWrite(leds[i + 1], HIGH);
    delay(100);
    digitalWrite(leds[i], LOW);
    digitalWrite(leds[i + 1], LOW);
  }
  delay(500);
}